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
				<h2><span class="title_box"></span> Introduction to Project Management</h2>
				<br>
				<p>
					Project management not only encompasses large complex projects but includes small and medium sized projects that are equally important and significant within individual industries.
					<br><br>
					Our introductory course gives a good grounding of the basics of project management follow a typical project lifecycle approach, from the initiation phase of the project to its closing.
					<br><br>
					Having in-depth experience and specialised knowledge of the processes of the project management life cycle brings allows us to bring real-world problems and case studies into the professional development sessions of our clients.
					<br><br>
					The learning is contextualised to suit the client and industry needs whereby a personal approach to understanding the complexities of the learning demands are considered rather than applying a ‘one-size fits all’ method. The introductory course can be tailor made to incorporate a broader overview of governance issues, processes, and the 10 key knowledge areas.
				</p>
				<div class="m-t-15">
					<a href="javascript:history.go(-1);" class="btn btn-default">Back</a>
				</div>
			</div >
		</div>
		<div class="row">
			<div class="col-sm-12">
				@include('partials.dev-prof-logos')
			</div>
		</div>
		
		
		
	</div>
	
	
@stop