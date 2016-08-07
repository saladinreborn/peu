<table class="table table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>ID Work Oder</th>
			<th>No Polisi</th>
			<th>Pemilik</th>
			<th>Tanggal</th>
			<th>Jumlah</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		if(!isset($data) or empty($data)):
			echo '<tr><td colspan="6">Data pembayaran tidak ditemukan.</td></tr>';
		else:
			$i = 1;
			foreach ($data as $key => $value): ?>
				<tr>
					<td><?php echo $i++; ?></td>
					<td><?php echo $value['id_wo']; ?></td>
					<td><?php echo $value['no_pol']; ?></td>
					<td><?php echo $value['pemilik']; ?></td>
					<td><?php echo $value['tgl_pembayaran']; ?></td>
					<td><?php echo $value['jml_total']; ?></td>
				</tr>
		<?php
			endforeach;
		endif; ?>
		<tr>
			
		</tr>
	</tbody>
</table>