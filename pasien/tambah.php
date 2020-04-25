<?php 
include '../aset/header.php';
?>
<html>
<head>
	<title>Tambah Data pasien</title>
</head>
<body>
<div class="container">
 <div class="row mt-4">
  <div class="col-md-9">
   <div class="card">
   <center>

    <div class="card-header">
    <h2>Tambah Data pasien</h2>
    
    </div>
    </center>
    <div class="card-body">
         <form method="post" action="proses-tambah.php">
                <div class="form-group">
                 <label for="pasien">nama</label>
                 <input type="text" class="form-control" name="nama" placeholder="Masukkan nama">
                </div>

                 <div class="form-group">
                 <label for="pasien">jenis kelamin</label>
                 <input type="text" class="form-control" name="kelamin" placeholder="Masukkan jenis kelamin">
                </div>

                <div class="form-group">
                 <label for="pasien">umur</label>
                 <input type="number" class="form-control" name="umur"  placeholder="Masukkan umur">
                </div>  

                <div class="form-group">
                 <label for="pasien">telp</label>
                 <input type="number" class="form-control" name="telp"  placeholder="Masukkan no telp">
                </div>

                <div class="form-group">
                 <label for="pasien">alamat</label>
                 <input type="text" class="form-control" name="alamat"  placeholder="Masukkan alamat">
                </div>

                <div class="form-group">
                 <label for="pasien">keluhan</label>
                 <textarea name="keluhan"  class="form-control"></textarea>
                </div>

                <div class="form-group">
                 <label for="pasien">suhu</label>
                 <input type="number" class="form-control" name="suhu"  placeholder="Masukkan suhu °C">
                </div>

                <button type="submit" class="btn btn-outline-success" name="simpan">Tambah</button>&nbsp&nbsp<button type="simpan" class="btn btn-outline-primary" name="kembali">Kembali</button>

                </form>
                </div>
                </div>
                </div>
                </div>
                </div>
</body>
</html>

<?php 
include '../aset/footer.php'
?>