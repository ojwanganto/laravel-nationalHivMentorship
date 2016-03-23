@extends('formmaster')
@section('form-name', 'Others')
@section('main-nav')
    <li>{!!HTML::link('dash-board','Home')!!}</li>
    <li>{!!HTML::link('my-profile','My Profile')!!}</li>
    <li>{!!HTML::link('mentorship-session','Mentorship Session')!!}</li>
    <li>{!!HTML::link('person-home','Mentor/Mentee')!!}</li>
    <li>{!!HTML::link('system-reports','Reporting')!!}</li>
    <li class='active'>{!!HTML::link('#','Resource Centre')!!}</li>
    <li>{!!HTML::link('system-admin','Admin')!!}</li>
    <li class='last'>{!!HTML::link('logout','Logout')!!}</li>
@stop
@section('horizontal-nav')
	 <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('files-upload','Upload Files')!!}
           </div>
       
    </h4>
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('manual-upload','User Manuals')!!}
           </div>
       
    </h4>
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('guideline-upload','NASCOP Guidelines')!!}
           </div>
    </h4>
    <h4 class="accordion-toggle" >
           <div id="taccb">
               <div id="taccbi">  &gt; </div>
                   {!!HTML::link('others-upload','Others')!!}
           </div>
    </h4>
@stop
@section('form-design')

<div class="about-section">
   <div class="text-content">
     <div class="span7 offset1">
       
			 
			<?php
	 	       $dir="../storage/exports/others/*";
			   
			   foreach(glob($dir) as $file) 
				{
				   echo "Download: ";
				   echo  " ";
				   
				   echo '<a href="'.$file.'">'. basename($file) .'</a><br />';
				
			   }
	         ?>
      </div>
   </div>
</div>


@stop