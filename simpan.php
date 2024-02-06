<?php

$nama     = $_POST['nama'];
$tgl      = $_POST['tgl'];
$alamat   = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];


include 'koneksi1.php';
$sql = "INSERT INTO tb_pengguna (nama, tgl, alamat, username, password) values
 ('$nama', '$tgl', '$alamat', '$username', '$password')";

$query = mysqli_query ($koneksi, $sql);
if ($query){
    ?>
    <script type="text/javascript">
        alert ('Anda Berhasil Daftar');
        window.location='lihat_tabel.php';
</script>
<?php
}
?>