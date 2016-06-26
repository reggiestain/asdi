@extends('layouts.login')

{{-- Content --}}
@section('content')




	<div class="row">
		<div class="col-sm-8 col-sm-offset-4">

			<img src="{{ asset('img/logo.gif') }}" class="img-responsive" />
			@include('notifications')
			
			<h2>Reset Password</h2>
		


			<form class="form" action="{{ URL::to('/reset-password') }}" method="post" role="form">   
				{{ Form::token() }}
				
				<div class="form-group {{ ($errors->has('email') ? 'error' : '') }}" for="email">
					<label class="control-label sr-only" for="email">E-mail</label>
					
					<input name="email" id="email" value="{{ Request::old('email') }}" type="text" class="form-control input-sm" placeholder="E-mail Address">
					{{ ($errors->has('email') ? $errors->first('email') : '') }}
					
				</div>
			
				<div class="form-group">
					
						<button class="btn btn-primary" type="submit">Reset Password</button>
					
				</div>
		  </form>
		

		</div>
	</div>
</div>

@stop