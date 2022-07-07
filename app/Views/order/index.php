 <!-- BEGIN #content -->
<div id="content" class="app-content">
			<div class="d-flex align-items-center mb-3">
				<div>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Logistik & Trucking</a></li>
						<li class="breadcrumb-item active"><?= $title ?></li>
					</ul>
					<h1 class="page-header mb-0"><?= $title ?></h1>
				</div>
				
				<div class="ms-auto">
					<a href="" class="btn btn-outline-theme" id="toolbar_tambah" data-target="modal_tambah" data-toggle="modal" data-original-title="Tambah"><i class="fa fa-plus-circle fa-fw me-1"></i> Create Order</a>
				</div>
			</div>
			
			<div class="mb-md-4 mb-3 d-md-flex">
				<div class="mt-md-0 mt-2"><a href="#" class="text-white text-opacity-75 text-decoration-none"><i class="fa fa-download fa-fw me-1 text-theme"></i> Export</a></div>
				<div class="ms-md-4 mt-md-0 mt-2 dropdown-toggle">
					<a href="#" data-bs-toggle="dropdown" class="text-white text-opacity-75 text-decoration-none">More Actions</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
						<div role="separator" class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Separated link</a>
					</div>
				</div>
			</div>
			
			<div class="card">
				<ul class="nav nav-tabs nav-tabs-v2 px-4">
					<li class="nav-item me-3"><a href="#allTab" class="nav-link active px-2" data-bs-toggle="tab">All</a></li>
					<li class="nav-item me-3"><a href="#publishedTab" class="nav-link px-2" data-bs-toggle="tab">Unfulfilled</a></li>
					<li class="nav-item me-3"><a href="#expiredTab" class="nav-link px-2" data-bs-toggle="tab">Unpaid</a></li>
					<li class="nav-item me-3"><a href="#deletedTab" class="nav-link px-2" data-bs-toggle="tab">Open</a></li>
					<li class="nav-item me-3"><a href="#deletedTab" class="nav-link px-2" data-bs-toggle="tab">Closed</a></li>
					<li class="nav-item me-3"><a href="#deletedTab" class="nav-link px-2" data-bs-toggle="tab">Local delivery</a></li>
				</ul>
				<div class="tab-content p-4">
					<div class="tab-pane fade show active" id="allTab">
						<!-- BEGIN input-group -->
						<div class="input-group mb-4">
							<div class="flex-fill position-relative">
								<div class="input-group">
									<!-- <input type="text" class="form-control px-35px" placeholder="Filter orders" />
									<div class="input-group-text position-absolute top-0 bottom-0 bg-none border-0 start-0" style="z-index: 1020;">
										<i class="fa fa-search opacity-5"></i>
									</div> -->
								</div>
							</div>
							<button class="btn btn-outline-default dropdown-toggle rounded-0" type="button" data-bs-toggle="dropdown"><span class="d-none d-md-inline">Payment Status</span><span class="d-inline d-md-none"><i class="fa fa-credit-card"></i></span> &nbsp;</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
								<div role="separator" class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Separated link</a>
							</div>
							<button class="btn btn-outline-default dropdown-toggle" type="button" data-bs-toggle="dropdown"><span class="d-none d-md-inline">Fulfillment status</span><span class="d-inline d-md-none"><i class="fa fa-check"></i></span> &nbsp;</button>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
								<div role="separator" class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Separated link</a>
							</div>
						</div>
						<!-- END input-group -->
						
						<!-- BEGIN table -->
						<div class="table-responsive">
							<table id="datatableDefault" class="table text-nowrap w-100" data-toggle="table" data-search="true">
								<thead>
									<tr>
										<th class="border-top-0 pt-0 pb-2"></th>
										<th class="border-top-0 pt-0 pb-2">Invoice</th>
										<th class="border-top-0 pt-0 pb-2">Pemasukan</th>
										<th class="border-top-0 pt-0 pb-2">Pengeluaran</th>
										<th class="border-top-0 pt-0 pb-2">Tanggal Masuk</th>
										<th class="border-top-0 pt-0 pb-2">Tanggal Keluar</th>
										<th class="border-top-0 pt-0 pb-2">Keterangan</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="w-10px align-middle">
											<div class="form-check">
												<input type="checkbox" class="form-check-input" id="product1">
												<label class="form-check-label" for="product1"></label>
											</div>
										</td>
										<td class="align-middle"><a href="#">#1950</a></td>
										<td class="align-middle"></td>
										<td class="align-middle"></td>
										<td class="align-middle"></td>
										<td class="align-middle"></td>
										<td class="align-middle"></td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- END table -->
						<div class="modal">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">
										&times;
									</button>
									<h4 class="modal_title"></h4>
									</div>
									<div id="modal_content" class="modal-body"></div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
										<button type="button" class="btn btn-outline-theme">Save changes</button>
									</div>
								</div>
							</div>
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
		<!-- END #content -->

<script type="text/javascript">
	$('#toolbar_tambah').on('click', function () {
					$('.main_modal').on('show.bs.modal', function (e) {
						if (xhr && xhr.readyState != 4) {
							xhr.abort();
						}
						xhr = $.ajax({
							type: 'POST',
							url: '<?= base_url("keuangan/tambah/")?>',
							datatype: 'json',
							success: function (data) {
								setTimeout(function () {
									$('.modal_title').html('Tambah');
									$('#modal_content').html(data);
									$('.btn_simpan').attr('onclick', 'save("")');
								}, 0000);
							},
							beforeSend: function () {
								$('.modal_title').html('Sedang memuat data ...');
							}
						});
					});
					$('.main_modal').modal('show');
				});
</script>