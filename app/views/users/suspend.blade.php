@extends('layouts.admin')


{{-- Content --}}
@section('content')
<div class="row">
<div class="col-md-12">
	
			<h2 class="text-right"><i class="fa fa-user"></i><span class="break"></span> Suspend {{ $myUser->email }}</h2>
		<hr/>



@if (Sentry::check() && Sentry::getUser()->hasAccess('admin'))

	<form class="form-horizontal" action="{{ URL::to('users/suspend') }}/{{ $myUser->id }}" method="post">
    	{{ Form::token() }}
    	
		<div class="form-group {{ ($errors->has('suspendTime')) ? 'error' : '' }}" for="suspendTime">
            <label class="col-md-2 control-label" for="suspendTime">Duration</label>
            <div class="col-md-4">
                <input name="suspendTime" id="suspendTime" value="{{ Request::old('suspendTime') }}" type="text" class="form-control" placeholder="Minutes">
                {{ ($errors->has('suspendTime') ? $errors->first('suspendTime') : '') }}
            </div>
        </div>

    	<div class="form-control">
    		<button class="btn btn-primary" type="submit">Suspend User</button>
    	</div>
  </form>

@else
<h4>You are not an Administrator</h4>
@endif

	
	</div><!-- .box -->

</div>
@stop