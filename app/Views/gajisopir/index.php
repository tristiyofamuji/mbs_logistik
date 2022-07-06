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
			</div>
			
			<div id="datatable" class="mb-5">
				<div class="card">
					<div class="card-body">
						<table id="datatableDefault" class="table text-nowrap w-100">
							<thead>
								<tr>
									<th class="border-top-0 pt-0 pb-2"></th>
									<th class="border-top-0 pt-0 pb-2">ID Sopir</th>
									<th class="border-top-0 pt-0 pb-2">Nama Sopir</th>
									<th class="border-top-0 pt-0 pb-2">Wilayah</th>
									<th class="border-top-0 pt-0 pb-2">Slip Gaji</th>
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
									<td class="align-middle">SUMARLAN</td>
									<td class="align-middle">SAMPIT</td>
									<td class="align-middle"><a href="#" data-bs-toggle="modal" data-bs-target="#modalXl">#SOP-22062201</a></td>
									<td class="align-middle">-</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="card-arrow">
						<div class="card-arrow-top-left"></div>
						<div class="card-arrow-top-right"></div>
						<div class="card-arrow-bottom-left"></div>
						<div class="card-arrow-bottom-right"></div>
					</div>
				</div>
			</div>
			<!-- END table -->
		</div>
		<!-- END #content -->

<div class="modal fade mt-5" id="modalXl">
  	<div class="modal-dialog modal-xl">
    	<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Slip Gaji #SOP-22062201</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>
			<div class="container p-3">				
				<div class="mb-md-4 mb-3 d-md-flex">
					<div class="mt-md-0 mt-2"><a href="#" class="text-white text-opacity-75 text-decoration-none"><i class="fa fa-print fa-fw me-1 text-theme"></i> Cetak</a></div>
				</div>
				<!-- BEGIN table -->
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive">
							<div class="card">
								<div class="card-body">
									<table class="table table-hover text-nowrap">
										<thead>
											<tr>
												<th class="border-top-0 pt-0 pb-2"></th>
												<th class="border-top-0 pt-0 pb-2">No</th>
												<th class="border-top-0 pt-0 pb-2">Kode</th>
												<th class="border-top-0 pt-0 pb-2">Keterangan</th>
												<th class="border-top-0 pt-0 pb-2">Nominal</th>
											</tr>
										</thead>
										<tbody>
											
										</tbody>
										<tfoot>
											<tr>
												<th colspan="4" style="text-align:right;">Total</th>
												<td>0</td>
											</tr>
										</tfoot>
									</table>
								</div>
								<div class="card-arrow">
									<div class="card-arrow-top-left"></div>
									<div class="card-arrow-top-right"></div>
									<div class="card-arrow-bottom-left"></div>
									<div class="card-arrow-bottom-right"></div>
								</div>
							</div>
						</div>
						<!-- END table -->
					</div>
				</div>
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