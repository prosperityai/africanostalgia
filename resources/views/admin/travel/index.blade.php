@extends('admin.layouts.main')
@section('title','Tour List')
@section('content')
		@if(Session::has('message'))
		<div class="row">
        <div class="col-md-12">	
		<div class="alert alert-info alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			 <center><i class="fa fa-info-circle"></i>  <strong style="font-size:16px;">{{Session::get('message')}}</strong> </center>
			</div>
			</div>
        </div>
		@endif
		<div class="row">
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Title</th>
				<th>Detail</th>
				<th>Location</th>
				<th>Image</th>
				<th>Edit</th>
				<th>Delete</th>
                
                
            </tr>
        </thead>
        
        <tbody>
            @foreach($travel as $travels)
			
			<tr>
                <td>{{$travels->title}}</td>
                <td>{{$travels->detail}}</td>
                <td>{{$travels->location}}</td>
				<td align="center" ><img class="img-responsive thumbnail" src="/images/{{$travels->main_image}}"  /></td>
                @if(!Auth::guest())
					@if(Auth::user()->id==$travels->owner_id)
				<td align="center"><a href="/supertravel/{{$travels->id}}/edit"><button  class="btn btn-info">Edit</button></a></td>
				<td align="center" style="color:#000">
					{!! Form::open(['method'=>'DELETE','route'=>['supertravel.destroy',$travels->id]]) !!}
						{!! Form::submit('DELETE',$attribute=['class'=>'btn btn-danger']); !!}
						{!! Form::close() !!}
				  @else
					<td align="center"><span style="color:#CD1142;" class="glyphicon glyphicon-edit disabled"></span></td>
				<td align="center" style="color:#000">
				  <span style="color:#F00;" class="glyphicon glyphicon-trash disabled"></span></td>
				  @endif
				  @endif
				  </td>
            </tr>
           @endforeach
        </tbody>
    </table>
	</div>
@endsection