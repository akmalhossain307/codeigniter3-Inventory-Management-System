<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?php echo base_url()?>/assets/images/favicon_1.ico">

        <title><?php echo$title;?></title>

        <!-- Base Css Files -->
        <link href="<?php echo base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="<?php echo base_url()?>/assets/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?php echo base_url()?>/assets/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="<?php echo base_url()?>/assets/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="<?php echo base_url()?>/assets/css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="<?php echo base_url()?>/assets/css/waves-effect.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="<?php echo base_url()?>/assets/css/helper.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>/assets/css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url()?>/assets/js/modernizr.min.js"></script>
        
    </head>
    <body style="background: linear-gradient(#D484BA, #6BBD63);">


        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                
				
				<?php if($this->session->flashdata('success')): ?>
					  <div class="alert alert-success alert-dismissible" role="alert" id="btn">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<?php echo $this->session->flashdata('success'); ?>
					  </div>
					<?php elseif($this->session->flashdata('error')): ?>
					  <div class="alert alert-error alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<?php echo $this->session->flashdata('error'); ?>
					  </div>
					<?php endif; ?>
				
				
				


                <div class="panel-body">
                <form class="form-horizontal m-t-1" action="<?php echo base_url('users/registration')?>" method="POST">
                    
                    <div class="form-group ">
                        <center>
						<img src="<?php echo base_url()?>/assets/images/user.png" alt="admin"width="100"height="70" />
                            <h2>User Registration</h2>
                        </center>
                    </div>
					
					<div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-lg " type="text" required="" name="name" placeholder="Name">
                        </div>
                    </div>
					<div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-lg " type="email" name="username"required="" placeholder="Username">
                        </div>
                    </div>
					<div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-lg " type="number" name="mobile_number"required="" placeholder="mobile number">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" type="password" name="password"required="" placeholder="Password">
                        </div>
                    </div>

                    
                    
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            
							
							<button class="btn btn-lg btn-success btn-block btn-signin" type="submit" id="loginSub">Sign Up</button>
                        </div>
                    </div>
					
					<div class="form-group m-t-30">
                        <div class="col-sm-1"> </div>
                        <div class="col-sm-10">
                            Already registered? <a href="<?php echo base_url('users')?>"> Login now</a>
                        </div>
						<div class="col-sm-1"> </div>
                    </div>

                    
                </form> 
                </div>                                 
                
            </div>
        </div>

        
    	<script>
            var resizefunc = [];
        </script>
    	<script src="<?php echo base_url()?>/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>/assets/js/waves.js"></script>
        <script src="<?php echo base_url()?>/assets/js/wow.min.js"></script>
        <script src="<?php echo base_url()?>/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>/assets/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url()?>/assets/assets/jquery-detectmobile/detect.js"></script>
        <script src="<?php echo base_url()?>/assets/assets/fastclick/fastclick.js"></script>
        <script src="<?php echo base_url()?>/assets/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url()?>/assets/assets/jquery-blockui/jquery.blockUI.js"></script>


        <!-- CUSTOM JS -->
        <script src="<?php echo base_url()?>/assets/js/jquery.app.js"></script>
	
	</body>
</html>