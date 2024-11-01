@extends('stisla.layouts.app-auth-simple')

@section('title')
  {{ $title = __('Masuk') }}
@endsection

@section('content')
  <div class="card-body">

    @include('stisla.auth.login.includes.alert-info')

    <form method="POST" action="{{ route('login-post') }}" class="needs-validation" novalidate="" id="formAuth">
      @csrf

      @include('stisla.includes.forms.inputs.input-email')
      @include('stisla.auth.login.input-password')

      @include('stisla.auth.gcaptcha')

      <div class="form-group">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
          <label class="custom-control-label" for="remember-me">{{ __('Ingat Saya') }}</label>
        </div>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
          {{ $title }}
        </button>
      </div>
    </form>

  </div>
@endsection

@include('stisla.auth.script-gcaptcha')
