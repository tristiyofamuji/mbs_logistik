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
			</div>
			
			<div class="mb-md-4 mb-3 d-md-flex">
				<div class="mt-md-0 mt-2"><a href="#" class="text-white text-opacity-75 text-decoration-none"><i class="fa fa-download fa-fw me-1 text-theme"></i> Export</a></div>
				<div class="ms-md-4 mt-md-0 mt-2 dropdown-toggle">
					<a href="#" data-bs-toggle="dropdown" class="text-white text-opacity-75 text-decoration-none">Pilih Tahun</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">2021</a>
						<a class="dropdown-item" href="#">2022</a>
					</div>
				</div>
			</div>
			
			<div class="card">
				<ul class="nav nav-tabs nav-tabs-v2 px-4">
					<li class="nav-item me-3"><a href="#allTab" class="nav-link active px-2" data-bs-toggle="tab">All</a></li>
					<li class="nav-item me-3"><a href="#bulan1" class="nav-link px-2" data-bs-toggle="tab">Januari</a></li>
					<li class="nav-item me-3"><a href="#bulan2" class="nav-link px-2" data-bs-toggle="tab">Februari</a></li>
					<li class="nav-item me-3"><a href="#bulan3" class="nav-link px-2" data-bs-toggle="tab">Maret</a></li>
					<li class="nav-item me-3"><a href="#bulan4" class="nav-link px-2" data-bs-toggle="tab">April</a></li>
					<li class="nav-item me-3"><a href="#bulan5" class="nav-link px-2" data-bs-toggle="tab">Mei</a></li>
					<li class="nav-item me-3"><a href="#bulan6" class="nav-link px-2" data-bs-toggle="tab">Juni</a></li>
					<li class="nav-item me-3"><a href="#bulan7" class="nav-link px-2" data-bs-toggle="tab">Juli</a></li>
					<li class="nav-item me-3"><a href="#bulan8" class="nav-link px-2" data-bs-toggle="tab">Agustus</a></li>
					<li class="nav-item me-3"><a href="#bulan9" class="nav-link px-2" data-bs-toggle="tab">September</a></li>
					<li class="nav-item me-3"><a href="#bulan10" class="nav-link px-2" data-bs-toggle="tab">Oktober</a></li>
					<li class="nav-item me-3"><a href="#bulan11" class="nav-link px-2" data-bs-toggle="tab">November</a></li>
					<li class="nav-item me-3"><a href="#bulan12" class="nav-link px-2" data-bs-toggle="tab">Desember</a></li>
				</ul>
				<div class="tab-content p-4">
					<div class="tab-pane fade show active" id="allTab">						
						<!-- BEGIN table -->
						<div id="datatable" class="mb-5">
							<table id="datatableDefault" class="table text-nowrap w-100">
								<thead>
									<tr>
										<th class="border-top-0 pt-0 pb-2"></th>
										<th class="border-top-0 pt-0 pb-2">ID Sopir</th>
										<th class="border-top-0 pt-0 pb-2">Nama Sopir</th>
										<th class="border-top-0 pt-0 pb-2">Wilayah</th>
										<th class="border-top-0 pt-0 pb-2">Pemasukan</th>
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
									</tr>
								</tbody>
							</table>
						</div>
						<!-- END table -->
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