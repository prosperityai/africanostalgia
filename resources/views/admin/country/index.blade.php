@extends('admin.layouts.main')
@section('title','Country List')
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
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
                
                
            </tr>
        </thead>
        
        <tbody>
            @foreach($Country as $Countrys)
			<tr>
                <td>{{$Countrys->name}}</td>
				
				<td align="center"><a href="/country/{{$Countrys->id}}/edit"><button  class="btn btn-info">Edit</button></a></td>
				<td align="center" style="color:#000">
					{!! Form::open(['method'=>'DELETE','route'=>['country.destroy',$Countrys->id]]) !!}
						{!! Form::submit('DELETE',$attribute=['class'=>'btn btn-danger']); !!}
						{!! Form::close() !!}
				  </td>
            </tr>
           @endforeach
        </tbody>
    </table>
	</div>
@endsection