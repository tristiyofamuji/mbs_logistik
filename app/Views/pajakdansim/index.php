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
				<div class="mt-md-0 mt-2"><a href="#" id="toolbar_tambah" data-target="modal_tambah" data-toggle="modal" class="text-white text-opacity-75 text-decoration-none" data-original-title="Tambah"><i class="fa fa-lg fa-fw me-2 fa-plus text-theme"></i>Tambah</a></div>
				<div class="ms-md-2 mt-md-0 mt-2"><a href="#" id="toolbar_edit" class="text-white text-opacity-75 text-decoration-none" data-toggle="modal" data-original-title="Edit"><i class="fa fa-lg fa-fw me-2 fa-edit text-theme"></i>Edit</a></div>
				<div class="ms-md-2 mt-md-0 mt-2"><a href="#" id="toolbar_delete" data-bs-target="#ModalDelete" class="text-white text-opacity-75 text-decoration-none" data-bs-toggle="modal" data-original-title="Remove"><i class="fa fa-lg fa-fw me-2 fa-remove text-theme"></i>Delete</a></div>
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

		<div class="modal fade main_modal" id="modalSopir" tabindex="-1" data-width="760" aria-hidden="true" style="display: none;">
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
						url: '<?= base_url("pajakdansim/save/") ?>/' + id,
						dataType: 'json',
						data: {
							id_sopir: $('select[name="id_sopir"]').val(),
							jenis_kendaraan: $('input[name="jenis_kendaraan"]').val(),
							jenis_surat: $('input[name="jenis_surat"]').val(),
							masa_berlaku: $('input[name="masa_berlaku"]').val(),
							wilayah: $('input[name="wilayah"]').val(),
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
							url: '<?= base_url("pajakdansim/tambah/")?>',
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
						'background-color': '#3CD2A5',
						'color': '#000',
						'input':'checked'
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
						url: '<?= base_url("pajakdansim/edit/")?>/'+ id,
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
					/* $('#modalSopir').modal({
			    		backdrop: 'static',
			    		keyboard: false
					}); */
				}	

				function remove(id) {
					$.ajax({
						type: 'POST',
						url: '<?= base_url("pajakdansim/delete/") ?>/' + id,
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
					url: '<?= base_url("pajakdansim/datagrid/")?>/' + pageno,
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
							url: '<?= base_url("pajakdansim/datagrid/")?>' + pageno,
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