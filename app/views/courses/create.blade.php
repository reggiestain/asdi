@extends('layouts.admin')

@section('content')
	<div class="row" >
		<div class="col-md-12" >
			<a href="/admin/courses" class="btn btn-default btn-small pull left"><i class="fa fa-arrow-left"></i> Back to Courses</a>
			<h2 class="text-right" ><i class="fa fa-edit" ></i > Add New Course</h2 >
			<hr/>
			{{ Form::open(['url'=>'admin/courses/create','class'=>'form-horizontal', 'role'=>'form']) }}
			<div class="form-group {{ ($errors->has('category_id')) ? 'has-error' : '' }}" >
				<label class="col-md-2 control-label" for="category_id" >Category:</label >
				<div class="col-md-8" >
					{{ Form::select('category_id',$categories,Input::old('category_id'),['class'=>'form-control input-sm']) }}
					<span class="help-block" >{{ ($errors->has('name') ? $errors->first('name') : '') }}</span >
				</div >
			</div >
			<div class="form-group {{ ($errors->has('code')) ? 'has-error' : '' }}" >
				<label class="col-md-2 control-label" for="code" >Code:</label >
				<div class="col-md-3" >
					{{ Form::text('code',Input::old('code'),['class'=>'form-control input-sm']) }}
					<span class="help-block" >{{ ($errors->has('code') ? $errors->first('code') : '') }}</span >
				</div >
			</div >
			<div class="form-group {{ ($errors->has('name')) ? 'has-error' : '' }}" >
				<label class="col-md-2 control-label" for="name" >Name:</label >
				<div class="col-md-8" >
					{{ Form::text('name',Input::old('name'),['class'=>'form-control input-sm']) }}
					<span class="help-block" >{{ ($errors->has('name') ? $errors->first('name') : '') }}</span >
				</div >
			</div >
			<div class="form-group {{ $errors->has('cost') ? 'has-error' : '' }}" >
				<label class="col-md-2 control-label" for="cost" >Cost:</label >
				<div class="col-md-4" >
					{{ Form::text('cost',Input::old('cost'),['class'=>'form-control input-sm']) }}
					<span class="help-block" >{{ ($errors->has('cost') ?  $errors->first('cost') : '') }}</span >
				</div >
			</div >
			<div class="form-group" >
				<label class="col-md-2 control-label" for="cost" >Description:</label >
				<div class="col-md-8" >
					{{ Form::textarea('description', Input::old('description'), ['rows'=>25, 'class'=>'form-control input-sm','id'=>'ck-field']) }}
				</div >
			</div >
			<div class="form-group" >
				<label class="col-md-2 control-label" for="active" >Active:</label >
				<div class="col-md-8" >
					{{ Form::checkbox('active',1, Input::old('active')) }}
				</div >
			</div >
			<div class="form-group" >
				<div class="col-md-offset-2 col-md-4" >
					<input class="btn-primary btn" type="submit" value="Create" >
					<input class="btn-inverse btn" type="reset" value="Reset" >
				</div >
			</div >
			{{ Form::close() }}
		</div>
	</div>
	
@stop
 
@section('scripts')
	<script type="text/javascript" src="{{ asset('libs/ckeditor/ckeditor.js') }}" ></script>
	<script>
		$(document).ready(function(){
			CKEDITOR.replace( 'ck-field', {
				height: 400
			} );
		});
	</script>
@stop