<div class="col-md-12">
@include('staff.alert')
<div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0" id="heading">
                        Details
                
                </h5>
              </div>
              <form wire:submit.prevent="update">
                    @csrf
                    <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group" style="border:1px solid grey; background-color: #f2f2f2;">
                 <div class="col-12">
                        <label>SENDER DETAIL</label>
                    <div class="form-group row col-12 mt-2">
                        <label for="sender_branch" class="col-6">Sender Branch</label>
                        <input type="text" wire:model="sender_branch" id = "sender_branch" class="form-control col-6 col-6" readonly>
                        @error('sender_branch')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group row col-12 mt-2">
                        <label for="sender_name" class="col-6">Sender Name</label>
                        <input type="text" wire:model="sender_name" id = "sender_name" class="form-control col-6" readonly>
                        @error('sender_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group row col-12 mt-2">
                        <label for="sender_email" class="col-6">Sender Email</label>
                        <input type="email" wire:model="sender_email" id = "sender_email" class="form-control col-6" readonly>
                        @error('sender_email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group row col-12 mt-2">
                        <label for="sender_phone" class="col-6">Sender Contact Number</label>
                        <input type="text" wire:model="sender_phone" id = "sender_phone" class="form-control col-6" readonly>
                        @error('sender_phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group row col-12 mt-2">
                        <label for="sender_address" class="col-6">Sender Address</label>
                        <textarea wire:model="sender_address" id="sender_address" rows="2" class="form-control col-6" readonly>    
                        </textarea>
                        @error('sender_address')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group row col-12 mt-2">
                        <label for="sender_city" class="col-6">Sender City</label>
                        <input type="text" wire:model="sender_city" id = "sender_city" class="form-control col-6" readonly>
                        @error('sender_city')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group row col-12 mt-2">
                        <label for="sender_pin" class="col-6">Sender Pincode</label>
                        <input type="text" wire:model="sender_pin" id = "sender_pin" class="form-control col-6" readonly>
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
                    <div class="form-group row col-12 mt-2">
                        <label for="recipient_name" class="col-6">Recipient Name</label>
                        <input type="text" wire:model="recipient_name" id = "recipient_name" class="form-control col-6" readonly>
                        @error('recipient_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group row col-12 mt-2">
                        <label for="recipient_email" class="col-6">Recipient Email</label>
                        <input type="email" wire:model="recipient_email" id = "recipient_email" class="form-control col-6" readonly>
                        @error('recipient_email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group row col-12 mt-2">
                        <label for="recipient_phone" class="col-6">Recipient Contact Number</label>
                        <input type="text" wire:model="recipient_phone" id = "recipient_phone" class="form-control col-6" readonly>
                        @error('recipient_phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group row col-12 mt-2">
                        <label for="recipient_address" class="col-6">Recipient Address</label>
                        <textarea wire:model="recipient_address" id="recipient_address" rows="2" class="form-control col-6" readonly>    
                        </textarea>
                        @error('recipient_address')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group row col-12 mt-2">
                        <label for="recipient_city" class="col-6">Recipient City</label>
                        <input type="text" wire:model="recipient_city" id = "recipient_city" class="form-control col-6" readonly>
                        @error('recipient_city')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group row col-12 mt-2" style="padding-bottom: 9%">
                        <label for="recipient_pin" class="col-6">Recipient Pincode</label>
                        <input type="text" wire:model="recipient_pin" id = "recipient_pin" class="form-control col-6" readonly>
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
                        <label for="reference_number">Reference Number</label>
                        <input type="text" wire:model="reference_number" id = "reference_number" class="form-control" readonly>
                        @error('reference_number')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                </div>
                <div class="col-12 mt-3">
                        <label for="description">Courier Desciption</label>
                        <textarea wire:model="description" id="description" rows="2" class="form-control" readonly>    
                        </textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3 mb-4">
                        <label for="weight">Parcel Weight</label>
                        <input type="text" wire:model="weight" id = "weight" class="form-control" readonly>
                        @error('weight')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3 mb-4">
                        <label for="price">Parcel Price</label>
                        <input type="text" wire:model="price" id = "price" class="form-control" readonly>
                        @error('price')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3 mb-4">
                    <label for="remark">Staff Remark</label>
                        <textarea wire:model="remark" id="remark" rows="2" class="form-control">    
                        </textarea>
                        @error('remark')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mt-3 mb-4">
                        <label for="status">Courier Status</label>
                        <select wire:model="status" class="form-control" id="status">
                            <option value="0">Not Picked Yet</option>
                            <option value="1">Courier Pickup</option>
                            <option value="2">Shipped</option>
                            <option value="3">Intransit</option>
                            <option value="4">Arrived at Destination</option>
                            <option value="5">Out for Delivery</option>
                            <option value="6">Delivered</option>
                        </select>
                    </div>
                    </div>
                </div>
              </div>

              <div class="col-md-12">
    <div class="form-group">
            <table class="table table-bordered">
            <thead>    
            <tr>
                <th colspan="4" style="text-align: center">Courier History</th>
            </tr>              
            <tr>
                <th style="width: 7%">#</th>
                <th>Remark</th>
                <th>Status</th>
                <th style="width: 20%">Time</th>
            </tr>
            </thead>
            <tbody>
            @foreach($statuses as $key => $status)
                <tr role="row" class="odd">
                    <td >{{ $key + 1 }}</td>
                    <td>{{ $status->remark }}</td>
                    <td>@if($status->status == 1)
                            Courier Pickup
                        @endif
                        @if($status->status == 2)
                            Shipped
                        @endif
                        @if($status->status == 3)
                            Inransit
                        @endif
                        @if($status->status == 4)
                            Arrived at Destination
                        @endif
                        @if($status->status == 5)
                            Out for Delivery
                        @endif
                        @if($status->status == 6)
                            Delivered
                        @endif
                        
                    </td>
                    <td>{{ $status->updated_at }}</td>
                </tr>
            @endforeach
            
            </tbody>
        </table>
    </div>
</div>

            <!-- /.row -->
          </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-6">
                            
                            <button type="submit" class="btn btn-primary"
                                 >Update Courier Status</button>
                            </div>

                            <div class="col-6 text-right">
                                <a href="{{ route('staff.dashboard') }}" class="btn btn-secondary">Back</a>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
       
</div>
