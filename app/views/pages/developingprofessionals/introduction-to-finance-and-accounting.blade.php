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
				<h2><span class="title_box"></span> Introduction to Finance and Accounting for managers and non-accountants</h2>
				<br>
				<p>
					This popular course provides an introduction to accounting and finance for individuals who do not have prior knowledge or experience in these areas and who need to understand basic terminology and application of concepts such as gross and net profit, income statement, balance sheet, revenue, expenses, assets and liabilities, budgets, cash flow, breakeven, and using ratio analysis tools.
					<br><br>
					Participants typically are team leaders, department managers, line managers, directors, and entrepreneurs.
					<br><br>
					The course assumes no prior knowledge or expertise in accounting or finance, and participants are often pleasantly surprised with their own rate of progress in becoming “financially literate”. The course ensures high level of application and discussion, breaking down mental barriers to allow for integration of learning.
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