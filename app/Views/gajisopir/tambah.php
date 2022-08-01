<div class="row">
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Periode</label>
		<div class="col-sm-12">
			<input type="date" id="periode" name="periode" placeholder="Periode" value="<?= date('Y-m-d') ?>" class="form-control">
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Nama Sopir</label>
		<div class="col-sm-12">
			<select name="id_sopir" class="form-select" id="id_sopir">
				<option value="" style="display:none;">Pilih Sopir</option>
				<?php foreach($sopir as $a): ?>
				<option value="<?= $a['id'] ?>"><?= $a['nama'] ?></option>
				<?php endforeach; ?>
			</select>
			<!-- <input type="text" id="id_sopir" name="id_sopir" placeholder="Periode" value="1" class="form-control"> -->
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Keterangan</label>
		<div class="col-sm-12">
			<input type="text" id="keterangan" name="keterangan" placeholder="Keterangan" class="form-control">
		</div>
	</div>
</div>
