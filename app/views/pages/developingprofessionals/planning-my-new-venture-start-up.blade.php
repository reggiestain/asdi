@extends('layouts.master')

@section('header')
	<div class="thin-red-line" ></div>
		<img src="{{ asset('img/pages/banner2.jpg') }}" class="img-responsive"/>
	<div class="thin-red-line" ></div>
@stop

@section('content')
	<div class="white-page-bg m-b-30 p-b-20" >			
			
		<div class="row">
			<div class="col-sm-12">
				<h2><span class="title_box"></span> Entrepreneurship: Planning my New Venture start-up</h2>
				<br>
				<p>
					Starting your own business can be both an exciting and challenging time.
					<br><br>
					In today’s economic climate, more people are starting the own ventures, whether it is product based or service based, to create economic growth for themselves and the wider community. The course in Entrepreneurship grounds itself in the essentials to help you start up your new venture.
					<br><br>
					Key areas of developing an entrepreneurial mindset, using creative thinking to develop your ideas to create viable business opportunities and undertaking a feasibility study.
					<br><br>
					This course is suitable for both nascent entrepreneurs seeking to start their new venture, experienced entrepreneurs seeking to take their venture to the next level and intrapreneurs within an existing organisation. Case studies and real world problems provide the context for learning whilst practical application integrates learning.
				</p>
				<div class="m-t-15">
					<a href="javascript:history.go(-1);" class="btn btn-default">Back</a>
				</div>
			</div >
		</div>
		<div class="row">
			<div class="col-sm-12">
				@include('partials.dev-prof-logos')
			</div>
		</div>
		
		
		
	</div>
	
	
@stop