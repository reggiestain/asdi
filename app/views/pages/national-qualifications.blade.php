@extends('layouts.master')

@section('header')
	<div class="thin-red-line" ></div>
		<img src="{{ asset('img/pages/banner4.jpg') }}" class="img-responsive"/>
	<div class="thin-red-line" ></div>
@stop

@section('content')
	<div class="white-page-bg m-b-30 p-b-20" >
		<div class="row">
			<div class="col-sm-12">
				<h2><span class="title_box"></span> National Qualifications</h2>
				
				<p>ASDI has a range of national qualifications that we deliver in a face-to-face, online or blended learning sessions. Our qualifications can also be completed through distance learning. To discover more about the content of each of our qualifications, click on the links in the graphic below.</p>
				<div class="row">
					@foreach($course_categories as $course) 
					  	<div class="col-sm-4">
					  		<div class="white-bg red-top-bottom p-tb-30 text-left">
					    		<h4>{{ $course->name }}</h4>
					    		<a href="/courses/{{ $course->id }}/{{ strtolower( str_replace(' ', '-', $course->name) ) }}" class="block text-right">read more</a>
					        </div>
					  	</div>
					@endforeach
			  	</div>
				
				@include('partials.contact-line')
			</div>
		</div>
		
		<div class="m-t-30 dev_logos">
			<div class="links pull-left">
				<a href="/content/learning-design">
				<img src="{{ asset('img/tiles/links_03.png') }}" />
				<span class="overlay">
					read more
				</span>
				</a>
			</div>
			<div class="links pull-left">
	
				<img src="{{ asset('img/tiles/active_04.png') }}" />
			
			</div>
			<div class="links pull-left">
				<a href="/content/developing-professionals">
				<img src="{{ asset('img/tiles/links_05.png') }}" />
				<span class="overlay">
					read more
				</span>
					</a>
			</div>
			<div class="links pull-left">
				<a href="/content/organisational-capability">
				<img src="{{ asset('img/tiles/links_06.png') }}" />
				<span class="overlay">
					read more
				</span>
				</a>
			</div>
			<div class="links pull-left">
				<a href="/content/collaboration-partnerships">
				<img src="{{ asset('img/tiles/links_07.png') }}" />
				<span class="overlay">
					read more
				</span>
				</a>
			</div>
			<div class="links pull-left">
				<a href="/content/consulting-support-services">
				<img src="{{ asset('img/tiles/links_08.png') }}" />
				<span class="overlay">
					read more
				</span>
					</a>
			</div>
		</div>
		<div class="clearfix"></div>
		
		
		
	</div>
	
	
@stop