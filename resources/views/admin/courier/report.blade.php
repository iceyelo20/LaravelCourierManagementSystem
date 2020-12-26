@extends('admin.layouts.master')
@section('title','Sales Report')
@push('css')
@endpush
@section('content')


<livewire:admin.courier.report :courier="$courier"/>


@stop
@push('js')
@endpush