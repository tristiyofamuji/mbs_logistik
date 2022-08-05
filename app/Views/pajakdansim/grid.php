<?php foreach($pajak as $value):?>
<tr id="kolom<?=$value['id']?>" onclick="action('<?=$value['id']?>')" class="">	
	<td><?= str_replace(' ','', $value['no_kendaraan']).'-'.$value['id_sopir'];?></td>
	<td><?= $value['nama'];?></td>
	<td><?= $value['jenis_surat'];?></td>
	<td><?= $value['jenis_kendaraan'];?></td>
	<td><?= $value['masa_berlaku'];?></td>
	<td><?= $value['wilayah'];?></td>
	<td><?= $value['keterangan'];?></td>
</tr>
<?php endforeach;?>
					