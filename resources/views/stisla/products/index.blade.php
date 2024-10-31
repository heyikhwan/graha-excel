@php
  $isAjax = $isAjax ?? false;
  $isAjaxYajra = $isAjaxYajra ?? false;
@endphp
@extends('stisla.layouts.app-datatable')

@section('table')
  @include('stisla.products.table')
@endsection

@push('scripts')
<script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
@endpush