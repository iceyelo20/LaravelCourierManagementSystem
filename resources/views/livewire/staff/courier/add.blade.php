<div class="col-md-12">
@include('staff.alert')
<div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0" id="heading">
                        Details
                
                </h5>
              </div>
              <form wire:submit.prevent="store">
                    @csrf
                    <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group" style="border:1px solid grey; background-color: #f2f2f2;">
                 <div class="col-12">
                        <label>SENDER DETAIL</label>
                    <div class="col-12 mt-3">
                        <label for="sender_branch">Sender Branch</label>
                        <input type="text" wire:model="sender_branch" id = "sender_branch" class="form-control">
                        @error('sender_branch')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label for="sender_name">Sender Name</label>
                        <input type="text" wire:model="sender_name" id = "sender_name" class="form-control">
                        @error('sender_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label for="sender_email">Sender Email</label>
                        <input type="email" wire:model="sender_email" id = "sender_email" class="form-control">
                        @error('sender_email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label for="sender_phone">Sender Contact Number</label>
                        <input type="text" wire:model="sender_phone" id = "sender_phone" class="form-control">
                        @error('sender_phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label for="sender_address">Sender Address</label>
                        <textarea wire:model="sender_address" id="sender_address" rows="2" class="form-control" >    
                        </textarea>
                        @error('sender_address')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label for="sender_city">Sender City</label>
                        <input type="text" wire:model="sender_city" id = "sender_city" class="form-control">
                        @error('sender_city')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3 mb-3">
                        <label for="sender_pin">Sender Pincode</label>
                        <input type="text" wire:model="sender_pin" id = "sender_pin" class="form-control">
                        @error('sender_pin')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                
                </div>
                 </div>
                
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group" style="border:1px solid grey; background-color: #f2f2f2;">
                 <div class="col-12">
                        <label>RECIEVER DETAIL</label>
                    <div class="col-12 mt-3">
                        <label for="recipient_name">Recipient Name</label>
                        <input type="text" wire:model="recipient_name" id = "recipient_name" class="form-control">
                        @error('recipient_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label for="recipient_email">Recipient Email</label>
                        <input type="email" wire:model="recipient_email" id = "recipient_email" class="form-control">
                        @error('recipient_email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label for="recipient_phone">Recipient Contact Number</label>
                        <input type="text" wire:model="recipient_phone" id = "recipient_phone" class="form-control">
                        @error('recipient_phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label for="recipient_address">Recipient Address</label>
                        <textarea wire:model="recipient_address" id="recipient_address" rows="2" class="form-control" >    
                        </textarea>
                        @error('recipient_address')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label for="recipient_city">Recipient City</label>
                        <input type="text" wire:model="recipient_city" id = "recipient_city" class="form-control">
                        @error('recipient_city')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3" style="padding-bottom: 17%">
                        <label for="recipient_pin">Recipient Pincode</label>
                        <input type="text" wire:model="recipient_pin" id = "recipient_pin" class="form-control">
                        @error('recipient_pin')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                
                  </div>
                </div>
              </div>
              <!-- /.col -->

              <div class="col-md-12">
                <div class="form-group" style="border:1px solid grey; background-color: #f2f2f2;">
                <div class="col-12">
                <label>COURIER DETAIL</label>
                <div class="col-12 mt-3">
                        <label for="description">Courier Desciption</label>
                        <textarea wire:model="description" id="description" rows="3" class="form-control" >    
                        </textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label for="weight">Parcel Weight</label>
                        <input type="text" wire:model="weight" id = "weight" class="form-control">
                        @error('weight')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3 mb-4">
                        <label for="price">Parcel Price</label>
                        <input type="text" wire:model="price" id = "price" class="form-control">
                        @error('price')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                </div>
              </div>
            </div>
            <!-- /.row -->
          </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-6">
                            <button type="submit" class="btn btn-primary">Add Courier</button>
                            </div>

                            <div class="col-6 text-right">
                                <a href="{{ route('staff.dashboard') }}" class="btn btn-secondary">Back</a>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
       
</div>
