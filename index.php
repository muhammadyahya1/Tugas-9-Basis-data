<?php
// Create database connection using config file
include("konek_db.php");
 
// Fetch all users data from database
$sql = 'SELECT * FROM muhammadyahya_311910814';
$result = mysqli_query($conn, $sql);

?>

<DOCTYPE html>
<html lang="en">
<head>
        <style type="text/css">
        body {
            font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
        }
        
        /* Table */
        .demo-table {
            border-collapse: collapse;
            font-size: 13px;
        }
        .demo-table th, 
        .demo-table td {
            border: 1px solid #e1edff;
            padding: 7px 17px;
        }
        .demo-table .title {
            caption-side: bottom;
            margin-top: 12px;
        }
        
        /* Table Header */
        .demo-table thead th {
            background-color: #508abb;
            color: #FFFFFF;
            border-color: #6ea1cc !important;
            text-transform: uppercase;
        }
        
        /* Table Body */
        .demo-table tbody td {
            color: #353535;
        }
        .demo-table tbody td:first-child,
        .demo-table tbody td:last-child,
        .demo-table tbody td:nth-child(4) {
            text-align: right;
        }
        .demo-table tbody tr:nth-child(odd) td {
            background-color: #f4fbff;
        }
        .demo-table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
            transition: all .2s;
        }
        
        /* Table Footer */
        .demo-table tfoot th {
            background-color: #e5f5ff;
        }
        .demo-table tfoot th:first-child {
            text-align: left;
        }
        .demo-table tbody td:empty
        {
            background-color: #ffcccc;
        }
    </style>    
    <title>Homepage</title>
</head>
<h1>  MAHASISWA UNIVERSITAS PELITA BANGSA </h1>
 
<body>
<a href = tambah.php>DATA MAHASISWA</a>
    <table width='80%' border=1>
 
    <tr>
        <th>nim</th> <th>nama_mahasiswa</th> <th>alamat_mhs</th> <th>jurusan_mhs</th> <th>tgl_lahir</th> <th>IPK</th><th>OPSI</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nim']."</td>";
        echo "<td>".$user_data['nama_mhs']."</td>";
        echo "<td>".$user_data['alamat_mhs']."</td>";
        echo "<td>".$user_data['jurusan_mhs']."</td>";    
        echo "<td>".$user_data['tgl_lahir']."</td>";
        echo "<td>".$user_data['IPK']."</td>";
        echo "<td><a href='ubah.php?id=$user_data[nim]'>Edit</a> | <a href='hapus.php?id=$user_data[nim]'>Delete</a></td></tr>";        
    }
    ?>
    
    </table>
</body>
</html>