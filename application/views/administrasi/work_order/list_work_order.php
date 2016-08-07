<div id="tambah">
<form method="post" action="/administrasi/work_order/tambah">
	<input type="hidden" name="op" value="tambah">
	<input type="hidden" name="id_mobil" value="<?php echo $id_mobil; ?>">
	<label>KM terakhir</label>
	<input type="text" name="km_mobil">
	<label>Mekanik</label>
	<select name="id_sdm">
		<?php if(isset($dt_sdm)):
			foreach ($dt_sdm as $key => $value): ?>
				<option value="<?php echo $value['id_sdm'];?>"><?php echo $value['nama'];?></option>
				
		<?php  endforeach; endif; ?>
		
	</select>
	<label>Keterangan</label>
	<textarea placeholder="Keterangan"></textarea>
	<button class="btn btn-primary" type="submit">Tambah Order</button>
</form>
</div>
<div id="riwayat-work-order">
	<h4>Riwayat Order</h4>
	<table class="table table-bordered">
	<thead>
	<tr>
		<th>No</th>
		<th>ID Order</th>
		<th>Km Mobil</th>
		<th>Tanggal</th>
		<th>Status</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
		<?php 
		if(isset($list_wo) && $list_wo):
			$i = 1;
			foreach ($list_wo as $key => $wo): ?>
			<tr>
				<td><?php echo $i++; ?></td>
				<td><?php echo $wo['id_wo']; ?></td>
				<td><?php echo $wo['km_mobil']; ?></td>
				<td><?php echo $wo['tgl_masuk']; ?></td>
				<td><?php echo $wo['status']; ?></td>
				<td>
					<button type="button" class="btn btn-primary btn-small" target="_blank" onclick="window.location.replace('/administrasi/servis/<?php echo $wo['id_wo']; ?>/detail')">Detail</button>
					<button type="button" isi="<?php echo $wo['id_wo'];?>" class="btn btn-primary bayar_order" >Bayar</button>
					</td>
			</tr>
		<?php
			endforeach;
		endif;
		?>
		
	</tbody>
	</table>
</div>