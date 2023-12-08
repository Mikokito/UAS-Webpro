@extends('dashboard.layouts.utama')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Post</h1> 
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/posts/{{ $post->id }}" class="mb-5" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $post->name) }}">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" required value="{{ old('description', $post->description) }}">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <input type="hidden" name="oldImage" value="{{ $post->image }}">
            @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
            <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>

<script>
    function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview'); 

    imgPreview.style.display = 'block';
    
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
    }
</script>
@endsection