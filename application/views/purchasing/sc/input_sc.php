<form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<legend>Tambah Data Suku Cadang</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama_sc">Nama Suku Cadang</label>  
  <div class="col-md-4">
  <input id="nama_sc" name="nama_sc" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="alamat">Jumlah</label>  
  <div class="col-md-1">
  <input id="jumlah" name="jumlah" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="produsen">Produsen</label>  
  <div class="col-md-3">
  <input id="produsen" name="produsen" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="id_sup">Supplier</label>
  <div class="col-md-2">
    <select id="id_sup" name="id_sup" class="form-control">

     <?php
       
        foreach ($supplier as $key => $value) {
        echo  "<option value='".$value['id_sup']."'>".$value['nama']."</option>";
          }
      ?>
    </select>


  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="harga_beli">Harga Pembelian</label>  
  <div class="col-md-2">
  <input id="harga_beli" name="harga_beli" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="harga_jual">Harga Jual</label>  
  <div class="col-md-2">
  <input id="harga_jual" name="harga_jual" type="text" placeholder="" class="form-control input-md">
    
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
