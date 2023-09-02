<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductSizeRequest;
use App\Imports\ProductsImport;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use Yajra\DataTables\DataTables;

class ProductSizesController extends Controller
{
    //
    protected $viewPath = 'Admin.sizes.';
    private $route = 'product_sizes';

    public function __construct(ProductSize $model)
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
            ->editColumn('size', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->size . '</span>
                                   ';
                return $name;
            })
            ->editColumn('type', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->type . '</span>';
                return $name;
            })

            ->addColumn('actions', function ($row) {
                $actions = ' <a href="' . url($this->route."/edit/" . $row->id) . '" class="btn btn-active-light-info"><i class="bi bi-pencil-fill"></i> تعديل </a>';
                return $actions;

            })
            ->rawColumns(['actions', 'checkbox', 'size','type'])
            ->make();

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductSizeRequest $request)
    {
        $data = $request->validated();
        $size = new ProductSize();
        $size->size=$request->size;
        $size->type=$request->type;
        $size->save();

        return redirect(route($this->route . '.index'))->with('message', trans('lang.added_s'));
    }
    public function excel(Request $request)
    {
        if ($request->file('sizes') != null ){
            /*$file = $request->sizes ;
            $file_name = 'fileexcel'; //decide file name here ;
            $file->move(public_path('public/' . $file_name . $file->clientExtension()));*/
            $path1 = $request->file('sizes')->store('temp');
            $path=storage_path('app').'/'.$path1;

            Excel::import(new ProductsImport(),public_path('storage/'.$path));

        }

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
    public function update(ProductSizeRequest $request)
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
}
