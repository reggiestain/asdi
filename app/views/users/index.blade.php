@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
	
			<h2 class="text-right"><i class="fa fa-user"></i> Current Users</h2>
			<hr/>
		

			<fieldset>
				<legend>Admin Users <a href="/admin/users/create" class="btn btn-primary btn-sm pull-right" style="position:relative; top:-10px;">Add New Administrator</a></legend>
				<table class="table table-condensed table-striped" >
					
					<tbody >
						@foreach ($admin_users as $myUser)
							<tr >
								<td width="30">{{ ($myUser->activated == 1) ? '<i class="fa fa-check text-success"></i>' : '<i class="fa fa-times text-danger"></i>'  }}</td>
								<td >
									<a href="{{ URL::to('admin/users/show') }}/{{ $myUser->id }}" >{{ $myUser->first_name }} {{ $myUser->last_name }}</a >
								</td >
								<td width="200">{{ $countArray[$myUser->id] }} Courses</td>
								<td width="100">
									<a href="#" class="btn btn-warning btn-sm" title="Block this User"><i class="fa fa-user-times"></i></a>
								</td>
							</tr >
						@endforeach
					</tbody >
				</table >
			</fieldset>
		<hr/>
			<fieldset>
				<legend>Students</legend>
				<table class="table table-condensed table-striped" >
					
					<tbody >
						@foreach ($users as $myUser)
							<tr >
								<td width="30" >{{ ($myUser->activated == 1) ? '<i class="fa fa-check text-success"></i>' : '<i class="fa fa-times text-danger"></i>'  }}</td >
								<td >
									<a href="{{ URL::to('admin/users/show') }}/{{ $myUser->id }}" >{{ $myUser->first_name }} {{ $myUser->last_name }}</a >
								</td >
								<td width="200" >{{ $countArray[$myUser->id] }} Courses</td >
								<td width="100" >
									<a href="#" class="btn btn-warning btn-sm" title="Block this User" >
										<i class="fa fa-user-times" ></i ></a >
								</td >
							</tr >
						@endforeach
					</tbody >
				</table >
			</fieldset>

			

   

		

    </div>
</div>


@stop
