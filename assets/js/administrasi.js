$(function(){
    $(document).on('click','#btn_submit', function(e){
        e.preventDefault();
        
        var nm = $("#order").val();
        var id = $("#id_wo").val();

        $.ajax({
            type: 'POST',
            url : '/administrasi/work_order/tambah',
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
    
    $("#cari").click(function(e){
        e.preventDefault();
        var nopol = $("#nopol").val();
        // console.log(nopol);
        $.post('/administrasi/work_order/cari_nopol',{'nopol' : nopol},function(){},'json')
        .fail(function(err) {
            alert(err);
        })
        .done(function(data){
            // console.log(data.id_mobil);
            // var obj = parseJson(data);
            $("#mobil").load('/administrasi/mobil/'+data.id_mobil+'/detail');
            $("#work_order").load('/administrasi/work_order/'+data.id_mobil+'/detail');
        });
    });

    $("#cari_wo").click(function(e) {
        e.preventDefault();
        var id_wo = $("#id_wo").val();
        if(id_wo){
            window.location.replace('/administrasi/servis/'+id_wo+'/detail');
        }
    });

    $("#tambah_wos").click(function(e) {
        // e.preventDefault();
        var id_wo = $("#id_wo").val();
        var id_layanan = $("#id_layanan").val();
        console.log('id'+id_wo+' dd '+id_layanan);
         $.ajax({
            type: 'POST',
            url : '/administrasi/servis/tambah',
            data: {
                tambah_wos : true,
                id_wo : id_wo,
                id_layanan: id_layanan
            },
        })
        .done(function(x) {
            location.reload();
        }); 
    });

    $("#tambah_wosc").click(function(e) {
        // e.preventDefault();
        var id_wo = $("#id_wo").val();
        var id_sc = $("#id_sc").val();
         $.ajax({
            type: 'POST',
            url : '/administrasi/servis/tambah',
            data: {
                tambah_wosc : true,
                id_wo : id_wo,
                id_sc: id_sc
            },
        })
        .done(function(x) {
            location.reload();
        }); 
    });

    $(".del-wos").click(function(e) {
        // e.preventDefault();
        var id_wo = $("#id_wo").val();
        var id_wos = $(this).attr('isi');

         $.ajax({
            type: 'POST',
            url : '/administrasi/servis/'+id_wo+'/hapus',
            data: {
                delete_wos : true,
                id_wos : id_wos,
            },
        })
        .done(function(x) {
            // console.log(x);
            location.reload();
        }); 
    });

    $(".del-wosc").click(function(e) {
        // e.preventDefault();
        var id_wo = $("#id_wo").val();
        var id_wosc = $(this).attr('isi');
         $.ajax({
            type: 'POST',
            url : '/administrasi/servis/'+id_wo+'/hapus',
            data: {
                delete_wosc : true,
                id_wosc : id_wosc,
            },
        })
        .done(function(x) {
            location.reload();
        });
    });

    $(document).on('click','.bayar_order',function(e) {
        // alert('test');
        var id_wo = $(this).attr('isi');
        $.post('/administrasi/pembayaran/bayar',{id_wo : id_wo })
        .done(function(res){
            printExternal('/administrasi/pembayaran/'+id_wo+'/detail');
            var obj = $.parseJSON(res);
            if(obj.status == true){
                $("#cari").click();
            }
        });
    });

    function printExternal(url) {
        var printWindow = window.open( url, 'Print', 'left=200, top=200, width=950, height=500, toolbar=0, resizable=0');
        printWindow.addEventListener('load', function(){
            printWindow.print();
            // printWindow.close();
        }, true);
    }

});