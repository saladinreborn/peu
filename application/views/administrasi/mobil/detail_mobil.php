<div id="detail-mobil">
<h4>Detail Mobil</h4>
    <table class="table table-bordered">
        <tr>
            <th width="200px">No Polisi</th>
            <td><span class="nopol"><?php echo $data['no_pol']; ?></span></td>
        </tr>
        <tr>
            <th>Mobil</th>
            <td><span class="merk"><?php echo $data['nama_merek']." / ".$data['tipe']; ?></span></td>
        </tr>
        <tr>
            <th>Nama Pemilik</th>
            <td><span class="pemilik"><?php echo $data['pemilik'];?></span></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><span class="alamat"><?php echo $data['alamat'];?></span></td>
        </tr>
    </table>
</div>