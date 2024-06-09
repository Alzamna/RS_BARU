<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Rekam Medis Pasien - RS Rachma Husada</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/obat.css">
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
                        <a href="/resepobat">
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
            <div class="card card-info card-outline">
                <div class="keterangan">
                    <h2> Tambah Data Dokter</h2>
                </div>

                <div class="card-body">
                    <form action="{{ route ('data_dokter.simpan')}}" method="POST" onsubmit="return validateForm()">
                        @csrf
                        <div class="form-group">
                            <span>Nama Dokter</span>
                            <input type="text" id="Nama_Dokter" name="Nama_Dokter" class="form-control"
                                placeholder="Nama Dokter" required></input>
                        </div>
                        <div class="form-group">
                            <span>NIK Dokter</span>
                            <input type="text" id="NIK_Dokter" name="NIK_Dokter" class="form-control" placeholder="NIK_Dokter" maxlength="16" required>
                            <small id="nikError" class="form-text text-danger" style="display: none;">NIK harus berisi 16 digit angka.</small>
                        </div>
                        <script>
                            document.getElementById('NIK_Dokter').addEventListener('input', function (e) {
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

                            function validateForm() {
                                var nikInput = document.getElementById("NIK_Dokter").value;
                                var errorMessage = document.getElementById('nikError');
                                
                                // Cek apakah NIK terdiri dari 16 digit angka
                                if (nikInput.length !== 16) {
                                    errorMessage.style.display = 'block';
                                    return false;
                                }
                                errorMessage.style.display = 'none';
                                return true;
                            }
                        </script>
                        <div class="form-group">
                            <span><label for="Spesialisasi">Spesialisasi</label></span>
                            <select class="form-select" id="Spesialisasi" name="Spesialisasi" placeholder="Spesialisasi" required>
                            <label for="Spesialisasi">Spesialisasi</label>
                            <option selected>Spesialisasi</option>
                            <option>Dokter Umum</option>
                            <option>Spesialis Anak</option>
                            <option>Spesialis Mata</option>
                            <option>Spesialis Gigi</option>
                            <option>Spesialis Tulang</option>
                            <option>Spesialis Bedah</option>
                            <option>Spesialis Saraf</option>
                            <option>Spesialis Jantung</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <span>Jadwal</span>
                            <input type="text" id="Jadwal" name="Jadwal" class="form-control" placeholder="Jadwal" required></input>
                        </div>
                        <div class="form-group">
                            <span>Alamat</span>
                            <textarea type="text" id="Alamat" name="Alamat" class="form-control" placeholder="Alamat" required></textarea>
                        </div>
                        <div class="form-group">
                            <span for="No_Telp">No. Telp</span>
                            <input type="text" class="form-control @error('No_Telp') is-invalid @enderror"  id="No_Telp" name="No_Telp" placeholder="No. Telp">
                       
                        <!-- error message untuk title -->
                        @error('No_Telp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <span><label for="Status">Status</label></span>
                            <select class="form-select" id="Status" name="Status" placeholder="Status" required>
                            <label for="Status">Status</label>
                            <option selected>Status</option>
                            <option>Aktif</option>
                            <option>Tidak Aktif</option>
                            </select>
                        </div>
                        <div class="tombol">
                            <div class="form-group">
                                <a href="/data_dokter" class="btn btn-success batal-btn"> Batal</a>
                                <button type="submit" class="btn btn-succes simpan-btn">Simpan Perubahan</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

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

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>

