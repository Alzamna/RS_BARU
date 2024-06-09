<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Rekam Medis Pasien - RS Rachma Husada</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/rajal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <img src="/images/logo.png" alt="">

                <div class="text logo-text">
                    <span class="name">RS.Rachma <br> Husada</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-user icon'></i>
                            <span class="text nav-text">Profil</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/beranda">
                            <i class='bx bx-home icon'></i>
                            <span class="text nav-text">Beranda</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-menu icon'></i>
                            <span class="text nav-text">Data Master</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bed icon'></i>
                            <span class="text nav-text">Kamar</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-doughnut-chart icon'></i>
                            <span class="text nav-text">Pasien</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-clinic icon'></i>
                            <span class="text nav-text">Pemeriksaan</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/pasien_rajal">
                            <i class='bx bx-handicap icon'></i>
                            <span class="text nav-text">Rawat Jalan</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-first-aid icon'></i>
                            <span class="text nav-text">Rawat Inap</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-first-aid icon'></i>
                            <span class="text nav-text">Resep Obat</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-log-out icon' id="log_out"></i>
                            <span class="text nav-text">Keluar</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="home">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand ms-auto" href="#">
                    <img src="images/profil.jpg" alt="profil" width="50" height="50" class="d-inline-block align-text-top">
                    {{-- Bootstrap --}}
                </a>
            </div>
        </nav>

        <div class="content">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <div class="card card-info card-outline">
                <div class="keterangan">
                    <h2> Rekam Medis</h2>
                </div>
                
                <div class="card-header border-0 bg-white d-flex justify-content-end">
                    <div class="card-tools ms-auto">
                        <a href="/create-medis" class="btn btn-success">
                            <i class='bx bxs-user-plus'></i> Tambah Pasien <i class="fas fa-plus-square"></i>
                        </a>
                    </div>
                </div>

                <div class="cetak">
                    <div class="cetak pdf">
                        <a href="/cetak-medis" class="btn btn-success print-btn"> Cetak <i class="fas fa-plus-square"></i></a>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-md-3">
                            <form action="/rekam_medis">
                                <div class="input-group mb-s input-group-sm">
                                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                                    <button class="btn btn-outline-secondary" type="submit">Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Pasien</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama Dokter</th>
                                <th scope="col">Ruang Pemeriksaan</th>
                                <th scope="col">Hasil Pemeriksaan</th>
                                <th scope="col">Saran</th>
                                <th scope="col">Tanggal Periksa</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        @php
                        $mulai = 1;
                        @endphp
                        @foreach ($rsRekamMedis as $index => $item)
                        <tbody>
                            <tr>
                            <td>{{ $index + $rsRekamMedis->firstItem() }}</td>
                                <td>{{ $item->Nama_Pasien }}</td>
                                <td>{{ $item->NIK }}</td>
                                <td>{{ $item->Nama_Dokter }}</td>
                                <td>{{ $item->Ruang_Pemeriksaan }}</td>
                                <td>{{ $item->Hasil_Pemeriksaan }}</td>
                                <td>{{ $item->Saran }}</td>
                                <td>{{ $item->Tanggal_Periksa }}</td>
                                <td>
                                    <a href="#" class="btn btn-success btn-sm edit-btn" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $item->NIK }}">
                                        <i class='bx bx-edit-alt'></i></a>
                                    <a href="#" class="btn btn-outline-light btn-sm hapus-btn" data-id="{{ $item->NIK }}" data-nama="{{ $item->NIK }}" data-bs-toggle="modal" data-bs-target="#modalHapus-{{ $item->NIK }}"> <i class='bx bx-trash'></i></a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    <div style="font-size: 15px">
                    Menampilkan data ke-
                    {{ $rsRekamMedis->firstItem() }}
                    sampai
                    {{ $rsRekamMedis->lastItem() }}
                    dari
                    {{ $rsRekamMedis->total() }}
                    antrian
                    </div>
                    <div class="card-footer border-0 bg-white d-flex justify-content-end">
                        {{ $rsRekamMedis->links()}}
                    </div>
                </div>
            </div>
            <!-- Modal Edit -->
            @foreach ($rsRekamMedis as $item)
            <div class="modal fade" id="exampleModal-{{ $item->NIK }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Rekam Medis</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('rekam_medis.update', $item->NIK) }}" method="POST" onsubmit="return validateForm()">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <span>Nama Pasien</span>
                                    <input type="text" id="Nama_Pasien" name="Nama_Pasien" class="form-control" placeholder="Nama Pasien" value="{{ $item->Nama_Pasien }}" required></input>
                                </div>
                                <div class="form-group">
                                    <span>NIK</span>
                                    <input type="text" id="NIK" name="NIK" class="form-control" placeholder="NIK" maxlength="16" required value="{{ $item->NIK }}" required>
                                    <small id="nikError" class="form-text text-danger" style="display: none;">NIK harus berisi 16 digit angka.</small>
                                </div>
                                <script>
                                    document.getElementById('NIK').addEventListener('input', function(e) {
                                        var value = e.target.value;
                                        var errorMessage = document.getElementById('nikError');

                                        // Hapus karakter non-digit
                                        e.target.value = value.replace(/\D/g, '');

                                        // Validasi panjang NIK
                                        if (e.target.value.length !== 16) {
                                            errorMessage.style.display = 'block';
                                        } else {
                                            errorMessage.style.display = 'none';
                                        }
                                    });
                                </script>
                                <div class="form-group">
                                    <span>Nama Dokter</span>
                                    <input type="text" id="Nama_Dokter" name="Nama_Dokter" class="form-control" placeholder="Nama Dokter" value="{{ $item->Nama_Dokter }}" required></input>
                                </div>
                                <div class="form-group">
                                    <span><label for="Ruang_Pemeriksaan">Ruang Pemeriksaan</label></span>
                                    <select class="form-select" id="Ruang_Pemeriksaan" name="Ruang_Pemeriksaan" required>
                                        <option value="Poliklinik" {{ $item->Ruang_Pemeriksaan == 'Poliklinik' ? 'selected' : '' }}>Poliklinik</option>
                                        <option value="Poli Anak" {{ $item->Ruang_Pemeriksaan == 'Poli Anak' ? 'selected' : '' }}>Poli Anak</option>
                                        <option value="Poli Mata" {{ $item->Ruang_Pemeriksaan == 'Poli Mata' ? 'selected' : '' }}>Poli Mata</option>
                                        <option value="Poli Gigi" {{ $item->Ruang_Pemeriksaan == 'Poli Gigi' ? 'selected' : '' }}>Poli Gigi</option>
                                        <option value="Poli THT" {{ $item->Ruang_Pemeriksaan == 'Poli THT' ? 'selected' : '' }}>Poli THT</option>
                                        <option value="Poli Saraf" {{ $item->Ruang_Pemeriksaan == 'Poli Saraf' ? 'selected' : '' }}>Poli Saraf</option>
                                        <option value="Poli Bedah" {{ $item->Ruang_Pemeriksaan == 'Poli Bedah' ? 'selected' : '' }}>Poli Bedah</option>
                                        <option value="Poli Dalam" {{ $item->Ruang_Pemeriksaan == 'Poli Dalam' ? 'selected' : '' }}>Poli Dalam</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <span>Hasil Pemeriksaan</span>
                                    <textarea type="text" id="Hasil_Pemeriksaan" name="Hasil_Pemeriksaan" class="form-control" placeholder="Hasil_Pemeriksaan" required>{{ $item->Hasil_Pemeriksaan }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="Saran">Saran</label>
                                    <select class="form-select" id="Saran" name="Saran">
                                        <option value="" selected disabled>Pilih Saran</option>
                                        <option value="Rawat Jalan" {{ $item->Saran === 'Rawat Jalan' ? 'selected' : '' }}>Rawat Jalan</option>
                                        <option value="Rawat Inap" {{ $item->Saran === 'Rawat Inap' ? 'selected' : '' }}>Rawat Inap</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Tanggal_Periksa">Tanggal Periksa</label>
                                    <input type="date" id="Tanggal_Periksa" name="Tanggal_Periksa" class="form-control" placeholder="Tanggal Periksa" value="{{ $item->Tanggal_Periksa }}" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @foreach ($rsRekamMedis->reverse() as $item)
        <!-- Awal Modal Hapus -->
        <div class="modal fade" id="modalHapus-{{ $item->NIK }}" tabindex="{{ $item->NIK }}" aria-labelledby="modalHapusLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <i class='bx bxs-trash' style="font-size: 2rem"></i><br>
                        <span>Hapus Data</span>
                        <p>Apakah anda yakin ingin menghapus data ini?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-light batal-btn" data-bs-dismiss="modal">Batal</button>
                        <!-- Formulir DELETE untuk menghapus data -->
                        <form id="formHapus" action="{{ route('rekam_medis.hapus', $item->NIK)}}" method="POST" onsubmit="return validateForm()">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-light hapus-btn">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Modal Hapus -->
        @endforeach
        </div>
    </section>

    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        })

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";

            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>