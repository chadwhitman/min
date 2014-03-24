<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php print $head_title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- START Styles  -->
		 <?php print $styles; ?>
        <link rel="stylesheet" href="<?php echo base_path(); ?>sites/all/themes/min/css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_path(); ?>sites/all/themes/min/css/all.css">
        <link rel="stylesheet" href="<?php echo base_path(); ?>sites/all/themes/min/css/main.css">
        <link rel="stylesheet" href="<?php echo base_path(); ?>sites/all/themes/min/css/custom.css">
		<!-- END Styles  -->
		
        <!-- START Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Coda:800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Crimson+Text' rel='stylesheet' type='text/css'>
		<!-- END Google Fonts -->
		
		<!-- START HEAD SCRIPTS -->
        <script src="<?php echo base_path(); ?>sites/all/themes/min/js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- END HEAD SCRIPTS -->
    </head>
   <body class="<?php print $classes; ?>" <?php print $attributes;?>>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
         <div id="skip-link"> <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a></div>
         <?php print $page_top; ?>
		 <?php print $page; ?>
		 <?php print $page_bottom; ?>
		<!-- START BODY SCRIPTS -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_path(); ?>sites/all/themes/min/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="<?php echo base_path(); ?>sites/all/themes/min/js/plugins.js"></script>
        <script src="<?php echo base_path(); ?>sites/all/themes/min/js/main.js"></script>
        <script src="<?php echo base_path(); ?>sites/all/themes/min/js/scripts.js"></script>
        <?php print $scripts; ?>
        <!-- END BODY SCRIPTS -->
        
        <!-- START Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
        <!-- END Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    </body>
</html>

