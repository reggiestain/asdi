@extends('layouts.master')



{{-- Content --}}
@section('content')
<div class="row">
    <div class="col-md-12">
	
			<h2 class="text-right"><i class="fa fa-edit"></i> Edit Your Profile</h2>
		<hr/>
		{{ Form::open(['url'=>'/portal/profile','class'=>'form', 'role'=>'form']) }}
				<div class="row" >
					<div class="col-sm-2" >
						<div class="form-group" >
							{{ Form::label('title', 'Title', ['class'=>'control-label']) }}
							{{ Form::select('title',['Mr'=>'Mr','Mrs'=>'Mrs','Miss'=>'Miss','Ms'=>'Ms','Dr'=>'Dr'], $user->title,['class'=>'form-control input-sm']) }}
						</div >
					</div >
					<div class="col-sm-5" >
						<div class="form-group" >
							{{ Form::label('first_name', 'First Name', ['class'=>'control-label']) }}
							{{ Form::text('first_name', $user->first_name,['class'=>'form-control input-sm']) }}
						</div >
					</div >
					<div class="col-sm-5" >
						<div class="form-group" >
							{{ Form::label('last_name', 'Last Name', ['class'=>'control-label']) }}
							{{ Form::text('last_name', $user->last_name,['class'=>'form-control input-sm']) }}
						</div >
					</div >
				</div >
				<div class="row" >
					<div class="col-sm-4" >
						<div class="form-group" >
							{{ Form::label('email', 'Email', ['class'=>'control-label']) }}
							{{ Form::text('email', $user->email,['class'=>'form-control input-sm ']) }}
						</div >
					</div >
					
				
					<div class="col-sm-4" >
						<div class="form-group" >
							{{ Form::label('birth_date', 'Date of Birth', ['class'=>'control-label']) }}
							{{ Form::text('birth_date', $user->birth_date,['class'=>'form-control input-sm datepicker']) }}
						</div >
					</div >
					<div class="col-sm-4" >
						<div class="form-group" >
							{{ Form::label('gender', 'Gender', ['class'=>'control-label']) }}
							<br />
							<label class="radio-inline" >
								<input type="radio" name="gender" id="inlineRadio1" value="m" >
								Male
							</label >
							<label class="radio-inline" >
								<input type="radio" name="gender" id="inlineRadio2" value="f" >
								Female
							</label >
						</div >
					</div >
	
				</div >
				<hr />
				<div class="row" >
					<div class="col-sm-4" >
						<fieldset >
							<legend >Home Address</legend >
							<div class="form-group" >
								{{ Form::label('home_address', 'Address', ['class'=>'control-label']) }}
								{{ Form::textarea('home_address', $user->home_address,['class'=>'form-control input-sm', 'rows'=>5]) }}
							</div >
							<div class="form-group" >
								{{ Form::label('home_postal_code', 'Postal Code', ['class'=>'control-label']) }}
								{{ Form::text('home_postal_code', $user->home_postal_code,['class'=>'form-control input-sm']) }}
							</div >
							<div class="form-group" >
								{{ Form::label('home_country_id', 'Country', ['class'=>'control-label']) }}
								{{ Form::select('home_country_id',$countries, $user->home_country_id or 190,['class'=>'form-control input-sm']) }}
							</div >
						</fieldset >
					</div >
					<div class="col-sm-4" >
						<fieldset >
							<legend >Postal Address</legend >
							<div class="form-group" >
								{{ Form::label('postal_address', 'Address', ['class'=>'control-label']) }}
								{{ Form::textarea('postal_address', $user->postal_address,['class'=>'form-control input-sm', 'rows'=>5]) }}
							</div >
							<div class="form-group" >
								{{ Form::label('postal_postal_code', 'Postal Code', ['class'=>'control-label']) }}
								{{ Form::text('postal_postal_code', $user->postal_postal_code,['class'=>'form-control input-sm']) }}
							</div >
							<div class="form-group" >
								{{ Form::label('postal_country_id', 'Country', ['class'=>'control-label']) }}
								{{ Form::select('postal_country_id',$countries, $user->postal_country_id or 190,['class'=>'form-control input-sm']) }}
							</div >
						</fieldset >
					</div >
					<div class="col-sm-4" >
						<fieldset >
							<legend >Contact Numbers</legend >
							<div class="form-group" >
								{{ Form::label('tel', 'Home Phone', ['class'=>'control-label']) }}
								{{ Form::text('tel', $user->tel,['class'=>'form-control input-sm']) }}
							</div >
							<div class="form-group" >
								{{ Form::label('mobile', 'Mobile No.', ['class'=>'control-label']) }}
								{{ Form::text('mobile', $user->mobile,['class'=>'form-control input-sm']) }}
							</div >
							<div class="form-group" >
								{{ Form::label('fax', 'Fax (If available)', ['class'=>'control-label']) }}
								{{ Form::text('fax', $user->fax,['class'=>'form-control input-sm']) }}
							</div >
						</fieldset >
					</div >
				</div >

				<div class="form-group">
					
						<input class="btn-primary btn" type="submit" value="Submit Changes">
						<input class="btn-inverse btn" type="reset" value="Reset">
				
				</div>
{{ Form::close() }}
	</div>
</div>
<hr class="m-tb-30" />
<div class="row" >
	<div class="col-sm-12">
		
		<h2 class="text-right"><i class="fa fa-edit" ></i > Change Your Password</h2 >
		<hr/>
	</div>
</div>

<div class="row m-b-30" >
	<div class="col-sm-6 col-sm-offset-3" >
		
		{{ Form::open(['url'=>'/portal/change-password','class'=>'form', 'role'=>'form']) }}
		<div class="form-group {{ $errors->has('oldPassword') ? 'has error' : '' }}" for="oldPassword" >
			<label class="control-label" for="oldPassword" >Old Password</label >
			
				<input name="oldPassword" value="" type="password" class="form-control" placeholder="Old Password" >
				{{ ($errors->has('oldPassword') ? $errors->first('oldPassword') : '') }}
			
		</div >
		<div class="form-group {{ $errors->has('newPassword') ? 'has error' : '' }}" for="newPassword" >
			<label class="control-label" for="newPassword" >New Password</label >
	
				<input name="newPassword" value="" type="password" class="form-control" placeholder="New Password" >
				{{ ($errors->has('newPassword') ?  $errors->first('newPassword') : '') }}
		
		</div >
		<div class="form-group {{ $errors->has('newPassword_confirmation') ? 'has error' : '' }}" for="newPassword_confirmation" >
			<label class=" control-label" for="newPassword_confirmation" >Confirm New Password</label >
			
				<input name="newPassword_confirmation" value="" type="password" class="form-control" placeholder="New Password Again" >
				{{ ($errors->has('newPassword_confirmation') ? $errors->first('newPassword_confirmation') : '') }}
			
		</div >
		<div class="form-group" >
			
				<input class="btn-primary btn" type="submit" value="Change Password" >
				<input class="btn-inverse btn" type="reset" value="Reset" >
	
		</div >
		</form >
	</div>
	

</div>



   



@stop

@section('scripts')


@stop
