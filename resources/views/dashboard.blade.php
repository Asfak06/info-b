<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


@section('content')
<div class="d-flex justify-content-end mb-2">
  <a href="{{ route('image.add') }}" class="btn btn-success">Add Image</a>
</div>

<div class="card card-default">
  <div class="card-header">Images</div>
  <div class="card-body">
    @if($images->count() > 0)
    <table class="table">
      <thead>
        <th>ID</th>
        <th>Caption</th>
        <th>Image</th>
      </thead>

      <tbody>
        @foreach($images as $image)
          <tr>
            <td>
              {{ $image->id }}
            </td>

            <td>
              {{ $image->caption }}
            </td>
            <td>
              <img src="{{ asset($image->path) }}" width="80" alt="">
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    @else
    <h3 class="text-center">No images yet.</h3>
    @endif
  </div>
</div>
@endsection

</x-app-layout>
