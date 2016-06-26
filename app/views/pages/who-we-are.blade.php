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
				<h2>Who we are</h2>
				
				<p><strong>The Australian Skills Development Institute (ASDI)</strong> is an innovative and responsive organisation that offers niche market educational consulting, vocational training, and value-added business support services to a range of clients which include government, commerce, educational institutions, not-for-profit organisations and learners.</p>
				<p>As an organisation we view ourselves as solution providers - often to challenges which require agile, innovative, first-of-type solutions. To this end, we have been core to delivering training interventions that range from conducting training workshops to middle and senior management staff in the Oil and Gas industry across 5 continents; to designing and developing massive open online courses (MOOCs) – including one which attracted more than 60,000 enrolments across 200 countries; through to online delivery of courses in business, project management, entrepreneurship, management, leadership, and teacher development.</p>
				<p>In terms of regulatory compliance, ASDI is an Australian Government registered tertiary educational institution. ASDI is accredited by the national regulator (ASQA) to award nationally recognised certificate, diploma, and advanced diploma qualifications.  As an indication of our good standing with the national regulator, ASQA has invited ASDI to become an ASQA Delegate, thereby delegating certain quality assurance activities to ASDI to perform.</p>
				<p>Our registration as a recognised educational institution or Registered Training Organisation (RTO) is effected under national accreditation code: 40219.  As an accredited training provider, we offer nationally recognised qualifications and skill-sets that comply with Australian Quality Framework (AQF) standards.  As a result, our qualifications enable pathway options to undergraduate university degrees. </p>
				
				<p>In addition to providing national vocational qualifications, ASDI delivers short courses, skill-sets, and workshops to develop professionals, and to businesses to develop their employees as a strategic response to developing organisational capability in an identified area of need. As a client-centric organisation focused on building quality relationships with individuals, organisations and other stakeholders we seek to deliver quality training to individuals and related educational consulting and support services to organisations across a broad range of industry sectors.</p>
				<p>We strive for training excellence and undertake continuous improvement activities. Supporting the quality and excellence philosophy, ASDI is a member of the Australian Council for Private Education and Training (ACPET) whose members must subscribe to a code of ethics, standards, and excellence. </p>
				<p>For more information on our range of products and services, navigate by selecting one of the links below:</p>
				<br>
				@include('partials.contact-line')
			</div >
		</div>
	
	
	<div class="m-t-30 dev_logos">
			<div class="links pull-left">
				<a href="/content/learning-design">
				<img src="{{ asset('img/tiles/links_03.png') }}" />
				<span class="overlay">
					read more
				</span>
			</a>
			</div>
			<div class="links pull-left">
				<a href="/content/national-qualifications">
				<img src="{{ asset('img/tiles/links_04.png') }}" />
				<span class="overlay">
					read more
				</span>
					</a>
			</div>
			<div class="links pull-left">
				<a href="/content/developing-professionals">
				<img src="{{ asset('img/tiles/links_05.png') }}" />
				<span class="overlay">
					read more
				</span>
					</a>
			</div>
			<div class="links pull-left">
				<a href="/content/organisational-capability">
				<img src="{{ asset('img/tiles/links_06.png') }}" />
				<span class="overlay">
					read more
				</span>
				</a>
			</div>
			<div class="links pull-left">
			<a href="/content/collaboration-partnerships">
				<img src="{{ asset('img/tiles/links_07.png') }}" />
				<span class="overlay">
					read more
				</span>
			</a>
			</div>
			<div class="links pull-left">
				<a href="/content/consulting-support-services">
				<img src="{{ asset('img/tiles/links_08.png') }}" />
				<span class="overlay">
					read more
				</span>
					</a>
			</div>
		</div>
	<div class="clearfix"></div>
	</div>
	
@stop