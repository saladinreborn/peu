<h3>Detail Suku Cadang</h3>

<div class="container">

   <p><a class="btn btn-primary" href="/purchasing/sc" role="button">Kembali</a></p>
           
  <table class="table table-bordered table-hover table-striped">
   
    <tbody>
      <tr>
        <td>Nama Suku Cadang</td>
        <td><?php echo $dt_sc['nama_sc']; ?> </td>
       
      </tr>
      <tr>
        <td>Produsen</td>
        <td><?php echo $dt_sc['produsen']; ?> </td>
     
      </tr>
      <tr>
        <td>Nama Supplier</td>
        <td><?php echo $dt_sc['nama_supplier']; ?></td>
        
      </tr>

       <tr>
        <td>Sisa Stok</td>
        <td><?php echo $dt_sc['jumlah']; ?></td>
        </tr>

   </tbody>
  </table>

<form class="form-horizontal" method="post">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="jumlah_sc_masuk">Stok</label>  
  <div class="col-md-4">
  <input id="jumlah_sc_masuk" name="jumlah_sc_masuk" type="text" value="" placeholder="" class="form-control input-md" required="">
  </div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="simpan"></label>
  <div class="col-md-4">
    <button id="simpan" name="simpan" type="submit" class="btn btn-primary">Simpan</button>
  </div>
</div>

</fieldset>
</form>

<legend>Riwayat Stok Masuk</legend>

 <table class="table table-bordered table-hover table-striped">

 <thead>
  <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>Stok Masuk</th>
          </tr>
 </thead>
 <tbody>
  <?php
  $i=0;
  if(!$dt_scm){
    echo "<tr><td colspan='3'>Data riwayat stok belum ada.</td></tr>";
  }

  foreach ($dt_scm as $key => $value):
  $i++; ?>
  <tr>
  <td><?php echo $i; ?> </td>
  <td><?php echo $value['jumlah_sc_masuk']; ?></td>
  <td><?php echo $value['tgl_sc_masuk']; ?></td>

  </tr>
  <?php
  endforeach;
  ?>


 </tbody>
      </table>


</div>

