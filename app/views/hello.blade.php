@extends('layouts.master')

@section('header')
	{{-- @include('partials.revolutionslider') --}}
<div class="thin-red-line" ></div >
	<div class="cycle-slideshow hidden-xs" 
	    data-cycle-fx="scrollHorz" 
	    data-cycle-timeout="6000"
	    >
	    <!-- data-cycle-slides="> div.slide" -->
	    <img src="/img/slides/antonjordan.jpg" class="full-max-width">
	    <img src="/img/slides/planning.jpg" class="full-max-width">	
	    <!-- <img src="/img/slides/execution.jpg" class="full-max-width"> -->
	    <img src="/img/slides/map-success.jpg" class="full-max-width">
	    <img src="/img/slides/stella.jpg" class="full-max-width">	        
	    <!-- <img src="/img/slides/time-for-route.jpg" class="full-max-width"> -->
	    <img src="/img/slides/directions.jpg" class="full-max-width">
	    <img src="/img/slides/slide_map4.jpg" class="full-max-width">
	    <!-- <img src="/img/slides/blue-map1.jpg" class="full-max-width"> -->
	    <img src="/img/slides/blue-map2.jpg" class="full-max-width">
	    <img src="/img/slides/blue-map3.jpg" class="full-max-width">
	    
	    <div class="cycle-pager"></div>
	</div>
<div class="thin-red-line" ></div>
@stop

@section('content')
<div class="m-tb-20">
	<div class="row">
		<div class="col-xs-12">
			<h1 class="home-title text-center">explore your options</h1>
			<p>
				The Australian Skills Development Institute (ASDI) is an innovative and responsive organisation offering niche market educational consulting, vocational training, and value-added business support services to a range of public and private sector clients in Australia and internationally. <a href="/content/contact" style="color: #000;">Contact us</a> today to see how we can assist you.
			</p>
			{{-- var_dump($categories) --}}
		</div>
	</div>
</div>
<div class="m-tb-30">
	<!-- <div class="row m-b-30 home-page" id="">
	@foreach($categories as $course)
        <div class="col-sm-4">
	        <div class="white-bg red-top-bottom p-tb-30">
		        <div class="home_blocks" data-mh="block_h">
		        	<h4 class="text-left p-l-30">{{ $course->name }}</h4>
		        	<div class="block_item text-center">
		        		<img src="{{ asset('img/tiles/tile1.jpg') }}" />		        		
		        		<div class="small text-center">ˈlɜːnıŋ dıˈzaın</div>
		        	</div>
		        	<div class="block_item" data-mh="block_h">
		        		<p>
		        			The act of skillfully planning and developing learning by achieving optimum impact.
		        		</p>
		        		<div class="text-left"><a href="/content/learning-design">read more</a></div>
		        	</div>
		        </div>
	        </div>        
        </div>
       @endforeach
	</div>
	<hr>
	<hr> -->
	<div class="row m-b-30 home-page" id="">
        <div class="col-sm-4">
	        <div class="white-bg red-top-bottom p-tb-30">
		        <div class="home_blocks" data-mh="block_h">
		        	<div class="block_item text-center">
		        		<img src="{{ asset('img/tiles/tile1.jpg') }}" />
		        	</div>
		        	<div class="block_item" data-mh="block_h">
		        		<h4 class="text-left m-b-0">Learning <br>Design</h4>
		        		<div class="small text-left m-b-10">[lur-ning dih-zayin]</div>
		        		<p>
		        			The act of skillfully planning and developing learning by achieving optimum impact
		        		</p>
		        		<div class="text-left"><a href="/content/learning-design">read more</a></div>
		        	</div>
		        </div>
	        </div>        
        </div>
		<div class="col-sm-4">
			<div class="white-bg red-top-bottom p-tb-30">
				<div class="home_blocks" data-mh="block_h">
					
		        	<div class="block_item">
		        		<img src="{{ asset('img/tiles/tile2.jpg') }}" />
		        		
		        	</div>
		        	<div class="block_item" data-mh="block_h">
		        		<h4 class="text-left m-b-0">National Qualifications</h4>
		        		<div class="small text-left m-b-10">[nash-uh-nl kwol-uh-fi-key-shuh n]</div>
		        		<p>
		        			An achievement awarded on successfully completing a nationally recognised course of learning
		        		</p>
		        		<div class="text-left"><a href="/content/national-qualifications">read more</a></div>
		        	</div>
		        </div>
			        </div>
		        </div>
		<div class="col-sm-4">
			<div class="white-bg red-top-bottom p-tb-30">
				<div class="home_blocks" data-mh="block_h">
					
		        	<div class="block_item">
		        		<img src="{{ asset('img/tiles/tile3.jpg') }}" />
		        	</div>
		        	<div class="block_item" data-mh="block_h">
		        		<h4 class="text-left m-b-0">Developing Professionals</h4>
		        		<div class="small text-left m-b-10">[dih-vel-uh-ping    pruh-fesh-uh-nlz]</div>
		        		<p>
		        			Growing, developing, and expanding individuals in their field of work to enable them to reach their optimum potential
		        		</p>
		        		<div class="text-left"><a href="/content/developing-professionals">read more</a></div>
		        	</div>
		        </div>
			        </div>
		        </div>
	</div>
	
	<div class="row m-t-30 home-page">
		<div class="col-sm-4 col-md-4">
			<div class="white-bg red-top-bottom p-tb-30">
				<div class="home_blocks" data-mh="block_h">
					
		        	<div class="block_item">
		        		<img src="{{ asset('img/tiles/tile4.jpg') }}" />
		        		
		        	</div>
		        	<div class="block_item" data-mh="block_h">
		        		<h4 class="text-left m-b-0">Organisational Capabilities</h4>
		        		<div class="small text-left m-b-10">[awr-guh-nuh-zey-shuh nl    key-puh-bil-i-teez]</div>
		        		<p>
		        			Developing knowledge, skills, and abilities within organisations to reach maximum potential and output
		        		</p>
		        		<div class="text-left"><a href="/content/organisational-capability">read more</a></div>
		        	</div>
		        </div>
	        </div>     
        </div>
		<div class="col-md-4 col-sm-4">
			<div class="white-bg red-top-bottom p-tb-30">
				<div class="home_blocks" data-mh="block_h">
					
		        	<div class="block_item">
		        		<img src="{{ asset('img/tiles/tile5.jpg') }}" />
		        		
		        	</div>
		        	<div class="block_item" data-mh="block_h">
		        		<h4 class="text-left m-b-0">Collaborations &amp; Partnerships</h4>
		        		<div class="small text-left m-b-10">[kuh-lab-uh-rey-shuh nz  &amp; parht-ner-ships]</div>
		        		<p>
		        			Creating beneficial relationships by working together with others to achieving objectives
		        		</p>
		        		<div class="text-left"><a href="/content/collaborations-partnerships">read more</a></div>
		        	</div>
		        </div>
	        </div>
        </div>
		<div class="col-md-4 col-sm-4">
			<div class="white-bg red-top-bottom p-tb-30">
				<div class="home_blocks" data-mh="block_h">
					
		        	<div class="block_item">
		        		<img src="{{ asset('img/tiles/tile6.jpg') }}" />
		        		
		        	</div>
		        	<div class="block_item" data-mh="block_h">
		        		<h4 class="text-left m-b-0">Consultancy &amp; Services Support</h4>
		        		<div class="small text-left m-b-10">[kuh n-suhl-tn-see  &amp; sur-vis   suh-pawrt]</div>
		        		<p>
		        			Providing specialised guidance, advice, and support activities to organisations
		        		</p>
		        		<div class="text-left"><a href="/content/consultancy-service-support">read more</a></div>
		        	</div>
		        </div>
	        </div>
		</div>
	</div>
</div>
@stop

@section('scripts')
	<script src="{{ asset('cycle2/jquery.cycle2.min.js') }}" ></script>
	<script src="{{ asset('jquery.cycle2.swipe.min.js') }}" ></script>
	<script>
	jQuery(document).ready(function ($) {

	/* ---------------------------------------------------------------------- */
	/*    Revolution Slider
	/* ---------------------------------------------------------------------- */

		(function () {

			if ($('.fullwidthbanner').length) {

				$('.fullwidthbanner').revolution({
					delay: 5000,
					startwidth: 890,
					startheight: 490,

					onHoverStop: "on",                        // Stop Banner Timet at Hover on Slide on/off

					thumbWidth: 100,                            // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
					thumbHeight: 50,
					thumbAmount: 4,

					hideThumbs: 200,
					navigationType: "none",                    //bullet, thumb, none, both     (No Shadow in Fullwidth Version !)
					navigationArrows: "verticalcentered",        //nexttobullets, verticalcentered, none
					navigationStyle: "square",                //round,square,navbar

					touchenabled: "off",                        // Enable Swipe Function : on/off

					navOffsetHorizontal: 0,
					navOffsetVertical: 20,

					fullWidth: "on",

					shadow: 0                                //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

				});

			}


		})();

		/* end Revolution Slider */

	});
	</script>
@stop