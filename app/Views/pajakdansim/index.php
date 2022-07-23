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
									<th class="border-top-0 pt-0 pb-2">ID Sopir</th>
									<th class="border-top-0 pt-0 pb-2">Nama Sopir</th>
									<th class="border-top-0 pt-0 pb-2">Jenis Surat</th>
									<th class="border-top-0 pt-0 pb-2">Jenis Kendaraan</th>
									<th class="border-top-0 pt-0 pb-2">Tgl. Masa Berlaku</th>
									<th class="border-top-0 pt-0 pb-2">Wilayah/Kota Surat</th>
									<th class="border-top-0 pt-0 pb-2">Keterangan</th>
								</tr>
							</thead>
							<tbody id="tbody" class="animated table_content">
								<tr>
									<td colspan="7"><i id="spinner" class="fa fa-spinner"></i> &nbsp; Loading.. Mohon
										tunggu.
									</td>
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
			function action(id) {
				$('tr').css({
					'background-color': '',
					'color': ''
				});
				$('#kolom' + id).css({
					'background-color': '#3CD2A5',
					'color': '#000',
					'input':'checked'
				});
				$('#btn_delete').attr('onclick', "remove('" + id + "')");
				$('#toolbar_delete').removeAttr('disabled');
				$('#toolbar_edit').attr('onclick', "edit('" + id + "')");
				$('#edit').removeAttr('disabled');
			}
			function load_data(pageno) {
				$.ajax({
					type: 'POST',
					url: '<?= base_url("keuangan/datagrid/")?>/' + pageno,
					dataType: 'json',
					success: function (data) {
						// console.log(data);
						if (data.pagination > 12) {
							$('#pagination').css('margin-right', '5px');
						}
						$('#pagination').html(data.pagination);
						$('.table_content').html(data.tabel);
						$('.total_data').html('Total : ' + data.total_data + ' Data');
					}
				});
			}
			$(document).ready(function () {
				$('#pagination').on('click', 'a', function (e) {
					e.preventDefault();
					var pageno = $(this).attr('data-ci-pagination-page');
					$.ajax({
						url: '<?= base_url("keuangan/datagrid/")?>' + pageno,
						type: 'get',
						dataType: 'json',
						success: function (data) {
							loaded();
							if (data.pagination > 14) {
								$('#pagination').css('margin-right', '5px');
							}
							$('#pagination').html(data.pagination);
							$('.table_content').html(data.tabel);
							NProgress.done();
						},
						beforeSend: function () {
							loading('success',
								'<i class="fa fa-spinner" id="spinner"></i> &nbsp;sedang mengambil data..'
								);
							NProgress.start();
						}
					});
				});
			});
		</script>