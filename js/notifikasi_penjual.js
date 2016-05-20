$(document).ready(function(){
    cek();
    $("#tombol-notifikasi").click(function(){
        tampilkan();
    });
});

function cek(){
    $.ajax({
        url: window.location.origin + "/Angon/notifikasi/hitung_penjual",
        cache: false,
        success: function(msg){
            $("#jumlah-notifikasi").html(msg);
        }
    });
    var waktu = setTimeout("cek()",3000);
}

function tampilkan(){
    $.ajax({
        url: window.location.origin + "/Angon/notifikasi/get_penjual",
        cache: false,
        success: function(msg){
            // $("#loading").hide();
            $("#konten-notifikasi").html(msg);
        }
    });
}