@extends('layouts.login')


{{-- Content --}}
@section('content')
<div class="row">
	<div class="col-sm-8 col-sm-offset-4" >

			<h2><i class="fa fa-user"></i><span class="break"></span> Resend Activation</h2>
		


			<form class="form-horizontal" action="{{ URL::to('/resend') }}" method="post" role="form">
				{{ Form::token() }}

				<div class="form-group {{ ($errors->has('email') ? 'error' : '') }}" >
					<label class="col-md-2 control-label" for="email">E-mail</label>
					<div class="col-md-4">
						<input name="email" id="email" value="{{ Request::old('email') }}" type="text" class="form-control" placeholder="E-mail">
						{{ ($errors->has('email') ? $errors->first('email') : '') }}
					</div>
				</div>

				<div class="col-md-4 col-md-offset-2">
					<button class="btn btn-primary" type="submit">Resend Activation</button>
				</div>
		  </form>
		
	</div><!-- .box -->

</div>

@stop