@extends('layouts.master')



{{-- Content --}}
@section('content')
<div class="row">
    <div class="col-md-12">
	
			<h2 class="text-right"><i class="fa fa-file-word-o"></i> Your Documents</h2>
		
		
		
				<div class="row" >
					<div class="col-sm-12" >
						
						@if(count($documents))
						<table class="table" >
							<tr >
								<td width="50" >Type</td >
								<td >Name</td >
								<td >Size</td >
								<td >Date</td >
							</tr >
							@foreach($documents as $document)
								<tr >
									<td width="50" class="text-center" >
										<img src="{{ asset('img/docs/'.$document->extension.'.png') }}" />
									</td >
									<td >
										<a href="/uploads/{{ Sentry::getUser()->id }}/{{ $document->filename }}" target="_blank"> {{ $document->name }}</a >
										
									</td >
									<td width="100">{{ $document->size }}kb</td >
									<td width="150">{{ $document->created_at }}</td >
								</tr >
							@endforeach
						</table >
						@else
						<hr/>
							<h4 class="text-danger text-center">You have not uploaded any Documents.</h4>
						@endif
						
					</div >
				</div >
		
		<hr/>
		
		<div class="row m-b-30" >
			<div class="col-sm-8 col-sm-offset-2" >
				<div class="panel panel-primary" >
					<div class="panel-heading" >
						<h3 class="panel-title" >Upload a Document</h3 >
					</div >
					<div class="panel-body" >
						
					<form action="/portal/documents" method="post" name="docForm" id="docForm" enctype="multipart/form-data" class="form form-horizontal" >
						{{ Form::token() }}
						
						<div class="form-group {{ ($errors->has('name') ? 'has-error' : '') }}" >
							<label class="col-sm-2 control-label" >Name:</label >
							<div class="col-sm-9" >
								<input type="text" name="name" id="name" class="form-control" value="{{ Input::old('name') }}" />
								<span class="help-block" >Give a name your file to make it easier to find</span >
							</div >
						</div >
						
						<div class="form-group {{ ($errors->has('fileUpload') ? 'has-error' : '') }}" >
							<label class="col-sm-2 control-label" >File:</label >
							<div class="col-sm-9" id="file-holder" >
								<div class="fileinput fileinput-new input-group" data-provides="fileinput" >
									<div class="form-control" data-trigger="fileinput" >
										<i class="glyphicon glyphicon-file fileinput-exists" ></i >
										<span class="fileinput-filename" ></span >
									</div >
									<span class="input-group-addon btn btn-default btn-file" >
										<span class="fileinput-new" >Select file</span >
										<span class="fileinput-exists" >Change</span >
										<input type="file" name="fileUpload" id="fileUpload" />
									</span >
									<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput" >Remove</a >
								</div >
								<span class="help-block text-danger" >IMPORTANT: Do not upload files with ' or / in the name!</span >
							</div >
						</div >
						<div class="form-group" >
							<label class="col-sm-2 control-label" >Notes:</label >
							<div class="col-sm-9" >
								<textarea class="form-control" name="note" ></textarea >
								<span class="help-block" ></span >
							</div >
						</div >
						<div class="row" >
							<div class="col-sm-6 col-sm-offset-2" >
								<button type="submit" class="btn btn-success" name="sub" id="sub" >
									<i class="fa fa-upload" ></i > Upload
								</button >
							</div >
						</div >
					</form >
					</div >
				</div >
			</div >
		</div >
				
	</div>
</div>




@stop

@section('scripts')


@stop
