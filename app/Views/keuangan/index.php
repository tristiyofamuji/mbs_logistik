<?php if (!empty(session()->getFlashdata('error'))) : ?>
									<div class="alert alert-warning alert-dismissible fade show" role="alert">
										<center><?php echo session()->getFlashdata('error'); ?></center>
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
				
				<div class="ms-auto">
					<a href="#TambahModal" class="btn btn-outline-theme" data-bs-toggle="modal" data-original-title="Tambah"><i class="fa fa-plus-circle fa-fw me-1"></i> Create Invoice</a>
				</div>
			</div>
			
			<div class="mb-md-4 mb-3 d-md-flex">
				<div class="mt-md-0 mt-2"><a href="#" class="text-white text-opacity-75 text-decoration-none"><i class="fa fa-download fa-fw me-1 text-theme"></i> Export</a></div>
				<div class="ms-md-2 mt-md-0 mt-2"><a href="#" class="text-white text-opacity-75 text-decoration-none"><i class="fa fa-lg fa-fw me-2 fa-edit text-theme"></i> Edit</a></div>
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
									<input type="text" class="form-control px-35px" placeholder="Filter orders" />
									<div class="input-group-text position-absolute top-0 bottom-0 bg-none border-0 start-0" style="z-index: 1020;">
										<i class="fa fa-search opacity-5"></i>
									</div>
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
								<?php foreach($keuangan as $value):?>
									<tr>
										<td class="w-10px align-middle">
											<div class="form-check">
												<input type="checkbox" class="form-check-input" id="product1">
												<label class="form-check-label" for="product1"></label>
											</div>
										</td>
										
										<td><?=$value['id'];?></td>
										<td><?=$value['pemasukan'];?></td>
										<td><?=$value['pengeluaran'];?></td>
										<td><?=$value['tgl_masuk'];?></td>
										<td><?=$value['tgl_keluar'];?></td>
										<td><?=$value['keterangan'];?></td>
										
									</tr>
									<?php endforeach;?>
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
		<!-- BEGIN modal-->
						<form action="<?= base_url('keuangan/store') ?>" method="POST" name="tambah_keuangan" id="tambah_keuangan">
						<div class="modal fade" id="TambahModal">
							<div class="modal-dialog">
								<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">MODAL TITLE</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
								</div>
								<div class="modal-body">
								<div class="row">
									<div class="form-group col-sm-12">
											<label class="col-sm-2 control-label">
												Uang Masuk
											</label>
											<div class="col-sm-9">
												<textarea id="pemasukan" name="pemasukan" placeholder="Pemasukan"
													class="form-control"></textarea>
											</div>
									</div>
										<div class="form-group col-sm-12">
											<label class="col-sm-2 control-label">
												Uang Keluar
											</label>
											<div class="col-sm-9">
												<textarea id="pengeluaran" name="pengeluaran" placeholder="Pengeluaran"
													class="form-control"></textarea>
											</div>
										</div>
										<div class="form-group col-sm-12">
											<label class="col-sm-2">
												Tanggal Masuk
											</label>
											<div class="col-sm-9">
											<input type="text" class="form-control" id="datepicker" name="tgl_masuk" placeholder="dd/mm/yyyy" />											</div>
										</div>
										<div class="form-group col-sm-12">
											<label class="col-sm-2">
												Tanggal Keluar
											</label>
											<div class="col-sm-9">
											<input type="text" class="form-control" id="datepicker" name="tgl_keluar" placeholder="dd/mm/yyyy" />											</div>
										</div>
										<div class="form-group col-sm-12">
											<label class="col-sm-2 control-label">
												Keterangan
											</label>
											<div class="col-sm-9">
												<input id="keterangan" name="keterangan" type="text" placeholder="Keterangan" class="form-control">
											</div>
										</div>
								</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-outline-theme">Save changes</button>
								</div>
								</div>
							</div>
						</div>
						</form>

						
						<!-- BEGIN modal -->