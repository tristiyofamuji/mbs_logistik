<?php if (!empty(session()->getFlashdata('error'))) : ?>
									<div class="alert alert-warning alert-dismissible fade show" role="alert">
										<center><?php echo session()->getFlashdata('error'); ?></center>
									</div>	
								<?php endif; ?>
								<?php if (!empty(session()->getFlashdata('success'))) : ?>
									<div class="alert alert-success alert-dismissible fade show" role="alert">
										<center><?php echo session()->getFlashdata('success'); ?></center>
									</div>	
								<?php endif; ?>
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
				
				<!-- <div class="ms-auto">
					<a href="#TambahModal" class="btn btn-outline-theme" data-bs-toggle="modal" data-original-title="Tambah"><i class="fa fa-plus-circle fa-fw me-1"></i> Create Invoice</a>
					<a href="#" id="toolbar_tambah" data-target="modal_tambah" data-toggle="modal" class="btn btn-xs btn-primary tooltips" style="padding-top:5px;" data-original-title="Tambah"><i class="fa fa-plus"></i></a>				</div> -->
			</div>
			
			<div class="mb-md-4 mb-3 d-md-flex">
				<div class="mt-md-0 mt-2"><a href="#" id="toolbar_tambah" data-target="modal_tambah" data-toggle="modal" class="text-white text-opacity-75 text-decoration-none" data-original-title="Tambah"><i class="fa fa-lg fa-fw me-2 fa-plus text-theme"></i>Tambah</a></div>
				<div class="ms-md-2 mt-md-0 mt-2"><a href="#" id="toolbar_edit" class="text-white text-opacity-75 text-decoration-none" data-toggle="modal" data-original-title="Edit"><i class="fa fa-lg fa-fw me-2 fa-edit text-theme"></i>Edit</a></div>
				<div class="ms-md-2 mt-md-0 mt-2"><a href="#" id="toolbar_delete" data-bs-target="#ModalDelete" class="text-white text-opacity-75 text-decoration-none" data-bs-toggle="modal" data-original-title="Remove"><i class="fa fa-lg fa-fw me-2 fa-remove text-theme"></i>Delete</a></div>
				<div class="ms-md-2 mt-md-0 mt-2"><a href="#" class="text-white text-opacity-75 text-decoration-none"><i class="fa fa-download fa-fw me-1 text-theme"></i> Export</a></div>
				<div class="ms-md-2 mt-md-0 mt-2 dropdown-toggle">
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
								<tbody id="tbody" class="animated table_content">
									<tr>
										<td colspan="5"><i id="spinner" class="fa fa-spinner"></i> &nbsp; Loading.. Mohon
											tunggu.
										</td>
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
			<div class="modal fade main_modal" tabindex="-1" data-width="760" style="display: none;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal_title"></h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
						</div>
						<div id="modal_content" class="modal-body"></div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-outline-theme btn_simpan">Save changes</button>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				load_data();
				function save(id = "") {
					$.ajax({
						type: 'POST',
						url: '<?= base_url("keuangan/save/") ?>/' + id,
						dataType: 'json',
						data: {
							pemasukan: $('input[name="pemasukan"]').val(),
							pengeluaran: $('input[name="pengeluaran"]').val(),
							tgl_masuk: $('input[name="tgl_masuk"]').val(),
							tgl_keluar: $('input[name="tgl_keluar"]').val(),
							keterangan: $('textarea[name="keterangan"]').val(),
						},
						success: function (data) {
							var pageno = $('.paginate_active a').data('ci-pagination-page') - 1;
							load_data(pageno);
							$('.main_modal').modal('hide');		
						}
					});		
				}

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
									$('.btn_simpan').attr('onclick', 'save()');
								}, 1000);
							},
							beforeSend: function () {
								$('.modal_title').html('Sedang memuat data ...');
							}
						});
					});
					$('.main_modal').modal('show');
				});
				
				function action(id) {
					$('tr').css({
						'background-color': '',
						'color': ''
					});
					$('#kolom' + id).css({
						'background-color': '#FFE48D',
						'color': '#9E6007'
					});
					$('#btn_delete').attr('onclick', "remove('" + id + "')");
					$('#toolbar_delete').removeAttr('disabled');
					$('#toolbar_edit').attr('onclick', "edit('" + id + "')");
					$('#edit').removeAttr('disabled');
				}

				function edit(id) {
					$('.main_modal').on('show.bs.modal', function (e) {
						if (xhr && xhr.readyState != 4) {
							xhr.abort();
						}
						xhr = $.ajax({
						type: 'POST',
						url: '<?= base_url("keuangan/edit/")?>/'+ id,
						dataType: 'json',
						success: function (data) {	
								$('#modal_content').html(data);
								$('.modal_title').html('Edit');
								$('.btn_simpan').attr('onclick', 'save("' + id + '")');
								$('.btn_simpan').css('display', 'inline-block');
						},
						beforeSend: function () {
							$('.modal_title').html('Sedang memuat data ..');
							$('#modal_content').html(loader_2());
						}
						});		
					});
					$('.main_modal').modal('show');
				}	

				function remove(id) {
					$.ajax({
						type: 'POST',
						url: '<?= base_url("keuangan/delete/") ?>/' + id,
						dataType: 'json',
						success: function (data) {
							var pageno = $('.paginate_active a').data('ci-pagination-page') - 1;
							load_data();
							$('#toolbar_delete').attr('disabled', 'true');
							$('#modal_hapus').modal('hide');
						}
					});
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
				<script>
				jQuery(document).ready(function () {
					Main.init();
					Index.init();
				});

			</script>