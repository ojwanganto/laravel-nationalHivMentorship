@extends('formmaster')
@section('form-name', 'List of Mentees')
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
                   {!!HTML::link('/person-home','Person Home')!!}
           </div>
    </h4>
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('/person-mentor','Mentor')!!}
           </div>
       
    </h4>
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('/person-create','New Person')!!}
           </div>
       
    </h4>
   
@stop
@section('form-design')
<div id="result">
    <table width="60%" id="personList">
        <thead>
        <tr>
            <td><b>First Name</b></td>
            <td><b>Last Name</b></td>
            <td><b>Gender</b></td>
            <td><b>Cadre</b></td>
            <td><b>Facility</b></td>
        </tr>
        </thead>
        <tbody>
        @foreach ($mentees as $person)
        <tr>
            <td>{{$person->person->first_name}}</td>
            <td>{{$person->person->last_name}}</td>
            <td>{{$person->person->gender}}</td>
            <td>{{$person->person->cadre}}</td>
            <td>{{$person->person->facility}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@stop