<div class="card">
  <div class="card-header">
    <h4>
      <i class="{{ $icon }}"></i>
      {{ $title }}
    </h4>
  </div>
  <div class="card-body">
    <div class="empty-state" data-height="400">
      <div class="empty-state-icon">
        <i class="fas fa-question"></i>
        {{-- <i class="fa fa-cloud-exclamation"></i> --}}
      </div>
      <h2>{{ $emptyTitle ?? __('We couldn\'t find any data') }}</h2>
      <p class="lead">
        {{ $emptyDesc ??__('Sorry we couldn\'t find any data, to get rid of this message, make at least 1 entry.') }}
      </p>
      <div class=" mt-4">
        @if ($canImportExcel ?? false)
          @include('stisla.includes.forms.buttons.btn-import-excel', ['icon' => 'fa fa-file-excel', 'label' => __('Impor Excel')])
        @endif
        @if ($canCreate ?? false)
          @include('stisla.includes.forms.buttons.btn-add', ['link' => $route_create, 'icon' => 'fa fa-plus', 'label' => __('Create Data')])
        @endif
      </div>
      {{-- <a href="#" class="mt-4 bb">Need Help?</a> --}}
    </div>
  </div>
</div>
