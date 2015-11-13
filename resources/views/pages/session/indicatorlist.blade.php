@extends('formlistmaster')
@section('inline-js')
<script type="text/javascript">

    $(document).ready(function(){
        var dataTable = $("#indicatorList").dataTable();
    });

</script>
@stop
@section('form-name', 'List of Session Indicators')
@section('main-nav')
    <li>{!!HTML::link('dash-board','Home')!!}</li>
    <li  class='active'>{!!HTML::link('#','Mentorship Session')!!}</li>
    <li>{!!HTML::link('person-home','Mentor/Mentee')!!}</li>
    <li>{!!HTML::link('system-reports','Reporting')!!}</li>
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
    <table id="indicatorList">
        <thead>
        <tr>
            <td><b>Number</b></td>
            <td><b>Indicator Name</b></td>
            <td><b>Description</b></td>
            
        </tr>
        </thead>
        <tbody>
        @foreach ($indicators as $indicator)
        <tr>
            <td>{{$indicator->indicator_id}}</td>
            <td>{{$indicator->name}}</td>
            <td>{{$indicator->description}}</td>
        @endforeach
        </tbody>
    </table>
</div>
@stop