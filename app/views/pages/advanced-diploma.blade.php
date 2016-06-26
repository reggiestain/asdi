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
				<h2><span class="title_box"></span> Advanced Diploma</h2>
				
				<div class="row">
				  	<div class="col-sm-6">
				  		<div class="white-bg red-top-bottom p-tb-30 text-left">
			        		<h4>Business</h4>
			        		<!-- <p>
			        			This qualification reflects the role of individuals with significant expertise in either specialised or broad areas of skills and knowledge who are seeking to further develop expertise across a range of business functions. The qualification is suited to the needs of individuals...
			        		</p> -->
			        		<a href="/content/national-qualifications/advanced-diploma-of-business">read more</a>
				        </div>
				        <!-- <li><a href="/content/national-qualifications/advanced-diploma-of-business">Business</a></li>
								<li><a href="/content/national-qualifications/Advanced-diploma-of-leadership-and-management">Leadership and Management</a></li> -->
				  	</div>
				  	<div class="col-sm-6">
				  		<div class="white-bg red-top-bottom p-tb-30 text-left">
			        		<h4>Leadership and Management</h4>
			        		<!-- <p>
			        			This qualification considers the role of individuals who apply specialised knowledge and skills, together with experience in leadership and management, across a range of enterprise and industry contexts. Individuals at this level use initiative and judgement to plan...
			        		</p> -->
			        		<a href="/content/national-qualifications/Advanced-diploma-of-leadership-and-management">read more</a>
			        		
				        </div>
				  	</div>
			  </div>
				<div class="m-t-15">
					<a href="javascript:history.go(-1);" class="btn btn-default">Back to courses</a>
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