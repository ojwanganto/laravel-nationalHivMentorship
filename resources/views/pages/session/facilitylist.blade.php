@extends('formlistmaster')
@section('inline-js')
<script type="text/javascript">

    $(document).ready(function(){
        var dataTable = $("#facilityList").dataTable();
    });

</script>
@stop
@section('form-name', 'List of Session Indicators')
@section('main-nav')
    <li>{!!HTML::link('dash-board','Home')!!}</li>
    <li  class='active'>{!!HTML::link('#','Mentorship Session')!!}</li>
    <li>{!!HTML::link('person-home','Mentor/Mentee')!!}</li>
    <li>{!!HTML::link('system-reports','Reporting')!!}</li>
    <li>{!!HTML::link('system-admin','Admin')!!}</li>
    <li class='last'>{!!HTML::link('logout','Logout')!!}</li>
@stop
@section('horizontal-nav')
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('/session-tool/1','Clinical')!!}
           </div>
       
    </h4>
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
   
@stop

@section('form-design')
<div id="result">
    <table id="facilityList">
        <thead>
        <tr>
            <td><b>Facility Code</b></td>
            <td><b>Facility Name</b></td>
            <td><b>Type</b></td>
            
        </tr>
        </thead>
        <tbody>
        @foreach ($facilities as $facility)
        <tr>
            <td>{{$facility->facility_code}}</td>
            <td>{{$facility->name}}</td>
            <td>{{$facility->type}}</td>
        @endforeach
        </tbody>
    </table>
</div>
@stop