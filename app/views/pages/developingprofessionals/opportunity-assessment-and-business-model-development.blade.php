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
				<h2><span class="title_box"></span> Opportunity assessment and business model development</h2>
				<br>
				<p>
					This course provides an in-depth understanding of the assessment of a new venture opportunity.
					<br><br>
					Entrepreneurs and product managers are tasked with finding market problems that people are willing to pay to remedy. The next step is to guide the development of a profitable solution to those problems.
					<br><br>
					Key areas that are covered in this is course are critically analysing the problem that needs to solved, the market in which it is situated, the competitors, developing a business strategy and defining the critical success criteria for the opportunity.
					<br><br>
					Through the development of the value proposition of your product, you will learn to build and apply your business model. Case studies and real world problems provide the context for learning whilst practical application integrates learning.
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