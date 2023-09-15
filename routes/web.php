<?php

use App\Http\Controllers\Admin\ClientsController;
use App\Http\Controllers\Admin\EmployeesController;
use App\Http\Controllers\Admin\EmployeesInvoicesController;
use App\Http\Controllers\Admin\InvoicesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\ProductSizesController;
use App\Http\Controllers\Admin\ProjectCategories;
use App\Http\Controllers\Admin\ProjectFilesController;
use App\Http\Controllers\Admin\ProjectImagesController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/cache',function(){
    exec('composer install');

    Artisan::call('cache:clear');
});

Route::get('/migrate', function () {
    Artisan::call('migrate');
    Artisan::call('db:seed');

    return print_r('success');
});


Route::post('Login', [\App\Http\Controllers\FrontController::class, 'login']);
Route::get('logout', [UsersController::class, 'logout']);
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles',\App\Http\Controllers\Admin\RoleController::class);
    Route::group(['prefix'=>'users','as'=>'users'],function (){
        Route::get('/', [UsersController::class, 'index'])->name('.index');
        Route::get('/datatable', [UsersController::class, 'datatable'])->name('.datatable');
        Route::post('/store', [UsersController::class, 'store'])->name('.store');
        Route::get('/edit/{id}', [UsersController::class, 'edit'])->name('.edit');
        Route::post('/update/{id}', [UsersController::class, 'update'])->name('.update');
        Route::get('delete', [UsersController::class, 'destroy'])->name('.delete');
        Route::get('/add-button', [UsersController::class, 'table_buttons'])->name('.table_buttons');

    });
});
Route::group(['middleware' => ['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],'prefix'=>LaravelLocalization::setLocale()], function () {
    Route::get('/Dashboard', [\App\Http\Controllers\FrontController::class, 'dashboard'])->name('dashboard.index');

    Route::get('Setting', [\App\Http\Controllers\FrontController::class, 'Setting'])->name('profile');


    Route::group(['prefix'=>'clients','as'=>'clients'],function (){
        Route::get('/', [ClientsController::class, 'index'])->name('.index');
        Route::get('/datatable', [ClientsController::class, 'datatable'])->name('.datatable');
        Route::post('/store', [ClientsController::class, 'store'])->name('.store');
        Route::get('/edit/{id}', [ClientsController::class, 'edit'])->name('.edit');
        Route::post('/update/{id}', [ClientsController::class, 'update'])->name('.update');
        Route::get('delete', [ClientsController::class, 'destroy'])->name('.delete');
        Route::get('/add-button', [ClientsController::class, 'table_buttons'])->name('.table_buttons');

    });

    Route::group(['prefix'=>'product_sizes','as'=>'product_sizes'],function (){
        Route::get('/', [ProductSizesController::class, 'index'])->name('.index');
        Route::get('/datatable', [ProductSizesController::class, 'datatable'])->name('.datatable');
        Route::post('/store', [ProductSizesController::class, 'store'])->name('.store');
        Route::post('/excel', [ProductSizesController::class, 'excel'])->name('.excel');
        Route::get('/edit/{id}', [ProductSizesController::class, 'edit'])->name('.edit');
        Route::post('/update/{id}', [ProductSizesController::class, 'update'])->name('.update');
        Route::get('delete', [ProductSizesController::class, 'destroy'])->name('.delete');
        Route::get('/add-button', [ProductSizesController::class, 'table_buttons'])->name('.table_buttons');

    });
    Route::group(['prefix'=>'products','as'=>'products'],function (){
        Route::get('/', [ProductsController::class, 'index'])->name('.index');
        Route::get('/get-products-type/{type}', [ProductsController::class, 'type'])->name('.type');
        Route::get('/get-products-category/{category}', [ProductsController::class, 'productCategory'])->name('.productCategory');
        Route::get('/datatable', [ProductsController::class, 'datatable'])->name('.datatable');
        Route::post('/store', [ProductsController::class, 'store'])->name('.store');
        Route::get('/edit/{type}/{id}', [ProductsController::class, 'edit'])->name('.edit');
        Route::post('/update/{id}', [ProductsController::class, 'update'])->name('.update');
        Route::get('delete', [ProductsController::class, 'destroy'])->name('.delete');
        Route::get('/add-button', [ProductsController::class, 'table_buttons'])->name('.table_buttons');
        Route::get('/add-sizes/{type}', [ProductsController::class, 'sizes'])->name('.sizes');
        Route::get('/get-sizes/{category}', [ProductsController::class, 'getSizes'])->name('.getSizes');
        Route::get('/get-price/{size}/{category}', [ProductsController::class, 'getPrice'])->name('.getPrice');
        Route::get('/get-product-id/{size}/{category}', [ProductsController::class, 'getProductId'])->name('.getProductId');

    });
    Route::group(['prefix'=>'employees','as'=>'employees'],function (){
        Route::get('/', [EmployeesController::class, 'index'])->name('.index');
        Route::get('/datatable', [EmployeesController::class, 'datatable'])->name('.datatable');
        Route::post('/store', [EmployeesController::class, 'store'])->name('.store');
        Route::get('/edit/{id}', [EmployeesController::class, 'edit'])->name('.edit');
        Route::post('/update/{id}', [EmployeesController::class, 'update'])->name('.update');
        Route::get('delete', [EmployeesController::class, 'destroy'])->name('.delete');
        Route::get('/add-button', [EmployeesController::class, 'table_buttons'])->name('.table_buttons');

    });
    Route::group(['prefix' => 'employees-invoices', 'as' => 'employees-invoices'], function () {
        Route::get('/{id}', [EmployeesInvoicesController::class, 'index'])->name('.index');
        Route::get('/datatable/view', [EmployeesInvoicesController::class, 'datatable'])->name('.datatable');
        Route::get('/create', [EmployeesInvoicesController::class, 'create'])->name('.create');
        Route::post('/store', [EmployeesInvoicesController::class, 'store'])->name('.store');
        Route::get('/delete', [EmployeesInvoicesController::class, 'destroy'])->name('.delete');
        Route::get('/add-button/{id}', [EmployeesInvoicesController::class, 'table_buttons'])->name('.table_buttons');
    });
    Route::group(['prefix'=>'projects','as'=>'projects'],function (){
        Route::get('/', [ProjectsController::class, 'index'])->name('.index');
        Route::get('/type/{type}/{id?}', [ProjectsController::class, 'website'])->name('.website');
        Route::get('/datatable', [ProjectsController::class, 'datatable'])->name('.datatable');
        Route::post('/store', [ProjectsController::class, 'store'])->name('.store');
        Route::get('/edit/{type}/{id}', [ProjectsController::class, 'edit'])->name('.edit');
        Route::post('/update/{id}', [ProjectsController::class, 'update'])->name('.update');
        Route::get('delete', [ProjectsController::class, 'destroy'])->name('.delete');
        Route::get('/add-button/{typee}/{id?}', [ProjectsController::class, 'table_buttons'])->name('.table_buttons');

    });
    Route::group(['prefix'=>'invoices','as'=>'invoices'],function (){
        Route::get('/', [InvoicesController::class, 'index'])->name('.index');
        Route::get('/datatable', [InvoicesController::class, 'datatable'])->name('.datatable');
        Route::get('/add/{type}', [InvoicesController::class, 'add'])->name('.add');
        Route::post('/store', [InvoicesController::class, 'store'])->name('.store');
        Route::get('/edit/{id}', [InvoicesController::class, 'edit'])->name('.edit');
        Route::post('/update/{id}', [InvoicesController::class, 'update'])->name('.update');
        Route::get('/invoices-details/{id}', [InvoicesController::class, 'details'])->name('.details');
        Route::get('delete', [InvoicesController::class, 'destroy'])->name('.delete');
        Route::get('/add-button/{id?}', [InvoicesController::class, 'table_buttons'])->name('.table_buttons');
        Route::get('/add-invoice-row/', [InvoicesController::class, 'addInvoiceDetailRow1'])->name('.addInvoiceDetailRow1');

    });

    Route::group(['prefix' => 'projects-images', 'as' => 'projects-images'], function () {
        Route::get('/{id}', [ProjectImagesController::class, 'index'])->name('.index');
        Route::get('/datatable/view', [ProjectImagesController::class, 'datatable'])->name('.datatable');
        Route::get('/create', [ProjectImagesController::class, 'create'])->name('.create');
        Route::post('/store', [ProjectImagesController::class, 'store'])->name('.store');
        Route::get('delete', [ProjectImagesController::class, 'destroy'])->name('.delete');
        Route::get('/add-button/{id}', [ProjectImagesController::class, 'table_buttons'])->name('.table_buttons');
    });
    Route::group(['prefix' => 'projects-files', 'as' => 'projects-files'], function () {
        Route::get('/{id}', [ProjectFilesController::class, 'index'])->name('.index');
        Route::get('/datatable/view', [ProjectFilesController::class, 'datatable'])->name('.datatable');
        Route::get('/create', [ProjectFilesController::class, 'create'])->name('.create');
        Route::post('/store', [ProjectFilesController::class, 'store'])->name('.store');
        Route::get('/delete', [ProjectFilesController::class, 'destroy'])->name('.delete');
        Route::get('/add-button/{id}', [ProjectFilesController::class, 'table_buttons'])->name('.table_buttons');
    });

    Route::group(['prefix' => 'categories', 'as' => 'categories'], function () {
        Route::get('/', [ProjectCategories::class, 'index'])->name('.index');
        Route::get('/datatable', [ProjectCategories::class, 'datatable'])->name('.datatable');
        Route::get('/create', [ProjectCategories::class, 'create'])->name('.create');
        Route::post('/store', [ProjectCategories::class, 'store'])->name('.store');
        Route::get('/edit/{id}', [ProjectCategories::class, 'edit'])->name('.edit');
        Route::post('/update/{id}', [ProjectCategories::class, 'update'])->name('.update');
        Route::get('delete', [ProjectCategories::class, 'destroy'])->name('.delete');
        Route::get('/add-button', [ProjectCategories::class, 'table_buttons'])->name('.table_buttons');
    });

    Route::group(['prefix' => 'settings', 'as' => 'settings'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('.index');
        Route::post('/update/{id}', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('.update');
    });
});

Route::group(
    [
        'prefix' =>  LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/login', function () {
        return view('auth.login');
    })->middleware('loginPage')->name('login');
    Route::get('/', [FrontController::class,'index']);

    Route::get('/team/{id}', function ($id) {
        $employee = \App\Models\Employee::findOrFail($id);
        $settings = \App\Models\Setting::findOrFail(1);
        return view('website.team',compact(['employee','settings']));
    });

    Route::get('/project-details/{id}',[FrontController::class,'projectDetails'])->name('projectDetails');

});
