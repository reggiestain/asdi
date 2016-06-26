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
				<h2><span class="title_box"></span> Teacher professional development</h2>
				<br>
				<p>
					Teaching is an ever-evolving career that requires continuous up-skilling to keep up with the changing trends and ‘buzz words’ associated with excellent teaching and learning. There are a number of key areas we deliver training in and our focus is on the diverse areas of teaching and learning expanding the skills of the teacher and enriching the learning experienced by the student.
					<br><br>
					Our professional development workshops include key areas of understanding and teaching to various learning styles, creative teaching and learning, developing teaching and learning skills in creativity and criticality and school improvement through leading by middle managers.
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