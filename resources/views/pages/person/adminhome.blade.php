@extends('formmaster')
@section('form-name', 'Admin Home')
@section('main-nav')
    <li>{!!HTML::link('dash-board','Home')!!}</li>
    <li>{!!HTML::link('my-profile','My Profile')!!}</li>
    <li>{!!HTML::link('mentorship-session','Mentorship Session')!!}</li>
    <li>{!!HTML::link('person-home','Mentor/Mentee')!!}</li>

    <li>{!!HTML::link('system-reports','Reporting')!!}</li>
    <li>{!!HTML::link('resource-center','Resource Centre')!!}</li>
    <li class='active'>{!!HTML::link('#','Admin')!!}</li>
    <li class='last'>{!!HTML::link('logout','Logout')!!}</li>
@stop
@section('horizontal-nav')
        <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('/system-setup','Form Indicators setup')!!}
           </div>
       
    </h4>
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('/facility-upload','Facility Import')!!}
           </div>
       
    </h4>
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('/register-user','Add User')!!}
           </div>
    </h4>
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('/manage-tools','Manage Session Tools')!!}
           </div>
    </h4>
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('/indicator-list','Manage Session Indicators')!!}
           </div>
    </h4>
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('/system-backup','System Backup')!!} 
           </div>
    </h4>
@stop
