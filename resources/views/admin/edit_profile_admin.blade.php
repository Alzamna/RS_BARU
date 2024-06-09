<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Profil Saya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="/css/style_profil.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <h1>Profil Saya</h1>
    <div class="container">
        <form method="POST" action="{{ route('profile.update', ['profile' => $profile->id]) }}">
            @csrf
            @method('PUT')
            <div class="main-user-info">
                <div class="gambar-profil">
                    <i class="bi bi-person-circle"></i>
                </div>
                <div class="user-input-box" style="margin-left: 38%; width: 25%">
                    <input type="text" class="form-control" id="nik" name="nik" value="{{ old('nik', $profile->nik) }}" readonly>
                </div>
            </div>
            <br>
            <div class="container">
                <h1 class="form-title">Informasi Personal</h1>
                <div class="main-user-info">
                    <div class="user-input-box">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $profile->name) }}" readonly>
                    </div>
                    <div class="user-input-box">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Email" name="email" value="{{ old('email', $profile->email) }}" readonly />
                    </div>
                </div>
                <div class="main-user-info">
                    <div class="user-input-box">
                        <label for="tempat">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir', $profile->tempat_lahir) }}">
                    </div>
                    <div class="user-input-box">
                        <label for="notelp">No. Telp</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ old('no_telp', $profile->no_telp) }}">
                    </div>
                </div>
                <div class="main-user-info">
                    <div class="user-input-box">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir', $profile->tanggal_lahir) }}">
                    </div>
                    <div class="user-input-box">
                        <label for="inputState" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="Laki-laki" {{ old('jenis_kelamin', $profile->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ old('jenis_kelamin', $profile->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>                    
                    <div class="user-input-box">
                        <label for="bio">Deskripsi</label>
                        <input type="text" id="desk" name="desk" placeholder="Masukkan Deskripsi" value="{{ old('deskripsi', $profile->deskripsi) }}" />
                    </div>
                </div>
                </div>
            <br>
            <div class="container">
                <h1 class="form-title">Alamat</h1>
                <div class="main-user-info">
                    <div class="user-input-box">
                        <label for="prov">Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" name="provinsi" value="{{ old('provinsi', $profile->provinsi) }}">
                    </div>
                    <div class="user-input-box">
                        <label for="kotaKab">Kota / Kabupaten</label>
                        <input type="text" class="form-control" id="kota_kabupaten" name="kota_kabupaten" value="{{ old('kota_kabupaten', $profile->kota) }}">
                    </div>
                    <div class="user-input-box">
                        <label for="kdpos">Kode Pos</label>
                        <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="{{ old('kode_pos', $profile->kode_pos) }}">
                    </div>
                    <div class="user-input-box">
                        <label for="kec">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{ old('kecamatan', $profile->kecamatan) }}">
                    </div>
                </div>
            </div>
            <div class="form-submit-btn">
                <button class="batal" type="submit">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>