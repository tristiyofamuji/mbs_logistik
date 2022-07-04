
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			<div class="d-flex align-items-center mb-md-3 mb-2">
				<div class="flex-fill">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Logistik & Trucking</a></li>
						<li class="breadcrumb-item active"><?= $title ?></li>
					</ul>
			
					<h1 class="page-header mb-0">
						<?= $title ?>
					</h1>
				</div>
			</div>
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<?php echo session()->getFlashdata('error'); ?>
				<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
			</div>
			<?php elseif(!empty(session()->getFlashdata('success'))) : ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<?php echo session()->getFlashdata('success'); ?>
				<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
			</div>
			<?php endif; ?>
			<div class="card">
				<div class="card-body p-0">
					<!-- BEGIN profile -->
					<div class="profile">
						<!-- BEGIN profile-container -->
						<div class="profile-container">
							<!-- BEGIN profile-sidebar -->
							<div class="profile-sidebar">
								<div class="desktop-sticky-top">
									<div class="profile-img">
										<img src="assets/img/user/profile.jpg" alt="" />
									</div>
									
									<!-- profile info -->
									<h4><?= $user->name; ?></h4>
									<div class="mb-3 text-white text-opacity-50 fw-bold mt-n2"><?= $user->username; ?></div>
									<hr class="mt-4 mb-4" />
									<div class="mb-1">
										<i class="fa fa-map-marker-alt fa-fw text-white text-opacity-50"></i> New York, NY
									</div>
									<div class="mb-3">
										<i class="fa fa-link fa-fw text-white text-opacity-50"></i> seantheme.com/hud
									</div>
														
								</div>
							</div>
							<!-- END profile-sidebar -->
					
							<!-- BEGIN profile-content -->
							<div class="profile-content">
								<div class="profile-content-container">
									<div class="row gx-4">
										<div class="col-xl-12">
                                            <!-- BEGIN #general -->
                                            <div id="general" class="mb-5">
                                                <h4><i class="far fa-user fa-fw text-theme"></i> <?= $user->name; ?></h4>
                                                <p>View and update your general account information and settings.</p>
                                                <div class="card">
                                                    <div class="list-group list-group-flush">
                                                        <div class="list-group-item d-flex align-items-center">
                                                            <div class="flex-1 text-break">
                                                                <div>Name</div>
                                                                <div class="text-white text-opacity-50"><?= $user->name; ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex align-items-center">
                                                            <div class="flex-1 text-break">
                                                                <div>Username</div>
                                                                <div class="text-white text-opacity-50"><?= $user->username; ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex align-items-center">
                                                            <div class="flex-1 text-break">
                                                                <div>Phone</div>
                                                                <div class="text-white text-opacity-50">-</div>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex align-items-center">
                                                            <div class="flex-1 text-break">
                                                                <div>Email address</div>
                                                                <div class="text-white text-opacity-50"><?= $user->username; ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex align-items-center p-3">
                                                            <div>
                                                                <a href="#modalEditAkun" data-bs-toggle="modal" class="btn btn-warning w-100px">Edit</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="card-arrow">
                                                        <div class="card-arrow-top-left"></div>
                                                        <div class="card-arrow-top-right"></div>
                                                        <div class="card-arrow-bottom-left"></div>
                                                        <div class="card-arrow-bottom-right"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END #general -->
										</div>
									</div>
								</div>
							</div>
							<!-- END profile-content -->
						</div>
						<!-- END profile-container -->
					</div>
					<!-- END profile -->
				</div>
				<div class="card-arrow">
					<div class="card-arrow-top-left"></div>
					<div class="card-arrow-top-right"></div>
					<div class="card-arrow-bottom-left"></div>
					<div class="card-arrow-bottom-right"></div>
				</div>
			</div>
		</div>
		<!-- END #content -->
        
		<!-- BEGIN #modalEdit -->
		<div class="modal fade" id="modalEditAkun">
			<div class="modal-dialog">
				<form action="<?= base_url('profile/editData') ?>" method="post">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Data Akun</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
						</div>
						<div class="modal-body">
							<div class="mb-3">
								<label class="form-label">Nama Lengkap</label>
								<input type="text" class="form-control" name="name" placeholder="Nama Lengkap" value="<?= $user->name; ?>" />
							</div>
							<div class="mb-3">
								<label class="form-label">Username</label>
								<input type="email" class="form-control" name="username" placeholder="Username" value="<?= $user->username; ?>" />
							</div>
							<div class="mb-3">
								<label class="form-label">Password</label>
								<input type="password" class="form-control" name="password" placeholder="Password"/>
							</div>
							<div class="mb-3">
								<label class="form-label">No. telepon</label>
								<input type="text" class="form-control" name="telephone" placeholder="No. telepon"/>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-default" data-bs-dismiss="modal">Close</button>
							<button class="btn btn-outline-theme">Save changes</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- END #modalEdit -->