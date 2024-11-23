<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jurusan</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
</head>

<div class="container">
    <div class="row mt-5">
        <div class="col-8 m-auto">
            <div class="card">
            <div class="card-header">
                <h3 class="float-start">Form Buku</h3>
                
            </div>
            <div class="card-body">
            <form action="proses.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                    <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Pengarang</label>
                    <input type="text" name="pengarang" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">kategori</label>
        <select name="kategori" id="" class="form-control">
            <option value="">-pilih kategori-</option>
            <option value="komputer">bekas</option>
            <option value="akuntansi">baru</option>
            </select>
  </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tahun Terbit</label>
                    <input type="date" name="tahun" class="form-control" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            </div>
        </div>
    </div>
</div>

    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/all.js"></script>
</body>
</html>