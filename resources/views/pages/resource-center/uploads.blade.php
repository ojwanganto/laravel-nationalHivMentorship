@extends('formmaster')
@section('form-name', 'Uploads')
@section('main-nav')
    <li>{!!HTML::link('dash-board','Home')!!}</li>
    <li>{!!HTML::link('my-profile','My Profile')!!}</li>
    <li>{!!HTML::link('mentorship-session','Mentorship Session')!!}</li>
    <li>{!!HTML::link('person-home','Mentor/Mentee')!!}</li>
    <li>{!!HTML::link('system-reports','Reporting')!!}</li>
    <li class='active'>{!!HTML::link('#','Resource Centre')!!}</li>
    <li>{!!HTML::link('system-admin','Admin')!!}</li>
    <li class='last'>{!!HTML::link('logout','Logout')!!}</li>
@stop
@section('horizontal-nav')
	 <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('files-upload','Upload Files')!!}
           </div>
       
    </h4>
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('manual-upload','User Manuals')!!}
           </div>
       
    </h4>
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('guideline-upload','NASCOP Guidelines')!!}
           </div>
    </h4>
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('others-upload','Others')!!}
           </div>
    </h4>
@stop
@section('form-design')

<div class="about-section">
   <div class="text-content">
     <div class="span7 offset1">
        @if(Session::has('success'))
          <div class="alert-box success">
          <h2>{!! Session::get('success') !!}</h2>
          </div>
        @endif
        <div class="secure">Please Select Document Type</div>
        {!! Form::open(array('url'=>'files-upload','method'=>'POST', 'files'=>true)) !!}
		 {!! Form::select('files', [
			   '1' => 'User Manuals',
			   '2' => 'NASCOP Guidelines',
			   '3' => 'Others']
			) !!}
         <div class="control-group">
          <div class="controls">
         {!! Form::file('guidelinefile') !!}
	  <p class="errors">{!!$errors->first('guidelinefile')!!}</p>
	@if(Session::has('error'))
	<p class="errors">{!! Session::get('error') !!}</p>
	@endif
        </div>
        </div>
        <div id="success"> </div>
      {!! Form::submit('Submit', array('class'=>'send-btn')) !!}
      {!! Form::close() !!}
      </div>
   </div>
</div>


@stop