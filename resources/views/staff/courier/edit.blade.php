@extends('staff.layouts.master')
@section('title','Courier Status')
@push('css')
@endpush
@section('content')


<livewire:staff.courier.edit :courier="$courier"/>


@stop
@push('js')
@endpush