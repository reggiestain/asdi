@extends('layouts.admin')

@section('content')
	<div class="row" >
		<div class="col-md-12" >
			<h2 class="text-right" ><i class="fa fa-graduation-cap" ></i > Courses</h2 >
			<hr />
			<div class="m-b-10 text-right">
			<a href="/admin/courses/create" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New Course</a>
			</div >
			<table class="table table-condensed table-striped">
				
				@foreach($course_categories as $category)
				<tr>
					
					<th colspan="3">{{ $category->name }}</th>
				</tr>
					@foreach($category->courses as $course)
						<tr >
							<td width="40 text-center" >
								@if($course->active)
									<i class="fa fa-check text-success"></i>
								@else
									<i class="fa fa-times text-danger" ></i >
								@endif
							</td >
							<td >{{ $course->name }}</td >
							<td width="150" >
								<a href="/admin/courses/edit/{{ $course->id }}" title="Edit this Course"><i class="fa fa-edit"></i></a> &nbsp;
								
								<a href="/admin/courses/{{ $course->id }}" class="text-success" title="View this Course"><i class="fa fa-eye"></i></a>
							</td >
						</tr >
					@endforeach
				@endforeach
			</table>
	
		</div>
	</div>
@stop
 