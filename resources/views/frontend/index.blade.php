@extends('frontend.layouts.main')
@section('title','Home')
@section('content')

<!-- different body part -->




<!--// MainBanner //-->
<div id="mainbanner">
<ul class="bxslider">


<li><img src="/frontend/images/slider/1468517216.jpg" alt="Slider" />
<div class="kd-caption">
<h2> &nbsp; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident dolorum dolorem repellat</h2>
<h1> &nbsp;  Awesome Place  </h1>
</div>
</li>


<li><img src="/frontend/images/slider/1468517225.jpg" alt="Slider" />
<div class="kd-caption">
<h2> &nbsp; </h2>
<h1> &nbsp;   </h1>
</div>
</li>


<li><img src="/frontend/images/slider/1468517245.jpg" alt="Slider" />
<div class="kd-caption">
<h2> &nbsp; </h2>
<h1> &nbsp;  Enjoy the sea </h1>
</div>
</li>


</ul>

    </div>
    <!--// MainBanner //-->






    <!--// Content //-->
    <div class="kd-content">





<!--// Page Section //-->
<section class="kd-pagesection">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="kd-modrentitle thememargin">
<h3>What We Do</h3>
<div class="kd-divider"><div class="short-seprator"><span><i class="fa fa-home"></i></span></div></div>
<br />
<p>{<b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quis, 
ipsam. Maiores soluta facere accusantium modi libero ullam maxime alias 
quam sequi neque quae, vero ratione officiis rem deleniti, fugiat 
commodi voluptas voluptatum ut provident, laboriosam,</b><br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quis, 
ipsam. Maiores soluta facere accusantium modi libero ullam maxime alias 
quam sequi neque quae, vero ratione officiis rem deleniti, fugiat 
commodi voluptas voluptatum ut provident, laboriosam, quod eaque. Iste, 
maxime, veniam. Quis consequuntur libero, voluptatum vero ullam, 
veritatis ea culpa.

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quis, 
ipsam. Maiores soluta facere accusantium modi libero ullam maxime alias 
quam sequi neque quae, vero ratione officiis rem deleniti, fugiat 
commodi voluptas voluptatum ut provident, laboriosam, quod eaque. Iste, 
maxime, veniam. Quis consequuntur libero, voluptatum vero ullam, 
veritatis ea culpa.

<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quis, 
ipsam. Maiores soluta facere accusantium modi libero ullam maxime alias 
quam sequi neque quae, vero ratione officiis rem deleniti, fugiat 
commodi voluptas voluptatum ut provident, laboriosam, quod eaque. Iste, 
maxime, veniam. Quis consequuntur libero, voluptatum vero ullam, 
veritatis ea culpa.

<br><br><br><br>}</p>
</div>
</div>
</div>
</div>
</section>
<!--// Page Section //-->















<!--// Page Section //-->
<section class="kd-pagesection" style=" padding: 50px 0px; background: url(frontend/images/pakege1.jpg); background-size: cover; ">
<div class="container">
<div class="row">

<div class="col-md-12">
<div class="kd-modrentitle thememargin">
<h3>Featured Tours</h3>
<div class="kd-divider"><div class="short-seprator"><span><i class="fa fa-globe"></i></span></div></div>
<br />
</div>
</div>

<div class="col-md-12">
<div class="kd-package-list">
<div class="row">



@foreach($travel as $travels)
<article class="col-md-4">
<figure><a href="#"><img src="/images/{{$travels->main_image}}" alt=""></a>
<figcaption>

<span class="package-price thbg-color">BDT 5500</span>

<div class="kd-bottomelement">
	<h5>
		<a href="/tour/{{$travels->id}}">
		{{$travels->title}}
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
</div>
</section>
<!--// Page Section //-->












<!--// Page Section //-->
<section class="kd-pagesection" style=" padding: 20px 0px 0px 0px; background: #fcfcfc; ">
<div class="container">
<div class="row">

<div class="col-md-12">
<div class="kd-modrentitle thememargin">
<h3>Our Tour Gallery</h3>
<div class="kd-divider"><div class="short-seprator"><span><i class="fa fa-globe"></i></span></div></div>
</div>
</div>

</div>
</div>
</section>
<!--// Page Section //-->



<!--// Page Section //-->
<section class="kd-pagesection" style=" padding: 40px 0px 0px 0px;">
<div class="container">
<div class="row">
<div class="col-md-12">
<!--// Gallery //-->
<div class="kd-gallery">
<ul class="row">


<li class="col-md-6">
<figure>
<a href="#">
<img src="/frontend/images/albums/1468586973.jpg" alt="">
</a>
<figcaption>
<a href="#" class="fa fa-plus"></a>
</figcaption>
</figure>
<div class="kd-galleryinfo">
<h5><a href="#">Sylhet Tour</a></h5>
<span>Sylhet is a major city that lies on the banks of Surma River in north-east Bangladesh.</span>
</div>
</li>


<li class="col-md-6">
<figure>
<a href="#">
<img src="/frontend/images/albums/1468587221.jpg" alt="">
</a>
<figcaption>
<a href="#l" class="fa fa-plus"></a>
</figcaption>
</figure>
<div class="kd-galleryinfo">
<h5><a href="albumdetails/2/coxs%2bbazar%2btour.html">Coxs Bazar Tour</a></h5>
<span>Cox&#039;s Bazar is a town, a fishing port and district headquarters in Bangladesh.</span>
</div>
</li>



</ul>
</div>
<!--// Gallery //-->

</div>

</div>
</div>
</section>
<!--// Page Section //-->





<!--// Page Section //-->
<section class="kd-pagesection" style=" padding: 40px 0px 0px 0px; background: #ffffff; ">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="col-md-12">
<div class="kd-modrentitle thememargin">
<h3>Our Partner</h3>
<div class="kd-divider"><div class="short-seprator"><span><i class="fa fa-globe"></i></span></div></div>
</div>
</div>
<div class="kd-partner thememargin">
<ul>


<li class="col-md-2"><img src="/frontend/images/partner/20160802181629786920partner1.jpg" alt="" style="width: 200px; height: 150px;"></li>


<li class="col-md-2"><img src="/frontend/images/partner/20160802181629135238partner2.jpg" alt="" style="width: 200px; height: 150px;"></li>


<li class="col-md-2"><img src="/frontend/images/partner/20160802181629525390partner3.jpg" alt="" style="width: 200px; height: 150px;"></li>


<li class="col-md-2"><img src="/frontend/images/partner/20160802181629824163partner5.jpg" alt="" style="width: 200px; height: 150px;"></li>


<li class="col-md-2"><img src="/frontend/images/partner/20160806001308447497photodunelogo.jpg" alt="" style="width: 200px; height: 150px;"></li>


<li class="col-md-2"><img src="/frontend/images/partner/20160806001206471642codecanyon.jpg" alt="" style="width: 200px; height: 150px;"></li>

 
</ul>
</div>
</div>
</div>
</div>
</section>
<!--// Page Section //-->








    </div>




@endsection