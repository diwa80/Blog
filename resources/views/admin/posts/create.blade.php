@extends('layouts.app')

@section('content')

@if(count($errors)>0)
<ul class="list-group">
@foreach($errors->all() as $error)
<li class="list-group-item text-danger">
{{$error}}
</li>
@endforeach
</ul>
@endif
    <div class="card">
        <div class="card-header">
            Create new post
        </div>

        <div class="card-body">
            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class= "form-control">
            </div>

            <div class="form-group">
            <label for="category">Select a Category</label>
            <select name="category_id" id="category" class="form-control">
            @foreach($categories as $category)
                <option value="{{$category->id}}"> {{$category ->name}}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="featured">Featured Image</label>
                <input type="file" name="featured" class= "form-control">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="summernote" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div class="form-group">
            <div class="text-center">
            <button class="btn btn-success" type="submit">
            Save
            </button>
            </div>

            </div>
            </form>
        </div>
    </div>

@endsection

@section('styles')
<link href="https:// cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
@endsection


@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>

<script>
$(document).ready(function() {
  $('#summernote').summernote();
})
</script>
@endsection