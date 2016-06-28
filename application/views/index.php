<!DOCTYPE html>
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="expires" content="Sat, 26 Jul 1997 05:00:00 GMT">

  <title>Jiggie Admin </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="/assets/images/favicon.ico">
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="stylesheet" href="/assets/lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/iriy-admin.min.css">
  <link rel="stylesheet" href="/assets/css/custom.css">

  <link rel="stylesheet" href="/assets/lib/font-awesome/css/font-awesome.min.css">

  <?php 
  foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
  <?php endforeach; ?>
 
  
  <style type="text/css">
    #ui-datepicker-div{
      z-index: 99999999 !important;
  }

  .bootstrap-timepicker-widget{
      z-index: 9999999;
  }
</style>


</head>
<body>

    <header>
        <nav class="navbar navbar-default navbar-static-top no-margin" role="navigation">
            <div class="navbar-brand-group">
                <a class="navbar-sidebar-toggle navbar-link" data-sidebar-toggle>
                    <i class="fa fa-lg fa-fw fa-bars"></i>
                </a>
                <a class="navbar-brand hidden-xxs" href="">
                    <span class="sc-visible">
                    
                    </span>
                    <span class="sc-hidden">
                        <span class="semi-bold">Jiggie</span>
                        ADMIN
                    </span>
                </a>
            </div>

            <ul class="nav navbar-nav navbar-nav-expanded pull-right margin-md-right">
                <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle navbar-user" href="javascript:;">
                     <i class="fa fa-lg fa-fw fa-user"></i>
                     <span class="hidden-xs cookie-user-name"></span>
                     <b class="caret"></b>
                    </a>

                    <ul class="dropdown-menu pull-right-xs">
                        <li class="arrow"></li>         
                        <li><a href="/profile">Profile</a></li>
                        <li><a href="/auth/logout">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <div class="page-wrapper">

    <aside class="sidebar sidebar-default">
        <?php $this->load->view('nav'); ?>
    </aside>

        <div class="page-content">
            <div class="page-subheading page-subheading-md page-subheading-xxs">                        
                <!--<ol class="breadcrumb" >
                    <li><a href="/"> Home </a></li>
                    <li><a href=""></a></li>
                    <li></li> 
                </ol>-->
            </div>  

            <div class="container-fluid-md">   
                <div>
                    <?php echo $output; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="/assets/lib/jquery/jquery.min.js"></script>
    <script src="/assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/moment.min.js"></script>

    <script src="/assets/lib/underscore/underscore-min.js"></script>

    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
    <!--<script src="/assets/js/main/site.js"></script>-->
</body>
</html>
