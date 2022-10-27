<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Member</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    
    <br></br>
    <div class="container">
        <div class="card">
            <h1 class="card-header">Tambah Member</h1>
            <div class="card-body">
                <form method="POST" action="proses_tambah_member.php">
                    <div class="mb-3">
                        <label for="nama_member" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama_member" value="" placeholder="Masukkan Nama member" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="alamat" required>
                    </div>
                    <div class="mb-3">
                        Jenis Kelamin
                    <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                    <option value="kosong" style="text-align:center ;">-----Pilih Jenis Kelamin-----</option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                </select>
                    </div>
                    <div class="mb-3">
                        <label for="tlp" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" name="tlp" placeholder="tlp" required><br>
                    <button type="submit" class="btn btn-primary">Tambah Member</button>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>