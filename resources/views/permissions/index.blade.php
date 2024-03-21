@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Permissions</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('permissions.create') }}">Create New Permission</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Name</th>
   <!-- <th>Email</th> -->
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr> 
 @foreach ($data as $key => $permission)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $permission->name }}</td>
    <!-- <td>{{ $permission->email }}</td> -->
    <td>
      @if(!empty($permission->roles))
        @foreach($permission->roles as $role)
           <span class="badge bg-success">{{ $role->name }}</span>
        @endforeach
      @endif
    </td>
    <td>
       <!-- {{-- <a class="btn btn-info" href="{{ route('users.show',$permission->id) }}">Show</a> --}} -->
       <a class="btn btn-primary" href="{{ route('permissions.edit',$permission->id) }}">Edit</a>
       <form method="POST" action="{{ route('permissions.destroy', $permission->id) }}" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
       </form>
    </td>
  </tr>
 @endforeach 
</table>

{{ $data->links() }}  

<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection
