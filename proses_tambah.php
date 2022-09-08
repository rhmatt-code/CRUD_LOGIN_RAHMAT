<?php
    include('login/koneksi.php');

    $nama = $_REQUEST['nama'];
    $stok = $_REQUEST['stok'];
    $price = $_REQUEST['price'];
    
    $query = $koneksi->query("insert into produk values(null, '$nama','$stok','$price')");

    header('Location: form.php');
    // v2
?>