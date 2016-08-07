<table class="table table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Suku Cadang</th>
			<th>Jumlah Masuk</th>
			<th>Jumlah Keluar</th>
			<th>Jumlah</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		if(!isset($data) or empty($data)):
			echo '<tr><td colspan="6">Data suku cadang tidak ditemukan.</td></tr>';
		else:
			$i = 1;
			foreach ($data as $key => $value): ?>
				<tr>
					<td><?php echo $i++; ?></td>
					<td><?php echo $value['nama_sc']; ?></td>
					<td><?php echo $value['masuk']; ?></td>
					<td><?php echo $value['keluar']; ?></td>
					<td><?php echo $value['jumlah']; ?></td>
				</tr>
		<?php
			endforeach;
		endif; ?>
		<tr>
			
		</tr>
	</tbody>
</table>