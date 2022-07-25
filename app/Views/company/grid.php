<?php foreach($usaha as $value):?>
<tr id="kolom<?=$value['id']?>" onclick="action('<?=$value['id']?>')" class="">
	<!-- <td class="w-10px align-middle">
		<div class="form-check">
			<input type="checkbox" class="form-check-input" id="product1">
				<label class="form-check-label" for="product1"></label>
		</div>
	</td> -->								
	<td><?= $value['nama_usaha'];?></td>
	<td><?= $value['telepon'];?></td>
	<td><?= $value['email'];?></td>
	<td><?= $value['alamat'];?></td>
	<td><?= $value['npwp'];?></td>
	<td><?= $value['no_sk'];?></td>
	<td><?= $value['keterangan'];?></td>
</tr>
<?php endforeach;?>
					