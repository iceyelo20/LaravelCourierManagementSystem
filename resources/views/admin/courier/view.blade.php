@extends('admin.layouts.master')
@section('title','Courier Status')
@push('css')
@endpush
@section('content')


<livewire:admin.courier.view :courier="$courier"/>


@stop
@push('js')
@endpush