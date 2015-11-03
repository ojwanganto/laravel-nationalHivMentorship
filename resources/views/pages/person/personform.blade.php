<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class=" svg"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="cache-control" content="no-cache">
<title>person_registration</title>
<link rel="stylesheet" type="text/css" media="screen" href="{!! asset('css/jquery-ui.css') !!}" />
<link rel="stylesheet" type="text/css" media="all" href="{!! asset('css/form/fonts7.css') !!}" />
<link rel="stylesheet" type="text/css" media="all" href="{!! asset('css/form/screen7.css') !!}" />
<link rel="stylesheet" type="text/css" media="print" href="{!! asset('css/form/print7.css') !!}" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" type="text/css" media="screen" href="{!! asset('css/form/responsive7.css') !!}" />
<style type="text/css" media="all">
/* LOOK AND FEEL */
body{
	background: #F5F5F5;
	background-size: cover;
	font-family: 'Roboto',sans-serif;
	font-size: 13px;
}

.form_table{
	width: 650px;
	margin-left: auto;
	margin-right: auto;
	border-radius: 4px;
	border: 0px solid #CCCCCC;
	background: #FFFFFF;
	background-size: cover;
	color: #333333;
	overflow: hidden;
	box-shadow: 0 1px 6px rgba(0,0,0,0.30);
}

.form_table a{
	color: #0D47A1;
}

.outside a{
	color: #0D47A1;
}

.form_table a:visited{
	color: #0D47A1;
}

.outside a:visited{
	color: #0D47A1;
}

.segment_header{
	width: auto;
	margin: 1px;
	color: #FFFFFF;
	background: #2196F3;
	background-size: cover;
	background-repeat: repeat;
	background-position: 50% 50%;
	border-radius: 4px;
}

.segment_header h1{
	border-radius: 4px;
	padding: 20px 10px;
	font-family: 'Roboto',sans-serif;
}

.q{
	padding: 10px;
	margin-bottom: 1px;
	margin-left: 1px;
	float: left;
	display: block;
}

.q .question{
	font-weight: bold;
}

.q .left_question_first{
	width: 15em;
}

.required .icon{
	background-image: none;
	background-position: left;
	background-repeat: no-repeat;
	font-size: 13px;
	padding-left: 14px;
}

.q .text_field{
	background: #FAFAFA;
	border: 1px solid #CCCCCC;
	border-radius: 2px;
	border-width: 1px;
	color: #333333;
	font-family: 'Roboto',sans-serif;
	font-size: 13px;
	margin: 1px 0;
	padding: 10px;
}

.q .file_upload{
	background: #FAFAFA;
	border: 1px solid #CCCCCC;
	border-radius: 2px;
	border-width: 1px;
	color: #333333;
	font-family: 'Roboto',sans-serif;
	font-size: 13px;
	margin-top: 1px;
	padding: 10px;
}

.q .file_upload_button{
	margin-top: 2px;
}

.q .inline_grid td{
	padding: 5px;
	vertical-align: baseline;
}

.q .drop_down{
	background: #FAFAFA;
	border: 1px solid #CCCCCC;
	border-radius: 2px;
	border-width: 1px;
	color: #333333;
	font-family: 'Roboto',sans-serif;
	font-size: 13px;
	margin: 1px 0;
	padding: 9px;
}

.q .matrix th{
	color: #FFFFFF;
	background: #64B5F6;
	padding: 5px;
	font-weight: bold;
	text-align: center;
	vertical-align: bottom;
}

.q .matrix td{
	padding: 5px;
	text-align: center;
	white-space: nowrap;
	height: 26px;
	border-bottom: 1px solid #CCCCCC;
	border-top: 1px solid #CCCCCC;
}

.q .matrix td.question{
	border-right: 1px solid #CCCCCC;
	font-weight: normal;
}

.q .matrix .multi_scale_sub th{
	font-weight: normal;
	border-top: 1px solid #CCCCCC !important;
	background: #999999;
}

.q .matrix .multi_scale_break{
	border-right: 1px solid #CCCCCC;
}

.q .matrix_row_dark td{
	color: #333333;
	background: #FAFAFA;
}

.q .matrix_row_dark td.question{
	color: #333333;
	background: #FAFAFA;
}

.q .matrix_row_light td{
	color: #333333;
	background: #FFFFFF;
}

.q .matrix_row_light td.question{
	color: #333333;
	background: #FFFFFF;
}

.q .rating_ranking td{
	padding: 5px;
}

.q .scroller{
	border: 1px solid #CCCCCC;
}

.highlight{
	background: #FFF9C4 !important;
}

tr.highlight td{
	background: #FFF9C4 !important;
}

.outside{
	color: #333333;
}

.outside_container{
	width: 650px;
	padding: 1em 0;
	margin-left: auto;
	margin-right: auto;
	text-align: center;
	color: #333333;
}

.outside_container .submit_button{
	color: #FFFFFF !important;
	background: #FF9800;
	background-size: auto;
	border-style: none;
	border-width: 1px;
	border-color: #FFFFFF;
	border-radius: 4px;
	text-align: center;
	font-family: 'Roboto',sans-serif;
	font-size: 14px;
	font-weight: bold;
	min-width: 30%;
	padding: 10px 20px;
	text-transform: uppercase;
	box-shadow: 0 1px 6px rgba(0,0,0,0.30);
}

.outside_container .submit_button:hover{
	background: #F57C00;
	border-color: #BBBBBB;
	background-size: auto;
}

.progressBarWrapper{
	border-radius: 4px;
	background: #FFFFFF;
	background-size: cover;
	border-color: #CCCCCC;
}

.progressBarBack{
	color: #FFFFFF;
	background-color: #FF9800;
}

.progressBarFront{
	color: #333333;
}

.ui-widget{
	font-family: 'Roboto',sans-serif;
}

.invalid{
	background: #FFEEEE;
}

.invalid .invalid_message{
	color: #FF0000;
	background: #FFEEEE;
	border: 1px solid #FF0000;
	border-radius: 2px;
}

.form_table.invalid{
	border: 2px solid #FF0000;
}

.invalid .matrix .invalid_row{
	background: #FFEEEE;
}

</style>
<script type="text/javascript" src="{!! asset('js/form/jquery.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/form/jquery-ui.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/form/form7.js') !!}"></script>
</head>
<body>
<form method="post" id="FSForm" action="https://fs21.formsite.com/res/submit" enctype="application/x-www-form-urlencoded" onsubmit="return Vromansys.Form.processSubmit(this);">

<div align="center" class="outside"><div>Person Registration Form</div></div>
<!-- BEGIN_ITEMS -->
<div class="form_table">

<div class="clear"></div>

<div id="q24" class="q full_width">
<a class="item_anchor" name="ItemAnchor0"></a>
<div class="segment_header" style="width:auto;text-align:Center;"><h1 style="font-size:18px;padding:20px 1em ;">Corporate Conference Signup</h1></div>
</div>

<div class="clear"></div>

<div id="q1" class="q full_width">
<a class="item_anchor" name="ItemAnchor1"></a>
<div class="full_width_space">Thank you for your interest in attending the [NAME OF CONFERENCE]. To reserve your seat, please fill out the information below.</div>
</div>

<div class="clear"></div>

<div id="q2" class="q required">
<a class="item_anchor" name="ItemAnchor2"></a>
<label class="question top_question" for="RESULT_TextField-2">First Name&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<input type="text" name="RESULT_TextField-2" class="text_field" id="RESULT_TextField-2" size="25" value="">
</div>
<div id="q4" class="q">
<a class="item_anchor" name="ItemAnchor3"></a>
<label class="question top_question" for="RESULT_TextField-3">Middle Name</label>
<input type="text" name="RESULT_TextField-3" class="text_field" id="RESULT_TextField-3" size="25" maxlength="255" value="">
</div>
<div id="q3" class="q required">
<a class="item_anchor" name="ItemAnchor4"></a>
<label class="question top_question" for="RESULT_TextField-4">Last Name&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<input type="text" name="RESULT_TextField-4" class="text_field" id="RESULT_TextField-4" size="25" value="">
</div>

<div class="clear"></div>

<div id="q13" class="q required">
<a class="item_anchor" name="ItemAnchor5"></a>
<label class="question top_question" for="RESULT_TextField-5">Email Address&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<input type="email" name="RESULT_TextField-5" class="text_field" id="RESULT_TextField-5" size="25" maxlength="255" value="">
</div>

<div class="clear"></div>

<div id="q14" class="q required">
<a class="item_anchor" name="ItemAnchor6"></a>
<span class="question top_question">Gender&nbsp;<b class="icon_required" style="color:#FF0000">*</b></span>
<table class="inline_grid">
<tbody><tr>
<td><input type="radio" name="RESULT_RadioButton-6" class="multiple_choice" id="RESULT_RadioButton-6_0" value="Radio-0"><label for="RESULT_RadioButton-6_0">Male</label></td>
<td><input type="radio" name="RESULT_RadioButton-6" class="multiple_choice" id="RESULT_RadioButton-6_1" value="Radio-1"><label for="RESULT_RadioButton-6_1">Female</label></td>
</tr>
</tbody></table>
</div>

<div class="clear"></div>

<div id="q25" class="q required">
<a class="item_anchor" name="ItemAnchor7"></a>
<label class="question top_question" for="RESULT_RadioButton-7">Cadre&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<select id="RESULT_RadioButton-7" name="RESULT_RadioButton-7" class="drop_down">
<option></option>
<option value="Radio-0">Clinician</option>
<option value="Radio-1">Lab-Tech</option>
<option value="Radio-2">Pharmacist</option>
<option value="Radio-3">Counselor</option>
</select>
</div>

<div class="clear"></div>

<div id="q5" class="q required">
<a class="item_anchor" name="ItemAnchor8"></a>
<label class="question top_question" for="RESULT_TextField-8">Organization&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<input type="text" name="RESULT_TextField-8" class="text_field" id="RESULT_TextField-8" size="25" value="">
</div>

<div class="clear"></div>

<div id="q26" class="q">
<a class="item_anchor" name="ItemAnchor9"></a>
<label class="question top_question" for="RESULT_TextField-9">Phone No</label>
<input type="text" name="RESULT_TextField-9" class="text_field" id="RESULT_TextField-9" placeholder="Phone No" size="25" maxlength="255" value="">
</div>

<div class="clear"></div>

<div id="q6" class="q">
<a class="item_anchor" name="ItemAnchor10"></a>
<label class="question top_question" for="RESULT_TextField-10">Address</label>
<input type="text" name="RESULT_TextField-10" class="text_field" id="RESULT_TextField-10" placeholder="Address" size="25" maxlength="255" value="">
</div>
<div class="clear"></div>

<div style="position:relative;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:36px;text-align:left;background-color:#fafafa;height:35px;margin-top:10px;overflow:hidden;">
</div>
</div>
<!-- END_ITEMS -->
<input type="hidden" name="EParam" value="FzpUCZwnDno=">
<div class="outside_container">
<div class="buttons_reverse"><input type="submit" name="Submit" value="Submit" class="submit_button" id="FSsubmit"></div></div>
<div align="center" class="outside"><div>Form Version 0.1</div></div>
</form>


</body></html>