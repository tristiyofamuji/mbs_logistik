<div class="row">
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Nama Sopir</label>
		<div class="col-sm-12">
			<select name="id_sopir" class="form-select" required>
				<option value="" style="display:none;">Pilih Sopir</option>
				<?php foreach($sopir as $a): ?>
				<option value="<?= $a['id'] ?>"><?= $a['nama'] ?></option>
				<?php endforeach; ?>
			</select>
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Periode</label>
		<div class="col-sm-12">
			<input id="periode" name="periode" placeholder="Periode" value="<?= date('Y') ?>" class="form-control">
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Keterangan</label>
		<div class="col-sm-12">
			<input id="keterangan" name="keterangan" placeholder="Keterangan" class="form-control">
		</div>
	</div>
</div>
