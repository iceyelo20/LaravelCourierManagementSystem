@extends('staff.layouts.master')
@section('title','Search Courier')
@push('css')
@endpush
@section('content')

<livewire:staff.courier.searches :search="$search"/>

@stop    
@push('js')
@endpush 