<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\InvoiceRequest;
use App\Models\Client;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use App\Models\Product;
use App\Models\ProductSize;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class InvoicesController extends Controller
{
    //
    //
    protected $viewPath = 'Admin.invoices.';
    private $route = 'invoices';

    public function __construct(Invoice $model)
    {
        $this->objectName = $model;
    }

    public function index()
    {
        return view($this->viewPath .'index');
    }
    public function datatable(Request $request)
    {
        $data = $this->objectName::orderBy('id', 'desc');

        return DataTables::of($data)
            ->addColumn('checkbox', function ($row) {
                $checkbox = '';
                $checkbox .= '<div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="' . $row->id . '" />
                                </div>';
                return $checkbox;
            })


            ->editColumn('total_price', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->total_price .  ' KD</span>';
                return $name;
            })
            ->editColumn('discount', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->discount . ' KD'. '</span>';
                return $name;
            })
            ->editColumn('date', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->date . '</span>';
                return $name;
            })
            ->editColumn('client', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->clients->name . '</span>';
                return $name;
            })
            ->editColumn('project', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . ' '. '</span>';
                return $name;
            })

            ->addColumn('actions', function ($row) {
                $actions = ' <a href="' . url("invoices/invoices-details/" . $row->id) . '" class="btn btn-active-light-info"><i class="bi bi-pencil-fill"></i> تفاصيل </a>';
                return $actions;

            })
            ->rawColumns(['actions', 'checkbox', 'total_price','discount','date','client','project'])
            ->make();

    }

    public function details($id)
    {
        $invoice = Invoice::findOrFail($id);
        $type = $invoice->type;
        $settings = Setting::findOrFail(1);
        $amount = $invoice->total_price;
        /*        $price = Tafqeet::inArabic($amount,'kwd');*/


        return view('Admin.invoices.index-invoice', compact(['invoice','type','settings','amount']));
    }

    public function getTotal(InvoiceRequest $request){
        $total_list_price = $request->total_price;
        $total_price = 0;
        foreach ($request->product_id as $key => $product){
            $total_price += $total_list_price[$key];

        }
        $total_price -= $request->discount;
        return $total_price;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvoiceRequest $request)
    {
        $data = $request->validated();
        $total_price = $this->getTotal($request);


        $invoice = new Invoice();
        $invoice->total_price=$total_price;
        $invoice->revision=$request->revision;
        $invoice->type = $request->type;
        $invoice->discount=$request->discount;
        $invoice->date=$request->date;
        $invoice->image=$request->image;
        $invoice->user_id=Auth::user()->id;
        $invoice->updated_by=Auth::user()->id;
        $invoice->created_by=Auth::user()->id;
        $invoice->client_id=$request->client_id;
        $invoice->save();

        $this->saveInvoiceDetails($request,$invoice);

        return redirect(route($this->route . '.index'))->with('message', trans('lang.added_s'));




    }
    public function add($type)
    {

        return view($this->viewPath . '.invoice-add', compact('type'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->objectName::findOrFail($id);
        return view($this->viewPath . '.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(InvoiceRequest $request)
    {
        $data = $request->validated();
        $this->objectName::whereId($request->id)->update($data);

        return redirect(route($this->route . '.index'))->with('message', trans('lang.updated_s'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            $this->objectName::whereIn('id', $request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed']);
        }
        return response()->json(['message' => 'Success']);
    }

    public function table_buttons()
    {
        return view($this->viewPath . '.button');
    }
    public function type($id)
    {
        $sizes = ProductSize::where('type',$id)->get();
        return view($this->viewPath . '.sizes',compact(['sizes']));
    }

    public function addInvoiceDetailRow1(Request $request){

        $product = Product::findOrFail($request->product_id);
        $quantity = $request->quantity;
        $sell_price = $request->sell_price;
        $total_price = $request->total_price;
        $type = $request->type;
        $sr = $request->sr;
        if ($request->type == 'income'){
            $purchase_price = $product->cost;
            return view('Admin.Invoices.invoiceitemsjson',compact(['type','product','quantity','sell_price','total_price','sr']));

        }else{
            $purchase_price = $product->cost;
            return view('Admin.Invoices.invoiceitemsjson',compact(['type','product','quantity','sell_price','total_price','sr']));


        }

    }

    private function saveInvoiceDetails(InvoiceRequest $request, Invoice $invoice)
    {
        $product_id = $request->product_id;
        $quantity = $request->quantity;
        $purchase_price = $request->purchase_price;
        $sell_price = $request->sell_price;

        foreach ($request->product_id as $key => $product){
            $invoiceDetails = new InvoiceDetail();
            $invoiceDetails->invoice_id = $invoice->id;
            $invoiceDetails->product_id = $product_id[$key];
            $invoiceDetails->qty = $quantity[$key];
            $invoiceDetails->last_price = $sell_price[$key];
            $invoiceDetails->save();
        }
    }


}
