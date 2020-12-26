<div class="col-md-12">
@include('staff.alert')
<div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0" id="heading">
                        Search by Reference
                
                </h5>
              </div>
              <form wire:submit.prevent="find">
                    @csrf
                    <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                 <div class="col-12">
                 <label for="reference_number">Reference Number</label>
                        <input type="text" wire:model="reference_number" id = "reference_number" class="form-control" style="height:60px; font-size:20pt;">
                        @error('reference_number')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                </div>
                </div>
              </div>
            </div>
            <!-- /.row -->
          </div>
                    <div class="card-footer">
                    <center><div class="row">
                            <div class="col-12">
                            
                            <button class="btn btn-primary" style="height:50px; width:200px; font-size:20pt;" type="submit"
                                       >Search&nbsp <i class="fas fa-search"></i></button>
                            </div>

                        </div></center>
                    </div>
                </form>
            </div>
       
</div>