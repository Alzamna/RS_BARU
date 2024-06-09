<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFIL ADMIN</title>
    <link href="{{ asset('css/halaman_profil.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
    

        <div class="justify-content-center text-center">
            <h1>PROFIL ADMIN</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3>Informasi Pribadi</h3>
                        </div>
                        @forelse ($profile as $data)
                        <div class="card-body">
                            <table class="table table-striped">
                                <tr>
                                    <th>NIK</th>
                                    <td>{{ $data->nik }}</td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td>{{ $data->name }}</td>
                                </tr>
                                <tr>
                                    <th>Tempat Lahir</th>
                                    <td>{{ $data->tempat_lahir }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>{{ $data->tanggal_lahir }}</td>
                                </tr>
                                <tr>
                                    <th>No. Telp</th>
                                    <td>{{ $data->no_telp }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $data->email }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>{{ $data->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <th>Deskripsi</th>
                                    <td>{{ $data->deskripsi }}</td>
                                </tr>
                                <tr>
                                    <th>Provinsi</th>
                                    <td>{{ $data->provinsi }}</td>
                                </tr>
                                <tr>
                                    <th>Kota/Kabupaten</th>
                                    <td>{{ $data->kota }}</td>
                                </tr>
                                <tr>
                                    <th>Kode Pos</th>
                                    <td>{{ $data->kode_pos }}</td>
                                </tr>
                                <tr>
                                    <th>Kecamatan</th>
                                    <td>{{ $data->kecamatan }}</td>
                                </tr>
                            </table>
                        </div>
                        <!-- Tombol Edit -->
                        <div class="container">
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('profile.edit', ['profile' => $data->id]) }}" class="btn btn-primary">Edit Profile</a>
                            </div>
                        </div>
                        @empty
                        <div class="alert alert-danger">
                            Profil tidak ditemukan.
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    

</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>