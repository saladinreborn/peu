<h3>Daftar Layanan Jasa KK Peugeot</h3>
<?php
if ($this->session->flashdata('sukses')){
  echo '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
  <strong>'.$this->session->flashdata('sukses').'</strong></div>';
  
}elseif ($this->session->flashdata('error')){
  echo '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
  <strong>'.$this->session->flashdata('error').'</strong></div>';
}

?>

 <p><a class="btn btn-primary" href="/layanan/tambah" role="button">Tambah Data</a></p>

 <table class="table table-bordered table-hover table-striped">

 <thead>
  <tr>
          <th>No</th>
          <th>Nama Layanan</th>
          <th>Keterangan</th>
          <th>Harga</th>
          <th colspan="2">Actions</th>

        </tr>
 </thead>
 <tbody>
<?php
$i=0;
foreach ($layanan as $key => $value):
$i++; ?>
<tr>
<td><?php echo $i; ?> </td>
<td><?php echo $value['nama']; ?> </td>
<td><?php echo $value['ket']; ?> </td>
<td><?php echo $value['harga']; ?> </td>

<td><a class='btn btn-warning btn-sm' href="/administrasi/layanan/<?php echo $value['id_layanan'] ;?>/edit" 
     role='button'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a> </td>
<td><a class='btn btn-danger btn-sm' href="/administrasi/layanan/<?php echo $value['id_layanan'] ;?>/hapus"
    role='button'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> </a>  </td>
</tr>
<?php
endforeach;
?>


 </tbody>
      </table>



