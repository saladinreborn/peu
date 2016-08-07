$(function(){
	$("#show_lap_servis").click(function(e) {
		var bln = $("#bln").val();
		var thn = $("#thn").val();
		e.preventDefault();

		$.ajax({
			url : '/owner/laporan/servis',
			method : 'post',
			data : {'bln' : bln, 'thn' : thn},
			dataType : 'html',
		})
		.done(function(res){
			$("#detail_servis").html(res);
		});
	});

	$("#show_lap_sc").click(function(e) {
		var bln = $("#bln").val();
		var thn = $("#thn").val();
		e.preventDefault();

		$.ajax({
			url : '/owner/laporan/suku_cadang',
			method : 'post',
			data : {'bln' : bln, 'thn' : thn},
			dataType : 'html',
		})
		.done(function(res){
			$("#detail_sc").html(res);
		});
	});

	$("#show_lap_pembayaran").click(function(e) {
		var bln = $("#bln").val();
		var thn = $("#thn").val();
		e.preventDefault();

		$.ajax({
			url : '/owner/laporan/pembayaran',
			method : 'post',
			data : {'bln' : bln, 'thn' : thn},
			dataType : 'html',
		})
		.done(function(res){
			$("#detail_pembayaran").html(res);
		});
	});
});