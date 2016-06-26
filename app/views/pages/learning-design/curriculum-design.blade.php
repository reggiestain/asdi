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
				<h2><span class="title_box"></span> Curriculum design</h2>
				<br>
				<p>
					ASDI has extensive curriculum design experience, and has designed and developed various online and blended learning courses for clients that include local, state and federal government agencies and departments, multi-national organisations and other tertiary educational institutions.
					<br><br>
					We customise our course design to suit a range of applications from multi-day workshops and in-house capability development courses for clients, to designing formal credit bearing courses for universities and colleges. These include courses covering the domains of project management, governance, entrepreneurship, business model development and redesign, leadership, strategy, critical and creative thinking, introduction to finance and accounting, and teacher development programs.
					<br><br>
					Our online learning platform capability provides client organisations with the ability to host their courses on our learning management system without having to incur the cost to establish and maintain their own e-learning infrastructure. This flexibility is particularly attractive to medium size organisations and associations seeking to implement a business improvement strategy by way of focused workshops or courses with a view to achieving improved organisational capability in a targeted functional area.
					<br><br>
					As an Australian Government registered tertiary educational institution, we are accredited to deliver nationally recognised certificate, diploma, and advanced diploma qualifications. These qualifications and courses include project management, entrepreneurship, business, leadership and management, marketing, and teacher development. Our national provider registration code is 40219.
					<br><br>
					Diversity of learner needs are paramount in all course design activity. We design innovative and flexible learning experiences contextualised to meet the identified needs of the target audience and provide pastoral and ongoing support to learners using online learning capability. To this end we have designed a national course for the Australian Department of Education, and project development partners including Autism South Australia and Brain Injuries Australia.
				</p>
				<div class="m-tb-15">
					<a href="javascript:history.go(-1);" class="btn btn-default">Back</a>
				</div>

				@include('partials.contact-line')
			</div >
		</div>
		
		<div class="row">
			<div class="col-sm-12">
				@include('partials.dev-prof-logos')
			</div>
		</div>
		
		
		
	</div>
	
	
@stop