@extends('layouts.admin')

@section('content')
	<div class="row" >
		<div class="col-md-12" >
			<a href="/admin/categories" class="btn btn-default btn-small pull left"><i class="fa fa-arrow-left"></i> Back to Categories</a>
			<h2 class="text-right" ><i class="fa fa-edit" ></i > Edit Course</h2 >
			<hr/>
			{{ Form::open(['url'=>'admin/categories/edit/'.$category->id,'class'=>'form-horizontal', 'role'=>'form']) }}
			
			<div class="form-group {{ ($errors->has('name')) ? 'has-error' : '' }}" >
				<label class="col-md-2 control-label" for="name" >Name:</label >
				<div class="col-md-3" >
					{{ Form::text('name',$category->name,['class'=>'form-control input-sm']) }}
					<span class="help-block" >{{ ($errors->has('name') ? $errors->first('name') : '') }}</span >
				</div >
			</div >
			<div class="form-group {{ ($errors->has('description')) ? 'has-error' : '' }}" >
				<label class="col-md-2 control-label" for="description" >Description:</label >
				<div class="col-md-8" >
					{{ Form::text('description',$category->description,['class'=>'form-control input-sm']) }}
					<span class="help-block" >{{ ($errors->has('description') ? $errors->first('description') : '') }}</span >
				</div >
			</div >
			<div class="form-group {{ $errors->has('symbols') ? 'has-error' : '' }}" >
				<label class="col-md-2 control-label" for="symbols" >Subtitle:</label >
				<div class="col-md-4" >
					{{ Form::text('symbols',$category->symbols,['class'=>'form-control input-sm']) }}
					<span class="help-block" >{{ ($errors->has('symbols') ?  $errors->first('symbols') : '') }}</span >
				</div >
			</div >
			
			<div class="form-group" >
				<div class="col-md-offset-2 col-md-8" >
					<input class="btn-primary btn" type="submit" value="Submit" >
					<a href="/admin/categories" class="btn btn-default pull-right">Cancel</a>
				</div >
			</div >
			{{ Form::close() }}
		</div>
	</div>
	
@stop

@section('scripts')
	
@stop
 