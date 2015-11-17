@extends('formmaster')
@section('form-name', 'Mentorship Session Tool')
<!--//"../session-create"-->
@section('main-nav')
    <li>{!!HTML::link('dash-board','Home')!!}</li>
    <li class='active'>{!!HTML::link('#','Mentorship Session')!!}</li>
    <li>{!!HTML::link('person-home','Mentor/Mentee')!!}</li>
    <li>{!!HTML::link('system-reports','Reporting')!!}</li>
    <li>{!!HTML::link('system-admin','Admin')!!}</li>
    <li class='last'>{!!HTML::link('logout','Logout')!!}</li>
@stop
@section('horizontal-nav')
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('/session-tool/2','Laboratory')!!}
           </div>
       
    </h4>
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('/session-tool/3','Counseling')!!}
           </div>
    </h4>
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('/session-tool/4','Nutrition')!!} 
           </div>
    </h4>
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('/session-tool/5','Pharmacy')!!} 
           </div>
    </h4>
     <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('/indicator-list','Mentorship Indicators')!!} 
           </div>
    </h4>
@stop
@section('form-design')
<script type="text/javascript">
    function getIsChecked(GrpName) {
	  var sel = document.getElementsByName(GrpName);
	  var fnd = -1;
	  var str = '';
	  for (var i=0; i<sel.length; i++) {
	    if (sel[i].checked == true) { str = sel[i].value;  fnd = i; }
	  }
return str;
} 
function validate(){

	 var msg = '';
	 if(getIsChecked('ind_1') == '') { msg = 'Please select Appearance & demeanor.' }
	 if(getIsChecked('ind_2') == '')  { msg = 'Please select Patient-centered.' }
     if(getIsChecked('ind_3') == '') { msg = 'Please select Time management.' }
	 if(getIsChecked('ind_4') == '')  { msg = 'Please select Communication.' }
     if(getIsChecked('ind_5') == '') { msg = 'Please select Review of patient file.' }
	 if(getIsChecked('ind_6') == '')  { msg = 'Please select Vitals recording, interpreting & triage.' }
     if(getIsChecked('ind_7') == '') { msg = 'Please select Appropriate history taking.' }
	 if(getIsChecked('ind_8') == '')  { msg = 'Please select Physical exam (routine & targeted).' }
     if(getIsChecked('ind_9') == '') { msg = 'Please select Diagnosis/differential diagnosis.' }
	 if(getIsChecked('ind_10') == '')  { msg = 'Please select Correct management of OIs.' }
     if(getIsChecked('ind_11') == '') { msg = 'Please select TB screening, diagnosis, treatment & prevention.' }
	 if(getIsChecked('ind_12') == '')  { msg = 'Please select Decision-making on ART eligibility' }
     if(getIsChecked('ind_13') == '') { msg = 'Please select Correct prescription of ARVs.' }
	 if(getIsChecked('ind_14') == '')  { msg = 'Please select Monitoring of ARV therapy.' }
     if(getIsChecked('ind_15') == '') { msg = 'Please select Identification & management of treatment failure.' }
	 if(getIsChecked('ind_16') == '')  { msg = 'Please select Identification & management of ARV ADRs.' }
     if(getIsChecked('ind_17') == '') { msg = 'Please select Correct use of prophylactic medications.' }
	 if(getIsChecked('ind_18') == '')  { msg = 'Please select Assessment of adherence.' }
     if(getIsChecked('ind_19') == '') { msg = 'Please select Prevention messages.' }
	 if(getIsChecked('ind_20') == '')  { msg = 'Please select Proper documentation.' }
     if(getIsChecked('ind_21') == '')  { msg = 'Please select Referrals & linkages to other services.' }
	 if (msg == '') { return true; } else { alert(msg);  return false; }
	}
</script>
<form method="post" id="FSForm" action="../session-create" onsubmit="return validate()">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="tool_id" value="1">

<!-- BEGIN_ITEMS -->
<div class="form_table">

<div class="clear"></div>

<div id="q7" class="q full_width">
<a class="item_anchor" name="ItemAnchor0"></a>
<div class="segment_header" style="width:auto;text-align:Center;background-repeat:repeat;background-color:transparent;background-image:url('/images/stock/2015/Education/Education03.jpg');background-size: cover;background-position: 50% 50%;"><h1 style="font-size:26px;font-family:'Sanchez',serif;padding:20px 1em ;background-color:rgba(0, 0, 0, 0.290196)">Clinical</h1></div>
</div>

<div class="clear"></div>

<div id="q9" class="q required">
<a class="item_anchor" name="ItemAnchor1"></a>
<label class="question top_question" for="mentor">Mentor&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<select id="mentor" name="mentor" class="drop_down">
<option></option>
@foreach ($mentors as $mentor)
<option value="{{$mentor->mentor_id}}">{{$mentor->person->first_name}} {{$mentor->person->last_name}}</option>
@endforeach
</select>
</div>
<div id="q10" class="q required">
<a class="item_anchor" name="ItemAnchor2"></a>
<label class="question top_question" for="mentee">Mentee&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<select id="mentee" name="mentee" class="drop_down">
<option></option>
@foreach ($mentees as $mentee)
<option value="{{$mentee->mentee_id}}">{{$mentee->person->first_name}} {{$mentee->person->last_name}}</option>
@endforeach
</select>
</div>
<div id="q11" class="q required">
<a class="item_anchor" name="ItemAnchor3"></a>
<label class="question top_question" for="m_date">Date&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<input type="text" name="m_date" class="text_field calendar_field" id="m_date" size="10" maxlength="10" datemax="" datemin="" value="" date="yy-mm-dd" />

</div>
<div id="q11" class="q required">
<a class="item_anchor" name="ItemAnchor3"></a>
<label class="question top_question" for="m_facility">Facility&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<input type="text" name="m_facility" class="text_field" id="m_facility" size="20"  />

</div>
<div class="clear"></div>

<div id="q4" class="q required">

<table>
<tr>
    <th colspan="4" style="text-align:left">Known Gaps</th>
</tr>
<tr>
<td>Data Source</td>
<td colspan="3">Gap</td>
</tr>
<tr>
<td>Self-reported by mentee</td>
<td colspan="3"><input type="text" name="self_reported_gap" size="50"/></td>
</tr>
<tr>
<td>Previous mentoring session</td>
<td colspan="3"><input type="text" name="previous_session_gap" size="50"/></td>
</tr>
<tr>
<td>Other:</td>
    <td colspan="3"><input type="text" name="other_gap" size="50"/></td>
</tr>
</table>    
<div class="clear"></div>   

<table>
<tr>
    <th colspan="4" style="text-align:left">Session Objectives</th>
</tr>
<tr>
<td colspan="4"><textarea name="session_objectives" cols="70"></textarea></td>
</tr>

</table>    

<a class="item_anchor" name="ItemAnchor4"></a>
<span class="question top_question">Please choose the best answer for each question. The mentee...&nbsp;<b class="icon_required" style="color:#FF0000">*</b></span>
<table width="100%" style="background-color:rgba(0, 0, 0, 0.290196)">
    <tr>
        <td colspan="4"><b> Scoring Key</b></td>
    </tr>
    <tr>
        <td>1 = Needs Improvement</td>
        <td>2 = Satisfactory</td>
        <td>3 = Excellent</td>
        <td>4 = Not Applicable</td>
    </tr>
</table>
<table class="matrix">

<tr>
<th scope="col" style="text-align:left">1. Professionalism</th><th scope="col">1</th><th scope="col">2</th><th scope="col">3</th><th scope="col">4</th><th colspan="2" scope="col">Comment</th>
</tr>
<tr class="matrix_row_light">
<td class="question" style="width:px;">a. Appearance & demeanor</td>
<td><input type="radio" name="ind_1" class="multiple_choice" id="RESULT_RadioButton-4-0-0" value="1" /></td>
<td><input type="radio" name="ind_1" class="multiple_choice" id="RESULT_RadioButton-4-0-1" value="2" /></td>
<td><input type="radio" name="ind_1" class="multiple_choice" id="RESULT_RadioButton-4-0-2" value="3" /></td>
<td><input type="radio" name="ind_1" class="multiple_choice" id="RESULT_RadioButton-4-0-3" value="88" /></td>
<td colspan="2"><input name="comm_1" type="text" size="30"/></td>
</tr>
<tr class="matrix_row_dark">
<td class="question" style="width:px;">b. Patient-centered</td>
<td><input type="radio" name="ind_2" class="multiple_choice" id="freedom-0" value="1" /></td>
<td><input type="radio" name="ind_2" class="multiple_choice" id="freedom-1" value="2" /></td>
<td><input type="radio" name="ind_2" class="multiple_choice" id="freedom-2" value="3" /></td>
<td><input type="radio" name="ind_2" class="multiple_choice" id="freedom-3" value="88" /></td>
<td colspan="2"><input name="comm_2" type="text" size="30"/></td>
</tr>
<tr class="matrix_row_light">
<td class="question" style="width:px;">c. Time management</td>
<td><input type="radio" name="ind_3" class="multiple_choice" id="answer_questions-0" value="1" /></td>
<td><input type="radio" name="ind_3" class="multiple_choice" id="answer_questions-1" value="2" /></td>
<td><input type="radio" name="ind_3" class="multiple_choice" id="answer_questions-2" value="3" /></td>
<td><input type="radio" name="ind_3" class="multiple_choice" id="answer_questions-3" value="88" /></td>
<td colspan="2"><input name="comm_3" type="text" size="30"/></td>
</tr>
<tr class="matrix_row_dark">
<td class="question" style="width:px;">d. Communication</td>
<td><input type="radio" name="ind_4" class="multiple_choice" id="clear_communication-0" value="1" /></td>
<td><input type="radio" name="ind_4" class="multiple_choice" id="clear_communication-1" value="2" /></td>
<td><input type="radio" name="ind_4" class="multiple_choice" id="clear_communication-2" value="3" /></td>
<td><input type="radio" name="ind_4" class="multiple_choice" id="clear_communication-3" value="88" /></td>
<td colspan="2"><input name="comm_4" type="text" size="30"/></td>
</tr>
<tr>
<th scope="col" style="text-align:left">2. Competency</th><th scope="col">1</th><th scope="col">2</th><th scope="col">3</th><th scope="col">4</th><th colspan="2" scope="col">&nbsp;</th>
</tr>
<tr class="matrix_row_light">
<td class="question" style="width:px;">a. Review of patient file</td>
<td><input type="radio" name="ind_5" class="multiple_choice" id="RESULT_RadioButton-4-0-0" value="1" /></td>
<td><input type="radio" name="ind_5" class="multiple_choice" id="RESULT_RadioButton-4-0-1" value="2" /></td>
<td><input type="radio" name="ind_5" class="multiple_choice" id="RESULT_RadioButton-4-0-2" value="3" /></td>
<td><input type="radio" name="ind_5" class="multiple_choice" id="RESULT_RadioButton-4-0-3" value="88" /></td>
<td colspan="2"><input name="comm_5" type="text" size="30"/></td>
</tr>
<tr class="matrix_row_dark">
<td class="question" style="width:px;">b. Vitals recording, interpreting & triage</td>
<td><input type="radio" name="ind_6" class="multiple_choice" id="freedom-0" value="1" /></td>
<td><input type="radio" name="ind_6" class="multiple_choice" id="freedom-1" value="2" /></td>
<td><input type="radio" name="ind_6" class="multiple_choice" id="freedom-2" value="3" /></td>
<td><input type="radio" name="ind_6" class="multiple_choice" id="freedom-3" value="88" /></td>
<td colspan="2"><input name="comm_6" type="text" size="30"/></td>
</tr>
<tr class="matrix_row_light">
<td class="question" style="width:px;">c. Appropriate history taking</td>
<td><input type="radio" name="ind_7" class="multiple_choice" id="answer_questions-0" value="1" /></td>
<td><input type="radio" name="ind_7" class="multiple_choice" id="answer_questions-1" value="2" /></td>
<td><input type="radio" name="ind_7" class="multiple_choice" id="answer_questions-2" value="3" /></td>
<td><input type="radio" name="ind_7" class="multiple_choice" id="answer_questions-3" value="88" /></td>
<td colspan="2"><input name="comm_7" type="text" size="30"/></td>
</tr>
<tr class="matrix_row_dark">
<td class="question" style="width:px;">d. Physical exam (routine & targeted)</td>
<td><input type="radio" name="ind_8" class="multiple_choice" id="clear_communication-0" value="1" /></td>
<td><input type="radio" name="ind_8" class="multiple_choice" id="clear_communication-1" value="2" /></td>
<td><input type="radio" name="ind_8" class="multiple_choice" id="clear_communication-2" value="3" /></td>
<td><input type="radio" name="ind_8" class="multiple_choice" id="clear_communication-3" value="88" /></td>
<td colspan="2"><input name="comm_8" type="text" size="30"/></td>
</tr>
<tr class="matrix_row_light">
<td class="question" style="width:px;">e. Diagnosis/differential diagnosis (based on history, physical, investigations); WHO staging</td>
<td><input type="radio" name="ind_9" class="multiple_choice" id="answer_questions-0" value="1" /></td>
<td><input type="radio" name="ind_9" class="multiple_choice" id="answer_questions-1" value="2" /></td>
<td><input type="radio" name="ind_9" class="multiple_choice" id="answer_questions-2" value="3" /></td>
<td><input type="radio" name="ind_9" class="multiple_choice" id="answer_questions-3" value="88" /></td>
<td colspan="2"><input name="comm_9" type="text" size="30"/></td>
</tr>
<tr class="matrix_row_dark">
<td class="question" style="width:px;">f. Correct management of OIs</td>
<td><input type="radio" name="ind_10" class="multiple_choice" id="clear_communication-0" value="1" /></td>
<td><input type="radio" name="ind_10" class="multiple_choice" id="clear_communication-1" value="2" /></td>
<td><input type="radio" name="ind_10" class="multiple_choice" id="clear_communication-2" value="3" /></td>
<td><input type="radio" name="ind_10" class="multiple_choice" id="clear_communication-3" value="88" /></td>
<td colspan="2"><input name="comm_10" type="text" size="30"/></td>
</tr>
<tr class="matrix_row_light">
<td class="question" style="width:px;">g. TB screening, diagnosis, treatment & prevention</td>
<td><input type="radio" name="ind_11" class="multiple_choice" id="answer_questions-0" value="1" /></td>
<td><input type="radio" name="ind_11" class="multiple_choice" id="answer_questions-1" value="2" /></td>
<td><input type="radio" name="ind_11" class="multiple_choice" id="answer_questions-2" value="3" /></td>
<td><input type="radio" name="ind_11" class="multiple_choice" id="answer_questions-3" value="88" /></td>
<td colspan="2"><input name="comm_11" type="text" size="30"/></td>
</tr>
<tr class="matrix_row_dark">
<td class="question" style="width:px;">h. Decision-making on ART eligibility</td>
<td><input type="radio" name="ind_12" class="multiple_choice" id="clear_communication-0" value="1" /></td>
<td><input type="radio" name="ind_12" class="multiple_choice" id="clear_communication-1" value="2" /></td>
<td><input type="radio" name="ind_12" class="multiple_choice" id="clear_communication-2" value="3" /></td>
<td><input type="radio" name="ind_12" class="multiple_choice" id="clear_communication-3" value="88" /></td>
<td colspan="2"><input name="comm_12" type="text" size="30"/></td>
</tr>
<tr class="matrix_row_light">
<td class="question" style="width:px;">i. Correct prescription of ARVs</td>
<td><input type="radio" name="ind_13" class="multiple_choice" id="answer_questions-0" value="1" /></td>
<td><input type="radio" name="ind_13" class="multiple_choice" id="answer_questions-1" value="2" /></td>
<td><input type="radio" name="ind_13" class="multiple_choice" id="answer_questions-2" value="3" /></td>
<td><input type="radio" name="ind_13" class="multiple_choice" id="answer_questions-3" value="88" /></td>
<td colspan="2"><input name="comm_13" type="text" size="30"/></td>
</tr>
<tr class="matrix_row_dark">
<td class="question" style="width:px;">j. Monitoring of ARV therapy</td>
<td><input type="radio" name="ind_14" class="multiple_choice" id="clear_communication-0" value="1" /></td>
<td><input type="radio" name="ind_14" class="multiple_choice" id="clear_communication-1" value="2" /></td>
<td><input type="radio" name="ind_14" class="multiple_choice" id="clear_communication-2" value="3" /></td>
<td><input type="radio" name="ind_14" class="multiple_choice" id="clear_communication-3" value="88" /></td>
<td colspan="2"><input name="comm_14" type="text" size="30"/></td>
</tr>
<tr class="matrix_row_light">
<td class="question" style="width:px;">k. Identification & management of treatment failure</td>
<td><input type="radio" name="ind_15" class="multiple_choice" id="answer_questions-0" value="1" /></td>
<td><input type="radio" name="ind_15" class="multiple_choice" id="answer_questions-1" value="2" /></td>
<td><input type="radio" name="ind_15" class="multiple_choice" id="answer_questions-2" value="3" /></td>
<td><input type="radio" name="ind_15" class="multiple_choice" id="answer_questions-3" value="88" /></td>
<td colspan="2"><input name="comm_15" type="text" size="30"/></td>
</tr>
<tr class="matrix_row_dark">
<td class="question" style="width:px;">l. Identification & management of ARV ADRs</td>
<td><input type="radio" name="ind_16" class="multiple_choice" id="clear_communication-0" value="1" /></td>
<td><input type="radio" name="ind_16" class="multiple_choice" id="clear_communication-1" value="2" /></td>
<td><input type="radio" name="ind_16" class="multiple_choice" id="clear_communication-2" value="3" /></td>
<td><input type="radio" name="ind_16" class="multiple_choice" id="clear_communication-3" value="88" /></td>
<td colspan="2"><input name="comm_16" type="text" size="30"/></td>
</tr>
<tr class="matrix_row_light">
<td class="question" style="width:px;">m. Correct use of prophylactic medications</td>
<td><input type="radio" name="ind_17" class="multiple_choice" id="answer_questions-0" value="1" /></td>
<td><input type="radio" name="ind_17" class="multiple_choice" id="answer_questions-1" value="2" /></td>
<td><input type="radio" name="ind_17" class="multiple_choice" id="answer_questions-2" value="3" /></td>
<td><input type="radio" name="ind_17" class="multiple_choice" id="answer_questions-3" value="88" /></td>
<td colspan="2"><input name="comm_17" type="text" size="30"/></td>
</tr>
<tr class="matrix_row_dark">
<td class="question" style="width:px;">n. Assessment of adherence</td>
<td><input type="radio" name="ind_18" class="multiple_choice" id="clear_communication-0" value="1" /></td>
<td><input type="radio" name="ind_18" class="multiple_choice" id="clear_communication-1" value="2" /></td>
<td><input type="radio" name="ind_18" class="multiple_choice" id="clear_communication-2" value="3" /></td>
<td><input type="radio" name="ind_18" class="multiple_choice" id="clear_communication-3" value="88" /></td>
<td colspan="2"><input name="comm_18" type="text" size="30"/></td>
</tr>
<tr class="matrix_row_light">
<td class="question" style="width:px;">o. Prevention messages (PHDP)</td>
<td><input type="radio" name="ind_19" class="multiple_choice" id="answer_questions-0" value="1" /></td>
<td><input type="radio" name="ind_19" class="multiple_choice" id="answer_questions-1" value="2" /></td>
<td><input type="radio" name="ind_19" class="multiple_choice" id="answer_questions-2" value="3" /></td>
<td><input type="radio" name="ind_19" class="multiple_choice" id="answer_questions-3" value="88" /></td>
<td colspan="2"><input name="comm_19" type="text" size="30"/></td>
</tr>
<tr class="matrix_row_dark">
<td class="question" style="width:px;">p. Proper documentation</td>
<td><input type="radio" name="ind_20" class="multiple_choice" id="clear_communication-0" value="1" /></td>
<td><input type="radio" name="ind_20" class="multiple_choice" id="clear_communication-1" value="2" /></td>
<td><input type="radio" name="ind_20" class="multiple_choice" id="clear_communication-2" value="3" /></td>
<td><input type="radio" name="ind_20" class="multiple_choice" id="clear_communication-3" value="88" /></td>
<td colspan="2"><input name="comm_20" type="text" size="30"/></td>
</tr>
<tr class="matrix_row_light">
<td class="question" style="width:px;">q. Referrals & linkages to other services </td>
<td><input type="radio" name="ind_21" class="multiple_choice" id="answer_questions-0" value="1" /></td>
<td><input type="radio" name="ind_21" class="multiple_choice" id="answer_questions-1" value="2" /></td>
<td><input type="radio" name="ind_21" class="multiple_choice" id="answer_questions-2" value="3" /></td>
<td><input type="radio" name="ind_21" class="multiple_choice" id="answer_questions-3" value="88" /></td>
<td colspan="2"><input name="comm_21" type="text" size="30"/></td>
</tr>

</table>
<table>
<tr><th colspan="4" style="text-align:left">Summary of Mentee Strengths</th></tr>
<tr><td colspan="4"><textarea cols="70" name="mentee_strength"></textarea></td></tr>
</table>
 
<table>
<tr><th colspan="4" style="text-align:left">Summary of Mentee Areas for Improvement (with specific steps to address each priority area)</th></tr>
<tr><td colspan="4"><textarea cols="70" name="mentee_improvement_areas"></textarea></td></tr>
</table>

<table>
<tr><th colspan="4" style="text-align:left">Other Comments</th></tr>
<tr><td colspan="4"><textarea cols="70" name="session_comments"></textarea></td></tr>
</table>
</div>
<div class="clear"></div>

<div style="position:relative;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:36px;text-align:left;background-color:#fafafa;height:35px;margin-top:10px;overflow:hidden;">

</div>
</div>
<!-- END_ITEMS -->
<input type="hidden" name="EParam" value="FzpUCZwnDno=" />
<div class="outside_container">
<div class="buttons_reverse"><input type="submit" name="Submit" value="Submit" class="submit_button" id="FSsubmit" /></div></div>
</form>

@stop