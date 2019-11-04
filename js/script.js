// Mengambil elemen-elemen dibutuhkan

var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var tablee = document.getElementById('tablee');

// menambahkan even ketika keyword ditulis
keyword.addEventListener('keyup', function() {
    
    // buat object ajax 
    var ajax = new XMLHttpRequest();

    // cek kesiapan 
    ajax.onreadystatechange = function() {
        if( ajax.readyState == 4 && ajax.status == 200 ) {
            tablee.innerHTML = ajax.responseText;
        }
    }
    // eksekusi ajax
    ajax.open('GET','../admin/ajax/mahasiswa.php?' + keyword.value);
    ajax.send();

})