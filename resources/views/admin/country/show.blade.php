@extends('admin.layouts.main')
@section('title','Show')
@section('content')


	<div class="row">
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Title</th>
				<th>Detail</th>
				<th>Location</th>
				<th>Image</th>
				
                
                
            </tr>
        </thead>
        
        <tbody>
            @foreach($supertravel as $supertravels)
			
			<tr>
                <td>{{$supertravels->title}}</td>
                <td>{{$supertravels->detail}}</td>
                <td>{{$supertravels->location}}</td>
				<td align="center" ><img class="img-responsive thumbnail" src="/images/{{$supertravels->main_image}}"  /></td>
                
            </tr>
           @endforeach
        </tbody>
    </table>
@endsection