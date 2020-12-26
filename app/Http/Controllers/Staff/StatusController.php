<?php

namespace App\Http\Controllers\Staff;
use App\Models\Courier;
use App\Models\Status;
use App\Models\CompanyMaster;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index_pickup(){

        
        $couriers = Courier::where('status', '=', '1')->latest()->get();
        $companies = CompanyMaster::all();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('staff.courier.index_pickup',compact('couriers','company','companies'));
        }
        else{
            return view('staff.courier.index_pickup',compact('couriers','companies'));

        }
    } 

    public function index_shipped(){

        
        $couriers = Courier::where('status', '=', '2')->latest()->get();
        $companies = CompanyMaster::all();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('staff.courier.index_shipped',compact('couriers','company','companies'));
        }
        else{
            return view('staff.courier.index_shipped',compact('couriers','companies'));

        }
    } 

    public function index_intransit(){

        $companies = CompanyMaster::all();
        $couriers = Courier::where('status', '=', '3')->latest()->get();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('staff.courier.index_intransit',compact('couriers','company','companies'));
        }
        else{
            return view('staff.courier.index_intransit',compact('couriers','companies'));

        }

    } 

    public function index_arrived(){

        $companies = CompanyMaster::all();
        $couriers = Courier::where('status', '=', '4')->latest()->get();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('staff.courier.index_arrived',compact('couriers','company','companies'));
        }
        else{
            return view('staff.courier.index_arrived',compact('couriers','companies'));

        }
    } 

    public function index_delivery(){

        $companies = CompanyMaster::all();
        $couriers = Courier::where('status', '=', '5')->latest()->get();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('staff.courier.index_delivery',compact('couriers','company','companies'));
        }
        else{
            return view('staff.courier.index_delivery',compact('couriers','companies'));

        }
       
    } 

    public function index_delivered(){
        $companies = CompanyMaster::all();
        $couriers = Courier::where('status', '=', '6')->latest()->get();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('staff.courier.index_delivered',compact('couriers','company','companies'));
        }
        else{
            return view('staff.courier.index_delivered',compact('couriers','companies'));

        }

    } 

    public function search(){
        
        $companies = CompanyMaster::all();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('staff.courier.search',compact('company','companies'));
        }
        else{
            return view('staff.courier.search',compact('companies'));

        }
    } 

    public function searches($reference_number){
        $search = Courier::where('reference_number', '=', $reference_number)->first();
        $status = Status::where('reference_number', '=', $reference_number)->get();
        $companies = CompanyMaster::all();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('staff.courier.searches')->with(compact('search'))->with(compact('company'))->with(compact('companies'))->with(compact('status'));
        }
        else{
            return view('staff.courier.searches')->with(compact('search'))->with(compact('status'))->with(compact('companies'));

        }
    
    }
}
