<nav class="navbar" >
	<div class="container-fluid" >
		<div class="navbar-header" >
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" >
				<span class="sr-only" >Toggle navigation</span >
				<span class="icon-bar" ></span >
				<span class="icon-bar" ></span >
				<span class="icon-bar" ></span >
			</button >
			<a class="navbar-brand" href="/" >
				<img src="{{ asset('img/logo.png') }}" class="full-max-width" />
			</a >
		</div >
		<div id="navbar" class="navbar-collapse collapse m-t-50" >
			<ul class="nav navbar-nav navbar-right" >
				@if(Sentry::check() && Sentry::hasAccess('users'))
					<li class="dropdown" >
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Dashboard
							<span class="caret" ></span>
						</a >
						<ul class="dropdown-menu" >
							<li >
								<a href="/portal/invoices" class="m-r-20" >Invoices</a >
							</li >
							<li >
								<a href="/portal/courses" class="m-r-20" >Courses</a >
							</li >
							<li >
								<a href="/portal/documents" class="m-r-20" >Documents</a >
							</li >
							<li >
								<a href="/portal/profile" class="m-r-20" >Profile</a >
							</li >
							<li >
								<a href="/logout" class="m-r-20" ><i class="fa fa-sign-out"></i> Log Out</a >
							</li >						
						</ul >
					</li >
				@else
				<li>
					<a href="/" >Home</a >
				</li >
				<li>
					<a href="/content/who-we-are/" >Who We Are</a >
				</li >
				<li class="dropdown" >
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >What We Do
						<span class="caret" ></span >
					</a >
					<ul class="dropdown-menu" >
						<li >
							<a href="/content/learning-design" >Learning Design</a >
						</li >
						<li >
							<a href="/content/national-qualifications" >National Qualifications</a >
						</li >
						<li >
							<a href="/content/developing-professionals" >Developing Professionals</a >
						</li >
						<li >
							<a href="/content/organisational-capability" >Developing Organisational Capabilities</a >
						</li >
						<li >
							<a href="/content/collaboration-partnerships" >Collaboration & Partnerships</a >
						</li >
						<li >
							<a href="/content/consulting-support-services" >Consulting & Support Services</a >
						</li >
					
					</ul >
				</li >
					<!-- <li class="dropdown" >
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Our Courses
							<span class="caret" ></span >
						</a >
						<ul class="dropdown-menu" >							
							<li class="menu-item dropdown dropdown-submenu">
						                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Certificate IV</a>
						                            <ul class="dropdown-menu">
						                                <li class="menu-item"><a href="/content/national-qualifications/certificate-in-entrepreneurship-and-new-venture-creation">Entrepreneurship and New Venture Creation</a></li>
									<li class="menu-item"><a href="/content/national-qualifications/certificate-in-small-business-management">Small Business Management</a></li>
									<li class="menu-item"><a href="/content/national-qualifications/certificate-in-new-small-business">New Small Business</a></li>
									<li class="menu-item"><a href="/content/national-qualifications/certificate-in-project-management-practice">Project Management Practice</a></li>
						                            </ul>
						                        </li>
						                        <li class="menu-item dropdown dropdown-submenu">
						                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Diploma</a>
						                            <ul class="dropdown-menu">
						                                <li class="menu-item"><a href="/content/national-qualifications/diploma-of-business">Business</a></li>
									<li class="menu-item"><a href="/content/national-qualifications/diploma-of-project-management">Project Management</a></li>
						                            </ul>
						                        </li>
						                        <li class="menu-item dropdown dropdown-submenu">
						                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Advanced Diploma</a>
						                            <ul class="dropdown-menu">
						                                <li class="menu-item"><a href="/content/national-qualifications/advanced-diploma-of-business">Business</a></li>
									<li class="menu-item"><a href="/content/national-qualifications/Advanced-diploma-of-leadership-and-management">Leadership and Management</a></li>
						                            </ul>
						                        </li>
						</ul >
					</li> -->

				<li >
					<a href="/content/courses" >Our Courses</a >
				</li >
				<li >
					<a href="/content/contact" >Contact Us</a >
				</li >
				<li >
					<a href="/register" >Register</a >
				</li >
				<li>
					<a href="/login" class="singin"><i class="fa fa-sign-in"></i> Log In</a >
				</li >
				@endif
			</ul >
		</div ><!--/.nav-collapse -->
	</div ><!--/.container-fluid -->
</nav >
