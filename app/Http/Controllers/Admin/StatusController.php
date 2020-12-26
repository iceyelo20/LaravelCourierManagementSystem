<?php

namespace App\Http\Controllers\Admin;

use App\Models\Courier;
use App\Models\Status;
use App\Models\CompanyMaster;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class StatusController extends Controller
{
    public function index(){
        $companies = CompanyMaster::all();
        $couriers = Courier::where('status', '=', '0')->orWhere('status', '=', 'Not Picked Yet')->latest()->get();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('admin.courier.index',compact('couriers','company','companies'));
        }
        else{
            return view('admin.courier.index',compact('couriers','companies'));
        }

    } 

    public function index_pickup(){

        
        $couriers = Courier::where('status', '=', '1')->latest()->get();
        $companies = CompanyMaster::all();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('admin.courier.index_pickup',compact('couriers','company','companies'));
        }
        else{
            return view('admin.courier.index_pickup',compact('couriers','companies'));

        }
    } 

    public function index_shipped(){

        
        $couriers = Courier::where('status', '=', '2')->latest()->get();
        $companies = CompanyMaster::all();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('admin.courier.index_shipped',compact('couriers','company','companies'));
        }
        else{
            return view('admin.courier.index_shipped',compact('couriers','companies'));

        }
    } 

    public function index_intransit(){

        $companies = CompanyMaster::all();
        $couriers = Courier::where('status', '=', '3')->latest()->get();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('admin.courier.index_intransit',compact('couriers','company','companies'));
        }
        else{
            return view('admin.courier.index_intransit',compact('couriers','companies'));

        }

    } 

    public function index_arrived(){

        $companies = CompanyMaster::all();
        $couriers = Courier::where('status', '=', '4')->latest()->get();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('admin.courier.index_arrived',compact('couriers','company','companies'));
        }
        else{
            return view('admin.courier.index_arrived',compact('couriers','companies'));

        }
    } 

    public function index_delivery(){

        $companies = CompanyMaster::all();
        $couriers = Courier::where('status', '=', '5')->latest()->get();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('admin.courier.index_delivery',compact('couriers','company','companies'));
        }
        else{
            return view('admin.courier.index_delivery',compact('couriers','companies'));

        }
       
    } 

    public function index_delivered(){
        $companies = CompanyMaster::all();
        $couriers = Courier::where('status', '=', '6')->latest()->get();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('admin.courier.index_delivered',compact('couriers','company','companies'));
        }
        else{
            return view('admin.courier.index_delivered',compact('couriers','companies'));

        }

    } 

    public function view($reference_number){

        $companies = CompanyMaster::all();
        $courier = Courier::where('reference_number', '=', $reference_number)->first();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('admin.courier.view',compact('courier','company','companies'));
        }
        else{
        
            return view('admin.courier.view',compact('courier','companies'));
        }
    }


}
