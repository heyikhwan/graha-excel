@extends('stisla.layouts.app-table')

@section('title')
  Dashboard
@endsection

@section('content')
  <div class="section-header">
    <h1>{{ __('Dashboard') }}</h1>
  </div>
  <div class="row">
    <div class="col-12 mb-4">
      <div class="hero text-white hero-bg-image" data-background="{{ $_stisla_bg_home }}">
        <div class="hero-inner">
          <h2>{{ __('Welcome') }}, {{ Auth::user()->name ?? 'Your Name' }}</h2>
          <p class="lead">{{ $_app_description }}</p>

          @if (auth()->user()->can('Profil'))
            <div class="mt-4">
              <a href="{{ route('profile.index') }}" class="btn btn-outline-white btn-lg btn-icon icon-left">
                <i class="far fa-user"></i> {{ __('See Profile') }}
              </a>
            </div>
          @endif

        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
      <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="fas fa fa-shopping-cart"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Products</h4>
            </div>
            <div class="card-body">
              {{ $products_count }}
            </div>
          </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
      <div class="card card-statistic-1">
          <div class="card-icon bg-info">
            <i class="fas fa fa-list-alt"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>News</h4>
            </div>
            <div class="card-body">
              {{ $news_count }}
            </div>
          </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
      <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-users"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Users</h4>
            </div>
            <div class="card-body">
              {{ $users_count }}
            </div>
          </div>
      </div>
    </div>

  </div>
@endsection

@push('js')
  <script>
    function openTo(link) {
      window.location.href = link;
    }
  </script>
@endpush
