<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Courier;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CompanyMaster;
use Illuminate\Support\Carbon;
use App\Rules\MatchOldPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    public function index(){

        $companies = CompanyMaster::all();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('admin.company.index',compact('companies','company'));
        }
        else{
            return view('admin.company.index',compact('companies'));
        }
    }

    public function store(Request $request){
        $this->validate($request,[
            'company_name' => 'required|string',
            'company_logo' => 'required|image|mimes:jpeg,jpg,png,bmp',
            'company_address' => 'required',
            'company_city' => 'required',
            'company_pin' => 'required',
            'company_phone' => 'required|string',
            'company_email' => 'required|email',
            'company_gst' => 'required|string',
        ]);

        $slug = Str::slug($request->company_name);
        $image = $request->file('company_logo');
        if(isset($image)){

            $date = Carbon::now()->toDateString();
            $imageName = $slug . '-' . $date . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('company')){

                Storage::disk('public')->makeDirectory('company');
            }
            $companyLogo = Image::make($image)->resize('100','100')->save($image->getClientOriginalExtension());
            Storage::disk('public')->put('company/'.$imageName, $companyLogo);

        }
        else{

            $imageName = 'default.png';

        }
        $company = new CompanyMaster();
        $company->company_name = $request->company_name;
        $company->company_logo = $imageName;
        $company->company_address = $request->company_address;
        $company->company_city = $request->company_city;
        $company->company_pin = $request->company_pin;
        $company->company_phone = $request->company_phone;
        $company->company_email = $request->company_email;
        $company->company_gst = $request->company_gst;
        $company->save();
        return redirect()->back()->with('success','Company Details Saved Successfully');

    }

    public function update(Request $request){
        $this->validate($request,[
            'company_name' => 'required|string',
            'company_logo' => 'image|mimes:jpeg,jpg,png,bmp',
            'company_address' => 'required',
            'company_city' => 'required',
            'company_pin' => 'required',
            'company_phone' => 'required|string',
            'company_email' => 'required|email',
            'company_gst' => 'required|string',
        ]);

        $company = CompanyMaster::find(1);
        $slug = Str::slug($request->company_name);
        $image = $request->file('company_logo');
        if(isset($image)){

            $date = Carbon::now()->toDateString();
            $imageName = $slug . '-' . $date . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('company')){

                Storage::disk('public')->makeDirectory('company');
            }

            if(Storage::disk('public')->exists('company/'.$company->company_logo)){

                Storage::disk('public')->delete('company/'.$company->company_logo);

            }
            $companyLogo = Image::make($image)->resize('100','100')->save($image->getClientOriginalExtension());
            Storage::disk('public')->put('company/'.$imageName, $companyLogo);

        }
        else{

            $imageName = $company->company_logo;

        }
        
        $company->company_name = $request->company_name;
        $company->company_logo = $imageName;
        $company->company_address = $request->company_address;
        $company->company_city = $request->company_city;
        $company->company_pin = $request->company_pin;
        $company->company_phone = $request->company_phone;
        $company->company_email = $request->company_email;
        $company->company_gst = $request->company_gst;
        $company->save();
        return redirect()->back()->with('success','Company Details Updated Successfully');

    }

    public function index_change(){
        $user = User::where('role_id','=','1')->first();
        $companies = CompanyMaster::all();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('admin.company.index_change',compact('user','companies','company'));
        }
        else{
            return view('admin.company.index_change',compact('user','companies'));
        }
    }

    
    public function change(Request $request){

        $request->validate([
            'name' => 'required|string',
            'current_password' => ['required', new MatchOldPassword],
            'password' => 'min:8|string|same:confirm_password',
            'confirm_password' => 'min:8|string'
        ]);
        
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->password)]);

        return redirect()->back()->with('success','Password Successfully');   

    }

    public function sales(){
        
        $companies = CompanyMaster::all();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('admin.courier.sales',compact('company','companies'));
        }
        else{
            return view('admin.courier.sales',compact('companies'));

        }
    } 

    public function report($from_date, $to_date){
        $courier = Courier::where('updated_at', '>=', $from_date)->where('updated_at', '<=', $to_date)->get();
        $companies = CompanyMaster::all();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('admin.courier.report',compact('courier','company','companies'));
        }
        else{
            return view('admin.courier.report',compact('courier','companies'));

        }
    } 


}
