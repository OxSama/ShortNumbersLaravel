<?php

namespace App\Http\Controllers;

use App\Models\RequestsModel;
use Illuminate\Http\Request;

class CustomerPageController extends Controller
{
    //

    function handelLicenseRenewal(Request $request){
        // $requestForNumber = new RequestsModel;
        return redirect('/customer');
    }

}
