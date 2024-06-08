<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekam Medis Pasien - RS Rachma Husada</title>
    <link href="/public/css/styleranap.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    
</head>
<body>
    <main>
        <section class="data-pasien">
            <h2>Selamat Datang, Bagas!</h2>
        </section>
        <br>
        <section class="keterangan">
            <h2>Pasien Rawat Inap</h2>
            <div class="tambah-pasien">
                <button type="button"><a href="form_add_data.blade.php" style="text-decoration: none; color:black;"><i class="fa fa-user-plus"></i> Tambah Pasien</a></button>
            </div>
            <div class="cetak_pdf">
                <button class="PDF" type="button">PDF</button>
                <button class="Cetak" type="button">Cetak</button> 
            </div>
            <br><br><br><br>
            <div class="pencarian">
            <div class="col-auto">
                <label for="cari" class="col-form-label">Cari : </label>
                <input type="cari" id="cari" class="form-control">
            </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Nama Pasien</th>
                        <th>NIK</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Keluhan</th>
                        <th>Kamar</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ruhmiatun Dwi</td>
                        <td>183930840912</td>
                        <td>Perempuan</td>
                        <td>Sidomulyo, Madiun</td>
                        <td>Badan sulit digerakkan</td>
                        <td>Melati 1</td>
                        <td>
                            <div class="icon-edit">
                                <i class="bi bi-pencil"></i>
                                <i class="bi bi-trash"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Dewi Aulia</td>
                        <td>340290374629</td>
                        <td>Perempuan</td>
                        <td>Geger, Madiun</td>
                        <td>Mual</td>
                        <td>Melati 3</td>
                        <td>
                            <div class="icon-edit">
                                <i class="bi bi-pencil"></i>
                                <i class="bi bi-trash"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Yanto Sanjoyo</td>
                        <td>990383648512</td>
                        <td>Laki - laki</td>
                        <td>Wungu, Ngawi</td>
                        <td>Jantung kumat</td>
                        <td>Mawar 2</td>
                        <td>
                            <div class="icon-edit">
                                <i class="bi bi-pencil"></i>
                                <i class="bi bi-trash"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Rahmat Aji</td>
                        <td>783465809231</td>
                        <td>Laki - Laki</td>
                        <td>Nglames, Madiun</td>
                        <td>Nyeri tulang</td>
                        <td>Mawar 4</td>
                        <td>
                            <div class="icon-edit">
                                <i class="bi bi-pencil"></i>
                                <i class="bi bi-trash"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Rahma Ayu</td>
                        <td>297785038476</td>
                        <td>Perempuan</td>
                        <td>Sogaten, Madiun</td>
                        <td>Sesak nafas</td>
                        <td>Mawar 3</td>
                        <td>
                            <div class="icon-edit">
                                <i class="bi bi-pencil"></i>
                                <i class="bi bi-trash"></i>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="navigasi">
                <button class="sebelum" type="button">Sebelumnya</button>
                <button class="sesudah" type="button">Selanjutnya</button>
            </div>
        </section>
    </main>
</body>
</html>
