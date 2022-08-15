<div class="row">
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Nama Sopir</label>
		<div class="col-sm-12">
			<select name="id_sopir" class="form-select" id="id_sopir">
				<option value="" style="display:none;">Pilih Sopir</option>
				<?php foreach($sopir as $a): ?>
				<option value="<?= $a['id'] ?>" <?php if($posisi['id_sopir'] == $a['id']){ echo 'selected'; } ?>><?= $a['nama'] ?></option>
				<?php endforeach; ?>
			</select>
		</div>
	</div>
	<div class="form-group col-sm-12 mt-2">
		<label class="col-sm-6 control-label">ID Device GPS</label>
		<div class="col-sm-12">
			<input id="posisi_gps" name="posisi_gps" placeholder="ID Device GPS" value="<?= $posisi['posisi_gps'] ?>" class="form-control">
		</div>
	</div>
	<div class="form-group col-sm-12 mt-2">
		<label class="col-sm-6 control-label">ID Device GPS</label>
		<div class="col-sm-12">
			<input id="posisi_gps" name="posisi_gps" placeholder="ID Device GPS" value="<?= $posisi['posisi_gps'] ?>" class="form-control">
		</div>
	</div>
</div>
