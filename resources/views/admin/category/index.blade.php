@extends('layouts.app')

@section('content')

<div class="card">
<table class="table table-hover">
<thead>
    <th>
        Category name
    </th>
    <th>
       Edit
    </th>
    <th>
        Delete
    </th>
</thead>
<tbody>
@foreach($categories as $category )
<tr>
<td>
    {{$category->name}}
</td>

<td>
   <button class="btn btn-primary" ><a href="{{route('category.edit', $category->id)}}" style="color:white;"> Edit </a></button>
</td>

<td>
   <button class="btn btn-danger"><a href="{{route('category.delete', $category->id)}}" style="color:white;"> Delete </a></button>
</td>

</tr>

@endforeach

</tbody>
</table>
</div>

@endsection