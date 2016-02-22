@extends('formmaster')
@section('form-name', 'Reports')
@section('inline-js')
 <script>
   $(document).ready(function() {
	$("#county").change(function() {
		$.get('facility/loadsubcat/' + $(this).val(), function(data) {
			if (data != null) {
				$("#subcounty").empty();
				for (var i in data) {
					var f = data[i];
					
						$('#subcounty').append($('<option/>', { 
        				value: f.id,
        				text : f.name 
    					}));
					}
			}
		});	
		
    });

/*adding functionality for sub-county drop-down*/

	$("#subcounty").change(function() {
		$.get('facility/loadfacility/' + $(this).val(), function(data) {
			if (data != null) {
				$("#facility").empty();
				for (var i in data) {
					var f = data[i];
					
						$('#facility').append($('<option/>', { 
        				value: f.id,
        				text : f.name 
    					}));
					}
			}
		});	
		
    });

});

$(function() {
		$( "#m_date" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
	});
 $(function() {
		$( "#this_date" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
	});
</script>
@stop

@section('main-nav')
    <li>{!!HTML::link('dash-board','Home')!!}</li>
    <li>{!!HTML::link('my-profile','My Profile')!!}</li>
    <li>{!!HTML::link('mentorship-session','Mentorship Session')!!}</li>
    <li>{!!HTML::link('person-home','Mentor/Mentee')!!}</li>
    <li class='active'>{!!HTML::link('system-reports','Reporting')!!}</li>
    <li>{!!HTML::link('resource-center','Resource Centre')!!}</li>
    <li>{!!HTML::link('system-admin','Admin')!!}</li>
    <li class='last'>{!!HTML::link('logout','Logout')!!}</li>
@stop


@section('form-design')

<form id="FSForm" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="tool_id" value="1">

<!-- BEGIN_ITEMS -->
<div class="form_table">

<div class="clear"></div>

<div id="q7" class="q full_width">
<a class="item_anchor" name="ItemAnchor0"></a>
<div class="segment_header" style="width:auto;text-align:Center;background-repeat:repeat;background-color:transparent;background-image:url('/images/stock/2015/Education/Education03.jpg');background-size: cover;background-position: 50% 50%;"><h1 style="font-size:26px;font-family:'Sanchez',serif;padding:20px 1em ;background-color:rgba(0, 0, 0, 0.290196)">FACILITY</h1></div>
</div>

<div class="clear"></div>




<div id="q11" class="q required">
<a class="item_anchor" name="ItemAnchor3"></a>
<label class="question top_question" for="m_date">Date&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
 From <input type="text" name="m_date"  id="m_date" size="20" />
 to Date: <input type="text" name="this_date"  id="this_date" size="20" />
</div>  
<div class="clear"></div>
 <table>
     <tr>
<div id="q11" class="q required">
<a class="item_anchor" name="ItemAnchor3"></a>

<label class="question top_question" for="m_facility">County&nbsp;<b class="icon_required" >*</b></label>

</div>
<div id="q11" class="q required">
<a class="item_anchor" name="ItemAnchor3"></a>
	
<label class="question top_question" for="m_facility">Sub County&nbsp;<b class="icon_required" >*</b></label>

<select id="subcounty" class="form-control input-sm" name="subcounty_id">
</select>
</div>   
<div id="q11" class="q required">
<a class="item_anchor" name="ItemAnchor3"></a>
<label class="question top_question" for="m_facility">Facility&nbsp;<b class="icon_required" >*</b></label>
<select id="facility" class="form-control input-sm" name="facility_id">
</select>

</div>  
     </tr>
     
 </table>   
    
<div class="clear"></div>

<div id="q4" class="q required">

 
<div class="form-group">
    
</div>
</div>
<table border="1">
	<tr><th>Person ID</th><th>First Name</th><th>Last Name</th><th>Gender</th><th>Cadre</th><th>Facility</th></tr>
 @foreach($persons as $person)
	<tr>
		<td>
			 {{$person->person_id}}</td>
             <td>{{$person->first_name}}</td>
			<td> {{$person->last_name}}</td>
             <td>{{$person->gender}}</td>
			<td> {{$person->cadre}}</td>
           <td>  {{$person->facility}}
		</td>
	</tr>
	@endforeach
</table>    


@stop