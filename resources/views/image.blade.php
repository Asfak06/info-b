<x-app-layout>
@section('content')

<div class="card card-default">
  <div class="card-header">
   Add image
  </div>

  <div class="card-body">
    <form action="{{ route('image.store')}}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <label for="caption">Caption</label>
        <input type="text" class="form-control" name="caption" id='caption' >
      </div>


      <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image" id='image'>
      </div>



      <div class="form-group">
        <button type="submit" class="btn btn-success">
          Add image
        </button>
      </div>
    </form>
  </div>
</div>
@endsection

	
</x-app-layout>