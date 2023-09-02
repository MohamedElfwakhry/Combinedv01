<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectFile;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProjectFilesController extends Controller
{
    //
    //
    protected $viewPath = 'Admin.projects-files.';
    private $route = 'projects-files';

    public function __construct(ProjectFile $model)
    {
        $this->objectName = $model;
    }
    public function index($id)
    {
        return view($this->viewPath .'index',compact('id'));
    }
    public function datatable(Request $request)
    {
        $data = $this->objectName::where('project_id',$request->project_id)->orderBy('id', 'desc');

        return DataTables::of($data)
            ->addColumn('checkbox', function ($row) {
                $checkbox = '';
                $checkbox .= '<div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input selector" type="checkbox" value="' . $row->id . '" />
                                </div>';
                return $checkbox;
            })
            ->editColumn('name', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->name . '</span>';
                return $name;
            })
            ->editColumn('rev', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->rev . '</span>';
                return $name;
            })
            ->editColumn('category', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->ProjectCategories->name . '</span>';
                return $name;
            })
            ->editColumn('file', function ($row) {
                $name = '';
                $name .= ' <a href="' . $row->file . '" class="btn btn-active-light-info"><i class="bi bi-pencil-fill"></i> اعرض الملف </a>';
                return $name;
            })
            ->rawColumns(['checkbox','name','rev','file','category'])
            ->make();

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $projectFile = new ProjectFile();
        $projectFile->name = $request->name;
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
