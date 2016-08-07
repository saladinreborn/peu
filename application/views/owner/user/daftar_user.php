<h3>Daftar User SIM KK Peugeot</h3>
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

 <p><a class="btn btn-primary" href="/user/tambah" role="button">Tambah User</a></p>

 <table class="table table-bordered table-hover table-striped">

 <thead>
  <tr>
          <th>No</th>
          <th>Nama</th>
         <!--  <th>Password (Ter-enkripsi)</th> -->
          <th>Level User</th>
          <th colspan="2">Actions</th>

        </tr>
 </thead>
 <tbody>
<?php
$i=0;
foreach ($user as $key => $value):
$i++; ?>
<tr>
<td><?php echo $i; ?> </td>
<td><?php echo $value['nama']; ?> </td>
<!-- <td><?php echo $value['pass']; ?> </td> -->
<td><?php echo $value['nama_level']; ?> </td>

<td><a class='btn btn-warning btn-sm' href="/owner/user/<?php echo $value['id_user'] ;?>/edit" 
     role='button'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a> </td>
<td><a class='btn btn-danger btn-sm' href="/owner/user/<?php echo $value['id_user'] ;?>/hapus"
    role='button'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> </a>  </td>
</tr>
<?php
endforeach;
?>


 </tbody>
      </table>



