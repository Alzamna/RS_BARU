<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Rekam Medis Pasien - RS Rachma Husada</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/rajal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                        <a href="/data_dokter">
                            <i class='bx bx-group icon'></i>
                            <span class="text nav-text">Dokter</span>
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
                            <span class="text nav-text">Poliklinik</span>
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
                    <img src="images/profil.jpg" alt="profil" width="50" height="50"
                        class="d-inline-block align-text-top">
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
                    <h2> Data Dokter</h2>
                </div>

                <div class="card-header border-0 bg-white d-flex justify-content-end">
                    <div class="card-tools ms-auto">
                        <a href="/create-dokter" class="btn btn-success">
                            <i class='bx bxs-user-plus'></i> Tambah Data Dokter <i class="fas fa-plus-square"></i>
                        </a>
                    </div>
                </div>

                <div class="cetak">
                    <div class="cetak pdf">
                        <a href="/cetak-dokter" class="btn btn-success print-btn"> Cetak <i
                                class="fas fa-plus-square"></i></a>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-md-3">
                            <form action="/data_dokter">
                                <div class="input-group mb-s input-group-sm">
                                    <input type="text" class="form-control" placeholder="Search.." name="search"
                                        value="{{ request('search') }}">
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
                                <th scope="col">Nama Dokter</th>
                                <th scope="col">NIK Dokter</th>
                                <th scope="col">Spesialisasi</th>
                                <th scope="col">Jadwal</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No. Telp</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        @php
                            $mulai = 1;
                        @endphp
                        @foreach ($rsDokter as $item)
                            <tbody>
                                <tr>
                                    <td>{{ $mulai++ }}</td>
                                    <td>{{ $item->Nama_Dokter }}</td>
                                    <td>{{ $item->NIK_Dokter }}</td>
                                    <td>{{ $item->Spesialisasi }}</td>
                                    <td>{{ $item->Jadwal }}</td>
                                    <td>{{ $item->Alamat }}</td>
                                    <td>{{ $item->No_Telp }}</td>
                                    <td>{{ $item->Status }}</td>
                                    <td>
                                        <a href="#" class="btn btn-success btn-sm edit-btn"
                                            data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-{{ $item->NIK_Dokter }}">
                                            <i class='bx bx-edit-alt'></i></a>
                                        <a href="#" class="btn btn-outline-light btn-sm hapus-btn"
                                            data-id="{{ $item->NIK_Dokter }}" data-nama="{{ $item->NIK_Dokter }}"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalHapus-{{ $item->NIK_Dokter }}">
                                            <i class='bx bx-trash'></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                    <div style="font-size: 15px">
                        Menampilkan data ke-
                        {{ $rsDokter->firstItem() }}
                        sampai
                        {{ $rsDokter->lastItem() }}
                        dari
                        {{ $rsDokter->total() }}
                        antrian
                    </div>
                    <div class="card-footer border-0 bg-white d-flex justify-content-end">
                        {{ $rsDokter->links() }}
                    </div>
                </div>
            </div>
            <!-- Modal Edit -->
            @foreach ($rsDokter as $item)
                <div class="modal fade" id="exampleModal-{{ $item->NIK_Dokter }}"
                    tabindex="{{ $item->NIK_Dokter }}" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Dokter</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('data_dokter.update', $item->NIK_Dokter) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="Nama_Dokter">Nama Dokter</label>
                                        <input type="text" id="Nama_Dokter" name="Nama_Dokter"
                                            class="form-control" placeholder="Nama Dokter"
                                            value="{{ old('Nama_Dokter', $item->Nama_Dokter) }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="NIK_Dokter">NIK Dokter</label>
                                        <input type="text" id="NIK_Dokter" name="NIK_Dokter" class="form-control"
                                            placeholder="NIK Dokter" maxlength="16"
                                            value="{{ old('NIK_Dokter', $item->NIK_Dokter) }}" required disabled>
                                        <small id="nikError" class="form-text text-danger"
                                            style="display: none;">NIK harus berisi 16 digit angka.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="Spesialisasi">Spesialisasi</label>
                                        <select class="form-select" id="Spesialis" name="Spesialisasi" required>
                                            <option value="Dokter Umum"
                                                {{ $item->Spesialisasi == 'Dokter Umum' ? 'selected' : '' }}>Dokter
                                                Umum</option>
                                            <option value="Spesialis Anak"
                                                {{ $item->Spesialisasi == 'Spesialis Anak' ? 'selected' : '' }}>
                                                Spesialis Anak</option>
                                            <option value="Spesialis Mata"
                                                {{ $item->Spesialisasi == 'Spesialis Mata' ? 'selected' : '' }}>
                                                Spesialis Mata</option>
                                            <option value="Spesialis Gigi"
                                                {{ $item->Spesialisasi == 'Spesialis Gigi' ? 'selected' : '' }}>
                                                Spesialis Gigi</option>
                                            <option value="Spesialis Tulang"
                                                {{ $item->Spesialisasi == 'Spesialis Tulang' ? 'selected' : '' }}>
                                                Spesialis Tulang</option>
                                            <option value="Spesialis Bedah"
                                                {{ $item->Spesialisasi == 'Spesialis Bedah' ? 'selected' : '' }}>
                                                Spesialis Bedah</option>
                                            <option value="Spesialis Saraf"
                                                {{ $item->Spesialisasi == 'Spesialis Saraf' ? 'selected' : '' }}>
                                                Spesialis Saraf</option>
                                            <option value="Spesialis Jantung"
                                                {{ $item->Spesialisasi == 'Spesialis Jantung' ? 'selected' : '' }}>
                                                Spesialis Jantung</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Jadwal">Jadwal</label>
                                        <input type="text" id="Jadwal" name="Jadwal" class="form-control"
                                            placeholder="Jadwal" value="{{ old('Jadwal', $item->Jadwal) }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Alamat">Alamat</label>
                                        <textarea required id="Alamat" name="Alamat" class="form-control" placeholder="Alamat" required>{{ old('Alamat', $item->Alamat) }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="NoTelp">No. Telp</label>
                                        <input type="text" id="NoTelp" name="No_Telp" class="form-control"
                                            placeholder="No. Telp" maxlength="13"
                                            value="{{ old('No_Telp', $item->No_Telp) }}" required>
                                        <small id="NoTelpError" class="form-text text-danger"
                                            style="display: none;">No. Telp harus berisi maksimal 13 digit
                                            angka.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="Status">Status</label>
                                        <select class="form-select" id="Status" name="Status" required>
                                            <option value="" disabled>Pilih Status</option>
                                            <option value="Aktif" {{ $item->Status === 'Aktif' ? 'selected' : '' }}>
                                                Aktif</option>
                                            <option value="Tidak Aktif"
                                                {{ $item->Status === 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif
                                            </option>
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <script>
                document.querySelectorAll('input[name="NIK_Dokter"]').forEach(input => {
                    input.addEventListener('input', function(e) {
                        var value = e.target.value;
                        var errorMessage = e.target.nextElementSibling;

                        // Hapus karakter non-digit
                        e.target.value = value.replace(/\D/g, '');

                        // Validasi panjang NIK
                        if (e.target.value.length !== 16) {
                            errorMessage.style.display = 'block';
                        } else {
                            errorMessage.style.display = 'none';
                        }
                    });
                });

                document.querySelectorAll('input[name="NoTelp"]').forEach(input => {
                    input.addEventListener('input', function(e) {
                        var value = e.target.value;
                        var errorMessage = e.target.nextElementSibling;

                        // Hapus karakter non-digit
                        e.target.value = value.replace(/\D/g, '');

                        // Validasi panjang No. Telp
                        if (e.target.value.length > 13) {
                            errorMessage.style.display = 'block';
                            // Potong ke 13 karakter pertama
                            e.target.value = e.target.value.substring(0, 13);
                        } else {
                            errorMessage.style.display = 'none';
                        }
                    });
                });
            </script>

        </div>

        @foreach ($rsDokter->reverse() as $item)
            <!-- Awal Modal Hapus -->
            <div class="modal fade" id="modalHapus-{{ $item->NIK_Dokter }}" tabindex="{{ $item->NIK_Dokter }}"
                aria-labelledby="modalHapusLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <i class='bx bxs-trash' style="font-size: 2rem"></i><br>
                            <span>Hapus Data</span>
                            <p>Apakah anda yakin ingin menghapus data ini?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-light batal-btn"
                                data-bs-dismiss="modal">Batal</button>
                            <!-- Formulir DELETE untuk menghapus data -->
                            <form id="formHapus" action="{{ route('data_dokter.hapus', $item->NIK_Dokter) }}"
                                method="POST" onsubmit="return validateForm()">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
