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
				<h2><span class="title_box"></span> Developing teaching of innovation, creativity and criticality</h2>
				<br>
				<p>
					Creativity, criticality, and innovation underpin the skills required for young people to thrive in a rapidly changing global environment. Innovation and creative problem solving skills are core to value-additive outcomes and preparing students to be analytical, adaptable, and agile. Criticality, creativity, and innovation have been identified as key skills required by employers of the 21st century.
					<br><br>
					Although the current curriculum outlines the importance of teaching these skills, it is recognised that these skills are often ‘pushed aside’ and seldom taught effectively across the curriculum. These skills need to be understood and integrated within different subject areas so that students can become adaptable, innovative and citizens in an ever-changing world that requires high proficiency in this area.
					<br><br>
					Creativity and criticality progresses beyond the processes of critical thinking and creative thinking; rather, they move towards embodying pedagogical and learning practices that embody creativity and criticality. The underpinning notions of creativity and criticality are that they are encouraged from a whole school perspective and become habitual practices across all curriculum areas. Both teachers and students are not only be encouraged to ‘think outside of the box’ but apply their thinking and take action to build on the skills of criticality and creativity. Effective teaching of creativity and criticality helps students to develop cognitively, emotionally, and behaviourally and enable them to become ‘world-ready’.
					<br><br>
					Our proven approach to professional development is through the use of a workshop methodology. Workshops are interactive and hands-on, where teachers are encouraged to participate and practically apply new tools and strategies. Retention is supported through application and the ‘learning loop’ is closed through a post-workshop feedback and evaluation activity.
					<br><br>
					The workshops are differentiated, customised, and flexible to suit the needs of your teachers. There is recognition for varying incremental development points in teachers’ careers. The workshops can be integrated as a blended model of learning, offering the option of online training components to supplement face-to-face workshops.
					<br><br>
					As educators, we are mindful that passive trainer-led CPD days can be less than effective and consequently, may have little impact back in the classroom. There are no ‘pre-packaged’ answers for teaching effectively, creatively, and innovatively. It is recognised that improving teaching and learning is a process rather than a formula where ‘one size fits-all’.
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