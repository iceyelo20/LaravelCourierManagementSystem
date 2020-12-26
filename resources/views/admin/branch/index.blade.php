@extends('admin.layouts.master')
@section('title','Branch Management')
@push('css')
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush
@section('content')
<div class="col-12">
    @include('admin.alert')
</div>
<div class="col-12">
<div class="card">
    <div class="card-header">
         <div class="row">
            <div class="col-6">
                <h4>View All Branches</h4>
            </div>
            <div class="col-6 text-right">
                <a href="{{ route('admin.branch.add') }}" class="btn btn-primary btn-sm">Add New Branch</a>
            </div>
         </div>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
        
        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
        
        <thead>
        <tr role="row">
        <th>Sl. No</th>
        <th>Branch Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($branches as $key => $branch)
        <tr role="row" class="odd">
            <td >{{ $key + 1 }}</td>
            <td>{{ $branch->branch_name }}</td>
            <td>{{ $branch->branch_address }}</td>
            <td>{{ $branch->branch_phone }}</td>
            <td>{{ $branch->branch_email }}</td>
            <td>
            <a href="{{ route('admin.branch.edit',$branch->id) }}" class="btn btn-outline-primary btn-sm">Modify</a>
            <a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $branch->id }}').submit();" class="btn btn-outline-danger btn-sm">Delete</a>
            <form action="{{ route('admin.branch.delete',$branch->id) }}" style="display: none" method="post" id="delete-form-{{ $branch->id }}">
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