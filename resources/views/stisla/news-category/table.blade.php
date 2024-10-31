<table class="table table-striped" id="datatable">
  <thead>
    <tr>
      <th>{{ __('Id') }}</th>
      <th>{{ __('Title') }}</th>
      <th>{{ __('Image') }}</th>
      <th>{{ __('Description') }}</th>
      <th>{{ __('Page Title') }}</th>
      <th>{{ __('Meta Description') }}</th>
      <th>{{ __('Url Title') }}</th>
      <th>{{ __('Actions') }}</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
      <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->title }}</td>
        <td>{{ $item->image }}</td>
        <td>{!! $item->description !!}</td>
        <td>{{ $item->page_title }}</td>
        <td>{{ $item->meta_description }}</td>
        <td>{{ $item->url_title }}</td>
        @include('stisla.includes.forms.buttons.btn-action')
      </tr>
    @endforeach
  </tbody>
</table>
