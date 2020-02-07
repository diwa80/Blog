@extends('layouts.app')

@section('content')

<div class="card">
<table class="table table-hover">
<thead>
    <th>
        Image
    </th>
    <th>
    Title
    </th>
    <th>
        Edit
    </th>
    <th>
        delete
    </th>
</thead>
<tbody>
@foreach($posts as $post)
<tr>
<td>
 <img src=" {{ $post->featured }}" alt="{{ $post->title }}" width="50px" width="50px">
</td>
<td>
  {{ $post->title }}
</td>

<td>
   <button class="btn btn-primary" ><a href="{{route('post.delete', $post->id)}}" style="color:white;"> Delete </a></button>
</td>





</tr>

@endforeach

</tbody>
</table>
</div>

@endsection