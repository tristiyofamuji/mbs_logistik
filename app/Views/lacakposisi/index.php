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
				<div class="mt-md-0 mt-2"><a href="" class="text-white text-opacity-75 text-decoration-none"><i class="fa fa-refresh fa-fw me-1 text-theme"></i> Refresh</a></div>
			</div>
			
			<div id="datatable" class="mb-5">
				<div class="card">
					<div class="card-body">
						<table id="datatableDefault" class="table text-nowrap w-100">
							<thead>
								<tr>
									<th class="border-top-0 pt-0 pb-2">ID Sopir</th>
									<th class="border-top-0 pt-0 pb-2">Nama Sopir</th>
									<th class="border-top-0 pt-0 pb-2">No. Kendaraan</th>
									<th class="border-top-0 pt-0 pb-2">Posisi GPS</th>
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

		<script type="text/javascript">
				load_data();
				
				function load_data(pageno) {
					$.ajax({
						type: 'POST',
						url: '<?= base_url("lacakposisi/datagrid/")?>/' + pageno,
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
							url: '<?= base_url("lacakposisi/datagrid/")?>' + pageno,
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