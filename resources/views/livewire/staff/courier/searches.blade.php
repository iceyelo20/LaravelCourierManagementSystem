
<div class="col-12">
    @include('staff.alert')
</div>
<div class="col-12">
<div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> Courier View
                    <small class="float-right">Date: {{ date('d/m/Y') }}</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
              
                <div class="col-sm-6 invoice-col">
                  From
                  <address>
                 
                    <strong>{{ $search->sender_name }}</strong><br>
                    {{ $search->sender_pin }}<br>
                    {{ $search->sender_address }}<br>
                    Phone: {{ $search->sender_phone }}<br>
                    Email: {{ $search->sender_email }}
                 
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-6 invoice-col">
                  To
                  <address>
                  <strong>{{ $search->recipient_name }}</strong><br>
                    {{ $search->recipient_pin }}<br>
                    {{ $search->recipient_address }}<br>
                    Phone: {{ $search->recipient_phone }}<br>
                    Email: {{ $search->recipient_email }}
                  </address>
                </div>
                
                <!-- /.col -->

                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              @if($search->status > 0)
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th style="width: 13%">#</th>
                      <th style="width: 30%">Remark</th>
                      <th>Status</th>
                      <th style="width: 20%">Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($status as $key => $statuses)
                    
                    <tr>
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $statuses->remark }}</td>
                      <td>@if($statuses->status == 1)
                            Courier Pickup
                        @endif
                        @if($statuses->status == 2)
                            Shipped
                        @endif
                        @if($statuses->status == 3)
                            Inransit
                        @endif
                        @if($statuses->status == 4)
                            Arrived at Destination
                        @endif
                        @if($statuses->status == 5)
                            Out for Delivery
                        @endif
                        @if($statuses->status == 6)
                            Delivered
                        @endif</td>
                      <td>{{ $statuses->updated_at }}</td>
                    </tr>
                    
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              @endif
              <!-- /.row -->

              <div class="row mt-5" >
                <!-- accepted payments column -->
                <div class="col-6">
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="{{ asset('admin/dist/img/credit/visa.png') }}" alt="Visa">
                  <img src="{{ asset('admin/dist/img/credit/mastercard.png') }}" alt="Mastercard">
                  <img src="{{ asset('admin/dist/img/credit/american-express.png') }}" alt="American Express">
                  <img src="{{ asset('admin/dist/img/credit/paypal2.png') }}" alt="Paypal">

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px; text-align: justify;">
                  Technology continues to evolve and the opportunities for our business are great. We’ve put together a list of all the different ways you can pay online. These online payment options are easy, convenient, and seamless for customers to use.
                  </p>
                </div>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Parcel Information</p>

                  <div class="table-responsive" >
                    <table class="table">
                      <tbody><tr>
                        <th style="width:50%">Reference Number:</th>
                        <td>{{ $search->reference_number }}</td>
                      </tr>
                      <tr>
                        <th>Latest Status:</th>
                        <td>
                        @if($search->status == 0 || $search->status == 'Not Picked Yet')
                            Courier Not Pick
                        @endif
                        @if($search->status == 1)
                            Courier Pickup
                        @endif
                        @if($search->status == 2)
                            Shipped
                        @endif
                        @if($search->status == 3)
                            Inransit
                        @endif
                        @if($search->status == 4)
                            Arrived at Destination
                        @endif
                        @if($search->status == 5)
                            Out for Delivery
                        @endif
                        @if($search->status == 6)
                            Delivered
                        @endif</td>
                      </tr>
                      <tr>
                        <th>Branch Pick:</th>
                        <td>{{ $search->sender_branch }}</td>
                      </tr>
                      <tr>
                        <th>Shipping:</th>
                        <td>P{{ $search->price }}.00</td>
                      </tr>
                    </tbody></table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                <div class="col-12 text-right">
                                <a href="{{ route('staff.courier.search') }}" class="btn btn-secondary float:right">Back</a>
                            </div>
                </div>
              </div>
            </div>
</div>

