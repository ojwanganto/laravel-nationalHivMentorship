@extends('formmaster')
@section('form-name', 'Register User')
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
                   {!!HTML::link('/register','Add User')!!}
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
@section('form-design')
<div class="clear"></div>
 @foreach($errors->all() as $error)
    <p class="alert alert-danger">{!!$error!!}</p>
 @endforeach
{!!Form::open(['url'=>'/register','class'=>'form form-horizontal','style'=>'margin-top:50px'])!!}
<div id="q1" class="q full_width">
<a class="item_anchor" name="ItemAnchor1"></a>
<div class="segment_header" style="width:auto;text-align:Left;"><h1 style="font-size:18px;padding:20px 1em ;">Registration Information</h1></div>
</div>

<div class="clear"></div>

<div id="q2" class="q required">
<a class="item_anchor" name="ItemAnchor2"></a>
<label class="question left_question_first" for="first_name">User Name&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<div class="inline_answer"><input type="text" name="name" class="text_field" id="name"  placeholder="User Name"  size="25" maxlength="255" value="" /></div>
</div>

<div class="clear"></div>

<div id="q6" class="q">
<a class="item_anchor" name="ItemAnchor3"></a>
<label class="question left_question_first" for="password">Password<b class="icon_required" style="color:#FF0000">*</b></label>
<div class="inline_answer"><input type="password" name="password" class="text_field" id="password"  placeholder="Password"  size="25" maxlength="255" value="" /></div>
</div>

<div class="clear"></div>

<div id="q6" class="q">
<a class="item_anchor" name="ItemAnchor3"></a>
<label class="question left_question_first" for="password_confirmation">Confirm Password<b class="icon_required" style="color:#FF0000">*</b></label>
<div class="inline_answer"><input type="password" name="password_confirmation" class="text_field" id="password_confirmation"  placeholder="Password"  size="25" maxlength="255" value="" /></div>
</div>
<div class="clear"></div>
<div class="outside_container">
<div  class="buttons_reverse"><input type="submit" name="Submit" value="Submit" class="submit_button" id="FSsubmit" /></div></div>
{!!Form::close()!!}

 
@stop