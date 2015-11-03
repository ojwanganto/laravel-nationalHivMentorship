@extends('formmaster')
@section('form-name', 'Session Indicator')
@section('form-design')

<form method="post" id="FSForm" action="indicator-create">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<!-- BEGIN_ITEMS -->
<div class="form_table">

<div class="clear"></div>

<div id="q4" class="q full_width">
<a class="item_anchor" name="ItemAnchor0"></a>
<div class="segment_header" style="width:auto;text-align:Left;"><h1 style="font-size:18px;padding:20px 1em ;">New Indicator</h1></div>
</div>

<div class="clear"></div>

<div id="q1" class="q required">
<a class="item_anchor" name="ItemAnchor1"></a>
<label class="question top_question" for="name">Indicator Name:&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<input type="text" name="name" class="text_field" id="name"  size="25" maxlength="25" value="" />
</div>

<div class="clear"></div>

<div id="q2" class="q required">
<a class="item_anchor" name="ItemAnchor2"></a>
<label class="question top_question" for="description">Description:&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<textarea name="description" class="text_field" id="description" rows="4" cols="60"></textarea>
</div>

<div class="clear"></div>

<div id="q2" class="q required">
<a class="item_anchor" name="ItemAnchor2"></a>
<label class="question top_question" for="indicator_number">Indicator Number:&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<input type="text" name="indicator_number" class="text_field" id="indicator_number"  size="25" maxlength="255" value="" />
</div>

<div class="clear"></div>
<div class="clear"></div>

<div style="position:relative;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:36px;text-align:left;background-color:#fafafa;height:35px;margin-top:10px;overflow:hidden;"></div>
</div>
<!-- END_ITEMS -->
<div class="outside_container">
<div class="buttons_reverse"><input type="submit" name="Submit" value="Submit" class="submit_button" id="FSsubmit" /></div></div>
</form>

@stop