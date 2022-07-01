
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
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
									<h4>John Smith</h4>
									<div class="mb-3 text-white text-opacity-50 fw-bold mt-n2">@johnsmith</div>
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
                                                <h4><i class="far fa-user fa-fw text-theme"></i> John Smith</h4>
                                                <p>View and update your general account information and settings.</p>
                                                <div class="card">
                                                    <div class="list-group list-group-flush">
                                                        <div class="list-group-item d-flex align-items-center">
                                                            <div class="flex-1 text-break">
                                                                <div>Name</div>
                                                                <div class="text-white text-opacity-50">Sean Ngu</div>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex align-items-center">
                                                            <div class="flex-1 text-break">
                                                                <div>Username</div>
                                                                <div class="text-white text-opacity-50">@seantheme</div>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex align-items-center">
                                                            <div class="flex-1 text-break">
                                                                <div>Phone</div>
                                                                <div class="text-white text-opacity-50">+1-202-555-0183</div>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex align-items-center">
                                                            <div class="flex-1 text-break">
                                                                <div>Email address</div>
                                                                <div class="text-white text-opacity-50">support@seantheme.com</div>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item d-flex align-items-center p-3">
                                                            <div>
                                                                <a href="#modalEdit" data-bs-toggle="modal" class="btn btn-warning w-100px">Edit</a>
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
		<div class="modal fade" id="modalEdit">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit name</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
					</div>
					<div class="modal-body">
						<div class="mb-3">
							<label class="form-label">Name</label>
							<div class="row row-space-10">
								<div class="col-4">
									<input class="form-control" placeholder="First" value="Sean" />
								</div>
								<div class="col-4">
									<input class="form-control" placeholder="Middle" value="" />
								</div>
								<div class="col-4">
									<input class="form-control" placeholder="Last" value="Ngu" />
								</div>
							</div>
						</div>
						<div class="alert alert-muted">
							<b>Please note:</b> 
							If you change your name, you can't change it again for 60 days. 
							Don't add any unusual capitalization, punctuation, characters or random words. 
							<a href="#" class="alert-link">Learn more.</a>
						</div>
						<div class="mb-3">
							<label class="form-label">Other Names</label>
							<div>
								<a href="#" class="btn btn-outline-default"><i class="fa fa-plus fa-fw"></i> Add other names</a>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline-default" data-bs-dismiss="modal">Close</button>
						<button type="button" class="btn btn-outline-theme">Save changes</button>
					</div>
				</div>
			</div>
		</div>
		<!-- END #modalEdit -->