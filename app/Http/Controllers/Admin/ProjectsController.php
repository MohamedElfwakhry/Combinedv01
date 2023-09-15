<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ClientRequest;
use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProjectsController extends Controller
{
    //
    protected $viewPath = 'Admin.projects.';
    private $route = 'projects';

    public function __construct(Project $model)
    {
        $this->objectName = $model;
    }

    public function index()
    {
        return view($this->viewPath .'index');

    }
    public function website($type,$id=null)
    {
        $typee = $type;
        if ($id != null){
            $client = Client::findOrFail($id);
            return view($this->viewPath .'index',compact(['typee','id','client']));

        }else{
            return view($this->viewPath .'index',compact(['typee']));

        }

    }

    public function datatable(Request $request)
    {
        $data = $this->objectName::orderBy('id', 'desc');
        if($request->type ){
            $data->where('type',$request->type);
        }
        if($request->id ){
            $data->where('client_id',$request->id);
        }
        return DataTables::of($data)
            ->addColumn('checkbox', function ($row) {
                $checkbox = '';
                $checkbox .= '<div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="' . $row->id . '" />
                                </div>';
                return $checkbox;
            })
            ->editColumn('name', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->name . '</span>';
                return $name;
            })

            ->editColumn('address', function ($row) {
                $name = '';
                if ($row->address !=null){
                    $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->address . '</span>';

                }else{
                    $name .= ' <span class="text-gray-800 text-hover-primary mb-1"> لا يوجد عنوان</span>';

                }
                return $name;
            })
            ->editColumn('type', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->type . '</span>';
                return $name;
            })
            ->addColumn('actions', function ($row) {
                switch ($row->type){
                    case 'sales':
                        $actions = ' <a href="' . url($this->route."/edit/" .$row->type.'/'. $row->id) . '" class="btn btn-active-light-info"><i class="bi bi-pencil-fill"></i> تعديل </a>';
                        $actions .= ' <a href="' . url($this->route."-files/" . $row->id) . '" class="btn btn-active-light-info"><i class="bi bi-pencil-fill"></i> الملفات </a>';
                        return $actions;
                        break;
                    case 'website':
                        $actions = ' <a href="' . url($this->route."/edit/" .$row->type.'/'. $row->id) . '" class="btn btn-active-light-info"><i class="bi bi-pencil-fill"></i> تعديل </a>';
                        $actions .= ' <a href="' . url($this->route."-images/" . $row->id) . '" class="btn btn-active-light-info"><i class="bi bi-pencil-fill"></i> الصور </a>';
                        return $actions;
                        break;
                }

            })
            ->rawColumns(['actions', 'checkbox', 'name','address','type'])
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
        $project = new Project();
        $project->name=$request->name;
        $project->ar_title=$request->ar_title;
        $project->en_title=$request->en_title;
        $project->ar_description=$request->ar_description;
        $project->en_description=$request->en_description;
        $project->date=$request->date;
        $project->address=$request->address;
        $project->notes=$request->notes;
        $project->area=$request->area;
        $project->type=$request->type;
        $project->image=$request->image;
        if($request->client_id){
            $project->client_id=$request->client_id;
        }
        $project->fa=$request->fa;
        $project->pl=$request->pl;
        $project->ff=$request->ff;
        $project->sv=$request->sv;
        $project->save();

        return redirect(route($this->route . '.website','sales'))->with('message', trans('lang.added_s'));




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
    public function edit($type,$id)
    {
        $data = $this->objectName::findOrFail($id);
        return view($this->viewPath . '.edit', compact(['type','data']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $project = Project::findOrFail($request->id);
        $project->name=$request->name;
        $project->ar_title=$request->ar_title;
        $project->en_title=$request->en_title;
        $project->ar_description=$request->ar_description;
        $project->en_description=$request->en_description;
        $project->date=$request->date;
        $project->address=$request->address;
        $project->notes=$request->notes;
        $project->area=$request->area;
        $project->type=$request->type;
        $project->image=$request->image;
        if($request->client_id){
            $project->client_id=$request->client_id;

        }
        $project->fa=$request->fa;
        $project->pl=$request->pl;
        $project->ff=$request->ff;
        $project->sv=$request->sv;

        if (isset($request->image)) {
            $img_name = 'slider_' . time() . random_int(0000, 9999) . '.' . $data['image']->getClientOriginalExtension();
            $data['image']->move(public_path('/uploads/projects/'), $img_name);
            $data['image'] = $img_name;
        } else {
        }
        $project->update();


        return redirect(route($this->route . '.website',$request->type))->with('message', trans('lang.updated_s'));
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
            Project::whereIn('id', $request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed']);
        }
        return response()->json(['message' => 'Success']);
    }

    public function table_buttons($typee,$id=null)
    {
        $type = $typee;
        if ($id!=null){
            return view($this->viewPath . '.button',compact(['type','id']));

        }else{
            return view($this->viewPath . '.button',compact('type'));
        }
    }
}
