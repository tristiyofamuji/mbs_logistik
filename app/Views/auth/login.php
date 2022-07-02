<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>LT | Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="<?= base_url() ?>/assets/css/vendor.min.css" rel="stylesheet" />
	<link href="<?= base_url() ?>/assets/css/app.min.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
	
</head>
<body class='pace-top'>
	<!-- BEGIN #app -->
	<div id="app" class="app app-full-height app-without-header">
		<!-- BEGIN login -->
		<div class="login">
			<!-- BEGIN login-content -->
			<div class="login-content">
				<form action="<?= base_url('login/auth') ?>" method="POST" name="login_form">
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                    <?php elseif(!empty(session()->getFlashdata('success'))) : ?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<?php echo session()->getFlashdata('success'); ?>
					</div>
					<?php endif; ?>
					<h1 class="text-center">Logistik & Trucking</h1><hr>
					<div class="mb-3">
						<label class="form-label">Email Address <span class="text-danger">*</span></label>
						<input type="email" name="username" class="form-control form-control-lg bg-white bg-opacity-5" value="" placeholder="" />
					</div>
					<div class="mb-3">
						<div class="d-flex">
							<label class="form-label">Password <span class="text-danger">*</span></label>
							<a href="#" class="ms-auto text-white text-decoration-none text-opacity-50">Forgot password?</a>
						</div>
						<input type="password" name="password" class="form-control form-control-lg bg-white bg-opacity-5" value="" placeholder="" />
					</div>
					<div class="mb-3">
						<div class="form-check">
							<input class="form-check-input" name="remember" type="checkbox" value="" id="customCheck1" />
							<label class="form-check-label" for="customCheck1">Remember me</label>
						</div>
					</div>
					<button type="submit" class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3">Sign In</button>
					<div class="text-center text-white text-opacity-50">
						Don't have an account yet? <a href="<?= base_url('register') ?>">Sign up</a>.
					</div>
				</form>
			</div>
			<!-- END login-content -->
		</div>
		<!-- END login -->
		
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
	</div>
	<!-- END #app -->
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="<?= base_url() ?>/assets/js/vendor.min.js"></script>
	<script src="<?= base_url() ?>/assets/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->
	
    <script>
        window.setTimeout(function() { 
            $(".alert-warning").fadeTo(500, 0).slideUp(500,
            function(){ 
                $(this).remove(); 
            }); 
        }, 2000);
		
        window.setTimeout(function() { 
            $(".alert-success").fadeTo(500, 0).slideUp(500,
            function(){ 
                $(this).remove(); 
            }); 
        }, 5000);
    </script>
</body>
</html>
