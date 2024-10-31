<table class="table table-striped" id="datatable">
  <thead>
    <tr>
      <th>{{ __('Id') }}</th>
      <th>{{ __('Title') }}</th>
      <th>{{ __('Actions') }}</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
      <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->title }}</td>
        @include('stisla.includes.forms.buttons.btn-action')
      </tr>
    @endforeach
  </tbody>
</table>