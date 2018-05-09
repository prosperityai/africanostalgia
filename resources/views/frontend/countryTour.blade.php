@extends('frontend.layouts.main')
@section('title','Details')
@section('content')


<!--// Sub Header //-->
<div class="kd-subheader">
<div class="container">
<div class="row">
<div class="col-md-12">

<div class="subheader-info">
<h1> {{$CountryName->name}} </h1>
</div>
</div>
</div>
</div>
</div>

<!--// Sub Header //-->





    <!--// Content //-->
    <div class="kd-content">

      <!--// Page Section //-->
      <section class="kd-pagesection" style=" padding: 0px 0px 10px 0px; ">
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <div class="kd-package-list">
                <div class="row">




			
			



@foreach($CountryTour as $CountryTours)
<article class="col-md-4">
<figure><a href="#"><img src="/images/{{$CountryTours->main_image}}" alt=""></a>
<figcaption>

<span class="package-price thbg-color">BDT 5500</span>

<div class="kd-bottomelement">
	<h5>
		<a href="/tour/{{$CountryTours->id}}">
		{{$CountryTours->title}}
		</a>
	</h5>	
<div class="days-counter" style="background-color: #087dc2;"><span>3</span> <br> days</div>
</div>

</figcaption>
</figure>
</article>
@endforeach


                </div>
                
              </div>
            </div>

          </div>



                <div class="text-center">
                    <ul class="pagination"><li class="disabled"><span>&laquo;</span></li> <li class="active"><span>1</span></li><li><a href="bangladesh4658.html?page=2">2</a></li><li><a href="bangladesh9ba9.html?page=3">3</a></li><li><a href="bangladeshfdb0.html?page=4">4</a></li> <li><a href="bangladesh4658.html?page=2" rel="next">&raquo;</a></li></ul>
                </div>


    



        </div>
      </section>
      <!--// Page Section //-->

    </div>
    <!--// Content //-->


@endsection