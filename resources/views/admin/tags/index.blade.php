@extends('layouts.app')

@section('content')

<div class="card">
<table class="table table-hover">
<thead>
    <th>
        Tag name
    </th>
    <th>
       Edit
    </th>
    <th>
        Delete
    </th>
</thead>
<tbody>
@foreach($tag as $tag )
<tr>
<td>
    {{$tag->tag}}
</td>

<td>
   <button class="btn btn-primary" ><a href="{{route('tag.edit', $tag->id)}}" style="color:white;"> Edit </a></button>
</td>

<td>
   <button class="btn btn-danger"><a href="{{route('tag.delete', $tag->id)}}" style="color:white;"> Delete </a></button>
</td>

</tr>

<!-- @endforeach -->

</tbody>
</table>
</div>

@endsection