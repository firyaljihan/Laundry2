<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Paket</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <br><br>
    <div class="container">
        <div class="card">
            <h1 class="card-header">Tambah Paket</h1>
            <div class="card-body">
                <form method="POST" action="proses_tambah_paket.php">
                    <div class="mb-3">
                        <label for="jenis_paket" class="form-label">Jenis Paket</label>
                        <select name="jenis_paket" class="form-select" aria-label="Default select example">
                        <option value="kosong" style="text-align:center ;">-----Pilih Jenis-----</option>
                        <option value="kiloan">Kiloan</option>
                        <option value="selimut">Selimut</option>
                        <option value="bed_cover">Bed Cover</option>
                        <option value="kaos">Kaos</option>
                </select>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control" name="harga" placeholder="harga" required>
                    </div>
                    <br>
                    <a href="paket.php" class="btn btn-danger" type="submit" value="KEMBALI">Kembali</a>
                    <button type="submit" class="btn btn-primary">Tambah Paket</button>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>