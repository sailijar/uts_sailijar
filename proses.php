<?php
#1. koneksikan file ini
include("koneksi.php");

#2. mengambil value dari form
$jb = $_POST['judul_buku'];
$pgr = $_POST['pengarang'];
$ktr = $_POST['kategori'];
$thn = $_POST['tahun_terbit'];

#3. menulis query
$simpan = "INSERT INTO buku (judul_buku,pengarang,kategori,tahun_terbit) VALUES ('$jb','$pgr','$ktr','$thn')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>