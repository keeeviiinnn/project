<?php 
//koneksi database
require 'functions.php';
$pengeluaran = euery("SELECT * from pengeluaran")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <h1>Daftar</h1>
    <a href="tambah.php">tambah data</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No. </th>
            <th>delete</th>
            <th>tanggal</th>
            <th>jenis pengeluaran</th>
            <th>keterangan</th>
            <th>jumlah</th>
            <th>asal uang</th>
        </tr>
        <?php foreach( $pengeluaran as $row ):?>
        <tr>
            <td><?php echo $row["id"]?></td>
            <td><a href="delete.php?id=<?php echo $row["id"]?>" onclick="return confirm('yakin?');">delete</a></td>
            <td><?php echo $row["tanggal"]?></td>
            <td><?php echo $row["jenis_pengeluaran"]?></td>
            <td><?php echo $row["keterangan"]?></td>
            <td><?php echo $row["jumlah"]?></td>
            <td><?php echo $row["dompet"]?></td>
        </tr>
        <?php endforeach; ?>        
    </table>
</body>
</html>
