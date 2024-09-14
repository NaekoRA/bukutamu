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


<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="/index.html">Home</a>
                        <a class="nav-link active" href="#">Tamu</a>
                        <a class="nav-link" href="/buku_tamu.html">Buku Tamu</a>
                    </div>
                </div>
                <span class="d-flex">
                    <a class="btn btn-danger" href="/login.html">Logout</a>
                </span>
            </div>
        </nav>
    </div>
    
    <div>
        <table class="table table-bordered table-striped table-hover" style="margin-top: 3%;">
    <tr> 
        <th>No</th>
        <th>Nama Tamu</th>
        <th>Asal Instansi</th>
        <th>Keperluan</th>
        <th>Unit Kerja Tujuan</th>
        <th>Person Yang Ingin ditemui</th>
    </tr>
    <?php 
$ambil = mysqli_query($koneksi,"select * from buku");
while ($loop = mysqli_fetch_array($ambil)) {
    $NO = $loop['NO'];
    $nama = $loop['username'];
    $asal = $loop['asal'];
    $kp = $loop['keperluan'];
    $unit = $loop['unit'];
    $person = $loop['person'];
    echo'<tr>
    <td>'.$NO.'</td>
    <td>'.$nama.'</td>
    <td>'.$asal.'</td>
    <td>'.$kp.'</td>
    <td>'.$unit.'</td>
    <td>'.$person.'</td>
    </tr>'
; }
    ?>
    </table>
    </div>
    </body>
    </Html>
