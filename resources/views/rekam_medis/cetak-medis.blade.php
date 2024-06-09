<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/rajal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>Cetak Data Rekam Medis</title>
</head>

<body>
    <div class="header-content">
        <img src="/images/logo.png" alt="">
        <header>
            <h1>Rumah Sakit Rachma Husada</h1>
            <h2>Yogyakarta</h2>
        </header>
    </div>
    <hr>
    <header>
        <h3>Laporan Rekam Medis Rumah Sakit Rachma Husada</h3>
    </header>

    <table class="table table-responsive table-sm">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Pasien</th>
            <th scope="col">NIK</th>
            <th scope="col">Nama Dokter</th>
            <th scope="col">Ruang Pemeriksaan</th>
            <th scope="col">Hasil Pemeriksaan</th>
            <th scope="col">Saran</th>
            <th scope="col">Tanggal Periksa</th>
        </tr>
        @foreach ($cetakMedis as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->Nama_Pasien }}</td>
            <td>{{ $item->NIK }}</td>
            <td>{{ $item->Nama_Dokter }}</td>
            <td>{{ $item->Ruang_Pemeriksaan }}</td>
            <td>{{ $item->Hasil_Pemeriksaan }}</td>
            <td>{{ $item->Saran }}</td>
            <td>{{ $item->Tanggal_Periksa }}</td>
        </tr>
        @endforeach

    </table>

    <script type="text/javascript">
        window.print();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>