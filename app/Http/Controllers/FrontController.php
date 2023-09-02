<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Product;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    //

    //
    public function index(){
        $settings = Setting::findOrFail(1);
        $projects = Project::where('type','website')->get();
        return view('website.layouts.layout',compact(['settings','projects']));
    }
    public function projectDetails($id){
        $settings = Setting::findOrFail(1);
        $projects = Project::findOrFail($id);
        $images = ProjectImage::where('project_id',$id)->get();
        return view('website.project-details',compact(['settings','projects','images']));
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember_me = $request->has('remember_me') ? true : false;
        if (Auth::guard('web')->attempt($credentials, $remember_me)) {
            // Authentication passed...
            return redirect(route('dashboard.index'));
        } else {
            return back()->with('danger', 'البريد الإلكتروني او كلمة المرور خطأ');
        }
    }

    public function dashboard()
    {
        $counts['users'] = User::count();
        $settings = Setting::findOrFail(1);


        return view('Admin.index',compact(['counts','settings']));
    }

}
