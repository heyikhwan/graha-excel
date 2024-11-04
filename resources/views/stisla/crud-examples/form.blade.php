@php
  $isAjax = $isAjax ?? false;
@endphp

@extends('stisla.layouts.app-form')

@section('rowForm')
  @include('stisla.crud-examples.only-form')
@endsection

@push('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endpush

@push('js')
@endpush

@push('scripts')
<script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
<script>
   var route_prefix = "/file-managers";
    $('.lfm').filemanager('file', {prefix: route_prefix}); // untuk image saja, bisa juga gunakan 'file' untuk semua jenis file
</script>
@endpush
