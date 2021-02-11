<x-app-layout>
@section('content')

<form action="{{ route('image.delete') }}" method="POST" enctype="multipart/form-data">
	@csrf
@foreach($images as $image)
<div class="form-check mt-5">

  <input name="image[]" class="form-check-input" type="checkbox" value="{{$image->id }}" id="defaultCheck1">

  <label class="form-check-label mt-5" for="defaultCheck1">
    <img src="{{ asset($image->path) }}" width="100" alt="">
  </label>

</div>
@endforeach
      <div class="form-group">
        <button class="btn btn-success mt-2">
          delete
        </button>
      </div>
</form>

@endsection
</x-app-layout>
