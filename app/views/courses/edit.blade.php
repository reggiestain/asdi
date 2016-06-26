@extends('layouts.admin')

@section('content')
	<div class="row" >
		<div class="col-md-12" >
			<a href="/admin/courses" class="btn btn-default btn-small pull left"><i class="fa fa-arrow-left"></i> Back to Courses</a>
			<h2 class="text-right" ><i class="fa fa-edit" ></i > Edit Course</h2 >
			<hr/>
			{{ Form::open(['url'=>'admin/courses/edit/'.$course->id,'class'=>'form-horizontal', 'role'=>'form']) }}
			<div class="form-group {{ ($errors->has('category_id')) ? 'has-error' : '' }}" >
				<label class="col-md-2 control-label" for="category_id" >Category:</label >
				<div class="col-md-8" >
					{{ Form::select('category_id',$categories,$course->category_id,['class'=>'form-control input-sm']) }}
					<span class="help-block">{{ ($errors->has('name') ? $errors->first('name') : '') }}</span>
				</div >
			</div >
			<div class="form-group {{ ($errors->has('code')) ? 'has-error' : '' }}" >
				<label class="col-md-2 control-label" for="code" >Code:</label >
				<div class="col-md-3" >
					{{ Form::text('code',$course->code,['class'=>'form-control input-sm']) }}
					<span class="help-block" >{{ ($errors->has('code') ? $errors->first('code') : '') }}</span >
				</div >
			</div >
			<div class="form-group {{ ($errors->has('name')) ? 'has-error' : '' }}" >
				<label class="col-md-2 control-label" for="name" >Name:</label >
				<div class="col-md-8" >
					{{ Form::text('name',$course->name,['class'=>'form-control input-sm']) }}
					<span class="help-block" >{{ ($errors->has('name') ? $errors->first('name') : '') }}</span >
				</div >
			</div >
			<div class="form-group {{ $errors->has('cost') ? 'has-error' : '' }}" >
				<label class="col-md-2 control-label" for="cost" >Cost:</label >
				<div class="col-md-3" >
					{{ Form::text('cost',$course->cost,['class'=>'form-control input-sm']) }}
					<span class="help-block" >{{ ($errors->has('cost') ?  $errors->first('cost') : '') }}</span >
				</div >
			</div >
			<div class="form-group" >
				<label class="col-md-2 control-label" for="cost" >Description:</label >
				<div class="col-md-8" >
					{{ Form::textarea('description', $course->description, ['rows'=>25, 'class'=>'form-control input-sm','id'=>'ck-field']) }}
				</div >
			</div >
			<div class="form-group" >
				<label class="col-md-2 control-label" for="active" >Active:</label >
				<div class="col-md-8" >
					{{ Form::checkbox('active',1, $course->active) }}
				</div >
			</div >
			<div class="form-group" >
				<div class="col-md-offset-2 col-md-8" >
					<input class="btn-primary btn" type="submit" value="Submit" >
					<a href="/admin/courses" class="btn btn-default pull-right">Cancel</a>
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
 