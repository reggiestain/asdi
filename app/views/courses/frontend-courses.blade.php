@extends('layouts.master')
@section('header')
	<div class="thin-red-line" ></div>
		<img src="{{ asset('img/pages/banner4.jpg') }}" class="img-responsive"/>
	<div class="thin-red-line" ></div>
@stop

@section('content')
	<div class="row" >
		<!-- <pre>{{ var_dump($courses) }}</pre> -->
		<h2><span class="title_box"></span> {{ $courses->name }}</h2>
		@foreach($courses->courses as $course)
		  	<div class="col-sm-6">
		  		<div class="white-bg red-top-bottom p-tb-30 text-left">
		    		<h4>{{ $course->name }} ({{ $course->code }}) </h4>
		    		<a href="/course/{{ $course->id }}/{{ strtolower( str_replace(' ', '-', $course->name) ) }}" class="block text-right">read more</a>
		        </div>
		  	</div>
		@endforeach
	</div>
	
@stop
 