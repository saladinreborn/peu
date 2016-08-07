<div id="search-wo">
	<div class="">
      <label class="col-md-4 control-label" for="textinput">No ID Work Order</label>  
      <div class="col-md-4">
      <input id="id_wo" name="id_wo" type="text" placeholder="ID Work Oder" value="<?php echo isset($id_wo) ? $id_wo: ''; ?>" class="form-control input-md" required="">
        
      </div>
    </div>

    <!-- Button -->
    <div class="">
      <label class="col-md-4 control-label" for="cari"></label>
      <div class="col-md-4">
        <button type="button" id="cari_wo" class="btn btn-primary">Cari</button>
      </div>
    </div>
</div>
<div id="detail-wo">

</div>
<div id="detail-layanan">
	<h4>Daftar Layanan yang Dikerjakan</h4>
	<table class="table table-bordered">
		<thead>
			<th>No</th>
			<th>Nama Layanan</th>
			<th>Keterangan</th>
			<th>Aksi</th>
		</thead>
		<tbody>
			<?php 
			if(isset($dt_wos) && $dt_wos):
				$no_wos = 1;
				foreach ($dt_wos as $k_wos => $v_wos): ?>
					<tr>
						<td><?php echo $no_wos++; ?></td>
						<td><?php echo $v_wos['nama']; ?></td>
						<td><?php echo $v_wos['ket'] ? $v_wos['ket'] : '-' ; ?></td>
						<td><button type="button" class="del-wos" isi="<?php echo $v_wos['id_wo_service'];?>">Hapus</button></td>
					</tr>
				<?php endforeach; ?>
				<tr>
					<td></td>
					<td colspan="2">
						<select name="id_layanan" id="id_layanan">
							<?php
								foreach ($dt_layanan as $k_lay => $v_lay) {
									echo '<option value="'.$v_lay['id_layanan'].'">'.$v_lay['nama'].'</option>';
								}
							?>
						</select>
					</td>
					<td><button type="button" id="tambah_wos">Tambah</button></td>
				</tr>
			<?php else: ?>
				<tr>
					<td></td>
					<td colspan="2">
						<select name="id_layanan" id="id_layanan">
							<?php
								foreach ($dt_layanan as $k_lay => $v_lay) {
									echo '<option value="'.$v_lay['id_layanan'].'">'.$v_lay['nama'].'</option>';
								}
							?>
						</select>
					</td>
					<td><button type="button" id="tambah_wos">Tambah</button></td>
				</tr>
			<?php endif; ?>
		</tbody>
	</table>
</div>
<div id="detail-sc">
	<h4>Daftar Suku Cadang yang Digunakan</h4>
	<table class="table table-bordered">
		<thead>
			<th>No</th>
			<th>Nama Suku Cadang</th>
			<th>Keterangan</th>
			<th>Aksi</th>
		</thead>
		<tbody>
			<?php 
			if(isset($dt_wosc) && $dt_wosc):
				$no_wosc = 1;
				foreach ($dt_wosc as $k_wosc => $v_wosc): ?>
					<tr>
						<td><?php echo $no_wosc++; ?></td>
						<td><?php echo $v_wosc['nama_sc']; ?></td>
						<td><?php echo $v_wosc['produsen'] ? $v_wosc['produsen'] : '-' ; ?></td>
						<td><button type="button" class="del-wosc" isi="<?php echo $v_wosc['id_wo_sc'];?>">Hapus</button></td>
					</tr>
				<?php endforeach; ?>
				<tr>
					<td></td>
					<td colspan="2">
						<select name="id_sc" id="id_sc">
							<?php
								foreach ($dt_sc as $k_sc => $v_sc) {
									echo '<option value="'.$v_sc['id_sc'].'">'.$v_sc['nama_sc'].'</option>';
								}
							?>
						</select>
					</td>
					<td><button type="button" id="tambah_wosc">Tambah</button></td>
				</tr>
			<?php
			else: ?>
				<tr>
					<td></td>
					<td colspan="2">
						<select name="id_sc" id="id_sc">
							<?php
								foreach ($dt_sc as $k_sc => $v_sc) {
									echo '<option value="'.$v_sc['id_sc'].'">'.$v_sc['nama_sc'].'</option>';
								}
							?>
						</select>
					</td>
					<td><button type="button" id="tambah_wosc">Tambah</button></td>
				</tr>
			<?php endif; ?>
		</tbody>
	</table>
</div>
