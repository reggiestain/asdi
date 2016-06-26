@extends('layouts.admin')

@section('content')
	<div class="row" >
		<div class="col-md-12" >
			<h2 class="text-right" ><i class="fa fa-graduation-cap" ></i > Categories</h2 >
			<hr />
			<div class="m-b-10 text-right">
			<a href="/admin/categories/create" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New Category</a>
			</div >
			<table class="table table-condensed table-striped">
				
				@foreach($categories as $key=>$value)
				
						<tr >
							
							<td >{{ $value }}</td >
							<td width="150" >
								<a href="/admin/categories/edit/{{ $key }}" title="Edit this Course"><i class="fa fa-edit"></i></a> &nbsp;
							</td >
						</tr >
					
				@endforeach
			</table>
	
		</div>
	</div>
@stop
 