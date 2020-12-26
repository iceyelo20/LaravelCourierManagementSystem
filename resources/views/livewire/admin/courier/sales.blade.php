<div class="col-md-12">
@include('staff.alert')
<div class="card card-primary card-outline">
    <div class="card-header">
    <h5 class="card-title m-0" id="heading">
            Between Sales Report

    </h5>
    </div>
    <form wire:submit.prevent="find_sales">
        @csrf
<div class="card-body">
<div class="row">
    <div class="col-md-12">
    <div class="form-group">
        <div class="col-12">
        <div class="form-group row col-12 mt-2">
            <label for="from_date" class="col-3">From Date</label>
            <input type="date" wire:model="from_date" id = "from_date" class="form-control col-9">
            @error('from_date')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group row col-12 mt-2">
            <label for="to_date" class="col-3">To Date</label>
            <input type="date" wire:model="to_date" id = "to_date" class="form-control col-9">
            @error('to_date')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
        </div>
    </div>
    </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-12">
            
            <center><button type="submit" class="btn btn-primary"
                    style="width:13%">Search</button></center>
            </div>

        </div>
    </div>
</form>
</div>
</div>