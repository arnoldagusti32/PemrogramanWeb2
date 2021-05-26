<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buku Tamu</title>

    <link href="js/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container" style="margin-top: 50px">
        <h1>Data Buku Tamu</h1>
        <hr />
        <?php
        //menampilkan data buku tamu
        $sql = "SELECT * FROM daftartamu ORDER BY id DESC";
        $result = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

        if (mysqli_num_rows($result)) {
            echo '
            <table class="table table-condensed table-striped">
                <tr>
                    <th>NO</th>
                    <th>TANGGAL</th>
                    <th width="200">NAMA LENGKAP</th>
                    <th>EMAIL</th>
                    <th>NO TELP</th>
                    <th>KEPERLUAN</th>
                    <th>ISI PESAN</th>
                </tr>';
            $no = 1;
            while ($row = $result->fetch_assoc()) {
                echo '
					<tr>
                        <td>' . $no++ . '</td>
						<td>' . $row['tanggal'] . '</td>
                        <td>' . $row['nama'] . '</td>
                        <td>' . $row['email'] . '</td>
                        <td>' . $row['notelp'] . '</td>
                        <td>' . $row['keperluan'] . '</td>
                        <td>' . $row['pesan'] . '</td>
					</tr>
				';
            }
        } else {
            echo 'Belum ada data buku tamu';
        }

        ?>
        </table>
        <hr>
        <p><a class="btn btn-primary btn-sm" href="index.php">Kembali Ke Form Input Data</a></p>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>