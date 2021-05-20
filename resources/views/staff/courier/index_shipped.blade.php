@extends('staff.layouts.master')
@section('title','Courier Status')
@push('css')
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush
@section('content')
<div class="col-12">
    @include('staff.alert')
</div>
<div class="col-12">
<div class="card">
    <div class="card-header">
         <div class="row">
            <div class="col-6">
                <h4>Courier Shipped</h4>
            </div>
         </div>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
        
        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
        
        <thead>
        <tr role="row">
        <th>Sl. No</th>
        <th>Refernce Number</th>
        <th>Sender Name</th>
        <th>Recipient Name</th>
        <th>Courier Date</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($couriers as $key => $courier)
        <tr role="row" class="odd">
            <td >{{ $key + 1 }}</td>
            <td>{{ $courier->reference_number }}</td>
            <td>{{ $courier->sender_name }}</td>
            <td>{{ $courier->recipient_name }}</td>
            <td>{{ $courier->updated_at}}</td>
            <td>
            <center><a href="{{ route('staff.courier.edit',$courier->reference_number) }}" class="btn btn-outline-primary btn-sm">Modify</a></center>
            <form action="{{ route('staff.courier.delete',$courier->reference_number) }}" style="display: none" method="post" id="delete-form-{{ $courier->reference_number }}">
            @csrf
            @method('DELETE')
            </form>
            </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        
        </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
    </div>
</div>

@stop
@push('js')
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endpush