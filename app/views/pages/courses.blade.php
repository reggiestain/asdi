@extends('layouts.master')

@section('header')
	<div class="thin-red-line" ></div>
		<img src="{{ asset('img/pages/banner2.jpg') }}" class="img-responsive"/>
	<div class="thin-red-line" ></div>
@stop

@section('content')
	<div class="white-page-bg m-b-30 p-b-20" >
		<div class="row">
			<div class="col-sm-12">
				<h2><span class="title_box"></span> Our Courses</h2>
				
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">			  
					<div class="panel panel-default">
						<div class="panel-heading national" role="tab" id="headingOne">
						  <h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#national-qualifications" aria-expanded="true" aria-controls="national-qualifications">
							  National Qualifications
							</a>
						  </h4>
						</div>
						<div id="national-qualifications" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
						  <div class="panel-body">
							<div class="row">
							    @foreach($course_categories as $course) 
								  	<div class="col-sm-4">
								  		<div class="white-bg red-top-bottom p-tb-30 text-left">
								    		<h4>{{ $course->name }}</h4>
								    		<a href="/courses/{{ $course->id }}/{{ strtolower( str_replace(' ', '-', $course->name) ) }}">read more</a>
								        </div>
								  	</div>
								@endforeach     
							</div>						  
						  </div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading professional" role="tab" id="headingOne">
						  <h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#professional-qualifications" aria-expanded="true" aria-controls="professional-qualifications">
							  Professional Development Courses
							</a>
						  </h4>
						</div>
						<div id="professional-qualifications" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
						  <div class="panel-body">
							  @include('partials.developing-professional')							  
						  </div>
						</div>
					</div>
				</div>

				@include('partials.contact-line')
			</div >
		</div>
	<div class="clearfix"></div>
	</div>
	
@stop