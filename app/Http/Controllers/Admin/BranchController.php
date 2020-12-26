<?php

namespace App\Http\Controllers\Admin;
use App\Models\Branch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyMaster;
use App\Models\User;

class BranchController extends Controller
{
    public function index(){

        $branches = Branch::latest()->get();
        $companies = CompanyMaster::all();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('admin.branch.index',compact('branches','company','companies'));
        }
        else{
            return view('admin.branch.index',compact('branches','companies'));
        }
    }

    public function add(){
        $companies = CompanyMaster::all();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('admin.branch.add',compact('company','companies'));
        }
        else{
            return view('admin.branch.add',compact('companies'));
        }
        
    }

    public function edit($id){

        $branch = Branch::find($id);
        $companies = CompanyMaster::all();
        if(count($companies) > 0){
            $company = CompanyMaster::find(1);

            return view('admin.branch.edit',compact('branch','company','companies'));
        }
        else{
            return view('admin.branch.edit',compact('branch','companies'));
        }
    }

    public function delete($id){

        Branch::find($id)->delete();
        User::find($id + 1)->delete();
        return redirect()->back()->with('success','Branch Deleted Successfully');
    }

    
}
