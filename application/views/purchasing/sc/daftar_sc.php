<h3>Daftar Stok Suku Cadang</h3>
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

 <p><a class="btn btn-primary" href="/sc/tambah" role="button">Tambah Data</a></p>

 <table class="table table-bordered table-hover table-striped">

 <thead>
  <tr>
          <th>No</th>
          <th>Nama Suku Cadang</th>
          <th>Jumlah</th>
          <th>Produsen</th>
          <th>Supplier</th>
          <th>Harga Pembelian</th>
          <th>Harga Jual</th>
          <th colspan="3">Actions</th>

        </tr>
 </thead>
 <tbody>
<?php
$i=0;


foreach ($sc as $key => $value):
$i++; ?>
<tr>
<td><?php echo $i; ?> </td>
<td><?php echo $value['nama_sc']; ?> </td>
<td><?php echo $value['jumlah']; ?> </td>
<td><?php echo $value['produsen']; ?> </td>
<td><?php echo $value['nama_supplier']; ?> </td>
<td><?php echo $value['harga_beli']; ?> </td>
<td><?php echo $value['harga_jual']; ?> </td>

<td><a class='btn btn-warning btn-sm' href="/purchasing/sc/<?php echo $value['id_sc'] ;?>/edit" 
     role='button'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a> </td>

      <td><a class='btn btn-success btn-sm' href="/purchasing/sc/<?php echo $value['id_sc'] ;?>/detail"
    role='button'><span class='glyphicon glyphicon-circle-arrow-right' aria-hidden='true'></span> </a>  </td>

<td><a class='btn btn-danger btn-sm' href="/purchasing/sc/<?php echo $value['id_sc'] ;?>/hapus"
    role='button'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> </a>  </td>

</tr>
<?php
endforeach;
?>


 </tbody>
      </table>



