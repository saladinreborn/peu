<h3>Daftar Sumber Daya Manusia (SDM) KK Peugeot</h3>
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

 <p><a class="btn btn-primary" href="/sdm/tambah" role="button">Tambah Data</a></p>

 <table class="table table-bordered table-hover table-striped">

 <thead>
  <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>No Telp</th>
          <th>Jabatan</th>
          <th colspan="2">Actions</th>

        </tr>
 </thead>
 <tbody>
<?php
$i=0;
foreach ($sdm as $key => $value):
$i++; ?>
<tr>
<td><?php echo $i; ?> </td>
<td><?php echo $value['nama']; ?> </td>
<td><?php echo $value['alamat']; ?> </td>
<td><?php echo $value['no_telp']; ?> </td>
<td><?php echo $value['jabatan']; ?> </td>

<td><a class='btn btn-warning btn-sm' href="/administrasi/sdm/<?php echo $value['id_sdm'] ;?>/edit" 
     role='button'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a> </td>
<td><a class='btn btn-danger btn-sm' href="/administrasi/sdm/<?php echo $value['id_sdm'] ;?>/hapus"
    role='button'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> </a>  </td>
</tr>
<?php
endforeach;
?>


 </tbody>
      </table>



