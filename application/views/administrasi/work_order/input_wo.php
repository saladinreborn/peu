<div class=".col-md-4">
    <form class="form-horizontal" method="POST" action="/administrasi/work_order/tambah">
    <fieldset>

    <!-- Form Name -->
    <legend>Tambah Work Order</legend>

    <!-- Text input-->
    <div class="">
      <label class="col-md-4 control-label" for="textinput">No Polisi</label>  
      <div class="col-md-4">
      <input id="nopol" name="nopol" type="text" placeholder="No. Polisi" class="form-control input-md" required="">
        
      </div>
    </div>

    <!-- Button -->
    <div class="">
      <label class="col-md-4 control-label" for="cari"></label>
      <div class="col-md-4">
        <button id="cari" name="cari" class="btn btn-primary">Cari</button>
      </div>
    </div>

    </fieldset>
    </form>    
</div>

<div class=".col-md-8">
<h4>Detail Mobil</h4>
    <table class="table table-bordered">
        <tr>
            <th width="200px">No Polisi</th>
            <td>xxxxx</td>
        </tr>
        <tr>
            <th>Mobil</th>
            <td>Merk/tipe/warna</td>
        </tr>
        <tr>
            <th>Nama Pemilik</th>
            <td>xxxxx</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>xxxxx</td>
        </tr>
    </table>
</div>

<div>
    <h4>Work Order</h4>
    ID Work Order <input type="text" id="id_wo" name="id_wo" disabled="" class="form-group">
    <table class="table table-bordered">
        <tr>
            <th width="50px">No</th>
            <th>Permintaan</th>
            <th width="100px">Proses</th>
        </tr>
        <tr>
            <td>1</td>
            <td><input id="order" class="form-control" type="text" name="order"></td>
            <td><button id="btn_submit" class="btn btn-info">Tambah</button></td>
        </tr>
    </table>
</div>

<script type="text/javascript">
$(function(){
    $(document).on('click','#btn_submit', function(e){
        e.preventDefault();
        
        var nm = $("#order").val();
        var id = $("#id_wo").val();

        $.ajax({
            type: 'POST',
            url : '/administrasi/work_order/tambah'
            data: {
                op : 'tambah',
                id_wo : id,
                order: nm
            },
        })
        .done(function(x) {
            console.log(x);
            // location.reload();
        }); 
    });
    
    $(document).on('click','#cari', function(){
        // $.get('')
    });
});
</script>