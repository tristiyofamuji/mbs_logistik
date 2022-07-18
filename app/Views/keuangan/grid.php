<?php foreach($keuangan as $value):?>
<tr id="kolom<?=$value['id']?>" onclick="action('<?=$value['id']?>')" class="">
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
					