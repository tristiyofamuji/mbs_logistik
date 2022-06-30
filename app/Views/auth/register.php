<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>HUD | Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="<?= base_url() ?>/assets/css/vendor.min.css" rel="stylesheet" />
	<link href="<?= base_url() ?>/assets/css/app.min.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
	<style>
        ul{
            text-align: left;
        }
    </style>
</head>
<body class='pace-top'>
	<!-- BEGIN #app -->
	<div id="app" class="app app-full-height app-without-header">
		<!-- BEGIN register -->
		<div class="register">
			<!-- BEGIN register-content -->
			<div class="register-content">
				<form action="<?= base_url('register/auth') ?>" method="POST" name="register_form">
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <center><?php echo session()->getFlashdata('error'); ?></center>
                    </div>
                    <?php endif; ?>
					<h1 class="text-center">Logistik & Trucking</h1><hr>
					<div class="mb-3">
						<label class="form-label">Name <span class="text-danger">*</span></label>
						<input type="text" name="name" class="form-control form-control-lg bg-white bg-opacity-5" placeholder="e.g John Smith" value="" />
					</div>
					<div class="mb-3">
						<label class="form-label">Email Address <span class="text-danger">*</span></label>
						<input type="email" name="username" class="form-control form-control-lg bg-white bg-opacity-5" placeholder="username@address.com" value="" />
					</div>
					<div class="mb-3">
						<label class="form-label">Password <span class="text-danger">*</span></label>
						<input type="password" name="password" class="form-control form-control-lg bg-white bg-opacity-5" value="" />
					</div>
					<div class="mb-3">
						<label class="form-label">Confirm Password <span class="text-danger">*</span></label>
						<input type="password" name="confirm" class="form-control form-control-lg bg-white bg-opacity-5" value="" />
					</div>
					<div class="mb-3">
						<div class="form-check">
							<input class="form-check-input" name="agree" type="checkbox" value="" id="customCheck1" />
							<label class="form-check-label" for="customCheck1">I have read and agree to the <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.</label>
						</div>
					</div>
					<div class="mb-3">
						<button type="submit" class="btn btn-outline-theme btn-lg d-block w-100">Sign Up</button>
					</div>
					<div class="text-white text-opacity-50 text-center">
						Already have an Admin ID? <a href="<?= base_url('login') ?>">Sign In</a>
					</div>
				</form>
			</div>
			<!-- END register-content -->
		</div>
		<!-- END register -->
		
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
	</div>
	<!-- END #app -->
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="<?= base_url() ?>/assets/js/vendor.min.js"></script>
	<script src="<?= base_url() ?>/assets/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->
	
    <!-- <script>
        window.setTimeout(function() { 
            $(".alert-warning").fadeTo(500, 0).slideUp(500,
            function(){ 
                $(this).remove(); 
            }); 
        }, 2000);
    </script> -->
</body>
</html>
