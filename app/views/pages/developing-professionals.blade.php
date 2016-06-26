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
				<h2><span class="title_box"></span> Developing Professionals</h2>
				
				<p>Continuing professional development is essential to maintain currency of skills given the accelerated rate of change and constantly evolving skills across industries. </p>

<p>Professional development encompasses all types of facilitated learning and development opportunities, including coaching and mentoring to enhance an individual’s skills and knowledge. This personal development need is primarily driven by individuals who understand that lifelong learning is required in order to remain competitive and productive in the marketplace.</p>

<p>The current demands of learning and development take place in a digitally connected world where people are generally functioning in time-poor environments. As a result, professional development is best consumed in shorter, more focused, and hands-on learning interventions and applications.</p> 

<p>Being aware of changes in prevailing technological trends in innovative learning design and the aggregation of core skills are key considerations when we design and deliver in-house workshop courses for our clients. Additionally, our learning interventions and workshop sessions are designed to support participants’ critical and creative thinking processes by engaging participants through challenging their current thinking and existing paradigms and maintaining interest through high-levels of interactive and participative learning.  The objective is to make learning relevant through applying own in-industry contextual experiences and real-world problems. </p>

<p>Delivery methodologies for professional development courses are face-to-face, online, and/or blended methodologies consisting of combinations of online learning and intensive mode workshop sessions which can be either pre- or post- classroom intensive sessions.</p>

<p>Our Professional development courses being offered are:</p>
				
				
			</div >
		</div>
		@include('partials.developing-professional')
		<div class="row">
			<div class="col-sm-12">
				@include('partials.contact-line')

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
				<a href="/content/national-qualifications">
				<img src="{{ asset('img/tiles/links_04.png') }}" />
				<span class="overlay">
					read more
				</span>
					</a>
			</div>
			<div class="links pull-left">

				<img src="{{ asset('img/tiles/active_05.png') }}" />
				
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
		</div>
		
		
		
	</div>
	
	
@stop