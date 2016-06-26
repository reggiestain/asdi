@if (count($errors->all()) > 0)
<div class="alert alert-danger alert-block m-t-10">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Error</h4>
	There were problems with your submission, please check your entries and try again...
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block m-t-10">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Success</h4>
	{{ $message }}
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block m-t-10">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Error</h4>
	{{ $message }}
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block m-t-10">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Warning</h4>
	{{ $message }}
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-block m-t-10">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Info</h4>
	{{ $message }}
</div>
@endif
