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
    <div class="container-fluid">
        <div data-wizard-init>
            <ul class="steps">
                <li data-step="1">Personal Details</li>
                <li data-step="2">Language</li>
                <li data-step="3">Disability</li>
                <li data-step="4">Education</li>
                <li data-step="5">Employment Status</li>
                <li data-step="6">Upload</li>

            </ul>
            <div class="steps-content">               
                <div data-step="1"> 
                    <h4>Personal Details</h4>
                    <div class="row">
                        <div class="col-sm-2" >
                            <div class="form-group" >
                                {{ Form::label('title', 'Title', ['class'=>'control-label']) }}
                                {{ Form::select('title',['Mr'=>'Mr','Mrs'=>'Mrs','Miss'=>'Miss','Ms'=>'Ms','Dr'=>'Dr'], $user->title,['class'=>'form-control input-sm']) }}
                            </div >
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm-4" >
                            <div class="form-group" >
                                {{ Form::label('first_name', 'First Name', ['class'=>'control-label']) }}
                                {{ Form::text('first_name', $user->first_name,['class'=>'form-control input-sm']) }}
                            </div >
                        </div >
                        <div class="col-sm-4" >
                            <div class="form-group" >
                                {{ Form::label('last_name', 'Last Name', ['class'=>'control-label']) }}
                                {{ Form::text('last_name', $user->last_name,['class'=>'form-control input-sm']) }}
                            </div >
                        </div >


                        <div class="col-sm-4" >
                            <div class="form-group" >
                                {{ Form::label('email', 'Email', ['class'=>'control-label']) }}
                                {{ Form::text('email', $user->email,['class'=>'form-control input-sm ']) }}
                            </div >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4" >
                            <div class="form-group" >
                                {{ Form::label('birth_date', 'Date of Birth', ['class'=>'control-label']) }}
                                {{ Form::text('birth_date', $user->birth_date,['class'=>'form-control input-sm datepicker']) }}
                            </div >
                        </div>
                        <div class="col-sm-4" >
                            <div class="form-group" >
                                {{ Form::label('gender', 'Gender', ['class'=>'control-label']) }}
                                <br />
                                <label class="radio-inline" >
                                    <input type="radio" name="gender" id="inlineRadio1" value="m" >
                                    Male
                                </label >
                                <label class="radio-inline" >
                                    <input type="radio" name="gender" id="inlineRadio2" value="f" >
                                    Female
                                </label >
                            </div >
                        </div >
                        <div class="col-sm-4" >
                            <div class="form-group" >
                                {{ Form::label('tel', 'Home Phone', ['class'=>'control-label']) }}
                                {{ Form::text('tel', $user->tel,['class'=>'form-control input-sm']) }}
                            </div >
                        </div>
                    </div>
                </div>
                <div data-step="2">
                    <h4>Language</h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" >
                                {{ Form::label('english', 'Is English your First Language?', ['class'=>'control-label']) }}
                                {{ Form::select('english',['Yes'=>'Yes','No'=>'No','--Choose One--'=>'--Choose One--'],'--Choose One--',['class'=>'form-control input-sm','id'=>'eng']) }}
                            </div >
                        </div>      
                    </div>  
                    <div class="row" style="display:none" id="other-lan">
                        <div class="col-sm-6">    
                            <div class="form-group">
                                {{ Form::label('english', 'what language do you usually speak?', ['class'=>'control-label']) }}
                                {{ Form::text('other_language', $user->tel,['class'=>'form-control input-sm']) }}
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm-12" >
                            <div class="form-group" >
                                {{ Form::label('gender', 'How well do you speak English?', ['class'=>'control-label']) }}
                                <br />
                                <label class="checkbox-inline"><input type="checkbox" value="">Very Well</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">Well</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">Minimal</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">Not at all</label>
                            </div >
                        </div >
                    </div>
                </div>

                <div data-step="3">
                    <h4>Disability</h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" >
                                {{ Form::label('disability', 'Do you consider that you have a disability, impairment / long term condition that may affect your participation in the course?', ['class'=>'control-label']) }}
                                {{ Form::select('disability',['Yes'=>'Yes','No'=>'No','--Choose One--'=>'--Choose One--'],'--Choose One--',['class'=>'form-control input-sm','id'=>'disable']) }}
                            </div >
                        </div>      
                    </div> 
                    <div class="row" id="disable-options" style="display:none">                                             
                        <div class="form-group col-sm-6"> 
                            {{ Form::label('english', 'Please select one of the following:', ['class'=>'control-label']) }}   

                            {{Form::select('english',['Hearing / Deafness'=>'Hearing / Deafness','Vision'=>'Vision','Acquired Brain Impairment'=>'Acquired Brain Impairment','Physical'=>'Physical','Intellectual'=>'Intellectual',
                                      'Learning'=>'Learning','Medical Condition'=>'Medical Condition','Mental Illness'=>'Mental Illness','Not Specified'=>'Not Specified','--Choose One--'=>'--Choose One--'], '--Choose One--',['class'=>'form-control input-sm','id'=>'eng']) }} 
                        </div>    
                    </div> 

                </div>
                <div data-step="4">
                    <h4>Education</h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" >
                                {{ Form::label('education', 'What is your highest level of education COMPLETED?', ['class'=>'control-label']) }}
                                {{ Form::select('disability',['Completed Year 11 or Equivalent'=>'Completed Year 11 or Equivalent','Completed Year 12 or Equivalent'=>'Completed Year 12 or Equivalent',
                                                              'Certificate (ii, iii, iv)'=>'Certificate (ii, iii, iv)','Diploma'=>'Diploma','Advanced Diploma'=>'Advanced Diploma','Undergraduate Degree'=>'Undergraduate Degree',
                                                              'Postgraduate Degree'=>'Postgraduate Degree','Masters/Doctorate'=>'Masters/Doctorate','--Choose One--'=>'--Choose One--'       
                                                              ],
                                                '--Choose One--',['class'=>'form-control input-sm','id'=>'disable']) }}
                            </div >
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            {{ Form::label('qualification_title', 'What was the title of your highest qualification?', ['class'=>'control-label']) }}
                            {{ Form::text('qualification_title',null,['class'=>'form-control input-sm']) }}
                        </div >
                    </div>    

                    <div class="row">
                        <div class="form-group col-sm-6">
                            {{ Form::label('quali_duration', 'What was the duration of the course? ', ['class'=>'control-label']) }}
                            {{ Form::text('quali_duration',null,['class'=>'form-control input-sm']) }}
                        </div >
                    </div>    

                    <div class="row">
                        <div class="form-group col-sm-6">
                            {{ Form::label('quali_end', 'When did you complete the course?', ['class'=>'control-label']) }}
                            {{ Form::text('quali_end',null,['class'=>'form-control input-sm']) }}
                        </div >
                    </div>    
                </div>
                <div data-step="5">
                    <h4>Employment Status</h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" >
                                {{ Form::label('emp_status', 'Are you currently employed?', ['class'=>'control-label']) }}
                                {{ Form::select('emp_status',['Yes'=>'Yes','No'=>'No','--Choose One--'=>'--Choose One--'],'--Choose One--',['class'=>'form-control input-sm','id'=>'emp-status']) }}
                            </div >
                        </div>   
                    </div>    
                    <div id="emp" style="display:none">
                        <div class="row">                                             
                            <div class="form-group col-sm-6"> 
                                {{ Form::label('english', 'Please select one of the following:', ['class'=>'control-label']) }}   

                                {{Form::select('english',['1-5'=>'1-5','6-10'=>'6-10','10+'=>'10+','--Choose One--'=>'--Choose One--'],
                                     '--Choose One--',['class'=>'form-control input-sm']) }} 
                            </div>    
                        </div> 
                        <div class="row">    
                            <div class="form-group col-sm-6">
                                {{ Form::label('job_title', 'What is your job title?', ['class'=>'control-label']) }}
                                {{ Form::text('job_title',null,['class'=>'form-control input-sm']) }}
                            </div >
                        </div>   
                    </div>                       
                </div>
                <div data-step="6">
                    <h4>File Upload</h4>

                    <blockquote>
                        <p>
                            Please upload the following documents now; resume, Identification copy (passport or drivers license) and copy of your highest qualification.   
                        </p>
                    </blockquote>
                    <br>
                    <input id="input-708" name="kartik-input-708[]" type="file" multiple=true class="file-loading">
                    <br>
                    <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thank you for your application.</h4>
      </div>
      <div class="modal-body">
          <p> I have read, understood and agree to the terms and conditions.</p>
          <p> I have read, understood and agree to the pre-enrolment information document</p>t.
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Accept</button>  
        <button type="button" class="btn btn-default text-left" data-dismiss="modal">Cancel</button>
      </div>
    </div>

  </div>
</div>
                </div>
            </div>

        </div>
    </div>    
</div>

@stop

@section('scripts')

@stop
