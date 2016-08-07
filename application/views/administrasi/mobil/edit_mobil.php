<form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<legend>Edit Data Mobil</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama Pemilik</label>  
  <div class="col-md-4">
  <input id="nama" name="pemilik" type="text" value="<?php echo $data[0]['pemilik']; ?>" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="alamat">Alamat</label>  
  <div class="col-md-8">
  <input id="alamat" name="alamat"  value="<?php echo $data[0]['alamat']; ?>" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="no_telp">No Telp</label>  
  <div class="col-md-2">
  <input id="no_telp" name="no_telp" value="<?php echo $data[0]['no_telp']; ?>" type="text" placeholder="Angka" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="no_pol">No Polisi</label>  
  <div class="col-md-2">
  <input id="no_pol" name="no_pol" value="<?php echo $data[0]['no_pol']; ?>" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="no_stnk">No STNK</label>  
  <div class="col-md-2">
  <input id="no_stnk" name="no_stnk" value="<?php echo $data[0]['no_stnk']; ?>" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="no_rangka">No Rangka</label>  
  <div class="col-md-2">
  <input id="no_rangka" name="no_rangka" value="<?php echo $data[0]['no_rangka']; ?>" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="no_mesin">No Mesin</label>  
  <div class="col-md-2">
  <input id="no_mesin" name="no_mesin" value="<?php echo $data[0]['no_mesin']; ?>" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="merk">Merk</label>
  <div class="col-md-2">
    <select id="merk" name="merk" class="form-control">
      <?php 
        $opt = array('Pilih Merk','Peugeot','Nissan','Toyota');
        foreach ($opt as $key => $value):
          $selected = $data[0]['merk'] == $key ? 'selected' : '';
          echo "<option value='$key' $selected>$value</option>";
        endforeach;  ?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tipe">Tipe</label>  
  <div class="col-md-2">
  <input id="tipe" name="tipe" value="<?php echo $data[0]['tipe']; ?>" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="warna">warna</label>
  <div class="col-md-2">
    <select id="warna" name="warna" class="form-control">

      <?php 
        $opt = array('Pilih Warna','Hitam','Biru','Silver Stone');
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
