@extends('layouts.master')

@section('header')
	<div class="thin-red-line" ></div>
	<img src="{{ asset('img/pages/banner4.jpg') }}" class="img-responsive"/>
	<div class="thin-red-line" ></div>
@stop

{{-- Content --}}
@section('content')
<div class="white-page-bg m-b-30 p-b-20">
<div class="row">
<div class="col-md-12">
	
			<h2><i class="fa fa-user"></i> Student Registration</h2>
	<hr/>
    
    {{ Form::open(['url'=>'/register','class'=>'form', 'role'=>'form']) }}
    <div class="m-t-20">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist" id="myTabs">
            <li role="presentation" class="active">
                <a href="#personal" aria-controls="personal" role="tab" data-toggle="tab">Personal Details</a>
            </li>
            <li role="presentation">
                <a href="#education" aria-controls="education" role="tab" data-toggle="tab">Education</a>
            </li>
            <li role="presentation">
                <a href="#courses" aria-controls="courses" role="tab" data-toggle="tab">Terms & Conditions</a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content p-t-20">
            <div role="tabpanel" class="tab-pane fade in active m-b-30" id="personal">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                        {{ Form::label('title', 'Title', ['class'=>'control-label']) }}
                        {{ Form::select('title',['Mr'=>'Mr','Mrs'=>'Mrs','Miss'=>'Miss','Ms'=>'Ms','Dr'=>'Dr'], Input::old('title'),['class'=>'form-control']) }}
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            {{ Form::label('first_name', 'First Name', ['class'=>'control-label']) }}
                            {{ Form::text('first_name', Input::old('first_name'),['class'=>'form-control']) }}
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            {{ Form::label('last_name', 'Last Name', ['class'=>'control-label']) }}
                            {{ Form::text('last_name', Input::old('last_name'),['class'=>'form-control']) }}
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            {{ Form::label('email', 'Email', ['class'=>'control-label']) }}
                            {{ Form::text('email', Input::old('email'),['class'=>'form-control input-sm ']) }}
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            {{ Form::label('password', 'Password', ['class'=>'control-label']) }}
                            {{ Form::password('password', ['class'=>'form-control input-sm ']) }}
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            {{ Form::label('password_confirmation', 'Confirm Password', ['class'=>'control-label']) }}
                            {{ Form::password('password_confirmation', ['class'=>'form-control input-sm ']) }}
                        </div>
                    </div>
                </div>
                
                <!--<div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            {{ Form::label('birth_date', 'Date of Birth', ['class'=>'control-label']) }}
                            {{ Form::text('birth_date', Input::old('birth_date'),['class'=>'form-control input-sm datepicker']) }}
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            {{ Form::label('gender', 'Gender', ['class'=>'control-label']) }} <br/>
                            <label class="radio-inline">
                                <input type="radio" name="genderOptions" id="inlineRadio1" value="m">
                                Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="genderOptions" id="inlineRadio2" value="f">
                                Female
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        
                    </div>
                </div>
				<hr/>
                <div class="row">
                    <div class="col-sm-4">
						<fieldset>
							<legend>Home Address</legend>
							<div class = "form-group" >
								{{ Form::label('home_address', 'Address', ['class'=>'control-label']) }}
								{{ Form::textarea('home_address', Input::old('home_address'),['class'=>'form-control input-sm', 'rows'=>5]) }}
							</div >
							<div class = "form-group" >
								{{ Form::label('home_postal_code', 'Postal Code', ['class'=>'control-label']) }}
								{{ Form::text('home_postal_code', Input::old('home_postal_code'),['class'=>'form-control input-sm']) }}
							</div >
							<div class = "form-group" >
								{{ Form::label('home_country_id', 'Country', ['class'=>'control-label']) }}
								{{ Form::select('home_country_id',$countries, Input::old('home_country_id',190),['class'=>'form-control']) }}
							</div >
						</fieldset>
						
                    </div>
                    <div class="col-sm-4">
						<fieldset>
							<legend>Postal Address</legend>
							<div class = "form-group" >
								{{ Form::label('postal_address', 'Address', ['class'=>'control-label']) }}
								{{ Form::textarea('postal_address', Input::old('postal_address'),['class'=>'form-control input-sm', 'rows'=>5]) }}
							</div >
							<div class = "form-group" >
								{{ Form::label('postal_postal_code', 'Postal Code', ['class'=>'control-label']) }}
								{{ Form::text('postal_postal_code', Input::old('postal_postal_code'),['class'=>'form-control input-sm']) }}
							</div >
							<div class = "form-group" >
								{{ Form::label('postal_country_id', 'Country', ['class'=>'control-label']) }}
								{{ Form::select('postal_country_id',$countries, Input::old('postal_country_id',190),['class'=>'form-control']) }}
							</div >
						</fieldset>
                    </div>
                    <div class="col-sm-4">
						<fieldset >
							<legend >Contact Numbers</legend >
						<div class = "form-group" >
							{{ Form::label('tel', 'Home Phone', ['class'=>'control-label']) }}
							{{ Form::text('tel', Input::old('tel'),['class'=>'form-control input-sm']) }}
						</div >
						<div class = "form-group" >
							{{ Form::label('mobile', 'Mobile No.', ['class'=>'control-label']) }}
							{{ Form::text('mobile', Input::old('mobile'),['class'=>'form-control input-sm']) }}
						</div >
						<div class = "form-group" >
							{{ Form::label('fax', 'Fax (If available)', ['class'=>'control-label']) }}
							{{ Form::text('fax', Input::old('fax'),['class'=>'form-control input-sm']) }}
						</div >
                    </div>
                   
                </div>
				
				<hr />
				<div class = "text-right" >
					<button type="button" id="personal_continue" class="btn btn-default" >Continue <i class="fa fa-arrow-right"></i></button >
				</div >
            </div>
            <div role="tabpanel" class="tab-pane fade m-b-30" id="education">
				<div class="col-sm-6">
					<fieldset>
						<legend>Secondary Education</legend>
						<div class = "form-group" >
							{{ Form::label('last_school', 'Last High / Secondary School Attended', ['class'=>'control-label']) }}
							{{ Form::text('last_school', Input::old('last_school'),['class'=>'form-control input-sm']) }}
						</div >
						<div class = "form-group" >
							{{ Form::label('last_school_year', 'Year Completed', ['class'=>'control-label']) }}
							{{ Form::selectRange('last_school_year', 1970,2016,Input::old('last_school_year'),['class'=>'form-control']) }}
						</div >
						<div class = "form-group" >
							{{ Form::label('last_school_grade', 'Highest Year / Grade Passed', ['class'=>'control-label']) }}
							{{ Form::text('last_school_grade', Input::old('last_school_grade'),['class'=>'form-control input-sm']) }}
						</div >
						<div class = "form-group" >
							{{ Form::label('last_school_country_id', 'Country', ['class'=>'control-label']) }}
							{{ Form::select('last_school_country_id',$countries, Input::old('last_school_country_id',190),['class'=>'form-control']) }}
						</div >
					</fieldset>
				</div>
				<div class="col-sm-6">
					<fieldset >
						<legend >Tertiary Education</legend >
						<p>Please provide details of ALL university or college courses that you have completed or attempted (or that you expect to complete before commencing with the Australian Skills Development Institute).</p>
						<div class = "form-group" >
							{{ Form::label('last_institution', 'Last Institution Enrolled', ['class'=>'control-label']) }}
							{{ Form::text('last_institution', Input::old('last_institution'),['class'=>'form-control input-sm']) }}
						</div >
						<div class = "form-group" >
							{{ Form::label('last_institution_country_id', 'Country', ['class'=>'control-label']) }}
							{{ Form::select('last_institution_country_id',$countries, Input::old('last_institution_country_id',190),['class'=>'form-control']) }}
						</div >
						<div class = "form-group" >
							{{ Form::label('course_name', 'Highest Year / Grade Passed', ['class'=>'control-label']) }}
							{{ Form::text('course_name', Input::old('course_name'),['class'=>'form-control input-sm']) }}
						</div >
						<div class = "form-group" >
							{{ Form::label('course_start', 'Start Date', ['class'=>'control-label']) }}
							{{ Form::text('course_start', Input::old('course_start'),['class'=>'form-control input-sm datepicker']) }}
						</div >
						<div class = "form-group" >
							{{ Form::label('course_end', 'Completion Date', ['class'=>'control-label']) }}
							{{ Form::text('course_end', Input::old('course_end'),['class'=>'form-control input-sm datepicker']) }}
						</div >
						<div class = "form-group" >
							{{ Form::label('course_duration', 'Course Duration', ['class'=>'control-label']) }}
							{{ Form::text('course_duration', Input::old('course_duration'),['class'=>'form-control input-sm']) }}
						</div >
						<div class = "form-group" >
							{{ Form::label('additional_courses', 'Additional Course Information.', ['class'=>'control-label']) }}
							{{ Form::textarea('additional_courses', Input::old('additional_courses'),['class'=>'form-control input-sm', 'rows'=>5]) }}
							<div class="help-block">(state name of institution, course name, year completed and duration)</div>
						</div >
					</fieldset >
				</div>
				<hr />
				<div class = "text-right" >
					<button type="button" id="edu_back" class="btn btn-default pull-left" ><i class="fa fa-arrow-left" ></i > Back</button >
					<button type="button" id="edu_continue" class="btn btn-default" >Continue
						<i class="fa fa-arrow-right" ></i >
					</button >
				</div >
			</div>
            <div role="tabpanel" class="tab-pane fade m-b-30" id="courses">
				
				<div class = "row" >
					<div class = "col-sm-12" >
						<h3 >Declaration and Consent</h3 >
						<p >Please read these declarations carefully and select all boxes below before submitting this application.</p >
					</div >
				</div >
				<div class = "row" >
					<div class = "col-sm-6" >
						<fieldset >
							<legend >I understand that...</legend >
							<div class="checkbox" >
								<label >
									<input type = "checkbox" class="agreeBox">
									Giving false or misleading information is a serious offence under the Criminal Code of the Commonwealth Government of Australia.
								</label >
							</div >
							<div class = "checkbox" >
								<label >
									<input type = "checkbox" class="agreeBox" >
									The Australian Skills Development Institute may vary or cancel any decision it makes if the information I have given is incorrect or incomplete.
								</label >
							</div >
							<div class = "checkbox" >
								<label >
									<input type = "checkbox" class="agreeBox" >
									The Australian Skills Development Institute may obtain official records from any educational institution I have previously attended.
								</label >
							</div >
						</fieldset >
					</div >
					<div class = "col-sm-6" >
						<fieldset >
							<legend >I agree...</legend >
							<div class = "checkbox" >
								<label >
									<input type = "checkbox" class="agreeBox" >
									To comply with the rules of admission and enrolment of the Australian Skills Development Institute.
								</label >
							</div >
							<div class = "checkbox" >
								<label >
									<input type = "checkbox" class="agreeBox" >
									To tell the Australian Skills Development Institute if there is any change to the information I have given in this application.
								</label >
							</div >
							<div class = "checkbox" >
								<label >
									<input type = "checkbox" class="agreeBox" >
									I have read and consent to the Australian Skills Development Institute’s Privacy Statement.
								</label >
							</div >
							<div class = "checkbox" >
								<label >
									<input type = "checkbox" class="agreeBox" >
									The information given in this application is true and correct.
								</label >
							</div >
							<div class = "checkbox" >
								<label >
									<input type = "checkbox" class="agreeBox" >
									I have read and accepted the
									<a href = "#" data-toggle="modal" data-target=".bs-example-modal-lg" >pre-registration</a >
									information.
								</label >
							</div >
						</fieldset >
					</div >
				</div >
				<hr />
                                 -->
				<div class="text-right">
					<!--<button type="button" id="courses_back" class="btn btn-default pull-left" >
						<i class="fa fa-arrow-left" ></i > Back
					</button >-->
				<!--<button type = "submit" id="registerBt" class="btn btn-success" disabled="disabled" title="Please check all of the boxes to continue..." >Register</button >-->
                                <button type = "submit" id="registerBt" class="btn btn-success" title="Please check all of the boxes to continue..." >Register</button >
				</div >
			</div>
            
		</div>
    </div>
    
 
    {{ Form::close() }}

		</div>


</div>
</div>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="ASDIPreRegistration" >
	<div class="modal-dialog modal-lg" >
		<div class="modal-content" >
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" >
					<span aria-hidden="true" >&times;</span >
				</button >
				<h4 class="modal-title">Quick Pre-Enrolment Navigation Guide</h4>
			</div>
			<div class="modal-body" >
				<h3 >General Information</h3 >
				<div >
					The purpose of this pre-enrolment information is to provide students with useful information to aid them in selecting a qualification program or course of study. The information focuses on processes to support students in attaining their objectives and goals. Australian Skills Development Institute (ASDI) offers students a comprehensive service delivery, open communication channels, and the requisite support to ensure that progression through their learning journey is both challenging and satisfying.
					<br >
					<br >
					ASDI offers nationally recognised qualifications utilising material which adheres to the various Australian Quality Training Framework Training Packages. These Training Packages allow for customisation of nationally recognised qualifications to meet a diverse range of markets, locations and businesses, thus meeting the needs of a diverse range of students and clients.
					<br >
					<br >
					Programs are designed for individuals who seek to develop, consolidate or broaden their current management and/or technical skills. ASDI's training programs are hands-on and practical, with a focus on competencies required in the business environment.
					<br >
					<br >
					Successful completion of a course provides the student with a nationally recognised workplace competency that may be used as a pathway to:
					<br >
					<br >
					<table>
						<tbody >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >enhance their employment opportunities; and/or</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" width="96%" >complete a full qualification; and/or</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >pursue a qualification at a higher level (e.g. Diploma), and/or</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >as an articulation pathway to a University qualification</td >
							</tr >
						</tbody >
					</table >
					<br >
					<br >
				</div >
				<h3 >Pre Requisites and/or Entry Requirements</h3 >
				<div >
					Where there are no mandatory requirements for entry to a qualification, students should still consider their current level of skills, attributes, experiences and potential, before determining the appropriate Certificate or Diploma level of qualification they wish to enrol in.
					<br >
					<br >
					<br >
				</div >
				<h3 >Enrolment and Induction</h3 >
				<div >
					Selection and enrolment at ASDI are carried out in an ethical and responsible manner. We encourage students to apply for enrolment through submission of a completed application form which provides full details of all relevant information so we may support any specific study requirements you have.
					<em >You are encouraged to identify on the enrolment form if you have a disability that may require learning support so that a Disability Access Plan can be developed for you. </em >
					<br >
					<br >
					When you complete an enrolment form you will be acknowledging that you have been provided with the information contained in the Pre-enrolment brochure, or have read and understood the pre-enrolment information on the website.
					<br >
					<br >
					You are deemed enrolled in a course once you have been selected, completed the enrolment form, paid the course fees, and received your Confirmation of Enrolment documentation.
					All students undergo an induction session performed by the trainer/facilitator at the start of the first workshop of the course. The delegated trainer will verify this by completing an Induction Checklist.
					<br >
					<br >
					As part of the enrolment process ASDI actively encourages students to apply for Credit Transfer or Recognition of Prior Learning (RPL) or existing skills. Applicants are required to complete an RPL Application form and will be assisted by admissions staff to clarify what type and the amount of evidence is to be gathered to support the application.
					<br >
					<br >
					<br >
				</div >
				<h3 >Recognition of Prior Learning (RPL)</h3 >
				<div >
					RPL is the acknowledgment of current skills and knowledge which have been gained from a range of experiences including work, volunteering, study and general life experiences. It is achieved through the assessment of evidence you provide against a set of criteria in a qualification. Fees apply. For further information, refer to the 'Recognition of Prior Skills' page on the ASDI website, or request a copy of the Recognition Procedure from Student Services.
					<br >
					<br >
					<br >
				</div >
				<h3 >Credit Transfer</h3 >
				<div >
					Credit transfer is the formal recognition that parts of some courses are equivalent in content and level to parts of others. If you are eligible, credit transfer results in:
					<br >
					<br >
					<table border="0" cellpadding="2" cellspacing="2" width="100%" >
						<tbody >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" width="96%" >automatic status or credit in part(s) of a course/qualification and</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >exemption from that part of the course.</td >
							</tr >
						</tbody >
					</table >
					<br >
					Status granted through credit transfer is recorded on your Student Academic Record. There are no fees when applying for recognition through credit transfer. For further information contact Student Services.
					<br >
					<br >
					<br >
				</div >
				<h3 >National Recognition</h3 >
				<div >
					National recognition is the recognition and acceptance by a Registered Training Organisation (RTO) of Australian Qualifications Framework (AQF) Qualification Parchments and Statements of Attainment issued by another RTO in Australia.
					<br >
					<br >
					ASDI accepts AQF Qualification Parchments and Statements of Attainment issued by other RTOs. There are no fees for national recognition.
					<br >
					<br >
					<br >
				</div >
				<h3 >University Articulation</h3 >
				<div >
					Certain ASDI courses may provide credit towards relevant University studies.
					<br >
					<br >
					<br >
				</div >
				<h3 >Employability Skills</h3 >
				<div >
					Industry has identified the significance of generic, employability skills in meeting the demands of current workplaces; skills which are crucial to gain and retain employment as many employers consider these as essential technical and management workplace skills.
					<br >
					<br >
					Employability Skills are defined as "skills required not only to gain employment, but also to progress within an enterprise so as to achieve one's potential and contribute successfully to enterprise strategic directions". There are eight employability skills: communication, teamwork, problem solving, initiative and enterprise, planning and organising, self-management, learning, and technology. The Employability Skills Summary lists the elements of each skill that have been identified for a qualification. From 1 July 2008, RTOs are required to inform all students issued with Training Package qualifications that Employability Skills Summaries for Training Package qualifications can be downloaded from
					<a href="http://employabilityskills.training.com.au" target="_blank" >http://employabilityskills.training.com.au</a >
					.
					<br >
					<br >
					<br >
				</div >
				<h3 >Privacy Policy</h3 >
				<div >
					ASDI is required to collect and store personal information in order to administer your application and enrolment, to monitor your academic progress and to provide other services. ASDI will ensure that information collected from you is not excessive and is only used for the purpose for which it was collected.
					<br >
					<br >
					<br >
				</div >
				<h3 >Fees</h3 >
				<div >
					Fees vary between courses, depending on the nature of the course and the materials required. Additional fees may be payable for materials, textbooks, or specialised services. Details of all fees are available prior to enrolment. Go to Course Information on the website for individual course fees, or contact Student Services for further information. Student Services will also provide access on request to our Fees and Refund Policy.
					<br >
					<br >
					Course fees are paid via the website using the secure PayPal method. Students will not have access to their course of study until payment has been received and cleared. On clearance of the fee payment, students will be provided with a Confirmation of Enrolment advice and other pertinent documentation. Online students will receive an email with their username (login details) and password to allow them to commence studies.
					<br >
					<br >
					Certain services that ASDI undertakes will attract additional costs. For example, while the RPL process and the relevant Parchment or Statement of Attainment is included in the cost of your course, if you require a replacement Certificate or Statement of Attainment, students will be charged a small fee for this service.
					<br >
					<br >
					<br >
				</div >
				<h3 >Withdrawal from study</h3 >
				<div >
					If you are thinking of withdrawing from study you should inform Student Services as soon as possible. Student Services staff are available to help resolve difficulties that might influence your decision to withdraw. You must complete a withdrawal/refund/adjustment of fees application form. This form is available through Student Services.
					<br >
					<br >
					<br >
				</div >
				<h3 >Refund Policy</h3 >
				<div >
					There are specific criteria under which a refund may be granted. Student enrolment can be deferred, suspended or cancelled in limited circumstances by the student or by ASDI. When deferral, suspension or cancellation of enrolment is initiated by ASDI, students have the right to appeal the decision.
					<br >
					<br >
					<table border="0" cellpadding="2" cellspacing="2" width="100%" >
						<tbody >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" width="96%" ><strong >ASDI-initiated refunds</strong >
									<br >
									Where a refund results from a situation caused by ASDI, e.g. cancellation of a class, a full refund of the fees will be given. No administration fee will apply.
								</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" ><strong >Student-initiated refunds</strong >
									<br >
									Refunds will not be granted automatically. Students are expected to be aware of work and personal commitments before enrolment. Students must demonstrate that the cause of withdrawal could not be reasonably anticipated before enrolment.
								</td >
							</tr >
						</tbody >
					</table >
					<br >
					A full refund (less administration fee) will be given if you withdraw 28 days before the course starts.
					<br >
					<br >
					A 50% refund (less administration fee) will be given if you withdraw for reasons of personal circumstances beyond your control, after the course has started, but within three weeks of the date the course started. Acceptable reasons may include:
					<br >
					<br >
					<table border="0" cellpadding="2" cellspacing="2" width="100%" >
						<tbody >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" width="96%" >sickness (verified by a medical certificate)</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >change of employment hours or location (verified by employer)</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >other valid reason at the discretion of the student, or</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >the result of a successful RPL application, received within three weeks of the date of the start of any units in which you have enrolled.</td >
							</tr >
						</tbody >
					</table >
					<br >
					<br >
				</div >
				<h3 >Educational Policies</h3 >
				<div >
					There are a number of policies relating to educational issues that may affect students' studies. These policies are referred to in the Student Handbook, and are available to view on request. These policies include:
					<br >
					<br >
					<table border="0" cellpadding="2" cellspacing="2" width="100%" >
						<tbody >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >Access &amp; Equity Policy</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >Assessment Policy</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >Complaints and Appeals Policy and Procedures</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >Alcohol &amp; Other Drug Policy</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >Occupational Health, Safety &amp; Welfare Policy</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >Recognition Policy and Procedures</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" width="96%" >Student Conduct Policy</td >
							</tr >
						</tbody >
					</table >
					<br >
					<br >
				</div >
				<h3 >Access and Equity</h3 >
				<div >
					ASDI is committed to the provision of a safe and inclusive teaching and learning environment, free from discrimination and harassment.
					<br >
					<br >
					ASDI will endeavour to meet the diverse learning needs of students through implementation of appropriate learning and assessment strategies. A range of learning styles is adopted in a variety of learning environments to cater for differences in learning styles, learning needs, and variations in learning opportunities.
					<br >
					<br >
					The language, literacy and numeracy needs of all students are important to ASDI. To support students in this area, we provide reasonable adjustments to the methods of delivery and assessment, where and when necessary or appropriate, to accommodate student requirements so that they will have a reasonable chance of success in their course. For further assistance and information contact Student Services.
					<br >
					<br >
					<br >
				</div >
				<h3 >Health and Safety</h3 >
				<div >
					ASDI is committed to handling occupational health, safety and welfare issues affecting students and staff. As students, you also have a legal duty to take care and protect your own health and safety and to avoid adversely affecting the health and safety of others. Other health and safety policies relate to smoking on campus, drugs and alcohol, abusive behaviour, etc.
					<br >
					<br >
					<strong >Note:</strong > Smoking is prohibited inside all buildings and facilities utilised by ASDI. Smoking is also restricted in other areas such as near entrances to buildings and external areas where work is being undertaken by staff or students. Please observe all no smoking zones and signs.
					<br >
					<br >
					<br >
				</div >
				<h3 >Support Services, including Disability</h3 >
				<div >
					If you require assistance because of a disability, ASDI will develop a personal Disability Access Plan to aid your progression through your study program.
					<br >
					<br >
					ASDI staff will assist students with a wide range of issues, or direct you towards the appropriate external services. These may include:
					<br >
					<br >
					<table border="0" cellpadding="2" cellspacing="2" width="100%" >
						<tbody >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" width="96%" >access</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >advocacy and mediation</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >educational support for students with a disability</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >learning support</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >counselling and guidance</td >
							</tr >
						</tbody >
					</table >
					<br >
					<br >
				</div >
				<h3 >Feedback Opportunities - "Tell us what you think"</h3 >
				<div >
					ASDI is committed to listening and responding to what you as a student have to say, so we can continuously improve our services to you. ASDI will listen respectfully to your feedback, treat all feedback confidentially, and undertake appropriate action where relevant. Your feedback is welcomed and assists ASDI to continually improve service delivery to students.
					<br >
					It is also a pleasure to hear about services that exceed your expectations too!
					<br >
					<br >
					<br >
				</div >
				<h3 >Student Code of Behaviour</h3 >
				<div >
					ASDI values:
					<br >
					<br >
					<table border="0" cellpadding="2" cellspacing="2" width="100%" >
						<tbody >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" width="96%" >difference and diversity</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >respect and cooperation</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >tolerance</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >academic debate</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >freedom of expression balanced with social responsibility</td >
							</tr >
						</tbody >
					</table >
					<br >
					While engaged in any ASDI activity, all students, staff, contractors and visitors are expected to behave in a considerate and courteous manner when dealing with other staff, students and members of the public.
					<br >
					<br >
					ASDI provides students with a healthy, nurturing and intellectually challenging study environment. Students must not act in a way that interferes directly or indirectly with the learning of others, or in a manner that hinders staff from carrying out their duties. Students enrolled in an ASDI course or who are considering enrolment are given access to classes and facilities which will be shared with staff and other students. It is therefore expected that students will behave in a manner that is acceptable to the wider community.
					<br >
					<br >
					You, other students and the staff at ASDI have a right to work and study in an environment free from harassment, discrimination or threatening behaviours. The standards of behaviour that ASDI expects from its students are:
					<br >
					<br >
					<table border="0" cellpadding="2" cellspacing="2" width="100%" >
						<tbody >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" width="96%" >a sense of self-responsibility about your study program</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >that you treat staff and fellow students courteously at all times</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >that students take reasonable care of ASDI property and equipment.</td >
							</tr >
						</tbody >
					</table >
					<br >
					Students can expect ASDI staff to:
					<br >
					<br >
					<table border="0" cellpadding="2" cellspacing="2" width="100%" >
						<tbody >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >treat people in a fair and equitable manner</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" width="96%" >be professional in performing the scope of their duties</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >provide a supportive and safe learning environment, free from discrimination and harassment.</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >Provide feedback to student's on their academic progress</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >allow access to student's own personal records on request</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >respect students' rights and privacy</td >
							</tr >
						</tbody >
					</table >
					<br >
					<br >
				</div >
				<h3 >Checklist - Information you need before enrolling</h3 >
				<div >
					<table border="0" cellpadding="2" cellspacing="2" width="100%" >
						<tbody >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >selection, enrolment and induction/orientation procedures</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >course information, including content and vocational outcomes</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >fees and charges, including refund policy and exemptions (where applicable)</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >provision for language, literacy and numeracy assistance</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >student support, including any external support services available to students</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >flexible learning and assessment procedures</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" width="4%" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" width="96%" >welfare and guidance services (if applicable)</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >complaints and appeal procedures</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >disciplinary procedures</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >staff responsible for access and equity</td >
							</tr >
							<tr >
								<td class="tbBack" valign="top" >
									<div align="center" >•</div >
								</td >
								<td class="tbBack" >recognition of prior learning (RPL) arrangements and credit transfer</td >
							</tr >
						</tbody >
					</table >
					<p>
					If you feel you have not been provided with all relevant information, please contact Student Services.
					</p >
				</div >
				<h3 >Disclaimer</h3 >
				<div >
					<p>The pre-enrolment information provided here, and information compiled in the printed Pre-enrolment Information Booklet handout, is for the benefit of students studying through ASDI. The content has been sourced from a variety of publications providing information on the National Training System. Information was correct as at May 2010, and is reviewed for currency on an annual basis.
					</p><p>
					ASDI reserves the right to alter policies at any time without prior notice. Policies will only be partially reproduced in any condensed pre-enrolment information. Complete policies and procedures are available for viewing on request.
					</p >
				</div >
				<h3 >Enquiries - Further Information</h3 >
				<div >
					For all course information enquiries:
					<br >
					<table border="0" cellpadding="2" cellspacing="2" width="100%" >
						<tbody >
							<tr >
								<td class="tbBack" width="18%" >Web:</td >
								<td class="tbBack" width="82%" >
									<a href="http://www.asdi.edu.au" target="_blank" >www.asdi.edu.au</a >
								</td >
							</tr >
							<tr >
								<td class="tbBack" >Phone:</td >
								<td class="tbBack" > (02) 8860 9532</td >
							</tr >
							<tr >
								<td class="tbBack" >International :</td >
								<td class="tbBack" >+61 2 8860 9532</td >
							</tr >
							<tr >
								<td class="tbBack" >Email:</td >
								<td class="tbBack" >
									<a href="mailto:enquiries@asdi.edu.au" >enquiries@asdi.edu.au</a >
								</td >
							</tr >
						</tbody >
					</table >
				</div >
			</div ><!-- accordion -->
			<br class="clear" >
		</div >
	</div >
</div >
	
@stop

@section('scripts')
	<script>
		$(document).ready(function() {

			$('#myTabs a').click(function (e) {
				e.preventDefault()
				$(this).tab('show')
			})

			$('#personal_continue').on('click', function(){
				$('#myTabs a[href="#education"]').tab('show');
			});
			$('#edu_continue').on('click', function(){
				$('#myTabs a[href="#courses"]').tab('show');
//				$('#courses').tab('show');
			});
			$('#edu_back').on('click', function(){
				$('#myTabs a[href="#personal"]').tab('show');
//				$('#personal').tab('show');
			});
			$('#courses_back').on('click', function(){
				$('#myTabs a[href="#education"]').tab('show');
//				$('#education').tab('show');
			});
			
			$('.agreeBox').on('change', function(){
				if(checkBoxes())
				{
					$('#registerBt').removeAttr('disabled');
				} else {
					$('#registerBt').attr('disabled','disabled');
				}
			})
		});
		
		function checkBoxes()
		{
			var _ok = true;
			
			$('.agreeBox').each(function(){
				if(!$(this).is(':checked'))
				{
					_ok = false;
					return false;
				}
			});
			
			return _ok;
		}
	</script>
	
@stop