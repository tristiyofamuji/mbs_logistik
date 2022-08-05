<?php foreach($pajak as $value):?>
<tr id="kolom<?=$value['id']?>" onclick="action('<?=$value['id']?>')" class="">
	<td><?= str_replace(' ','', $value['no_sopir']).'-'.$value['id_sopir'];?></td>
	<td><?= $value['nama'];?></td>
	<td><?= $value['no_kendaraan'];?></td>
	<td><?= $value['tgl_transaksi'];?></td>
	<td><?= $value['total_biaya'];?></td>
	<td><?= $value['keterangan'];?></td>
</tr>
<?php endforeach;?>
					