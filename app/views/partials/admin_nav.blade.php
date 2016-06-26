<ul class="nav nav-sidebar">
    <li @if(Request::is('admin')) class="active" @endif>
        <a href="/admin">Overview
        </a>
    </li>
    <li @if(Request::is('admin/users*') ) class="active" @endif>
        <a href="/admin/users">Users</a>
    </li>
	 <li @if(Request::is('admin/categories*')) class="active" @endif>
        <a href="/admin/categories">Categories</a>
    </li>
    <li @if(Request::is('admin/courses*')) class="active" @endif>
        <a href="/admin/courses">Courses</a>
    </li>
    <li @if(Request::is('admin/invoices*')) class="active" @endif>
        <a href="#">Invoices</a>
    </li>
	
	
</ul>
<hr/>
<ul class="nav nav-sidebar">
	<li @if(Request::is('admin/applications')) class="active" @endif>
		<a href="/admin/applications" >Applications</a >
	</li >
</ul>
