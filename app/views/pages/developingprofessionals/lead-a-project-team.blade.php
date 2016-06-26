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
				<h2><span class="title_box"></span> I need to lead a project team – what do I need to know?</h2>
				<br>
				<p>
					Leading project teams is often a position that individuals find themselves in without necessarily having project management expertise or training.
					<br><br>
					In this workshop we provide a contextual overview of the nature of projects, how they differ from “business as usual” and the requirements that need to be set up in the organisation to ensure you have the ability and authority to access the necessary resources to deliver on project deliverables and objectives.
					<br><br>
					A good grounding of the basics of project management is provided, following a typical project lifecycle approach, from the initiation phase of the project to its closing. Additional time is spent in key areas such as planning, risk, stakeholder identification and management, communication and leadership of teams.
					<br><br>
					Case studies and real-world problem analysis and discussions provide the necessary context to the learning.
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