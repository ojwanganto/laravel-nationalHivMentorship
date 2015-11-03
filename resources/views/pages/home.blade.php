<html class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>National HIV Mentorship</title>
<link href="http://localhost/icap/assets/icons/favicon.ico" rel="shortcut icon" type="image/x-png">
<link href="{!! asset('css/admin.css') !!}"  rel="stylesheet" type="text/css" media="all">
<link href="{!! asset('css/forms.css') !!}" rel="stylesheet" type="text/css" media="all">
<link href="{!! asset('css/flash.css') !!}" rel="stylesheet" type="text/css" media="all">
<link href="{!! asset('css/paginate.css') !!}" rel="stylesheet" type="text/css" media="all">

<script type="text/javascript" src="js/jquery-2.1.0.js"></script> 
<script type="text/javascript" src="js/datetimepicker_css.js"></script>
<script type="text/javascript" src="js/jquery.alphanum.js"></script>
<script type="text/javascript" src="./C-PAD_files/admin.js"></script>

<script type="text/javascript" src="{!! asset('js/jquery.fancybox.js') !!}" ></script>
<link rel="stylesheet" href="{!! asset('css/jquery.fancybox.css') !!}" type="text/css">
<link href="{!! asset('css/jquery-ui.css') !!}" rel="stylesheet" type="text/css" media="screen">
<script src="{!! asset('js/jquery-ui.js') !!}" ></script> 


<link href="{!! asset('css/jquery.dataTables.css') !!}" rel="stylesheet" type="text/css" media="all">
<script src="{!! asset('js/jquery.dataTables.js') !!}"></script>

 <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="pbs, cms, pbscms,  control panel,  cp,  admin">
<link href="./C-PAD_files/admin(1).css" rel="stylesheet" type="text/css">
	<style type="text/css">.fancybox-margin{margin-right:15px;}</style></head>

<body>

<div id="container">
<div id="header">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td style="text-align:left"><img src="{!! asset('img/gok.png') !!}"></td>
    <td style="text-align:center"><img src="{!! asset('img/cpad3.png') !!}"></td>
    <td style="text-align:right"><img src="{!! asset('img/logo.png') !!}"></td>
  </tr>
</tbody></table>
</div>

<div id="hstrip" style="height:30px; width:100%; background-color:#09a0be !important; background:url(../assets/images/admin/h2.png); ">
<div style="font-size:15px; color:#FFF; font-weight:bold; display:table; width:100%;">
  
    <div style="display:table-cell; line-height:30px">Welcome: admin</div>
    <div style="display:table-cell; line-height:30px">Facility: Tawa Sub-district Hospital</div>
    <div style="display:table-cell; line-height:30px">County: Makueni</div>
    <div style="display:table-cell; line-height:30px">Sub County: Mbooni</div>
    <div style="display:table-cell; line-height:30px">MFL Code: 12787 </div>
    <div style="display:table-cell; line-height:30px"><a href="http://localhost/icap/auth/change_password">Change Password</a> </div>
  
</div>
</div>

<div id="main-container">
<div id="menu-accordion"> <!-- outer accordion -->
<div id="vaccordion">

	 <h4 class="accordion-toggle" onclick="mxmenu(0)"><a href="./C-PAD_files/C-PAD.html"><div id="taccb"><div id="taccbi">  &gt; </div>
	  Modules / Departments </div></a></h4>
   <div class="accordion-content">
    <a href="http://localhost/icap/patient/search">CCC Data Entry Clerk Module</a>    <a href="http://localhost/icap/laboratory/index">CCC Point Of Care Module</a>      <a href="http://localhost/icap/laboratory/index">Laboratory Module</a>	  <a href="http://localhost/icap/laboratory/index">Pharmacy Module</a>      <a href="http://localhost/icap/hei/index">HEI Module</a>      <a href="http://localhost/icap/laboratory/index">Reports Module</a>   </div>

	<h4 class="accordion-toggle" onclick="mxmenu(1)"><a href="http://localhost/icap/welcome/index/#pman"><div id="taccb"><div id="taccbi">  &gt; </div>Patient Management</div></a></h4>
	
	<div class="accordion-content default">
		<a href="http://localhost/icap/patient/search">Search/Edit/View Existing Client</a>       <a href="http://localhost/icap/patient/add">Add / Register New Patient </a>
	   <a href="http://localhost/icap/patient/defaulter_tracing/index">Defaulter Tracking Entry</a>	  
	</div>
    
    
    <h4 class="accordion-toggle" onclick="mxmenu(2)"><a href="http://localhost/icap/welcome/index/#padmin"><div id="taccb"><div id="taccbi">  &gt; </div>
    Patient Administration Tasks</div></a></h4>
	<div class="accordion-content">
			<a href="http://localhost/icap/admin/pmanagement/index">Change Unique No</a>			<a href="http://localhost/icap/admin/pmanagement/tosearch">Change TO Status</a>			<a href="http://localhost/icap/admin/pmanagement/dsearch">Change Dead Status</a>   	</div>
   
   <h4 class="accordion-toggle" onclick="mxmenu(3)"><a href="http://localhost/icap/welcome/index/#reports"><div id="taccb"><div id="taccbi">  &gt; </div>
   Reports &amp; Registers</div></a></h4>
   <div class="accordion-content">
    <a href="http://localhost/icap/laboratory/index">MOH Reports &amp; Registers</a>    <a href="http://localhost/icap/admin/pmanagement/vload">Patient Tracking Reports</a>    <a href="http://localhost/icap/admin/pmanagement/vload">Data Management Reports</a>   </div>
       
        <h4 class="accordion-toggle" onclick="mxmenu(4)"><a href="http://localhost/icap/welcome/index/#cds"><div id="taccb"><div id="taccbi">  &gt; </div>
          Clinical Decision Support</div></a></h4>
   <div class="accordion-content">
    <a href="http://localhost/icap/reports/soc">Quality Of Care (KHQIF/SOC)</a>    <a href="http://localhost/icap/reports/adult_patient_mgt">Patient Management Reports</a>   </div>
   
	  <h4 class="accordion-toggle" onclick="mxmenu(5)"><a href="http://localhost/icap/welcome/index/#sysadmin"><div id="taccb"><div id="taccbi">  &gt; </div>System Administrator</div></a>&gt;</h4>
	<div class="accordion-content">
    		<a href="http://localhost/icap/admin/check_entries">Check Entries Time</a>			<a href="http://localhost/icap/admin/deidentified_export">De identified Export</a>			<a href="http://localhost/icap/admin/full_backup">Full Backup</a>			<a href="http://localhost/icap/admin/backup">Export Tables to CSV</a>			<a href="http://localhost/icap/admin/users">User Management</a>		
   	</div>
    
    <div id="cc"> 
		  <div id="nlinks"><a href="http://localhost/icap/auth/logout"><img src="{!! asset('img/sign-out.png') !!}"><br> Logout</a></div>
			<div id="nlinks"><a href="http://localhost/icap/welcome/alerts"><img src="{!! asset('img/alerts.png') !!}"><br>Alerts</a></div>
			<div id="nlinks"><a href="http://localhost/icap/welcome/help"><img src="{!! asset('img/help.png') !!}"><br>Info</a></div>		
		</div>
    
</div> <!-- end outer accordion -->
</div> <!-- end menu accordion -->
<div id="controls-container">
	
<div id="cp-title" style="width:100%; height:40px; line-height:40px; font-weight:bold; color:#13749f; font-size:18px; padding-left:30px; font-style:normal; font-family:Castellar; text-shadow:008080;"><legend>Control Panel</legend></div>
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

	<h3 id="deps" class="ui-accordion-header ui-state-default ui-accordion-header-active ui-state-active ui-corner-top ui-accordion-icons ui-state-focus" role="tab" aria-controls="ui-id-1" aria-selected="true" aria-expanded="true" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span>Modules / Departments </h3>
	<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" id="ui-id-1" aria-labelledby="deps" role="tabpanel" aria-hidden="false" style="display: block;">
 <table border="0" width="100%" align="center" style="text-align:center">
          <tbody><tr>
            <td> 
		<a href="http://localhost/icap/patient/search"> 
		  <div id="controls">		
			<img src="{!! asset('img/dataentry.png') !!}">
			<br>
           
	  		CCC 
Data Entry (Retrospective Entry)       	  	
  		  </div>
		  </a>
	   </td>
            <td><a href="http://localhost/icap/poc">
              <div id="controls"> <img src="{!! asset('img/pcare.png') !!}"> <br>
                <p> CCC Point of Care Module </p>
              </div>
            </a></td>
            <td><a href="http://localhost/icap/laboratory/index">
              <div id="controls"> <img src="{!! asset('img/lab.png') !!}"> <br>
                <p> Laboratory Module </p>
              </div>
            </a></td>
            <td><a href="http://adt.ejimbaeric.com/ADT/user_management/login" target="_blank">
            <div id="controls"> <img src="{!! asset('img/pharm.png') !!}"> <br>
              <p> Pharmacy Module (ADT Tool)</p>
            </div></a></td>
            <td><a href="http://localhost/icap/hei/index">
              <div id="controls"> <img src="{!! asset('img/infants.png') !!}"> <br>
                <p>HEI Module</p>
              </div>
            </a></td>
            <td> 
		<a href="http://localhost/icap/hei/index"> 
			<div id="controls">		
			<img src="{!! asset('img/reports.png') !!}">
			<br>
            <p>
	  		Reports Module    </p>	  	
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