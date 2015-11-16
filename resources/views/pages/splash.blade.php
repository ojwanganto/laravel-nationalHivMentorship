<html class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>National HIV Mentorship</title>
<link href="http://localhost/icap/assets/icons/favicon.ico" rel="shortcut icon" type="image/x-png">
<link href="{!! asset('css/admin.css') !!}"  rel="stylesheet" type="text/css" media="all">

<link href="{!! asset('css/jquery.dataTables.css') !!}" rel="stylesheet" type="text/css" media="all">
<script src="{!! asset('js/jquery.dataTables.js') !!}"></script>
	<style type="text/css">.fancybox-margin{margin-right:15px;}</style></head>

<body>

<div id="container">
<div id="header">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td style="text-align:center"><img src="{!! asset('img/nascop_logo.png') !!}"></td>
  </tr>
</tbody></table>
</div>

<div id="hstrip" style="height:30px; width:100%; background-color:#09a0be !important; background:url(../assets/images/admin/h2.png); ">
<div style="font-size:15px; color:#FFF; text-align:right;font-weight:bold; display:table; width:100%;">
    {!!HTML::link('/logout','Logout',['class'=>'btn btn-link'])!!} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
</div>
</div>

<div id="main-container">

<div id="splash-controls-container">
	
<div id="cp-title" style="width:100%; height:40px; line-height:40px; font-weight:bold; color:#13749f; font-size:18px; padding-left:30px; font-style:normal; font-family:Castellar; text-shadow:008080;"><legend>Modules</legend></div>
	<div id="content" style="width:98%; height:auto; margin:auto; clear:both; overflow:hidden !important; position:relative; font-size:10px; ">
	<!--content start -->
	<form method="post" id="mike">
	<br>
		<br>
		

<style>
#jumper a:link, #jumper a:visited, #jumper a:hover, #jumper a:active{
text-transform:none; color:#fff; font-weight:bold; text-decoration:none;
}
</style>

<div id="accordion" class="ui-accordion ui-widget ui-helper-reset" role="tablist">

	<h3 id="deps" class="ui-accordion-header ui-state-default ui-accordion-header-active ui-state-active ui-corner-top ui-accordion-icons ui-state-focus" role="tab" aria-controls="ui-id-1" aria-selected="true" aria-expanded="true" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span>System Modules</h3>
	<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" id="ui-id-1" aria-labelledby="deps" role="tabpanel" aria-hidden="false" style="display: block;">
 <table border="0" width="100%" align="center" style="text-align:center">
    <tbody>
        <tr>
            <td> 
		      <a href="my-profile"> 
		      <div id="controls">		
			     <img src="{!! asset('img/update.png') !!}">
			     <br>
           
	  		       My Profile       	  	
  		        </div>
		      </a>
	        </td>
            <td> 
		      <a href="mentorship-session"> 
		      <div id="controls">		
			     <img src="{!! asset('img/dataentry.png') !!}">
			     <br>
           
	  		       Mentorship Session       	  	
  		        </div>
		      </a>
	        </td>
            <td>
                <a href="person-home">
                    <div id="controls"> <img src="{!! asset('img/cohort.png') !!}"> <br>
                        <p> Mentors/Mentees </p>
                    </div>
                </a>
            </td>
            <td>
                <a href="person-list">
                  <div id="controls"> <img src="{!! asset('img/reports.png') !!}"> <br>
                    <p>Reporting</p>
                  </div>
                </a>
            </td>
            <td> 
              <a href="system-admin"> 
                <div id="controls">		
                <img src="{!! asset('img/user-management.png') !!}">
                <br>
                <p>
                Admin    </p>	  	
                </div>
              </a>
            </td>
          </tr>	  
      </tbody></table> 
  </div>
  </div>

	</div>	
	</form>
	<!-- content end -->	
	</div>
		
	</div>
<!-- end controls-container-->
</div> <!-- end of main container -->

</div>

<div id="footer">
<span style="float:left; width:40%">Copyright 2015 <span style="font-weight:bolder;">©</span> NASCOP. All rights reserved. </span>

<span style="float:left; margin-left:auto; margin-right:auto; font-size:12px"> 
Mentorship for All
</span>

<span style=" float:right; font-weight:bold; font-size:14px; margin-right:20px"> 
National-Mentorship-System vs  0.1</span>
</div>

</body></html>