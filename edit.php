<?php
/**
* NIM : 2257401021
* Nama : Sadiyah
* Kelas : MI22A
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .form-header {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mt-4">
            <h1>Edit Data Produk</h1>
        </div>

        <!-- Form Edit -->
        <div class="form-container">
            <h4 class="form-header">Edit Data</h4>
            <form>
            <div class="mb-3">
                    <label for="name" class="form-label">Kode Produk</label>
                    <input type="text" class="form-control" id="name" value="">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="name" value="">
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    <select class="form-select" id="category">
                        <option selected>Pilih Kategori</option>
                        <option value="1">Makanan</option>
                        <option value="2">Minuman botol</option>
                        <option value="3">Minuman sachet</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="name" value="">
                </div>

                <div class="mb-3">
                    <label for="imageUpload" class="form-label">Upload Gambar</label>
                    <input class="form-control" type="file" id="imageUpload">
                </div>

                <!-- Action Buttons -->
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="produk.php">Kembali</a>

            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
