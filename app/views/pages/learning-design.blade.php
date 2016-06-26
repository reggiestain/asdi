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
				<h2><span class="title_box"></span> Learning Design</h2>
				
				<p>Learning design involves the practice of ensuring a clear understanding of client's needs, and converting this brief into a quality learning intervention through the planning, sequencing, application and managing of learning activities. It is our belief that learning should be an enjoyable, engaging and interactive experience. </p>
	
	<p>We give careful and thoughtful consideration to the design aspects of our clients’ courses and our qualifications including the application of resources, activities, assessments, feedback, course content and the use of technologies so that teaching and learning is both effective and efficient. We understand that our clients require learning design services that are effective and contribute to the enhancement of skills and capabilities.</p>
				
				
			</div >
		</div>
		<div class="row">
		  	<div class="col-sm-6">
		  		<div class="white-bg red-top-bottom p-tb-30 text-left">
	        		<h4>Curriculum design</h4>
	        		<!-- <p>
	        			ASDI has extensive curriculum design experience, and has designed and developed various online and blended learning courses for clients that include local, state and federal government agencies and departments, multi-national organisations and other tertiary educational institutions...
	        		</p> -->
	        		<a href="/content/learning-design/curriculum-design" class="block text-right">read more</a>
	        		
		        </div>
		  	</div>
		  	<div class="col-sm-6">
		  		<div class="white-bg red-top-bottom p-tb-30 text-left">
	        		<h4>Large international audiences</h4>
	        		<!-- <p>
	        			Massive Open Online Courses (MOOC) have become increasingly popular over the last couple of years. MOOCs provide the opportunity for individuals from anywhere in the world to enhance their knowledge and skills by enrolling in free online courses offered by some of the world’s leading universities...
	        		</p> -->
	        		<a href="/content/learning-design/large-international-audiences" class="block text-right">read more</a>
	        		
		        </div>
		  	</div>
			<div class="clearfix"></div>
		  	<div class="col-sm-6">
		  		<div class="white-bg red-top-bottom p-tb-30 text-left">
	        		<h4>Small Private Online Courses (SPOCs)</h4>
	        		<!-- <p>
	        			A SPOC is a small private online course and is located within an individual learning organisation or a corporate client intranet. We design and develop SPOCs for specific learning purposes to meet the individual needs of clients, or a group of stakeholders within a specific association...
	        		</p> -->
	        		<a href="/content/learning-design/small-private-online-courses" class="block text-right">read more</a>
	        		
		        </div>
		  	</div>
		  	<div class="col-sm-6">
		  		<div class="white-bg red-top-bottom p-tb-30 text-left">
	        		<h4>Business English - language and literacy</h4>
	        		<!-- <p>
	        			In learning design and as part of the standards for national qualifications in Australia, Literacy and Language are prioritised as skills that need to be developed through accredited and non-accredited courses. We have designed and developed short Business English courses to support...
	        		</p> -->
	        		<a href="/content/learning-design/business-english-language-and-literacy" class="block text-right">read more</a>
	        		
		        </div>
		  	</div>
		</div>
		

		<div class="m-t-30 dev_logos">
			@include('partials.contact-line')
			<div class="links pull-left"><img src="{{ asset('img/tiles/active_03.png') }}" /></div>
			
			<div class="links pull-left">
				<a href="/content/national-qualifications">
				<img src="{{ asset('img/tiles/links_04.png') }}" />
				<span class="overlay">
					read more
				</span>
					</a>
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