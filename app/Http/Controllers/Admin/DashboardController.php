<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompanyMaster;
use App\Models\Courier;

class DashboardController extends Controller
{
    public function index(){
        $courier = Courier::all();
        $companies = CompanyMaster::all();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('admin.dashboard',compact('courier','companies','company'));
        }
        else{
            return view('admin.dashboard',compact('courier','companies'));
        }
    }
}
