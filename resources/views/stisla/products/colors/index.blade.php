@php
  $isAjax = $isAjax ?? false;
  $isAjaxYajra = $isAjaxYajra ?? false;
@endphp
@extends('stisla.layouts.app-datatable')

@section('table')
  @include('stisla.products.colors.table')
@endsection