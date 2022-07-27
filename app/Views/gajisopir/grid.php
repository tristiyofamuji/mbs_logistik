<?php foreach($gaji as $value):?>
<tr id="kolom<?=$value['id']?>" onclick="action('<?=$value['id']?>')" class="">
	<!-- <td class="w-10px align-middle">
		<div class="form-check">
			<input type="checkbox" class="form-check-input" id="product1">
				<label class="form-check-label" for="product1"></label>
		</div>
	</td> -->								
	<td><?= str_replace(' ','', $value['no_kendaraan']).'-'.$value['id_sopir'];?></td>
	<td><?= $value['periode'];?></td>
	<td><?= $value['nama'];?></td>
	<td><?= $value['alamat'];?></td>
	<td><?= $value['keterangan'];?></td>
</tr>
<?php endforeach;?>
					