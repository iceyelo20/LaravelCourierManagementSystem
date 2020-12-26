@extends('staff.layouts.master')
@section('title','Dashboard')
@push('css')
@endpush
@section('content')

<div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Details</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
              <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                
                @if(count($courier->where('status', '=', '0')) || count($courier->where('status', '=', 'Not Picked Yet')) > 0)
                <h3>{{ $courier->where('status', '=', '0')->count() || $courier->where('status', '=', 'Not Picked Yet')->count() }}</h3>
                @endif
                @if(count($courier->where('status', '=', '0')) || count($courier->where('status', '=', 'Not Picked Yet')) < 1)
                <h3>0</h3>
                @endif

                <p>Not Pick Courier</p>
              </div>
              <div class="icon">
                <i class="fas fa-box-open"></i>
              </div>
              <a href="{{ route('staff.courier.view') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $courier->where('status', '=', '1')->count() }}</h3>

                <p>Pickup Courier</p>
              </div>
              <div class="icon">
                <i class="fas fa-cubes"></i>
              </div>
              <a href="{{ route('staff.courier.pickup') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                <h3>{{ $courier->where('status', '=', '2')->count() }}</h3>

                <p>Shipped</p>
              </div>
              <div class="icon">
                <i class="fas fa-truck"></i>
              </div>
              <a href="{{ route('staff.courier.shipped') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $courier->where('status', '=', '3')->count() }}</h3>

                <p>Intransit</p>
              </div>
              <div class="icon">
                <i class="fas fa-network-wired"></i>
              </div>
                <a href="{{ route('staff.courier.intransit') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <h3>{{ $courier->where('status', '=', '4')->count() }}</h3>

                <p>Arrived at Destination</p>
              </div>
              <div class="icon">
                <i class="fas fa-people-carry"></i>
              </div>
                <a href="{{ route('staff.courier.arrived') }}"" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{ $courier->where('status', '=', '5')->count() }}</h3>

                <p>Out for Delivery</p>
              </div>
              <div class="icon">
                <i class="fas fa-shipping-fast"></i>
              </div>
                <a href="{{ route('staff.courier.delivery') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $courier->where('status', '=', '6')->count() }}</h3>

                <p>Delivered</p>
              </div>
              <div class="icon">
                <i class="fas fa-truck-loading"></i>
              </div>
                <a href="{{ route('staff.courier.delivered') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
          </div>

        </div>




        </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>

@stop    
@push('js')
@endpush 