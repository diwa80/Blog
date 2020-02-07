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
       Restore
    </th>
    <th>
        delete
    </th>
</thead>
<tbody>
@if($post->count()>0)

@foreach($post as $post)
<tr>
<td>
 <img src=" {{ $post->featured }}" alt="{{ $post->title }}" width="50px" width="50px">
</td>
<td>
  {{ $post->title }}
</td>

<td>
   <button class="btn btn-primary" ><a href="{{route('post.restore', $post->id)}}" style="color:white;"> Restore </a></button>
</td>

<td>
   <button class="btn btn-primary" ><a href="{{route('post.kill', $post->id)}}" style="color:white;"> Delete </a></button>
</td>





</tr>

@endforeach

@else
<tr>

<th colspan=5> No deleted posts
</th>


@endif

</tbody>
</table>
</div>

@endsection