<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmployeesInvoice;
use App\Models\ProjectFile;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class EmployeesInvoicesController extends Controller
{
    //
    protected $viewPath = 'Admin.employees-invoices.';
    private $route = 'employees-invoices';

    public function __construct(EmployeesInvoice $model)
    {
        $this->objectName = $model;
    }
    public function index($id)
    {
        return view($this->viewPath .'index',compact('id'));
    }
    public function datatable(Request $request)
    {
        $data = $this->objectName::where('employee_id',$request->employee_id)->orderBy('id', 'desc');

        return DataTables::of($data)
            ->addColumn('checkbox', function ($row) {
                $checkbox = '';
                $checkbox .= '<div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input selector" type="checkbox" value="' . $row->id . '" />
                                </div>';
                return $checkbox;
            })
            ->editColumn('date', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->date . '</span>';
                return $name;
            })
            ->editColumn('price', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->price . '</span>';
                return $name;
            })
            ->editColumn('project_name', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->project_name . '</span>';
                return $name;
            })
            ->editColumn('type', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->type . '</span>';
                return $name;
            })
            ->editColumn('file', function ($row) {
                $name = '';
                $name .= ' <a href="' . $row->invoice_image . '" class="btn btn-active-light-info"><i class="bi bi-pencil-fill"></i> اعرض الملف </a>';
                return $name;
            })
            ->addColumn('actions', function ($row) {
                $actions = ' <a href="' . url($this->route."/edit/" . $row->id) . '" class="btn btn-active-light-info"><i class="bi bi-pencil-fill"></i> تعديل </a>';
                return $actions;

            })
            ->rawColumns(['checkbox','date','price','file','project_name','type','actions'])
            ->make();

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeesInvoice $request)
    {
        $data = $request->validated();


        $projectFile = new ProjectFile();
        $projectFile->name = $request->name;
        $projectFile->price = $request->price;
        $projectFile->rev = $request->rev;
        $projectFile->file = $request->file;
        $projectFile->project_id = $request->project_id;
        $projectFile->category_id = $request->category_id;
        $projectFile->save();

        return redirect(route($this->route . '.index',$request->project_id))->with('message', trans('lang.added_s'));




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
    public function update(ProjectImage $request)
    {
        $data = $request->validated();
        if (isset($data['image'])) {
            $img_name = 'slider_' . time() . random_int(0000, 9999) . '.' . $data['image']->getClientOriginalExtension();
            $data['image']->move(public_path('/uploads/users/'), $img_name);
            $data['image'] = $img_name;
        } else {
            unset($data['image']);
        }
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

    public function table_buttons($id)
    {
        return view($this->viewPath . '.button',compact('id'));
    }
}
