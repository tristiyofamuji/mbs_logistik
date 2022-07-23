<?php foreach($sopir as $value):?>
<tr id="kolom<?=$value['id']?>" onclick="action('<?=$value['id']?>')" class="">
	<!-- <td class="w-10px align-middle">
		<div class="form-check">
			<input type="checkbox" class="form-check-input" id="product1">
				<label class="form-check-label" for="product1"></label>
		</div>
	</td> -->								
	<td><?= $value['nama'];?></td>
	<td><?= $value['telepon'];?></td>
	<td><?= $value['no_whatsapp'];?></td>
	<td><?= $value['alamat'];?></td>
	<td><?= $value['no_kendaraan'];?></td>
</tr>
<?php endforeach;?>
					