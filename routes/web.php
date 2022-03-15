<?php

use App\Http\Controllers\CustomerPageController;
use App\Models\CategoryModel;
use App\Models\NumbModel;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('newWelcome');
});

Route::get('/customer',function(){
    // NumbModel::categorizeNumbers();
    $whatToView = request('view');
    $availablePackages = request('availablePackages');
    $viewAvailable = request('viewAvailable');
    $platinum=CategoryModel::where('categ','=','platinum')->first();
    $golden=CategoryModel::where('categ','=','golden')->first();
    $silver=CategoryModel::where('categ','=','silver')->first();
    $bronze=CategoryModel::where('categ','=','bronze')->first();
    $numbers = NumbModel::with('category')->get();
    $number = (null !== request('licenseNumber'))? NumbModel::where('id','=',request('licenseNumber'))->first() : null ;
    return view('customer',
    [
        'whatToView' => $whatToView,
        'availablePackages' => $availablePackages,
        'viewAvailable' => $viewAvailable,
        'platinum' => $platinum,
        'golden' => $golden,
        'bronze' => $bronze,
        'silver' => $silver,
        'numbers' => $numbers,
        'numberToSubmit' => $number,
    ]);
});

// Route::get('/customer/',function(){});


Route::post('/customer/license',[CustomerPageController::class,'handelLicenseRenewal']);
