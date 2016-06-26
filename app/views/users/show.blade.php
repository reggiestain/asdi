@extends('layouts.admin')


{{-- Content --}}
@section('content')
<div class="row">
	<div class="col-md-12">
	
		<h2 class="text-right">
			<a href="/admin/users" class=" btn btn-default pull-left" ><i class="fa fa-arrow-left" ></i > Back to Users
			</a >
			<i class="fa fa-user"></i><span class="break"></span> User Profile</h2>
		<hr/>
		
		
		@if(count($applications))
			<div class="well">
				<h4 class="p-l-150">Pending Applications</h4>
				<table class="table table-condensed" >
					@foreach($applications as $apply)
					<tr>
						<td width="150" class="text-center">
							<a href="/admin/applications/approve/{{ $user->id }}/{{ $apply->id }}" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
							<a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
						</td>
						<td>{{ $apply->name }}</td>
					</tr>
					@endforeach
				</table>
			</div >
		@endif
		
		<div class="text-right">
			<p>Last logged on: {{ $user->last_login }}</p>
		</div>
		
		<h4>Profile Details</h4>
		<table class="table table-condensed">
			<tr>
				<td width="200" class="text-right"><strong>Name:</strong ></td>
				<td>{{ $user->title }} {{ $user->first_name }} {{ $user->last_name }}</td>
			</tr >
			<tr>
				<td width="200" class="text-right"><strong >Date of Birth:</strong></td>
				<td>{{ $user->birth_date }}</td>
			</tr>
			<tr >
				<td width="200" class="text-right"><strong >Gender:</strong></td>
				<td>
					@if($user->gender == 'm')
						Male
					@else
						Female
					@endif
				</td>
			</tr >
			<tr >
				<td width="200" class="text-right"><strong >Home Address:</strong></td>
				<td>
					{{ $user->home_address }}<br/>
					{{ $user->home_postal_code }}<br/>
					{{ $countries[$user->home_country_id] }}
				</td>
			</tr >
			<tr >
				<td width="200" class="text-right"><strong >Postal Address:</strong></td>
				<td>
					{{ $user->postal_address }}
					<br />
					{{ $user->postal_postal_code }}
					<br />
					{{ $countries[$user->postal_country_id] }}
				</td>
			</tr >
			<tr >
				<td width="200" class="text-right"><strong >Contact Details:</strong></td>
				<td>
					<i class="fa fa-phone"></i> {{ $user->tel }}<br/>
					<i class="fa fa-mobile-phone"></i> {{ $user->mobile }}<br/>
					<i class="fa fa-fax"></i> {{ $user->fax }}
				</td>
			</tr >
			<tr >
				<td width="200" class="text-right"><strong >Secondary Education:</strong></td>
				<td>
					{{ $user->last_school }}<br/>
					{{ $countries[$user->last_school_country_id] }}<br/>
					{{ $user->last_school_grade }} - {{ $user->last_school_year }}
				</td>
			</tr >
			<tr >
				<td width="200" class="text-right"><strong >Tertiary Education:</strong></td>
				<td>
					{{ $user->last_institution }}
					<br />
					{{ $countries[$user->last_institution_country_id] }}
					<br />
					{{ $user->course_name }} : {{ $user->course_start }} - {{ $user->course_end }} ({{ $user->course_duration }})
				</td>
			</tr >
			<tr >
				<td width="200" class="text-right"><strong >Courses:</strong></td>
				<td>{{ $user->additional_courses }}</td>
			</tr >
		</table>
	
		<h2 class="text-right"><i class="fa fa-file-word-o"></i> Documents</h2>
		<hr/>
		@foreach($user->documents as $document)
		<div class="row">
			<div class="col-sm-2">&nbsp;</div>
			<div class="col-sm-1 text-center">
				<img src="{{ asset('img/docs/'.$document->extension.'.png') }}" /></div>
			<div class="col-sm-8">
				<a href="/uploads/{{ $user->id }}/{{ $document->filename }}" target="_blank" > {{ $document->name }}</a >
			</div>
		</div>
		@endforeach


	</div><!-- .box -->

</div>


@stop
