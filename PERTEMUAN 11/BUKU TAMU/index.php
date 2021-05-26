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
        <h1>Buku Tamu</h1>
        <hr />

        <form class="form-horizontal" method="post" action="">
            <div class="form-group">
                <label class="col-sm-2 control-label">TANGGAL</label>
                <div class="col-sm-4">
                    <input type="text" name="tgl" value="<?php echo date('Y-m-d'); ?>" class="form-control" readonly>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">NAMA LENGKAP</label>
                <div class="col-sm-4">
                    <input type="text" name="nama" class="form-control" placeholder="" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">EMAIL</label>
                <div class="col-sm-4">
                    <input type="email" name="email" class="form-control" placeholder="" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">NO TELP</label>
                <div class="col-sm-4">
                    <input type="text" name="notelp" class="form-control" placeholder="" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">KEPERLUAN</label>
                <div class="col-sm-4">
                    <input type="text" name="keperluan" class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">PESAN</label>
                <div class="col-sm-8">
                    <textarea name="pesan" class="form-control" placeholder="" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-8">
                    <input type="submit" name="submit" class="btn btn-primary" value="KIRIM PESAN">
                </div>
            </div>
        </form>

        <?php
        //jika di klik tombol kirim pesan menjalankan script di bawah ini
        if (isset($_POST['submit'])) {
            //definisikan variabel untuk tiap-tiap inputan
            $nama       = $_POST['nama'];
            $email      = $_POST['email'];
            $notelp     = $_POST['notelp'];
            $keperluan  = $_POST['keperluan'];
            $pesan      = $_POST['pesan'];
            $tanggal    = date('Y-m-d');

            $sql = "INSERT INTO daftartamu(tanggal,nama,email,notelp,keperluan,pesan) VALUES('$tanggal','$nama','$email','$notelp','$keperluan','$pesan')";
            $input = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
            if ($input) {
                echo '<script language="javascript">alert("Terima Kasih, Data Anda berhasil Disimpan !"); document.location="index.php";</script>';
            } else {
                echo '<script language="javascript">alert("Maaf :( Data Anda Gagal Disimpan !"); document.location="index.php";</script>';
            }
        }
        ?>

        <hr />
        <h2>5 Data Tamu Terakhir</h2>

        <?php
        //menampilkan 5 buku tamu terbaru
        $sql = "SELECT * FROM daftartamu ORDER BY id DESC LIMIT 5";
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
        <p><a class="btn btn-primary btn-sm" href="data.php">Lihat semua data</a></p>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>