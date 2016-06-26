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
				<h2><span class="title_box"></span> Large international audiences</h2>
				<br>
				<p>
					Massive Open Online Courses (MOOC) have become increasingly popular over the last couple of years. MOOCs provide the opportunity for individuals from anywhere in the world to enhance their knowledge and skills by enrolling in free online courses offered by some of the world’s leading universities. These courses are designed to accommodate worldwide audiences, cultures and learning styles.
					<br><br>
					One of the leading MOOC provider platforms is edX, founded by Harvard University and Massachusetts Institute of Technology (MIT). We were approached to design, develop and deliver an “Introduction to Project Management” course for edX’s partner institution AdelaideX. The course is designed to run over a 6-week period and has attracted more than 60,000 enrolments from more than 200 countries.
					<br><br>
					AdelaideX represents The University of Adelaide, one of the Group of Eight (Go8) universities in Australia. Following the success of the first edX MOOC, ASDI has subsequently been contracted to develop further MOOC courses for AdelaideX.
					<br><br>
					Our depth and breadth of learning design experience recognises the importance of understanding core requirements and needs of our stakeholders so that our expertise can be utilised in any learning environment.
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