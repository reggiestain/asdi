
<div role="tabpanel" class="tab-pane fade in active m-b-30" id="courses">
    <div class="white-page-bg m-b-30 p-b-20" >
        <div class="row">
            <div class="col-sm-12">
                <h2><span class="title_box"></span> Our Courses</h2>

                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">			  

                    @foreach($categories as $category)
                    <div class="panel panel-default">
                        <div class="panel-heading national" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#{{ $category->id }}" aria-expanded="true" aria-controls="national-qualifications">
                                    {{ $category->name }}
                                </a>
                            </h4>
                        </div>

                        <div id="{{ $category->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">

                            <div class="panel-body">
                                <!--<div class="row">
                                @foreach($category->courses as $course)    
                                <div class="white-bg red-top-bottom p-tb-30 text-left">
                                    <h4>{{ $course->name }}	 </h4>
                                    <a href="/content/certificate-iv">read more</a>
                                </div>  
                                @endforeach  
                                </div>-->
                                @include('partials.courses')
                            </div>

                        </div>

                    </div>	
                    @endforeach  

                </div>                        
            </div >
        </div>
        <div class="clearfix"></div>
    </div>   

</div>  
<div role="tabpanel" class="tab-pane fade m-b-30" id="profile">
    <div class="white-page-bg m-b-30 p-b-20" >
        <div class="row">
            <div class="col-md-12">

                <h2 class="text-right"><i class="fa fa-edit"></i> Edit Your Profile</h2>
                <hr/>
                {{ Form::open(['url'=>'/portal/profile','class'=>'form', 'role'=>'form']) }}
                <div class="row" >
                    <div class="col-sm-2" >
                        <div class="form-group" >
                            {{ Form::label('title', 'Title', ['class'=>'control-label']) }}
                            {{ Form::select('title',['Mr'=>'Mr','Mrs'=>'Mrs','Miss'=>'Miss','Ms'=>'Ms','Dr'=>'Dr'], $user->title,['class'=>'form-control input-sm']) }}
                        </div >
                    </div >
                    <div class="col-sm-5" >
                        <div class="form-group" >
                            {{ Form::label('first_name', 'First Name', ['class'=>'control-label']) }}
                            {{ Form::text('first_name', $user->first_name,['class'=>'form-control input-sm']) }}
                        </div >
                    </div >
                    <div class="col-sm-5" >
                        <div class="form-group" >
                            {{ Form::label('last_name', 'Last Name', ['class'=>'control-label']) }}
                            {{ Form::text('last_name', $user->last_name,['class'=>'form-control input-sm']) }}
                        </div >
                    </div >
                </div >
                <div class="row" >
                    <div class="col-sm-4" >
                        <div class="form-group" >
                            {{ Form::label('email', 'Email', ['class'=>'control-label']) }}
                            {{ Form::text('email', $user->email,['class'=>'form-control input-sm ']) }}
                        </div >
                    </div >


                    <div class="col-sm-4" >
                        <div class="form-group" >
                            {{ Form::label('birth_date', 'Date of Birth', ['class'=>'control-label']) }}
                            {{ Form::text('birth_date', $user->birth_date,['class'=>'form-control input-sm datepicker']) }}
                        </div >
                    </div >
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

                </div >
                <hr />
                <div class="row" >
                    <div class="col-sm-4" >
                        <fieldset >
                            <legend >Home Address</legend >
                            <div class="form-group" >
                                {{ Form::label('home_address', 'Address', ['class'=>'control-label']) }}
                                {{ Form::textarea('home_address', $user->home_address,['class'=>'form-control input-sm', 'rows'=>5]) }}
                            </div >
                            <div class="form-group" >
                                {{ Form::label('home_postal_code', 'Postal Code', ['class'=>'control-label']) }}
                                {{ Form::text('home_postal_code', $user->home_postal_code,['class'=>'form-control input-sm']) }}
                            </div >
                            <div class="form-group" >
                                {{ Form::label('home_country_id', 'Country', ['class'=>'control-label']) }}
                                {{ Form::select('home_country_id',$countries, $user->home_country_id or 190,['class'=>'form-control input-sm']) }}
                            </div >
                        </fieldset >
                    </div >
                    <div class="col-sm-4" >
                        <fieldset >
                            <legend >Postal Address</legend >
                            <div class="form-group" >
                                {{ Form::label('postal_address', 'Address', ['class'=>'control-label']) }}
                                {{ Form::textarea('postal_address', $user->postal_address,['class'=>'form-control input-sm', 'rows'=>5]) }}
                            </div >
                            <div class="form-group" >
                                {{ Form::label('postal_postal_code', 'Postal Code', ['class'=>'control-label']) }}
                                {{ Form::text('postal_postal_code', $user->postal_postal_code,['class'=>'form-control input-sm']) }}
                            </div >
                            <div class="form-group" >
                                {{ Form::label('postal_country_id', 'Country', ['class'=>'control-label']) }}
                                {{ Form::select('postal_country_id',$countries, $user->postal_country_id or 190,['class'=>'form-control input-sm']) }}
                            </div >
                        </fieldset >
                    </div >
                    <div class="col-sm-4" >
                        <fieldset >
                            <legend >Contact Numbers</legend >
                            <div class="form-group" >
                                {{ Form::label('tel', 'Home Phone', ['class'=>'control-label']) }}
                                {{ Form::text('tel', $user->tel,['class'=>'form-control input-sm']) }}
                            </div >
                            <div class="form-group" >
                                {{ Form::label('mobile', 'Mobile No.', ['class'=>'control-label']) }}
                                {{ Form::text('mobile', $user->mobile,['class'=>'form-control input-sm']) }}
                            </div >
                            <div class="form-group" >
                                {{ Form::label('fax', 'Fax (If available)', ['class'=>'control-label']) }}
                                {{ Form::text('fax', $user->fax,['class'=>'form-control input-sm']) }}
                            </div >
                        </fieldset >
                    </div >
                </div >

                <div class="form-group">

                    <input class="btn-primary btn" type="submit" value="Submit Changes">
                    <input class="btn-inverse btn" type="reset" value="Reset">

                </div>
                {{ Form::close() }}
            </div>
        </div>
        <hr class="m-tb-30" />
        <div class="row" >
            <div class="col-sm-12">

                <h2 class="text-right"><i class="fa fa-edit" ></i > Change Your Password</h2 >
                <hr/>
            </div>
        </div>

        <div class="row m-b-30" >
            <div class="col-sm-6 col-sm-offset-3" >

                {{ Form::open(['url'=>'/portal/change-password','class'=>'form', 'role'=>'form']) }}
                <div class="form-group {{ $errors->has('oldPassword') ? 'has error' : '' }}" for="oldPassword" >
                    <label class="control-label" for="oldPassword" >Old Password</label >

                    <input name="oldPassword" value="" type="password" class="form-control" placeholder="Old Password" >
                    {{ ($errors->has('oldPassword') ? $errors->first('oldPassword') : '') }}

                </div >
                <div class="form-group {{ $errors->has('newPassword') ? 'has error' : '' }}" for="newPassword" >
                    <label class="control-label" for="newPassword" >New Password</label >

                    <input name="newPassword" value="" type="password" class="form-control" placeholder="New Password" >
                    {{ ($errors->has('newPassword') ?  $errors->first('newPassword') : '') }}

                </div >
                <div class="form-group {{ $errors->has('newPassword_confirmation') ? 'has error' : '' }}" for="newPassword_confirmation" >
                    <label class=" control-label" for="newPassword_confirmation" >Confirm New Password</label >

                    <input name="newPassword_confirmation" value="" type="password" class="form-control" placeholder="New Password Again" >
                    {{ ($errors->has('newPassword_confirmation') ? $errors->first('newPassword_confirmation') : '') }}

                </div >
                <div class="form-group" >

                    <input class="btn-primary btn" type="submit" value="Change Password" >
                    <input class="btn-inverse btn" type="reset" value="Reset" >

                </div >
                </form >
            </div>


        </div>
    </div>
</div>
<div role="tabpanel" class="tab-pane fade m-b-30" id="invoice">

</div>
<div role="tabpanel" class="tab-pane fade m-b-30" id="document">
    <div class="white-page-bg m-b-30 p-b-20" >
        <div class="row">
            <div class="col-md-12">

                <h2 class="text-right"><i class="fa fa-file-word-o"></i> Your Documents</h2>



                <div class="row" >
                    <div class="col-sm-12" >

                        @if(count($documents))
                        <table class="table" >
                            <tr >
                                <td width="50" >Type</td >
                                <td >Name</td >
                                <td >Size</td >
                                <td >Date</td >
                            </tr >
                            @foreach($documents as $document)
                            <tr >
                                <td width="50" class="text-center" >
                                    <img src="{{ asset('img/docs/'.$document->extension.'.png') }}" />
                                </td >
                                <td >
                                    <a href="/uploads/{{ Sentry::getUser()->id }}/{{ $document->filename }}" target="_blank"> {{ $document->name }}</a >

                                </td >
                                <td width="100">{{ $document->size }}kb</td >
                                <td width="150">{{ $document->created_at }}</td >
                            </tr >
                            @endforeach
                        </table >
                        @else
                        <hr/>
                        <h4 class="text-danger text-center">You have not uploaded any Documents.</h4>
                        @endif

                    </div >
                </div >

                <hr/>

                <div class="row m-b-30" >
                    <div class="col-sm-8 col-sm-offset-2" >
                        <div class="panel panel-primary" >
                            <div class="panel-heading" >
                                <h3 class="panel-title" >Upload a Document</h3 >
                            </div >
                            <div class="panel-body" >

                                <form action="/portal/documents" method="post" name="docForm" id="docForm" enctype="multipart/form-data" class="form form-horizontal" >
                                    {{ Form::token() }}

                                    <div class="form-group {{ ($errors->has('name') ? 'has-error' : '') }}" >
                                        <label class="col-sm-2 control-label" >Name:</label >
                                        <div class="col-sm-9" >
                                            <input type="text" name="name" id="name" class="form-control" value="{{ Input::old('name') }}" />
                                            <span class="help-block" >Give a name your file to make it easier to find</span >
                                        </div >
                                    </div >

                                    <div class="form-group {{ ($errors->has('fileUpload') ? 'has-error' : '') }}" >
                                        <label class="col-sm-2 control-label" >File:</label >
                                        <div class="col-sm-9" id="file-holder" >
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput" >
                                                <div class="form-control" data-trigger="fileinput" >
                                                    <i class="glyphicon glyphicon-file fileinput-exists" ></i >
                                                    <span class="fileinput-filename" ></span >
                                                </div >
                                                <span class="input-group-addon btn btn-default btn-file" >
                                                    <span class="fileinput-new" >Select file</span >
                                                    <span class="fileinput-exists" >Change</span >
                                                    <input type="file" name="fileUpload" id="fileUpload" />
                                                </span >
                                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput" >Remove</a >
                                            </div >
                                            <span class="help-block text-danger" >IMPORTANT: Do not upload files with ' or / in the name!</span >
                                        </div >
                                    </div >
                                    <div class="form-group" >
                                        <label class="col-sm-2 control-label" >Notes:</label >
                                        <div class="col-sm-9" >
                                            <textarea class="form-control" name="note" ></textarea >
                                            <span class="help-block" ></span >
                                        </div >
                                    </div >
                                    <div class="row" >
                                        <div class="col-sm-6 col-sm-offset-2" >
                                            <button type="submit" class="btn btn-success" name="sub" id="sub" >
                                                <i class="fa fa-upload" ></i > Upload
                                            </button >
                                        </div >
                                    </div >
                                </form >
                            </div >
                        </div >
                    </div >
                </div >

            </div>
        </div>    
    </div>
</div>




