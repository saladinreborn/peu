<form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<legend>Edit Data Layanan Jasa</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama Layanan</label>  
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" value=" <?php echo $data[0]['nama']; ?> " placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ket">Keterangan</label>  
  <div class="col-md-4">
  <input id="alamat" name="ket" type="text" value=" <?php echo $data[0]['ket']; ?> " placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="harga">Harga Rp. </label>  
  <div class="col-md-2">
  <input id="no_telp" name="harga" type="text" value=" <?php echo $data[0]['harga']; ?> " placeholder="Angka" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="simpan"></label>
  <div class="col-md-4">
    <button id="simpan" name="simpan" class="btn btn-primary">Simpan</button>
  </div>
</div>

</fieldset>
</form>
