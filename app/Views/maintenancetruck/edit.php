<div class="row">
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Nama Sopir</label>
		<div class="col-sm-12">
			<select name="id_sopir" class="form-select" id="id_sopir">
				<?php foreach($sopir as $a): ?>
				<option value="<?= $a['id'] ?>" <?php if($edit['id_sopir'] == $a['id']){ echo 'selected'; } ?>><?= $a['nama'] ?></option>
				<?php endforeach; ?>
			</select>
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Tgl. Transaksi</label>
		<div class="col-sm-12">
			<input type="date" id="tgl_transaksi" name="tgl_transaksi" value="<?= $edit['tgl_transaksi'] ?>" placeholder="" class="form-control">
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">No. Kendaraan</label>
		<div class="col-sm-12">
			<input id="no_kendaraan" name="no_kendaraan" placeholder="No. Kendaraan" value="<?= $edit['no_kendaraan'] ?>" class="form-control">
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Total Biaya</label>
		<div class="col-sm-12">
			<input id="total_biaya" name="total_biaya" placeholder="Total Biaya" value="<?= $edit['total_biaya'] ?>" class="form-control">
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Keterangan</label>
		<div class="col-sm-12">
			<textarea id="keterangan" name="keterangan" placeholder="Keterangan" class="form-control"><?= $edit['keterangan'] ?></textarea>
		</div>
	</div>
</div>
