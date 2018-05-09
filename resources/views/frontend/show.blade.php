@extends('frontend.layouts.main')
@section('title','Details')
@section('content')

<div class="kd-subheader">
<div class="container">
<div class="row">
<div class="col-md-12">

<div class="subheader-info">
<h1>{{$supertravel->title}}</h1>
</div>
</div>
</div>
</div>
</div>


<div class="kd-content">

<!--// Page Section //-->
<section class="kd-pagesection" style=" padding: 0px 0px 0px 0px; background: #ffffff; ">
<div class="container">
<div class="row">

<!--// Package Detail //-->
<div class="col-md-12">
<div class="kd-package-detail">


<div class="row">
<div class="col-md-8">


<figure class="detail-thumb">
	<img src="/images/{{$supertravel->main_image}}" alt="*">	
</figure>

</div>
<div class="col-md-4">
<div class="kd-pkg-info">
<ul>
<li><i class="fa fa-map-marker"></i> <strong>Duration:</strong> 3 Days</li>
<li><i class="fa fa-paper-plane"></i> <strong>Location:</strong> {{$supertravel->location}}</li>
<li><i class="fa fa-tag"></i> <strong>Price:</strong> BDT 5500 </li>
</ul>
<a href="../../order/2.html" class="kd-booking-btn thbg-color">Order Now</a>
</div>
</div>

</div> <!-- ROW -->               




<div class="kd-rich-editor">

<h1>Tour Description</h1><br>

<h2>{{$supertravel->detail}}</h2>
<br>
<br>
</div>




</div>
</div>
<!--// Package Detail //-->



</div>
</div>
</section>
<!--// Page Section //-->

</div>
                    

<!-- different body part -->
@endsection
