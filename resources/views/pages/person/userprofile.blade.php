@extends('formmaster')
@section('form-name', 'My Profile')
@section('main-nav')
    <li>{!!HTML::link('dash-board','Home')!!}</li>
    <li class='active'>{!!HTML::link('#','My Profile')!!}</li>
    <li>{!!HTML::link('mentorship-session','Mentorship Session')!!}</li>
    <li>{!!HTML::link('person-home','Mentor/Mentee')!!}</li>
    <li>{!!HTML::link('system-reports','Reporting')!!}</li>
    <li>{!!HTML::link('resource-center','Resource Centre')!!}</li>
    <li>{!!HTML::link('system-admin','Admin')!!}</li>
    <li class='last'>{!!HTML::link('logout','Logout')!!}</li>
@stop
@section('horizontal-nav')
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   <!--{!!HTML::link('/session-tool/1','Clinical')!!}-->
           </div>
       
    </h4>
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   <!--{!!HTML::link('/session-tool/2','Laboratory')!!}-->
           </div>
    </h4>
    
@stop

@section('form-design')
<div id="main">
    <table width="96%" >
    <tr>
        <td>
            <div>
                <br/>
                <b>Registration Infomation</b><br/>
                Full Name: Ojwang Antony <br/>
                Gender:    Male <br/>
                Cadre:     Programmer <br/>
                Facility:  Lumumba Kisumu <br/>
            </div>
        
        </td>
        <td>
            <div>
                <br/>
                <b>System Infomation</b><br/>
                System username: ojwanganto <br/>
                Last login date:     2015-01-01<br/>
            </div>
        
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div>
                <br/>
                <b>Mentor Sessions </b><br/>
                Full Name: Ojwang Antony <br/>
                Cadre:     Programmer <br/>
                Facility:  Lumumba Kisumu <br/>
            </div>
        
        </td>
        
    </tr>
    <tr>
        <td colspan="2">
                <br/>
                <div style="font-size:14px;">
                <b>Mentee sessions attended</b><br/>
                Full Name: Ojwang Antony <br/>
                Cadre:     Programmer <br/>
                Facility:  Lumumba Kisumu <br/>
            </div>
        </td>
        
    </tr>
    </table>
   
</div>
@stop