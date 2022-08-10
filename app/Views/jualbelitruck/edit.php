<div class="row">
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">File Invoice</label>
		<div class="col-sm-12">
            <a href="<?= base_url('assets/file/'.$edit['file_invoice']) ?>" target="_blank" rel="noopener noreferrer"><?= $edit['file_invoice'] ?></a><br>
			<input type="file" id="file_invoice" name="file_invoice" placeholder="File Invoice" class="form-control">
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Tgl. Transaksi</label>
		<div class="col-sm-12">
			<input type="date" id="tgl_transaksi" name="tgl_transaksi" placeholder="Tgl. Transaksi" value="<?= $edit['tgl_transaksi'] ?>" class="form-control">
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">No. Kendaraan</label>
		<div class="col-sm-12">
			<input type="text" id="no_kendaraan" name="no_kendaraan" placeholder="No. Kendaraan" value="<?= $edit['no_kendaraan'] ?>" class="form-control">
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Keterangan</label>
		<div class="col-sm-12">
			<input type="text" id="keterangan" name="keterangan" placeholder="Keterangan" value="<?= $edit['keterangan'] ?>" class="form-control">
		</div>
	</div>
</div>
