@extends('layouts.master')



{{-- Content --}}
@section('content')
<div class="row">
    <div class="col-md-12">
			<a href="/portal/courses/apply" class="btn btn-default btn-sm pull-left m-t-30">Apply for a Course</a>
			<h2 class="text-right"><i class="fa fa-graduation-cap"></i> Your Courses</h2>
		<hr/>
		
		
				<div class="row" >
					<div class="col-sm-12" >
						@if(count($courses))
							@foreach($courses as $course)
							<div class="panel panel-primary" >
								<div class="panel-heading" >
									<h3 class="panel-title" >{{ $course->name }}</h3 >
								</div >
								<div class="panel-body" >
									<div class="text-right" >
										@if($course->pivot->approved)
											<span class="badge badge-success" >Approved</span >
											@if($course->pivot->paid)
												<span class="badge badge-success" >Paid</span >
											@else
												<span class="badge badge-danger" >Pending Payment</span >
											@endif
										@else
											<span class="badge badge-info" >Pending Approval</span >
										@endif
									</div >
								</div >
								
							</div >
							@endforeach
						@else
						
							<h4 class="text-danger text-center" >You have not applied for any Courses.</h4 >
						@endif
					</div >
				</div >
				
	</div>
</div>




@stop

@section('scripts')


@stop
