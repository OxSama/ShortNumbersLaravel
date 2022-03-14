<?php

use App\Http\Controllers\CustomerPageController;
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
    $whatToView = request('view');
    $availablePackages = request('availablePackages');
    return view('customer',
    [
        'whatToView' => $whatToView,
        'availablePackages' => $availablePackages
    ]
);
});
Route::post('licenseRenewal',[CustomerPageController::class,'handelLicenseRenewal']);
