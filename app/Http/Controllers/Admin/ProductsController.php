<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Product;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProductsController extends Controller
{
    //
    protected $viewPath = 'Admin.products.';
    private $route = 'products';

    public function __construct(Product $model)
    {
        $this->objectName = $model;
    }

    public function index()
    {
        return view($this->viewPath .'index');
    }
    public function productCategory($type)
    {
        return view( 'Admin.products.categories',compact(['type']));

    }
    public function type($type)
    {
        $products = Product::where('type',$type)->get();
        return view( 'Admin.invoices.products',compact(['products']));

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
            ->editColumn('size', function ($row) {
                $name = '';
                if ($row->type == 'pipe'){
                    $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->sizes->size . ' 6m Long ' .  '</span>
                                   ';
                }else{
                    $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->size .  '</span>
                                   ';
                }
                return $name;
            })

            ->editColumn('title', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->title . ' '.trans($row->type).' '.$row->long . '</span>';
                return $name;
            })
            ->editColumn('cost', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->cost . '</span>';
                return $name;
            })
            ->editColumn('percentage', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->percentage . '%'. '</span>';
                return $name;
            })
            ->editColumn('price_with_percentage', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->price_with_percentage . '</span>';
                return $name;
            })
            ->editColumn('price', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->price . '</span>';
                return $name;
            })
            ->editColumn('profit_percentage', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->profit_percentage . '%'. '</span>';
                return $name;
            })
            ->addColumn('actions', function ($row) {
                $actions = ' <a href="' . url($this->route."/edit/" . $row->id) . '" class="btn btn-active-light-info"><i class="bi bi-pencil-fill"></i> تعديل </a>';
                return $actions;

            })
            ->rawColumns(['actions', 'checkbox', 'size','title','cost','percentage','price_with_percentage','price','profit_percentage'])
            ->make();

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->validated();
        $product = new Product();
        $product->size=$request->size;
        $product->category=$request->category;
        $product->type=$request->type;
        $product->ar_title=$request->ar_title;
        $product->en_title=$request->en_title;
        $product->long=$request->long;
        $product->cost=$request->cost;
        $product->percentage=$request->percentage;
        //price after percentage = const * 1.percentage
        $product->price_with_percentage=$request->price_with_percentage;
        //price that you would sell to customers
        $product->price=$request->price;
        $product->profit_percentage=$request->profit_percentage;
        $product->save();

        return redirect(route($this->route . '.index'))->with('message', trans('lang.added_s'));




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
    public function update(ProductRequest $request)
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
    public function sizes($type)
    {
        $sizes = ProductSize::where('type',$type)->get();
        return view($this->viewPath . '.sizes',compact(['type','sizes']));
    }
    public function getSizes($category)
    {
        $sizes = Product::where('category',$category)->get();
        return view($this->viewPath . '.sizes',compact(['sizes']));
    }
    public function getPrice($size,$category)
    {
        $price = Product::where('category',$category)->where('size',$size)->first()->price;
        return $price;
    }
    public function getProductId($size,$category)
    {
        $product_id = Product::where('category',$category)->where('size',$size)->first()->id;
        return $product_id;
    }
}
