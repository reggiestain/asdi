@extends('layouts.admin')



{{-- Content --}}
@section('content')
<div class="row">
    <div class="col-md-12">
	
			<h2 class="text-right"><i class="fa fa-edit"></i> Edit Your Profile</h2>
		<hr/>
		
			<form class="form-horizontal" action="{{ URL::to('/admin/profile') }}" method="post" role="form">
				{{ Form::token() }}

				<div class="form-group {{ ($errors->has('first_name')) ? 'has-error' : '' }}" >
					<label class="col-md-2 control-label" for="first_name">First Name</label>
					<div class="col-md-4">
						<input name="first_name" value="{{ (Request::old('first_name')) ? Request::old('first_name') : $myUser->first_name }}" type="text" class="form-control" placeholder="First Name">
						{{ ($errors->has('first_name') ? $errors->first('first_name') : '') }}
					</div>
				</div>

				<div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}" >
					<label class="col-md-2 control-label" for="last_name">Last Name</label>
					<div class="col-md-4">
						<input name="last_name" value="{{ (Request::old('last_name')) ? Request::old('last_name') : $myUser->last_name }}" type="text" class="form-control" placeholder="Last Name">
						{{ ($errors->has('last_name') ?  $errors->first('last_name') : '') }}
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-offset-2 col-md-4">
						<input class="btn-primary btn" type="submit" value="Submit Changes">
						<input class="btn-inverse btn" type="reset" value="Reset">
					</div>
				</div>
			</form>
		
	</div><!-- .box -->

</div>


<div class="row">
    <div class="col-md-12">
	
			<h2><i class="fa fa-edit"></i> Change Password</h2>
		
			<form class="form-horizontal" action="{{ URL::to('/admin/change-password') }}" method="post" role="form">
				{{ Form::token() }}

				<div class="form-group {{ $errors->has('oldPassword') ? 'has error' : '' }}" for="oldPassword">
					<label class="col-md-2 control-label" for="oldPassword">Old Password</label>
					<div class="col-md-4">
						<input name="oldPassword" value="" type="password" class="form-control" placeholder="Old Password">
						{{ ($errors->has('oldPassword') ? $errors->first('oldPassword') : '') }}
					</div>
				</div>

				<div class="form-group {{ $errors->has('newPassword') ? 'has error' : '' }}" for="newPassword">
					<label class="col-md-2 control-label" for="newPassword">New Password</label>
					<div class="col-md-4">
						<input name="newPassword" value="" type="password" class="form-control" placeholder="New Password">
						{{ ($errors->has('newPassword') ?  $errors->first('newPassword') : '') }}
					</div>
				</div>

				<div class="form-group {{ $errors->has('newPassword_confirmation') ? 'has error' : '' }}" for="newPassword_confirmation">
					<label class="col-md-2 control-label" for="newPassword_confirmation">Confirm New Password</label>
					<div class="col-md-4">
						<input name="newPassword_confirmation" value="" type="password" class="form-control" placeholder="New Password Again">
						{{ ($errors->has('newPassword_confirmation') ? $errors->first('newPassword_confirmation') : '') }}
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-offset-2 col-md-4">
					<input class="btn-primary btn" type="submit" value="Change Password">
					<input class="btn-inverse btn" type="reset" value="Reset">
				</div></div>
          </form>
    </div>

</div>

@if (Sentry::check() && Sentry::getUser()->hasAccess('admin'))

<div class="row">
    <div class="col-md-12">
	
			<h2><i class="fa fa-group"></i> User Group Memberships</h2>
		

			<form class="form-horizontal" action="{{ URL::to('/admin/update-memberships') }}/{{ $myUser->id }}" method="post" role="form">
				{{ Form::token() }}

				<table class="table">
					<thead>
						<th>Group</th>
						<th>Membership Status</th>
					</thead>
					<tbody>
						@foreach ($allGroups as $group)
							<tr>
								<td>{{ $group->name }}</td>
								<td>
									<div class="switch" data-on-label="In" data-on='info' data-off-label="Out">
										<input name="permissions[{{ $group->id }}]" type="checkbox" {{ ( $myUser->inGroup($group)) ? 'checked' : '' }} >
									</div>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				<div class="form-group">
					<div class="col-md-offset-2 col-md-4">
                        
                        @if(Sentry::getUser()->hasAccess('admin'))
                        	<input class="btn-primary btn" type="submit" value="Update Memberships">
                        @endif
				</div> </div>
			</form>
		</div>

	

</div>
@endif
        



@stop

@section('scripts')


@stop
