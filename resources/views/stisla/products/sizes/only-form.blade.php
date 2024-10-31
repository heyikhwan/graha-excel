<div class="row">
  <div class="col-12">
    @isset($d)
      @method('PUT')
    @endisset

    @csrf
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input', ['required' => true, 'name' => 'size', 'label' => 'Size'])
  </div>
</div>