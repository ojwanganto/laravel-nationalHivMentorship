@extends('formmaster')
@section('form-name', 'Person Registration Form')
@section('main-nav')
    <li>{!!HTML::link('dash-board','Home')!!}</li>
    <li>{!!HTML::link('my-profile','My Profile')!!}</li>
    <li>{!!HTML::link('mentorship-session','Mentorship Session')!!}</li>
    <li class='active'>{!!HTML::link('#','Mentor/Mentee')!!}</li>
    <li>{!!HTML::link('system-reports','Reporting')!!}</li>
    <li>{!!HTML::link('resource-center','Resource Centre')!!}</li>
    <li>{!!HTML::link('system-admin','Admin')!!}</li>
    <li class='last'>{!!HTML::link('logout','Logout')!!}</li>
@stop
@section('horizontal-nav')
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('/person-mentor','Mentor')!!}
           </div>
       
    </h4>
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('/person-mentee','Mentee')!!}
           </div>
    </h4>
   
@stop
@section('form-design')

<form method="post" id="FSForm" action="person-add">
    <!--onsubmit="return Vromansys.Form.processSubmit(this);"-->
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<!-- BEGIN_ITEMS -->
<div class="form_table">

<div class="clear"></div>

<div class="clear"></div>

<div id="q1" class="q full_width">
<a class="item_anchor" name="ItemAnchor1"></a>
<div class="segment_header" style="width:auto;text-align:Left;"><h1 style="font-size:18px;padding:20px 1em ;">Personal Information</h1></div>
</div>

<div class="clear"></div>

<div id="q2" class="q required">
<a class="item_anchor" name="ItemAnchor2"></a>
<label class="question left_question_first" for="first_name">First Name&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<div class="inline_answer"><input type="text" name="first_name" class="text_field" id="first_name"  placeholder="First Name"  size="25" maxlength="255" value="" /></div>
</div>

<div class="clear"></div>

<div id="q6" class="q">
<a class="item_anchor" name="ItemAnchor3"></a>
<label class="question left_question_first" for="middle_name">Middle Name</label>
<div class="inline_answer"><input type="text" name="middle_name" class="text_field" id="middle_name"  placeholder="Middle Name"  size="25" maxlength="255" value="" /></div>
</div>

<div class="clear"></div>

<div id="q3" class="q required">
<a class="item_anchor" name="ItemAnchor4"></a>
<label class="question left_question_first" for="last_name">Last Name&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<div class="inline_answer"><input type="text" name="last_name" class="text_field" id="last_name"  size="25" value="" /></div>
</div>

<div class="clear"></div>

<div id="q23" class="q required">
<a class="item_anchor" name="ItemAnchor6"></a>
<span class="question left_question_first">Gender&nbsp;<b class="icon_required" style="color:#FF0000">*</b></span>
<table class="inline_grid inline_answer">
<tr>
<td><input type="radio" name="gender" class="multiple_choice" id="gender_0" value="1" /><label for="gender_0" >Male</label></td>
<td><input type="radio" name="gender" class="multiple_choice" id="gender_1" value="2" /><label for="gender_1" >Female</label></td>
</tr>
</table>
</div>
 
<div class="clear"></div>

<div id="q4" class="q required">
<a class="item_anchor" name="ItemAnchor7"></a>
<label class="question left_question_first" for="email">Email Address&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<div class="inline_answer"><input type="email" name="email" class="text_field" id="email"  size="40" maxlength="255" value="" /></div>
</div>

<div class="clear"></div>

<div id="q10" class="q">
<a class="item_anchor" name="ItemAnchor8"></a>
<label class="question left_question_first" for="phone">Phone Number</label>
<div class="inline_answer"><input type="text" name="phone" class="text_field" id="phone"  size="25" maxlength="255" value="" /></div>
</div>
    
<div class="clear"></div>

<div id="q24" class="q required">
<a class="item_anchor" name="ItemAnchor5"></a>
<label class="question left_question_first" for="cadre">Cadre&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<select id="cadre" name="cadre" class="drop_down inline_answer">
<option></option>
<option value="1">Clinician</option>
<option value="2">Pharmacist</option>
<option value="3">Lab Tech</option>
<option value="4">Counselor</option>
<option value="5">SSD</option>
</select>
</div>

<div class="clear"></div>

<div id="q10" class="q">
<a class="item_anchor" name="ItemAnchor8"></a>
<label class="question left_question_first" for="facility">Facility</label>
<div class="inline_answer"><input type="text" name="facility" class="text_field" id="facility"  size="25" maxlength="255" value="" /></div>
</div>
<div class="clear"></div>

<div id="q23" class="q required">
<a class="item_anchor" name="ItemAnchor6"></a>
<span class="question left_question_first">Current Role&nbsp;<b class="icon_required" style="color:#FF0000">*</b></span>
<table class="inline_grid inline_answer">
<tr>
<td><input type="radio" name="role" class="multiple_choice" id="role1" value="1" /><label for="role1" >Mentor</label></td>
<td><input type="radio" name="role" class="multiple_choice" id="role2" value="2" /><label for="role2" >Mentee</label></td>
</tr>
</table>
</div>
 
<div class="clear"></div>

<div style="position:relative;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:36px;text-align:left;background-color:#fafafa;height:35px;margin-top:10px;overflow:hidden;"> </div>
</div>
<!-- END_ITEMS -->
<div class="outside_container">
<div class="buttons_reverse"><input type="submit" name="Submit" value="Submit" class="submit_button" id="FSsubmit" /></div></div>
</form>
 
@stop