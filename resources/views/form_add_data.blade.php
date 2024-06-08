<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data pasien</title>
    <link href="/public/css/style_formAddData.css" rel="stylesheet">
</head>
<body>
    <h1>Tambah Data Pasien Rawat Inap</h1>
    <form>
        <div>
            <label for="namaPasien">Nama Pasien :</label>
            <input type="text" id="namaPasien" name="namaPasien">
        </div>
        <br>
        <div>
            <label for="NIKpasien">NIK Pasien :</label>
            <input type="text" id="NIKpasien" name="NIKpasien">
        </div>
        <br>
        <div>
            <label for="jenisKelamin">Jenis Kelamin :</label>
            <input type="text" id="jenisKelamin" name="jenisKelamin">
        </div>
        <br>
        <div>
            <label for="alamatPasien">Alamat Pasien :</label>
            <textarea id="alamatPasien" name="alamatPasien" rows="4" cols="50"></textarea>
        </div>
        <br>
        <div>
            <label for="keluhanPasien">Keluhan Pasien :</label>
            <textarea id="keluhanPasien" name="keluhanPasien" rows="4" cols="50"></textarea>
        </div>
        <br>
        <div>
            <label for="kamarPasien">Kamar Pasien :</label>
            <input type="text" id="kamarPasien" name="kamarPasien">
        </div>
        <br>
        <button type="batal"><a href ="ranap.blade.php">Batal</button>
        <button type="simpan">Simpan Perubahan</button>
    </form>
</body>
</html>
