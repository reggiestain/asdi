@extends('layouts.admin')



{{-- Content --}}
@section('content')
<div class="row">
<div class="col-md-12">
	
			<h2 class="text-right"><i class="fa fa-user"></i> Create Administrator</h2>
    <hr/>
    {{ Form::open(['url'=>'/admin/users/create','class'=>'form', 'role'=>'form']) }}
    <div class="m-t-20">
        <!-- Nav tabs -->
        
        
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                        {{ Form::label('title', 'Title', ['class'=>'control-label']) }}
                        {{ Form::select('title',['Mr'=>'Mr','Mrs'=>'Mrs','Miss'=>'Miss','Ms'=>'Ms','Dr'=>'Dr'], Input::old('title'),['class'=>'form-control input-sm']) }}
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group {{ ($errors->has('first_name')) ? 'has-error' : '' }}">
                            {{ Form::label('first_name', 'First Name', ['class'=>'control-label']) }}
                            {{ Form::text('first_name', Input::old('first_name'),['class'=>'form-control input-sm']) }}
							<span class="help-block" >{{ ($errors->has('first_name') ?  $errors->first('first_name') : '') }}</span >
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group {{ ($errors->has('last_name')) ? 'has-error' : '' }}">
                            {{ Form::label('last_name', 'Last Name', ['class'=>'control-label']) }}
                            {{ Form::text('last_name', Input::old('last_name'),['class'=>'form-control input-sm']) }}
							<span class="help-block" >{{ ($errors->has('last_name') ?  $errors->first('last_name') : '') }}</span >
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
                            {{ Form::label('email', 'Email', ['class'=>'control-label']) }}
                            {{ Form::text('email', Input::old('email'),['class'=>'form-control input-sm ']) }}
							<span class="help-block">{{ ($errors->has('email') ?  $errors->first('email') : '') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group {{ ($errors->has('password')) ? 'has-error' : '' }}">
                            {{ Form::label('password', 'Password', ['class'=>'control-label']) }}
                            {{ Form::password('password', ['class'=>'form-control input-sm ']) }}
							<span class="help-block" >{{ ($errors->has('password') ?  $errors->first('password') : '') }}</span >
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group {{ ($errors->has('password_confirmation')) ? 'has-error' : '' }}">
                            {{ Form::label('password_confirmation', 'Confirm Password', ['class'=>'control-label']) }}
                            {{ Form::password('password_confirmation', ['class'=>'form-control input-sm ']) }}
							<span class="help-block" >{{ ($errors->has('password_confirmation') ?  $errors->first('password_confirmation') : '') }}</span >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group {{ ($errors->has('birth_date')) ? 'has-error' : '' }}">
                            {{ Form::label('birth_date', 'Date of Birth', ['class'=>'control-label']) }}
                            {{ Form::text('birth_date', Input::old('birth_date'),['class'=>'form-control input-sm datepicker']) }}
							<span class="help-block" >{{ ($errors->has('birth_date') ?  $errors->first('birth_date') : '') }}</span >
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group {{ ($errors->has('gender')) ? 'has-error' : '' }}">
                            {{ Form::label('gender', 'Gender', ['class'=>'control-label']) }} <br/>
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="inlineRadio1" value="m">
                                Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="inlineRadio2" value="f">
                                Female
                            </label>
							<span class="help-block" >{{ ($errors->has('gender') ?  $errors->first('gender') : '') }}</span >
                        </div>
                    </div>
                    <div class="col-sm-4">
                        
                    </div>
                </div>
				
		<div class="row">
			<div class="col-sm-12">

				<button type="submit" class="btn btn-primary" >Create</button >
				<a href="/admin/users" class="btn btn-default">Cancel</a>
				
			</div>
            
		</div>
    </div>
    
 
    {{ Form::close() }}

		</div>


</div>
@stop

@section('scripts')
	<script>
		$(document).ready(function() {

			$('#myTabs a').click(function (e) {
				e.preventDefault()
				$(this).tab('show')
			})

			$('#personal_continue').on('click', function(){
				$('#myTabs a[href="#education"]').tab('show');
			});
			$('#edu_continue').on('click', function(){
				$('#myTabs a[href="#courses"]').tab('show');
//				$('#courses').tab('show');
			});
			$('#edu_back').on('click', function(){
				$('#myTabs a[href="#personal"]').tab('show');
//				$('#personal').tab('show');
			});
			$('#courses_back').on('click', function(){
				$('#myTabs a[href="#education"]').tab('show');
//				$('#education').tab('show');
			});
			
		});
	</script>
	
@stop