<?php
    include('login/koneksi.php');

    $query = $koneksi->query("select * from produk;")->fetchAll();

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentv2</title>
</head>
<body>
    <h1>Table Database</h1>
    <table>
        <thead>
            <th>NIS</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Price</th>
            <th>Action </th>
        </thead>
        <tbody>
            <?php
                foreach ($query as $querys){
                    echo "<tr>";
                    echo "<td>";
                        echo $querys["id"];
                    echo "</td>";
                    echo "<td>";
                        echo $querys["nama"];
                    echo "</td>";
                    echo "<td>";
                        echo $querys["stok"];
                    echo "</td>";
                    echo "<td>";
                        echo $querys["price"];
                    echo "</td>";
                    echo "<td>";
                        echo "<a href='edit.php?id=". $querys["id"] ."'>Edit</a> | ";
                        echo "<a href='delete.php?id=". $querys["id"] ."'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                };
            ?>
        </tbody>
    </table>
    <a href="tambah.php">Input Data</a>
    <a href="./login/login.php">Log Out</a>
</body>
</html>