<?php foreach($posisi as $value):?>
<tr id="kolom<?=$value['id']?>" onclick="action('<?=$value['id']?>')" class="">
	<td><?= str_replace(' ','', $value['no_kendaraan']).'-'.$value['id_sopir'];?></td>
	<td><?= $value['nama'];?></td>
	<td><?= $value['no_kendaraan'];?></td>
	<td><?= $value['posisi_gps'];?></td>
</tr>
<?php endforeach;?>
					