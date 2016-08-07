<div id="laporan_servis">
	<h4>Laporan Servis</h4>
	<form name="form_lap_servis" id="form_lap_servis" action="" method="POST">
		<select name="bln" id="bln">
			<?php
				if(isset($dt_month) && $dt_month):
					foreach ($dt_month as $k_month => $v_month): ?>
					<option value="<?php echo $k_month; ?>"><?php echo $v_month; ?></option>
			<?php endforeach; endif; ?>
		</select>

		<select name="thn" id="thn">
			<?php 
				if(isset($dt_year) && $dt_year):
					foreach ($dt_year as $k_year): ?>
					<option value="<?php echo $k_year; ?>"><?php echo $k_year; ?></option>
			<?php endforeach; endif; ?>
		</select>

		<button type="button" id="show_lap_servis">Lihat</button>
	</form>
</div>
<div id="detail_servis"></div>