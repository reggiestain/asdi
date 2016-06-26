@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <h2>Student Zone</h2>
    </div>
</div>
<div class="white-page-bg m-b-30 p-b-20" >
    @include('partials.student-zone')
    <div class="tab-content p-t-20">
    @include('partials.student-menus')   
    </div>  
    <div class="row" id="current-row">
        <div class="col-sm-12">
            <h2><span class="title_box"></span> {{$course->name}}</h2>								
            <p>{{$course->description}}</p>

        </div >
    </div>
    <div id="current-foot">
    <div class="m-t-15">
        <a href="/portal/course-application/{{$course->id}}" class="btn btn-success">Apply</a>
    </div>
    <div class="row" >
        <div class="col-sm-12">
            @include('partials.contact-line')

            <div class="m-t-30 dev_logos">
                <div class="links pull-left">
                    <a href="/content/learning-design">
                        <img src="{{ asset('img/tiles/links_03.png') }}" />
                    </a>
                </div>
                <div class="links pull-left">
                    <a href="/content/national-qualifications">
                        <img src="{{ asset('img/tiles/links_04.png') }}" />
                    </a>
                </div>
                <div class="links pull-left">

                    <img src="{{ asset('img/tiles/active_05.png') }}" />

                </div>
                <div class="links pull-left">
                    <a href="/content/organisational-capability">
                        <img src="{{ asset('img/tiles/links_06.png') }}" />
                    </a>
                </div>
                <div class="links pull-left">
                    <a href="/content/collaboration-partnerships">
                        <img src="{{ asset('img/tiles/links_07.png') }}" />
                    </a>
                </div>
                <div class="links pull-left">
                    <a href="/content/consulting-support-services">
                        <img src="{{ asset('img/tiles/links_08.png') }}" />
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>
</div>


</div>

@stop

@section('scripts')

@stop
