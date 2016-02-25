@extends('formmaster')
@section('form-name', 'Reports')
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
@section('inline-js')
 <script>
   $(document).ready(function() {
	$( "#from_date" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
	$( "#to_date" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
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


 
</script>
@stop

@section('form-design')

<div>
From <input type="text" name="from_date"  id="from_date" size="20" />
To Date: <input type="text" name="to_date"  id="to_date" size="20" />
    
<select name="county" id="county" class="form-control input-sm">
	<option selected>Select County</option>
            
        @foreach($countys as $county)
            <option value="{{ $county->id }}"> {{$county->name}}</option>
        @endforeach
</select>
    
<select id="subcounty" class="form-control input-sm" name="subcounty_id"></select>
<select id="facility" class="form-control input-sm" name="facility_id"></select>
</div>

@stop