<div class="row">
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Nama Sopir</label>
		<div class="col-sm-12">
			<select name="id_sopir" class="form-select" id="id_sopir">
				<option value="" style="display:none;">Pilih Sopir</option>
				<?php foreach($sopir as $a): ?>
				<option value="<?= $a['id'] ?>"><?= $a['nama'] ?></option>
				<?php endforeach; ?>
			</select>
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Jenis Kendaraan</label>
		<div class="col-sm-12">
			<input id="jenis_kendaraan" name="jenis_kendaraan" placeholder="Jenis Kendaraan" class="form-control">
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Jenis Surat</label>
		<div class="col-sm-12">
			<input id="jenis_surat" name="jenis_surat" placeholder="Jenis Surat" class="form-control">
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Masa Berlaku</label>
		<div class="col-sm-12">
			<input type="date" id="masa_berlaku" name="masa_berlaku" placeholder="" class="form-control">
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Wilayah</label>
		<div class="col-sm-12">
			<input id="wilayah" name="wilayah" placeholder="Wilayah" class="form-control">
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Keterangan</label>
		<div class="col-sm-12">
			<textarea id="keterangan" name="keterangan" placeholder="Keterangan" class="form-control"></textarea>
		</div>
	</div>
</div>
