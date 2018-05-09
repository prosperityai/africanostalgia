@extends('admin.layouts.main')

@section('title','Edit Tour')

@section('content')
	<div class="row">
        <div class="col-md-12">
        @if (count($errors) > 0)
		@foreach ($errors->all() as $error)
		<div class="alert alert-danger alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			 <center><i class="fa fa-info-circle"></i>  <strong style="font-size:12px;">{{ $error }}</strong> </center>
		</div>
		@endforeach
	@endif 
        </div>
        </div>
	<div class="row">
	
			<div class="panel panel-primary" style="border:1px solid #FF0A00;"> 
        		<div class="panel-heading" style="background-color:#FF0A00; border:1px solid #FF0A00;font-size:16px;font-weight:bold">
					<b>Edit Travel</b>
				</div><!--panel-heading end-->
				<div class="panel-body">
					{!! Form::open(array('action' => ['SuperTravelController@update',$supertravel->id],'class'=>'form-horizontal','enctype'=>'multipart/form-data','method'=>'POST')) !!}
					<div class="form-group">
							{!! Form::label('country_id', 'Country',$attribute=['class'=>'col-md-2 control-label']); !!}
						
						<div class="col-md-10">
							{!! Form::select('country_id', ['1' => 'bangladesh', '2' => 'india'], null, $attribute=['class'=>'form-control input-md','name'=>'country_id','placeholder' => 'Pick a country...']); !!}
						</div>
					</div>
					<div class="form-group">
							{!! Form::label('title', 'Title',$attribute=['class'=>'col-md-2 control-label']); !!}
						
						<div class="col-md-10">
							{!! Form::text('title', $value=$supertravel->title,$attribute=['class'=>'form-control input-md','name'=>'title']); !!}
						</div>
					</div>
					<div class="form-group">
							{!! Form::label('detail', 'Detail',$attribute=['class'=>'col-md-2 control-label']); !!}
						
						<div class="col-md-10">
							{!! Form::textarea('detail', $value=$supertravel->detail,$attribute=['class'=>'form-control input-md','name'=>'detail']); !!}
						</div>
					</div>
					<div class="form-group">
							{!! Form::label('location', 'Location',$attribute=['class'=>'col-md-2 control-label']); !!}
						
						<div class="col-md-10">
							{!! Form::text('location', $value=$supertravel->location,$attribute=['class'=>'form-control input-md','name'=>'location']); !!}
						</div>
					</div>
					<div class="form-group">
							{!! Form::label('image', 'Image',$attribute=['class'=>'col-md-2 control-label']); !!}
						
						<div class="col-md-10">
							{!! Form::file('image', $attribute=['class'=>'btn btn-default','name'=>'main_image']); !!}
						</div>
					</div>
					<div class="form-group">
						  <div class="col-md-12" align="right">

							<a href="/supertravel/"><input  type="button" name="cancel" align="right" value="Cancel" class="btn btn-danger" /></a>
						  
						  {!! Form::submit('Update', $attribute=['class'=>'btn btn-success','name'=>'Submit']); !!}
						  </div>
					  </div>
					  {!! method_field('PUT') !!}
					{!! Form::close() !!}
				</div><!--panel-body end-->
			</div><!--panel content end-->
		
		</div>

@stop