@extends('layouts.master')

@section('header')
	<div class="thin-red-line" ></div>
		<img src="{{ asset('img/pages/banner4.jpg') }}" class="img-responsive"/>
	<div class="thin-red-line" ></div>
@stop

@section('content')
	<div class="white-page-bg m-b-30 p-b-20" >
		<div class="row">
			<div class="col-sm-12">
				<h2><span class="title_box"></span> Certificate IV</h2>
				
				<div class="row">
				  	<div class="col-sm-6">
				  		<div class="white-bg red-top-bottom p-tb-30 text-left">
			        		<h4>Entrepreneurship and New Venture Creation</h4>
			        		<!-- <p>
			        			The Certificate IV in Entrepreneurship and New Venture Creation is designed to develop entrepreneurial, intrapreneurial, and general business skills. You will learn how to generate new ideas and assess which ideas are business opportunities...
			        		</p> -->
			        		<a href="/content/national-qualifications/certificate-in-entrepreneurship-and-new-venture-creation">read more</a>
				        </div>
				  	</div>
				  	<div class="col-sm-6">
				  		<div class="white-bg red-top-bottom p-tb-30 text-left">
			        		<h4>Small Business Management</h4>
			        		<!-- <p>
			        			The Certificate IV in Small Business Management is designed to develop management and entrepreneurial skills. You will learn how to identify, evaluate and select business opportunities. You will also be able to undertake business planning, prepare financial plans...
			        		</p> -->
			        		<a href="/content/national-qualifications/certificate-in-small-business-management">read more</a>
			        		
				        </div>
				  	</div>
				  	<div class="clearfix"></div>
				  	<div class="col-sm-6">
				  		<div class="white-bg red-top-bottom p-tb-30 text-left">
			        		<h4>Project Management Practice</h4>
			        		<!-- <p>
			        			The Certificate IV in Project Management Practice is designed to develop project management skills and knowledge. It is suitable for project practitioners who are working in a project support role under the direction of a project manager or as part of a smaller...
			        		</p> -->
			        		<a href="/content/national-qualifications/certificate-in-project-management-practice">read more</a>
			        		
				        </div>
				  	</div>
				  	<!-- <div class="col-sm-4">
				  		<div class="white-bg red-top-bottom p-tb-30 text-left">
			        		<h4>Diploma</h4>
			        		<a href="/content/diploma">read more</a>
			        		<ul>
								<li><a href="/content/national-qualifications/diploma-of-business">Business</a></li>
								<li><a href="/content/national-qualifications/diploma-of-project-management">Project Management</a></li>
							</ul>
				        </div>
				  	</div>
				  	<div class="col-sm-4">
				  		<div class="white-bg red-top-bottom p-tb-30 text-left">
			        		<h4>Advanced Diploma</h4>
			        		<a href="/content/advanced-diploma">read more</a>
			        		<ul>
								<li><a href="/content/national-qualifications/advanced-diploma-of-business">Business</a></li>
								<li><a href="/content/national-qualifications/Advanced-diploma-of-leadership-and-management">Leadership and Management</a></li>
							</ul>
				        </div>
				  	</div> -->
			  </div>
				<div class="m-t-15">
					<a href="javascript:history.go(-1);" class="btn btn-default">Back to courses</a>
				</div>
				@include('partials.contact-line')
			</div>
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
	
				<img src="{{ asset('img/tiles/active_04.png') }}" />
			
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