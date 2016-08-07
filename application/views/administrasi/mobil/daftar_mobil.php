<h3>Daftar Mobil Konsumen KK Peugeot</h3>
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

 <p><a class="btn btn-primary" href="/mobil/tambah" role="button">Tambah Data</a></p>

 <table class="table table-bordered table-hover table-striped">

 <thead>
  <tr>
          <th>No</th>
          <th>No Pol</th>
          <th>Pemilik</th>
          <th>Alamat</th>
          <th>No Telp</th>
          <th>No STNK</th>
          <th>Merk</th>
          <th>Tipe</th>
          <th colspan="2">Actions</th>

        </tr>
 </thead>
 <tbody>
<?php
$i=0;
foreach ($mobil as $key => $value):
$i++; ?>
<tr>
<td><?php echo $i; ?> </td>
<td><?php echo $value['no_pol']; ?> </td>
<td><?php echo $value['pemilik']; ?> </td>
<td><?php echo $value['alamat']; ?> </td>
<td><?php echo $value['no_telp']; ?> </td>
<td><?php echo $value['no_stnk']; ?> </td>
<td><?php echo $value['merk']; ?> </td>
<td><?php echo $value['tipe']; ?> </td>
<td><a class='btn btn-warning btn-sm' href="/administrasi/mobil/<?php echo $value['id_mobil'] ;?>/edit" 
     role='button'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a> </td>
<td><a class='btn btn-danger btn-sm' href="/administrasi/mobil/<?php echo $value['id_mobil'] ;?>/hapus"
    role='button'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> </a>  </td>
</tr>
<?php
endforeach;
?>


 </tbody>
      </table>




