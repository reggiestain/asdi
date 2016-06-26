@extends('layouts.master')

@section('header')
	<div class="thin-red-line" ></div>
		<img src="{{ asset('img/pages/banner1.jpg') }}" class="img-responsive"/>
	<div class="thin-red-line" ></div>
@stop

@section('content')
	<div class="white-page-bg m-b-30 p-b-20">
	<div class="row">
		<div class="col-xs-12">
			<h2><span class="title_box"></span> Contact Us</h2>
			
		</div>
		<div class="clearfix"></div>
		<div class="col-md-6">
			<p>Please complete the form fields below and submit to us with any of your comments, suggestions or questions and we will get back to you shortly.</p>
		</div>
		<div class="clearfix"></div>
		<div class="col-sm-6">
			<!-- <h3 class="m-t-0">Online Contact Form</h3> -->
			
			
			{{ Form::open(['url'=>'/contact', 'class'=>'form']) }}
				
				<div class="form-group {{ ($errors->has('first_name')) ? 'has-error' : '' }}">
					{{-- Form::label('first_name', 'First Name:',['class'=>'control-label']) --}}
					<div class="" >
						{{ Form::text('first_name', Input::old('first_name'), ['class'=>'form-control', 'placeholder'=>'First Name:']) }}
						<span class="help-block">{{ ($errors->has('first_name') ? $errors->first('first_name') : '') }}</span>
					</div >
				</div>
				<div class="form-group {{ ($errors->has('last_name')) ? 'has-error' : '' }}">
					{{-- Form::label('last_name', 'Last Name:',['class'=>'control-label']) --}}
					<div class="" >
						{{ Form::text('last_name', Input::old('last_name'), ['class'=>'form-control', 'placeholder'=>'Last Name:']) }}
						<span class="help-block" >{{ ($errors->has('last_name') ? $errors->first('last_name') : '') }}</span >
					</div >
				</div>
				<div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
					{{-- Form::label('email', 'Email:',['class'=>'control-label col-sm-4']) --}}
					<div class="" >
						{{ Form::text('email', Input::old('email'), ['class'=>'form-control', 'placeholder'=>'Email:']) }}
						<span class="help-block" >{{ ($errors->has('email') ? $errors->first('email') : '') }}</span >
					</div >
				</div>
				<div class="form-group {{ ($errors->has('mobile')) ? 'has-error' : '' }}">
					{{-- Form::label('mobile', 'Mobile:',['class'=>'control-label col-sm-4']) --}}
					<div class="" >
						{{ Form::text('mobile', Input::old('mobile'), ['class'=>'form-control', 'placeholder'=>'Mobile:']) }}
						<span class="help-block" >{{ ($errors->has('mobile') ? $errors->first('mobile') : '') }}</span >
					</div >
				</div>
				<div class="form-group">
					{{-- Form::label('comments', 'Comments:',['class'=>'control-label col-sm-4']) --}}
					<div class="" >
						{{ Form::textarea('comments', Input::old('comments'), ['class'=>'form-control', 'rows'=>5, 'placeholder'=>'Comments:']) }}
					</div >
				</div>
			
			<div class="">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div >
			
			{{ Form::close() }}
		</div>
		<div class="col-sm-6">
			<p><strong>Email:</strong>	enquiries@asdi.edu.au</p>
 	 
			<p><strong>Telephone:</strong>	<br>
			Brisbane:	+61 7 3374 2339 <br>
			Sydney:	+61 2 8860 9532 <br>
			<!-- Adelaide	+61 8 8313 7073 <br> -->
			Johannesburg: +27 11 888 6099</p>
			 	 
			<p><strong>National courier delivery:</strong>	<br>First Floor <br>
			7/21 Station Road <br>
			Indooroopilly <br>
			QLD, 4068 <br>
			Australia</p>
		</div>
	</div>
	<div class="row" >
		<div class="col-sm-12" >
			
			
			
		
	
		</div>
	</div>
	</div>
@stop