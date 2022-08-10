<?php $no = 1; foreach($jualbeli as $value):?>
<tr id="kolom<?=$value['id']?>" onclick="action('<?=$value['id']?>')" class="">
	<td><?= $no++;?></td>
	<td><?= $value['tgl_transaksi'];?></td>
	<td><a href="<?= base_url('assets/file/'.$value['file_invoice']) ?>" class="btn btn-sm btn-success text-decoration-none" target="_blank" rel="noopener noreferrer"><?= $value['file_invoice'] ?></a></td>
	<td><?= $value['no_kendaraan'];?></td>
	<td><?= $value['keterangan'];?></td>
</tr>
<?php endforeach;?>
					