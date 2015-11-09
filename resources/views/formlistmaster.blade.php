<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>National HIV Mentorship</title>
    <link href="http://localhost/icap/assets/icons/favicon.ico" rel="shortcut icon" type="image/x-png">
    <link href="{!! asset('css/admin.css') !!}"  rel="stylesheet" type="text/css" media="all">
    <link href="{!! asset('css/menu.css') !!}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{!! asset('css/jquery.dataTables.css') !!}" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="{!! asset('js/jquery-2.1.0.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/form/jquery-ui.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/jquery.datatables.min.js') !!}"></script>      
    @yield('inline-js')
    <style type="text/css">.fancybox-margin{margin-right:15px;}</style>
</head>
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
       <div id='cssmenu'>
            <ul>
               <li class='active'><a href='dash-board'><span>Home</span></a></li>
               <li><a href='#'><span>Manage Person</span></a></li>
               <li><a href='#'><span>Admin</span></a></li>
               <li class='last'><a href='logout'><span>Logout</span></a></li>
            </ul>
        </div>
        </div>

        <div id="main-container">
            <div id="splash-controls-container">
                <div id="cp-title" style="width:100%; height:40px; line-height:40px; font-weight:bold; color:#13749f; font-size:18px; padding-left:30px; font-style:normal; font-family:Castellar; text-shadow:008080;"><legend>@yield('form-name')</legend></div>
	   <div id="content" style="width:98%; height:auto; margin:auto; clear:both; overflow:hidden !important; position:relative; font-size:16px; ">
        <div>
        @yield('form-design')
        </div>
    
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