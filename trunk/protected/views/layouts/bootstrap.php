<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
	    <meta charset="utf-8">
	    <title>Bootstrap, from Twitter</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <!-- Le styles -->
	    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/bootstrap.css" media="screen, projection" />
	    <style type="text/css">
	      body {
	        padding-top: 60px;
	        padding-bottom: 40px;
	      }
	      .sidebar-nav {
	        padding: 9px 0;
	      }
	    </style>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/bootstrap-responsive.css" media="screen, projection" />
	    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	    <!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->

	    <!-- Le fav and touch icons -->
	    <!--  
	    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
	    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/ico/apple-touch-icon-144-precomposed.png">
	    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/ico/apple-touch-icon-114-precomposed.png">
	    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/ico/apple-touch-icon-72-precomposed.png">
	    <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/ico/apple-touch-icon-57-precomposed.png">
	    -->
	  </head>

	  <body>
	    <div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
	            	<span class="icon-bar"></span>
	            	<span class="icon-bar"></span>
	          		</a>
	          		<a class="brand" href="#">Project name</a>
	          		<div class="nav-collapse collapse">
	            		<p class="navbar-text pull-right">
	              		Logged in as <a href="#" class="navbar-link">Username</a>
	            		</p>
	            		<ul class="nav">
	              		<li class="active"><a href="#">Home</a></li>
	              		<li><a href="#about">About</a></li>
	              		<li><a href="#contact">Contact</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span3">
					<div class="well sidebar-nav">
						<ul class="nav nav-list">
	              		<li class="nav-header">Sidebar</li>
	              		<li class="active"><a href="#">Link</a></li>
	              		<li><a href="#">Link</a></li>
	              		<li><a href="#">Link</a></li>
	              		<li><a href="#">Link</a></li>
	              		<li class="nav-header">Sidebar</li>
	              		<li><a href="#">Link</a></li>
	              		<li><a href="#">Link</a></li>
	              		<li><a href="#">Link</a></li>
	              		<li><a href="#">Link</a></li>
	              		<li><a href="#">Link</a></li>
	              		<li><a href="#">Link</a></li>
	              		<li class="nav-header">Sidebar</li>
	              		<li><a href="#">Link</a></li>
	              		<li><a href="#">Link</a></li>
	              		<li><a href="#">Link</a></li>
						</ul>
	          		</div><!--/.well -->
	        	</div><!--/span-->
			<div class="span9">
				<?php echo $content; ?>
	        </div><!--/span-->
		</div><!--/row-->
	    <hr>
	    <footer>
			<p>&copy; Company 2012</p>
		</footer>
	</div><!--/.fluid-container-->
	
	    <!-- Le javascript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery-1.7.2.min.js"></script>
	    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap/bootstrap-transition.js"></script>
	    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap/bootstrap-alert.js"></script>
	    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap/bootstrap-modal.js"></script>
	    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap/bootstrap-dropdown.js"></script>
	    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap/bootstrap-scrollspy.js"></script>
	    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap/bootstrap-tab.js"></script>
	    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap/bootstrap-tooltip.js"></script>
	    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap/bootstrap-popover.js"></script>
	    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap/bootstrap-button.js"></script>
	    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap/bootstrap-collapse.js"></script>
	    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap/bootstrap-carousel.js"></script>
	    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap/bootstrap-typeahead.js"></script>
	
	</body>
</html>
