<?php

namespace App\Http\Controllers\Staff;

use App\Models\Courier;
use Illuminate\Http\Request;
use App\Models\CompanyMaster;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){

        $courier = Courier::all();
        $companies = CompanyMaster::all();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('staff.dashboard',compact('courier','companies','company'));
        }
        else{
            return view('staff.dashboard',compact('courier','companies'));
        }
    }
}
