@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
	
			<h2 class="text-right"><i class="fa fa-folder-o"></i> Applications</h2>
			<hr/>
		
			<fieldset>
				<legend>Pending Applications</legend>
				<p>Please click on the Student's Name to view their Application.</p>
				<table class="table table-condensed table-striped" >
					<thead>
						<tr>
							<th>Student:</th>
							<th>Course:</th>
						</tr>
					</thead>
					<tbody >
						
						@foreach ($users as $user)
						
							<tr >
								<td >
									<a href="{{ URL::to('admin/users/show') }}/{{ $user['user']['id'] }}" >{{ $user['user']['first_name'] }} {{ $user['user']['last_name'] }}</a >
								</td >
								<td>
									{{ $user['course']['name'] }}
								</td>
							</tr >
						@endforeach
					</tbody >
				</table >
			</fieldset>

			

   

		

    </div>
</div>


@stop
