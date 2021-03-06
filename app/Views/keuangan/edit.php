<div class="row">
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Uang Masuk</label>
		<div class="col-sm-12">
			<input type="text" id="pemasukan" name="pemasukan" placeholder="Pemasukan" 
				class="form-control" value="<?=$keuangan['pemasukan']?>" required>
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Uang Keluar</label>
		<div class="col-sm-12">
			<input id="pengeluaran" name="pengeluaran" placeholder="Pengeluaran"
				class="form-control" value="<?=$keuangan['pengeluaran']?>">
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6">Tanggal Masuk</label>
		<div class="col-sm-12">
			<input type="date" class="form-control" name="tgl_masuk" value="<?= substr($keuangan['tgl_masuk'],0,10) ?>" placeholder="dd/mm/yyyy" /></div>
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6">Tanggal Keluar</label>
		<div class="col-sm-12">
			<input type="date" class="form-control" name="tgl_keluar" value="<?= substr($keuangan['tgl_keluar'],0,10) ?>" placeholder="dd/mm/yyyy" /></div>
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Keterangan</label>
		<div class="col-sm-12">
			<textarea id="keterangan" name="keterangan" type="text" placeholder="Keterangan" class="form-control" value="<?=$keuangan['keterangan']?>"><?=$keuangan['keterangan']?></textarea>
		</div>
	</div>
</div>