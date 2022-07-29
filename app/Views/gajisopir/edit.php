<?php foreach($gaji as $edit): ?>
<div class="row">
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Nama Sopir</label>
		<div class="col-sm-12">
			<select name="id_sopir" class="form-select" required>
				<option value="" style="display:none;">Pilih Sopir</option>
				<?php foreach($sopir as $a): ?>
				<option value="<?= $a['id'] ?>" <?php if($edit['id_sopir'] == $a['id']){ echo 'selected'; } ?>><?= $a['nama'] ?></option>
				<?php endforeach; ?>
			</select>
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Periode</label>
		<div class="col-sm-12">
			<input type="date" name="periode" id="periode" placeholder="Periode" value="<?= $edit['periode'] ?>" class="form-control">
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Keterangan</label>
		<div class="col-sm-12">
			<input id="keterangan" name="keterangan" placeholder="Keterangan" value="<?= $edit['keterangan'] ?>" class="form-control">
		</div>
	</div>
</div>
<?php endforeach ?>