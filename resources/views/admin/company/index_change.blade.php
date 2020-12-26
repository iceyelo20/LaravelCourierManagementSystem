@extends('admin.layouts.master')
@section('title','Change Detail')
@push('css')
@endpush
@section('content')
<div class="col-12">
    @include('admin.alert')
</div>
<div class="col-md-12">
<div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0" id="heading">

                        Change Password
                
                </h5>
              </div>
              <form id="change-form" method="POST" enctype="multipart/form-data">
              
                    @csrf
                <div class="card-body">
                
                    <div class="row">

                    <div class="col-12 mt-3">
                        <label for="current_password">Current Password</label>
                        <input type="text" name="current_password" id = "current_password" class="form-control"
                            >
                        @error('current_password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-12 mt-3">
                    <label for="password">New Password</label>
                        <input type="password" name="password" id = "password" class="form-control">
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    

                    <div class="col-12 mt-3">
                    <label for="confirm_password">Confirm Password</label>
                        <input type="password" name="confirm_password" id = "confirm_password" class="form-control" 
                        >
                        @error('confirm_password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    
                    </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-6">
                                <button onclick="companyFormSubmit()" class="btn btn-primary">Change Password</button>
                            </div>

                            <div class="col-6 text-right">
                                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Back</a>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
@stop
@push('js')
<script>
    function companyFormSubmit(){

            $('#change-form').attr('action','{{ route('admin.company.change') }}').submit();

    }
</script>

@endpush