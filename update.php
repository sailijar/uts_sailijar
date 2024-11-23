<?php
#1. koneksikan file ini
include("koneksi.php");

#2. mengambil value dari form
$id = $_POST['id'];
$jb = $_POST['judul_buku'];
$pgr = $_POST['pengarang'];
$ktr = $_POST['kategori'];
$thn = $_POST['tahun_terbit'];

#3. menulis query
$sunting = "UPDATE buku SET pengarang='$pgr', buku='$jb' WHERE id='$id'";

#4. jalankan query
$proses = mysqli_query($koneksi, $sunting);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>