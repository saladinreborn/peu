<form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<legend>Edit User SIM KK Peugeot</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama</label>  
  <div class="col-md-2">
  <input id="nama" name="nama" type="text" value="<?php echo $data[0]['nama']; ?>" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pass">Password</label>  
  <div class="col-md-2">
  <input id="pass" name="pass" type="password" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="level_user">Level User</label>
  <div class="col-md-2">
    <select id="level_user" name="level_user" class="form-control">
      
       <?php 
        $opt = array('Pilih Level User','Owner','Administrasi','Purchasing');
        foreach ($opt as $key => $value):
          $selected = $data[0]['level_user'] == $key ? 'selected' : '';
          echo "<option value='$key' $selected>$value</option>";
        endforeach;  ?>

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
