<form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<legend>Tambah Data SDM</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama</label>  
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="alamat">Alamat</label>  
  <div class="col-md-8">
  <input id="alamat" name="alamat" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="no_telp">No Telp</label>  
  <div class="col-md-2">
  <input id="no_telp" name="no_telp" type="text" placeholder="Angka" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="merk">Jabatan</label>
  <div class="col-md-2">
    <select id="jabatan" name="jabatan" class="form-control">
      <option value="Mekanik">Mekanik</option>
      <option value="Kepala Mekanik">Kepala Mekanik</option>
      <option value="Purchasing">Purchasing</option>
      <option value="Administrasi">Administrasi</option>
      <option value="Owner">Owner</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="tambah"></label>
  <div class="col-md-4">
    <button id="tambah" name="tambah" class="btn btn-primary">Tambah</button>
  </div>
</div>

</fieldset>
</form>
