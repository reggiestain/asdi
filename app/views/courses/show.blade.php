@extends('layouts.admin')

@section('content')
	<div class="row" >
		<div class="col-md-12" >
			<a href="/admin/courses" class="btn btn-default btn-small pull left"><i class="fa fa-arrow-left"></i> Back to Courses</a>
			<h2 class="text-right" ><i class="fa fa-edit" ></i > Course Details</h2 >
			<hr/>
			<table class="table table-condensed">
				<tr>
					<td width="150" class="text-right"><strong>Name:</strong ></td>
					<td>{{ $course->name }}</td>
				</tr>
				<tr >
					<td width="150" class="text-right">
						<strong>Description:</strong></td >
					<td >{{ $course->description }}</td >
				</tr >
				<tr >
					<td width="150" class="text-right">
						<strong>Students:</strong></td >
					<td >
						<ul class="list-group" >
						@foreach($course->users as $user)
								<li class="list-group-item" ><a href="/admin/users/show/{{ $user->id }}">{{ $user->last_name }}, {{ $user->first_name }}</a> <small class="text-muted pull-right">{{ ($user->pivot->paid == 1) ? 'Paid' : 'Payment Pending' }}</small></li >
						@endforeach
						</ul>
					</td >
				</tr >
			</table>
		</div>
	</div>
	
@stop
 