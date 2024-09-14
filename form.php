<?php
$koneksi = mysqli_connect('localhost','root','','buku');

if (isset($_POST['submit'])) {
    $Nama_Tamu = $_POST['username'];
    $Asal_Instansi = $_POST['asal'];
    $Keperluan = $_POST['keperluan'];
    $Unit_Kerja_Tujuan = $_POST['unit'];
    $Person_Yang_Ingin_ditemui = $_POST['person'];

    $query = mysqli_query($koneksi, "insert into buku (username, asal, keperluan, unit, person) values ('$Nama_Tamu', '$Asal_Instansi', '$Keperluan', '$Unit_Kerja_Tujuan', '$Person_Yang_Ingin_ditemui')");
}
?>

