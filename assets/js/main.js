function activaTab(tab) {
	$('.nav-tabs a[href="#' + tab + '"]').tab('show');
};

activaTab('deskripsi');


$('#kategori1').change(function () {
	var kategori1_id = $('#kategori1').val();
	if (kategori1_id != '') {
		$.ajax({
			url: "http://localhost/teamngopi/admin/getkategori2",
			method: "POST",
			data: {
				kategori1_id: kategori1_id
			},
			success: function (data) {
				console.log(data);
				$('#kategori2').html(data);
			}
		});
	} else {
		$('#kategori2').html('<option value="">Select Kategori1</option>');
	}
});
