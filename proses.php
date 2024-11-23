<?php
#1. koneksikan file ini
include("koneksi.php");

#2. mengambil value dari form
$jb = $_POST['judul_buku'];
$pgr = $_POST['pengarang'];
$thn = $_POST['tahun_terbit'];
$ktr = $_POST['kategori'];

#3. menulis query
$simpan = "INSERT INTO jurusan (kode,jurusan) VALUES ('$jb','$pgr','$thn','$ktr')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>