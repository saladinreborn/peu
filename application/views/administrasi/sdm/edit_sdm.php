<form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<legend>Tambah Data SDM</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama</label>  
  <div class="col-md-2">
  <input id="nama" name="nama" type="text" value=" <?php echo $data[0]['nama']; ?> " placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="alamat">Alamat</label>  
  <div class="col-md-8">
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

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="merk">Jabatan</label>
  <div class="col-md-2">
    <select id="jabatan" name="jabatan" class="form-control">
      
       <?php 
        $opt = array('Pilih Jabatan','Mekanik','Kepala Mekanik','Purchasing','Administrasi','Owner');
        foreach ($opt as $key => $value):
          $selected = $data[0]['merk'] == $key ? 'selected' : '';
          echo "<option value='$key' $selected>$value</option>";
        endforeach;  ?>

    </select>
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
