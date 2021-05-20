<?php

namespace App\Http\Controllers\Staff;
use App\Models\Courier;
use App\Models\Status;
use App\Models\CompanyMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class CourierController extends Controller
{
    
    public function index(){
        $companies = CompanyMaster::all();
        $couriers = Courier::where('status', '=', '0')->orWhere('status', '=', 'Not Picked Yet')->latest()->get();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('staff.courier.index',compact('couriers','company','companies'));
        }
        else{
            return view('staff.courier.index',compact('couriers','companies'));
        }

    } 

    public function add(){

        $companies = CompanyMaster::all();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('staff.courier.add',compact('company','companies'));
        }
        else{
            return view('staff.courier.add',compact('companies'));
        }

    } 

    public function edit($reference_number){

        $companies = CompanyMaster::all();
        $courier = Courier::where('reference_number', '=', $reference_number)->first();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('staff.courier.edit',compact('courier','company','companies'));
        }
        else{
        
            return view('staff.courier.edit',compact('courier','companies'));
        }
    
    }

    public function delete($reference_number){

        $courier = Courier::where('reference_number', '=', $reference_number)->delete();
        return redirect()->back()->with('success','Courier Deleted Successfully');
    }

}
