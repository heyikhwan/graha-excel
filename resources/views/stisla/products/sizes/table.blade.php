<table class="table table-striped" id="datatable">
  <thead>
    <tr>
      <th>{{ __('Id') }}</th>
      <th>{{ __('Size') }}</th>
      <th>{{ __('Actions') }}</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
      <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->size }}</td>
        @include('stisla.includes.forms.buttons.btn-action')
      </tr>
    @endforeach
  </tbody>
</table>