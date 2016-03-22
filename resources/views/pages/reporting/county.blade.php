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
                   {!!HTML::link('facility-dashboard','Facility Level')!!}
           </div>
       
    </h4>
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('subcounty-dashboard','Sub-County Level')!!}
           </div>
    </h4>
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('county-dashboard','County Level')!!}
           </div>
    </h4>

@stop
@section('inline-js')
 <script>
   $(document).ready(function() {
     
   //var dataTable = $("#summaryOfResults").dataTable();
    //$('#summaryOfResults').dataTable();
    $("#run").click(function (){
       getReports(); 
    });
    
     $("#excel").click(function (){
       downloadReport(); 
    });
	$( "#from_date" ).datepicker({
			changeMonth: true,
			changeYear: true,
            dateFormat: 'dd-mm-yy'
		});
    $("#from_date").datepicker("setDate", new Date());
	$( "#to_date" ).datepicker({
			changeMonth: true,
			changeYear: true,
            dateFormat: 'dd-mm-yy'
		});
    $("#to_date").datepicker("setDate", new Date());

});
     
function downloadReport () {
    var from_date = $('#from_date').val();
    var to_date = $('#to_date').val();
    var county = $('#county').val();
    var subcounty = $('#subcounty').val();
    
    var paramObj = {
        from_date: from_date,
        to_date: to_date,
        county: county,
        subcounty: subcounty
    };
    var rtype =3;
    var stringParam = from_date + '/' + to_date + '/' + county + '/' + subcounty + '/0/' + rtype;
    
              $.get('reporting/download/'+ stringParam, function (data){
                if (data != null) {
                  var iframe = document.getElementById("downloadFrame");
                  iframe .src = 'reporting/download/'+ stringParam;
			     }
            });	
}

function getReports () {
    var from_date = $('#from_date').val();
    var to_date = $('#to_date').val();
    var county = $('#county').val();
    
    var paramObj = {
        from_date: from_date,
        to_date: to_date,
        county: county
    }
    var rtype =3;
    var stringParam = from_date + '/' + to_date + '/' + county + '/0/0/' + rtype;
    
            $.get('reporting/sessions/'+ stringParam , function(data) {
			if (data != null) {
				$("#facility").empty();
                $('#facility').append($('<option/>', {text : 'Select Facility' }));
                var columns = ['Sub-County', 'County','Clinical', 'Counseling', 'Pharmacy', 'Laboratory', 'Nutrition', 'Total Sessions'];
				writeTable(data, columns);
			}
		});	
    
    
    
    //$('#result').html('Params: ' + stringParam);
}
     
function writeTable(data, columns) {
    var tbody = $('#body');
    tbody.empty();
    var tr = $('<tr/>').appendTo(tbody);
    for (var j in columns) {
        var col = columns[j];
        tr.append('<td>' + col + '</td>');
        
    }
    for (var i in data) {
        var mSession = data[i];
        var tr = $('<tr/>').appendTo(tbody); 
        tr.append('<td>' + mSession.subcountyName + '</td>');
        tr.append('<td>' + mSession.countyName + '</td>');
        tr.append('<td>' + mSession.Clinical + '</td>');
        tr.append('<td>' + mSession.Counseling + '</td>');
        tr.append('<td>' + mSession.Pharmacy + '</td>');
        tr.append('<td>' + mSession.Laboratory + '</td>');
        tr.append('<td>' + mSession.Nutrition + '</td>');
        tr.append('<td>' + mSession.sessions + '</td>');
        
			             
    }
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

<input type="button" id="run" name="run" value="Get Report" />
&nbsp;&nbsp;&nbsp;<img id="excel" src="{!! asset('img/excel.png') !!}">
</div>
<iframe id="downloadFrame" style="display:none"></iframe>
<br/>
<div id='result'>
    <table id='summaryOfResults'  width='100%'>
        <thead></thead>
        <tbody id="body"></tbody>
    </table>
</div>

@stop