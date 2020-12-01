//JQUERY
$(document).ready(function() {
	//hilangkan tombol cari
	$('#tombol-cari').hide();
	$('#search').on('keyup', function() {
		$('#container').load('ajax/barang.php?search=' + $('#search').val());

	});
});

//AJAX
//var search = document.getElementById('search');
//var tombolCari = document.getElementById('tombol-cari');
//var container = document.getElementById('container');

//search.addEventListener('keyup', function(){

	//objek ajax
//	var ajax = new XMLHttpRequest()
	//cek kesiapan ajax
//	ajax.onreadystatechange = function() {
//		if(ajax.readyState == 4 && ajax.status == 200) {
//			container.innerHTML = ajax.responseText;
//		}
//	}

//	ajax.open('GET', 'ajax/barang.php?search=' + search.value, true);
//	ajax.send();
//})