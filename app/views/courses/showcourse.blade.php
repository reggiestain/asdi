@extends('layouts.master')
@section('header')
	<div class="thin-red-line" ></div>
		<img src="{{ asset('img/pages/banner4.jpg') }}" class="img-responsive"/>
	<div class="thin-red-line" ></div>
@stop
@section('content')
	<div class="row" >
		<div class="col-md-12" >
			<h2><span class="title_box"></span> {{ $course->name }}</h2>
			<p><strong>{{ $course->code }}</strong></p>
			<div class="m-tb-15">{{ $course->description }}</div>
			<hr>
			<a href="/admin/courses" class="btn btn-default btn-small pull left"><i class="fa fa-arrow-left"></i> Back to Courses</a>
		</div>
	</div>
	
@stop
 