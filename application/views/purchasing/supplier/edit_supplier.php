<form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<legend>Edit Data Supplier Suku Cadang</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama Supplier</label>  
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" value=" <?php echo $data[0]['nama']; ?> " placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="alamat">Alamat</label>  
  <div class="col-md-6">
  <input id="alamat" name="alamat" type="text" value=" <?php echo $data[0]['alamat']; ?> " placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="no_telp">No Telp</label>  
  <div class="col-md-2">
  <input id="no_telp" name="no_telp" type="text" value=" <?php echo $data[0]['no_telp']; ?> " placeholder="Angka" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-3">
  <input id="email" name="email" type="text" value=" <?php echo $data[0]['email']; ?> " placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama_cp">Nama CP</label>  
  <div class="col-md-3">
  <input id="nama_cp" name="nama_cp" type="text" value=" <?php echo $data[0]['nama_cp']; ?> " placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="no_telp_cp">No Telp/HP CP</label>  
  <div class="col-md-3">
  <input id="no_telp_cp" name="no_telp_cp" type="text" value=" <?php echo $data[0]['no_telp_cp']; ?> " placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="alamat_cp">Alamat CP</label>  
  <div class="col-md-6">
  <input id="alamat_cp" name="alamat_cp" type="text" value=" <?php echo $data[0]['alamat_cp']; ?> " placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email_cp">Email CP</label>  
  <div class="col-md-4">
  <input id="email_cp" name="email_cp" type="text" value=" <?php echo $data[0]['email_cp']; ?> " placeholder="" class="form-control input-md">
    
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
