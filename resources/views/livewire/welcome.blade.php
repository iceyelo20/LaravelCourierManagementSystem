<div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
@include('staff.alert')
<form wire:submit.prevent="user_search">
        @csrf
    <div class="form-row">
        <div class="col-12 col-md-9 mb-2 mb-md-0">
        <input type="text" class="form-control form-control-lg" placeholder="Enter valid tracking number..." wire:model="reference_number" id="reference_number">
        @error('reference_number')
                <small class="text-danger">{{ $message }}</small>
        @enderror
        </div>
        <div class="col-12 col-md-3">
        <button type="submit" class="btn btn-block btn-lg btn-primary">FIND</button>
        </div>
    </div>
    </form>
</div>