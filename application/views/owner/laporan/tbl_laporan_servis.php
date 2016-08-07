<table class="table table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>ID Order</th>
			<th>No. Polisi</th>
			<th>Pemilik</th>
			<th>Keterangan</th>
			<th>Tanggal Order</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		if(!isset($data) or empty($data)):
			echo '<tr><td colspan="6">Data servis tidak ditemukan.</td></tr>';
		else:
			$i = 1;
			foreach ($data as $key => $value): ?>
				<tr>
					<td><?php echo $i++; ?></td>
					<td><?php echo $value['id_wo']; ?></td>
					<td><?php echo $value['no_pol']; ?></td>
					<td><?php echo $value['pemilik']; ?></td>
					<td><?php echo $value['keterangan']; ?></td>
					<td><?php echo $value['tgl_masuk']; ?></td>
				</tr>
		<?php
			endforeach;
		endif; ?>
		<tr>
			
		</tr>
	</tbody>
</table>