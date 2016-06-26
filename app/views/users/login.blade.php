@extends('layouts.master')

@section('header')
    <div class="thin-red-line" ></div>
    <img src="{{ asset('img/pages/banner4.jpg') }}" class="img-responsive"/>
    <div class="thin-red-line" ></div>
@stop

@section('content')
<div class="row m-t-10">
    <div class="col-sm-4 col-sm-offset-4 text-center">
        <h2>Log-In</h2>
        {{ Form::open(['url'=>'/login','class'=>'form','role'=>'form']) }}
     
            <fieldset>
                <div class="form-group @if($errors->has('email')) 'has-error' @endif">
                    {{ Form::label('email','Email Address', ['class'=>'sr-only control-label']) }}
                    {{ Form::text('email', Input::old('email'), ['class'=>'form-control', 'placeholder'=>'Email Address']) }}
                    <siv class="help-block">{{ ($errors->has('email') ? $errors->first('email') : '') }}</siv>
                </div>
                <div class="form-group @if($errors->has('password')) 'has-error' @endif">
                    {{ Form::label('password','Password', ['class'=>'sr-only control-label']) }}
                    {{ Form::password('password',  ['class'=>'form-control']) }}
                    <siv class="help-block">{{ ($errors->has('password') ? $errors->first('password') : '') }}</siv>
                </div>
               

                <label class="remember" for="rememberme"><input type="checkbox" id="rememberme" value="1"/> Remember me</label>

                <div class="clearfix"></div>

                <button type="submit" class="btn btn-primary col-sm-6 col-sm-offset-3">Login</button>
            </fieldset>

        {{ Form::close() }}
        <hr>
        <a href="{{ URL::to('/reset-password') }}" class="btn btn-default">Reset Password</a>
    </div>
</div><!--/row-->


@stop