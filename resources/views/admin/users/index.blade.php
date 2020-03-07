@extends('layouts.app')

@section('content')

<div class="card">
<table class="table table-hover">
<thead>
    <th>
        Image
    </th>
    <th>
        Name
    </th>
    <th>
        Permission
    </th>
    <th>
        Delete
    </th>
</thead>
<tbody>
@if($users->count()>0)
@foreach($users as $user)
<tr>
<td>

</td>
<td>
  {{ $user->name }}
</td>
<td>
  @if($user->admin)
  <button class="btn btn-primary" ><a href="{{route('user.not.admin', $user->id)}}" style="color:white;"> Remove Permission </a></button>

  @else
  <button class="btn btn-primary" ><a href="{{route('user.admin', $user->id)}}" style="color:white;"> Make Admin </a></button>

  @endif
</td>



<td>
@if(Auth::id() !== $user->id)
   <button class="btn btn-primary" ><a href="{{route('user.delete', $user->id)}}" style="color:white;"> Delete </a></button>
   @endif
</td>






</tr>

@endforeach
@else
<tr>

<th colspan=5> No posts
</th>


@endif

</tbody>
</table>
</div>

@endsection