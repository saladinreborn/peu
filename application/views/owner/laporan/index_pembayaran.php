<div id="laporan_pembayaran">
	<h4>Laporan Pembayaran</h4>
		<select name="bln" id="bln">
		<option value="00">Pilih Bulan</option>
			<?php
				if(isset($dt_month) && $dt_month):
					foreach ($dt_month as $k_month => $v_month): ?>
					<option value="<?php echo $k_month; ?>"><?php echo $v_month; ?></option>
			<?php endforeach; endif; ?>
		</select>

		<select name="thn" id="thn">
			<option value="00">Pilih Tahun</option>
			<?php 
				if(isset($dt_year) && $dt_year):
					foreach ($dt_year as $k_year): ?>
					<option value="<?php echo $k_year; ?>"><?php echo $k_year; ?></option>
			<?php endforeach; endif; ?>
		</select>

		<button type="button" id="show_lap_pembayaran">Lihat</button>
</div>
<div id="detail_pembayaran"></div>