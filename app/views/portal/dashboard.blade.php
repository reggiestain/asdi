@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <h2>Student Zone</h2>
    </div>
</div>
<div class="m-t-20">
    @include('partials.student-zone')
    <div class="tab-content p-t-20">
     @include('partials.student-menus')   
    </div>     
</div>
@stop

@section('scripts')

@stop