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
@section('horizontal-nav')
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('facility','Facility Level')!!}
           </div>
       
    </h4>
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('county','Sub-County Level')!!}
           </div>
    </h4>
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('reports','Regional Level')!!}
           </div>
    </h4>
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('#','National Level')!!}
           </div>
    </h4>
@stop
@section('inline-js')
 <script>
   $(document).ready(function() {
    $("#run").click(function (){
       getReports(); 
    });
	$( "#from_date" ).datepicker({
			changeMonth: true,
			changeYear: true,
            dateFormat: 'dd-mm-yy'
		});
	$( "#to_date" ).datepicker({
			changeMonth: true,
			changeYear: true,
            dateFormat: 'dd-mm-yy'
		});
	$("#county").change(function() {
		$.get('facility/loadsubcat/' + $(this).val(), function(data) {
            
            $("#subcounty").empty();
            $("#subcounty").append($('<option/>', {text : 'Select Sub-County' }));
            $("#facility").empty();
            $('#facility').append($('<option/>', {text : 'Select Facility' }));
			
            if (data != null) {
				                
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
                $('#facility').append($('<option/>', {text : 'Select Facility' }));
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

function getReports () {
    var from_date = $('#from_date').val();
    var to_date = $('#to_date').val();
    var county = $('#county').val();
    var subcounty = $('#subcounty').val();
    var facility = $('#facility').val();
    
    var paramObj = {
        from_date: from_date,
        to_date: to_date,
        county: county,
        subcounty: subcounty,
        facility: facility
    };
    var stringParam = from_date + '/' + to_date + '/' + county + '/' + subcounty + '/' + facility;
    
    		//$.get('facility/loadfacility/' + $(this).val(), function(data) {
            $.get('reporting/sessions/'+ stringParam , function(data) {
			if (data != null) {
				$("#facility").empty();
                $('#facility').append($('<option/>', {text : 'Select Facility' }));
				for (var i in data) {
                    $mSession = data[i];
                    console.log($mSession);
                      
			             
				}
			}
		});	
    
    
    
    $('#result').html('Params: ' + stringParam);
}


 
</script>
@stop

@section('form-design')

<div>
From <input type="text" name="from_date"  id="from_date" size="20" />
To  <input type="text" name="to_date"  id="to_date" size="20" />
&nbsp;&nbsp;&nbsp; County:    
<select name="county" id="county" class="form-control input-sm">
	<option selected>Select County</option>
            
        @foreach($countys as $county)
            <option value="{{ $county->id }}"> {{$county->name}}</option>
        @endforeach
</select>
&nbsp;&nbsp;&nbsp; Sub-County:    
<select id="subcounty" class="form-control input-sm" ></select>
&nbsp;&nbsp;&nbsp; Facility:
<select id="facility" class="form-control input-sm" ></select>
<input type="button" id="run" name="run" value="Get Report" />
</div>
<br/>
<div id='result'>
</div>

@stop