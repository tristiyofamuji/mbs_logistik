
	<!-- BEGIN #app -->
	<div id="app" class="app">
		<!-- BEGIN #header -->
		<div id="header" class="app-header">
			<!-- BEGIN desktop-toggler -->
			<div class="desktop-toggler">
				<button type="button" class="menu-toggler" data-toggle-class="app-sidebar-collapsed" data-dismiss-class="app-sidebar-toggled" data-toggle-target=".app">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</button>
			</div>
			<!-- BEGIN desktop-toggler -->
			
			<!-- BEGIN mobile-toggler -->
			<div class="mobile-toggler">
				<button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled" data-toggle-target=".app">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</button>
			</div>
			<!-- END mobile-toggler -->
			
			<!-- BEGIN brand -->
			<div class="brand">
				<a href="<?= base_url('home') ?>" class="brand-logo">
					<span class="brand-img">
						<span class="brand-img-text text-theme">LT</span>
					</span>
					<span class="brand-text">Logistik & Trucking</span>
				</a>
			</div>
			<!-- END brand -->
			
			<!-- BEGIN menu -->
			<div class="menu">
				<div class="menu-item dropdown">
					<a href="#" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app" class="menu-link">
						<div class="menu-icon"><i class="bi bi-search nav-icon"></i></div>
					</a>
				</div>
				<div class="menu-item dropdown dropdown-mobile-full">
					<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
						<div class="menu-icon"><i class="bi bi-bell nav-icon"></i></div>
						<div class="menu-badge bg-theme"></div>
					</a>
					<div class="dropdown-menu dropdown-menu-end mt-1 w-300px fs-11px pt-1">
						<h6 class="dropdown-header fs-10px mb-1">NOTIFICATIONS</h6>
						<div class="dropdown-divider mt-1"></div>
						<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap">
							<div class="fs-20px">
								<i class="bi bi-bag text-theme"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div class="mb-1 text-white">NEW ORDER RECEIVED ($1,299)</div>
								<div class="small">JUST NOW</div>
							</div>
							<div class="ps-2 fs-16px">
								<i class="bi bi-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap">
							<div class="fs-20px w-20px">
								<i class="bi bi-person-circle text-theme"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div class="mb-1 text-white">3 NEW ACCOUNT CREATED</div>
								<div class="small">2 MINUTES AGO</div>
							</div>
							<div class="ps-2 fs-16px">
								<i class="bi bi-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap">
							<div class="fs-20px w-20px">
								<i class="bi bi-gear text-theme"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div class="mb-1 text-white">SETUP COMPLETED</div>
								<div class="small">3 MINUTES AGO</div>
							</div>
							<div class="ps-2 fs-16px">
								<i class="bi bi-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap">
							<div class="fs-20px w-20px">
								<i class="bi bi-grid text-theme"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div class="mb-1 text-white">WIDGET INSTALLATION DONE</div>
								<div class="small">5 MINUTES AGO</div>
							</div>
							<div class="ps-2 fs-16px">
								<i class="bi bi-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap">
							<div class="fs-20px w-20px">
								<i class="bi bi-credit-card text-theme"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div class="mb-1 text-white">PAYMENT METHOD ENABLED</div>
								<div class="small">10 MINUTES AGO</div>
							</div>
							<div class="ps-2 fs-16px">
								<i class="bi bi-chevron-right"></i>
							</div>
						</a>
						<hr class="bg-white-transparent-5 mb-0 mt-2" />
						<div class="py-10px mb-n2 text-center">
							<a href="#" class="text-decoration-none fw-bold">SEE ALL</a>
						</div>
					</div>
				</div>
				<div class="menu-item dropdown dropdown-mobile-full">
					<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
						<div class="menu-img online">
							<img src="assets/img/user/profile.jpg" alt="Profile" height="60" />
						</div>
						<div class="menu-text d-sm-block d-none"><?= $user->name ?></div>
					</a>
					<div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">
						<a class="dropdown-item d-flex align-items-center" href="<?= base_url('profile') ?>">PROFILE <i class="bi bi-person-circle ms-auto text-theme fs-16px my-n1"></i></a>
						<a class="dropdown-item d-flex align-items-center" href="<?= base_url('company') ?>">PROFIL USAHA <i class="bi bi-gear ms-auto text-theme fs-16px my-n1"></i></a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item d-flex align-items-center" href="<?= base_url('login/logout') ?>">LOGOUT <i class="bi bi-toggle-off ms-auto text-theme fs-16px my-n1"></i></a>
					</div>
				</div>
			</div>
			<!-- END menu -->
			
			<!-- BEGIN menu-search -->
			<form class="menu-search" method="POST" name="header_search_form">
				<div class="menu-search-container">
					<div class="menu-search-icon"><i class="bi bi-search"></i></div>
					<div class="menu-search-input">
						<input type="text" class="form-control form-control-lg" placeholder="Search menu..." />
					</div>
					<div class="menu-search-icon">
						<a href="#" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app"><i class="bi bi-x-lg"></i></a>
					</div>
				</div>
			</form>
			<!-- END menu-search -->
		</div>
		<!-- END #header -->
		
		<!-- BEGIN #sidebar -->
		<div id="sidebar" class="app-sidebar">
			<!-- BEGIN scrollbar -->
			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
				<!-- BEGIN menu -->
				<div class="menu">
					<div class="menu-header">Navigation</div>
					<div class="menu-item <?php if($title == 'Home'){ echo 'active'; } ?>">
						<a href="<?= base_url('home') ?>" class="menu-link">
							<span class="menu-icon"><i class="fas fa-home"></i></span>
							<span class="menu-text">Home</span>
						</a>
					</div>
					<div class="menu-item <?php if($title == 'Keuangan'){ echo 'active'; } ?>">
						<a href="<?= base_url('/keuangan') ?>" class="menu-link">
							<span class="menu-icon"><i class="bi bi-bar-chart"></i></span>
							<span class="menu-text">Pencatatan Keuangan</span>
						</a>
					</div>
					<div class="menu-item <?php if($title == 'Order'){ echo 'active'; } ?>">
						<a href="<?= base_url('/order') ?>" class="menu-link">
							<span class="menu-icon"><i class="fas fa-search"></i></span>
							<span class="menu-text">Mencari Order</span>
						</a>
					</div>
					<div class="menu-item <?php if($title == 'Data Sopir'){ echo 'active'; } ?>">
						<a href="<?= base_url('/sopir') ?>" class="menu-link">
							<span class="menu-icon"><i class="fas fa-truck"></i></span>
							<span class="menu-text">Data Sopir</span>
						</a>
					</div>
					<div class="menu-item <?php if($title == 'Bagi Hasil Sopir'){ echo 'active'; } ?>">
						<a href="<?= base_url('/bagihasilsopir') ?>" class="menu-link">
							<span class="menu-icon"><i class="bi bi-truck"></i></span>
							<span class="menu-text">Bagi Hasil Sopir</span>
						</a>
					</div>
					<div class="menu-item <?php if($title == 'Data Gaji Sopir'){ echo 'active'; } ?>">
						<a href="<?= base_url('/gajisopir') ?>" class="menu-link">
							<span class="menu-icon"><i class="fas fa-credit-card"></i></span>
							<span class="menu-text">Gaji Sopir</span>
						</a>
					</div>
					<div class="menu-item <?php if($title == 'Lacak Posisi Sopir'){ echo 'active'; } ?>">
						<a href="<?= base_url('/lacakposisi') ?>" class="menu-link">
							<span class="menu-icon"><i class="fas fa-map-marker-alt"></i></span>
							<span class="menu-text">Melacak posisi Sopir</span>
						</a>
					</div>
					<div class="menu-item <?php if($title == 'Maintenance Truck'){ echo 'active'; } ?>">
						<a href="<?= base_url('/maintenance') ?>" class="menu-link">
							<span class="menu-icon"><i class="fas fa-wrench"></i></span>
							<span class="menu-text">Maintenance Truck</span>
						</a>
					</div>
					<!-- <div class="menu-item">
						<a href="<?= base_url('/pembelianmaintenance') ?>" class="menu-link">
							<span class="menu-icon"><i class="fas fa-money-bill-alt"></i></span>
							<span class="menu-text">Pembelian Maintenance Truck</span>
						</a>
					</div>
					<div class="menu-item">
						<a href="<?= base_url('/perbaikan') ?>" class="menu-link">
							<span class="menu-icon"><i class="fas fa-bug"></i></span>
							<span class="menu-text">Perbaikan Di Lokasi Terpencil</span>
						</a>
					</div> -->
					<div class="menu-item <?php if($title == 'Jual Beli Truck'){ echo 'active'; } ?>">
						<a href="<?= base_url('/jualbelitruck') ?>" class="menu-link">
							<span class="menu-icon"><i class="fas fa-handshake"></i></span>
							<span class="menu-text">Jual Beli Truck</span>
						</a>
					</div>
					<div class="menu-item <?php if($title == 'Pajak dan SIM'){ echo 'active'; } ?>">
						<a href="<?= base_url('/pajakdansim') ?>" class="menu-link">
							<span class="menu-icon"><i class="fas fa-tasks"></i></span>
							<span class="menu-text">Pajak Dan SIM</span>
						</a>
					</div>
					<div class="menu-divider"></div>
					<div class="menu-header">Users</div>
					<div class="menu-item <?php if($title == 'Profil Usaha'){ echo 'active'; } ?>">
						<a href="<?= base_url('/company') ?>" class="menu-link">
							<span class="menu-icon"><i class="bi bi-gear"></i></span>
							<span class="menu-text">Profil Usaha</span>
						</a>
					</div>
					<div class="menu-item <?php if($title == 'Helper'){ echo 'active'; } ?>">
						<a href="<?= base_url('/helper') ?>" class="menu-link">
							<span class="menu-icon"><i class="bi bi-gem"></i></span>
							<span class="menu-text">Helper</span>
						</a>
					</div>
				</div>
				<!-- END menu -->
				<div class="p-3 px-4 mt-auto">
					<a href="<?= base_url('/documentation') ?>" class="btn d-block btn-outline-theme">
						<i class="fa fa-code-branch me-2 ms-n2 opacity-5"></i> Documentation
					</a>
				</div>
			</div>
			<!-- END scrollbar -->
		</div>
		<!-- END #sidebar -->
			
		<!-- BEGIN mobile-sidebar-backdrop -->
		<button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>
		<!-- END mobile-sidebar-backdrop -->
		