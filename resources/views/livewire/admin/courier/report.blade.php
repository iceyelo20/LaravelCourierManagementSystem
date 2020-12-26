<div class="col-md-12">
@include('admin.alert')
<div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0" id="heading">
                        Details
                
                </h5>
              </div>

              <div class="col-md-12">
    <div class="form-group">
            <table class="table table-bordered">
            <thead>    
            <tr>
                <th colspan="4" style="text-align: center">Report</th>
            </tr>              
            <tr>
                <th style="width: 7%">#</th>
                <th>Date</th>
                <th>Sale Amount</th>
            </tr>
            </thead>
            <tbody>
            @foreach($courier as $key => $couriers)
            <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $couriers->updated_at }}</td>
                    <td>P{{ $couriers->price }}.00</td>

            </tr>
            @endforeach
            <tr>
                <th colspan="2" style="text-align:center">Grand Total</th>
                <td>P{{ $couriers->sum('price') }}.00</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

            <!-- /.row -->
          </div>
            </div>

