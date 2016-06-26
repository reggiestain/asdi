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
				<h2><span class="title_box"></span> Business English - language and literacy</h2>
				<br>
				<p>
					In learning design and as part of the standards for national qualifications in Australia, Literacy and Language are prioritised as skills that need to be developed through accredited and non-accredited courses. We have designed and developed short Business English courses to support the learning of these skills in the context of other customised courses and nationally accredited courses that we offer.
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