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
				<h2><span class="title_box"></span> Small Private Online Courses (SPOCs)</h2>
				<br>
				<p>
					A SPOC is a small private online course and is located within an individual learning organisation or a corporate client intranet. We design and develop SPOCs for specific learning purposes to meet the individual needs of clients, or a group of stakeholders within a specific association. ASDI works with clients to build SPOCs to leverage learning as part of developing organisational capability.
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