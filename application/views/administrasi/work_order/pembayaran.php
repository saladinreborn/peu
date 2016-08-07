<style type="text/css">
	table {
	    border-collapse: collapse;
	}
	
	table, th, td{
		border: solid 1px #000;
	}
</style>
<div id="kop">
	<img src="">
	<p>No Nota : <?php echo $dt_wo['id_wo']; ?></p>
</div>
<div id="detail-wo">
	<table>
		<tr>
			<td>Nama Konsumen</td>
			<td>:</td>
			<td><?php echo $dt_wo['pemilik']; ?></td>
			<td></td>
			<td>ID Work Order</td>
			<td>:</td>
			<td><?php echo $dt_wo['id_wo']; ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo $dt_wo['alamat']; ?></td>
			<td></td>
			<td>Mekanik</td>
			<td>:</td>
			<td><?php echo $dt_wo['nama']; ?></td>
		</tr>
		<tr>
			<td>No. Polisi</td>
			<td>:</td>
			<td><?php echo $dt_wo['no_pol']; ?></td>
			<td></td>
			<td>Tanggal</td>
			<td>:</td>
			<td><?php echo $dt_wo['tgl_masuk']; ?></td>
		</tr>
		<tr>
			<td>Merek / Tipe</td>
			<td>:</td>
			<td><?php echo $dt_wo['nama_merek']." / ".$dt_wo['tipe']; ?></td>
			<td></td>
		</tr>
		<tr>
			<td>Kilometer</td>
			<td>:</td>
			<td><?php echo $dt_wo['km_mobil']; ?></td>
			<td></td>
		</tr>


	</table>
</div>
<div id="detail-layanan">
	<table>
		<tr>
			<th>No</th>
			<th>Layanan Jasa</th>
			<th>Harga (Rp)</th>
		</tr>
		<?php 
			if(isset($dt_wos) && $dt_wos):
				$no_wos = 1;
				foreach ($dt_wos as $k_wos => $v_wos): ?>
					<tr>
						<td><?php echo $no_wos++; ?></td>
						<td><?php echo $v_wos['nama']; ?></td>
						<td><?php echo $v_wos['harga']; ?></td>
					</tr>
				<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td>-</td><td>-</td><td>-</td>
				</tr>
			<?php endif;?>
	</table>
</div>
<div id="detail-sc">
	<table>
		<tr>
			<th>No</th>
			<th>Suku Cadang</th>
			<th>Harga (Rp)</th>
		</tr>
		<?php 
			if(isset($dt_wosc) && $dt_wosc):
				$no_wosc = 1;
				foreach ($dt_wosc as $k_wosc => $v_wosc): ?>
					<tr>
						<td><?php echo $no_wosc++; ?></td>
						<td><?php echo $v_wosc['nama_sc']; ?></td>
						<td><?php echo $v_wosc['harga_jual']; ?></td>
					</tr>
				<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td>-</td><td>-</td><td>-</td>
				</tr>
			<?php endif;?>
	</table>
</div>
<div id="total">
	<table>
		<tr>
			<td></td>
			<td>Grand Total (Rp) :</td>
			<td><?php echo $grand_total; ?></td>
		</tr>
	</table>
</div>
<div id="ttd">
	<table>
		<tr>
			<td></td>
			<td>
				<?php setlocale(LC_ALL, 'id_ID'); ?>
				<p>Yogyakarta, <?php echo strftime("%e %B %Y"); ?></p>
				<p>Hormat Kami,</p>
				<br/><br/>
				<p><?php echo ucwords($this->session->uname); ?></p>
			</td>
		</tr>
	</table>
	
</div>