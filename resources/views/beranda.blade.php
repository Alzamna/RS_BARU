<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="{{asset('beranda.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<!-- ====== Bagian Sidebar ======  -->

   <div class="sidebar ">
    <div class="logo-details">
        <div class="logo-rs"><img src="{{asset ('assets/logo.png')}}" alt="Logo"></div>
    </div>
    <div class="logo-name">RS. Rachma<br>Husada</div>
    <ul class="nav-links">
        <li>
            <a href="#">
                <i class='bx bx-grid-alt'></i>
                <span class="link-nama">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-user'></i>
                <span class="link-nama">Profil</span>
            </a>
            <ul class="sub-master blank">
                <li><a class="link-name" href="">Profil</a></li>
        </ul>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-home-alt'></i>
                <span class="link-nama">Beranda</span>
            </a>
            <ul class="sub-master blank">
                <li><a class="link-name" href="">Beranda</a></li>
        </ul>
        </li>
        
        <li>
            <div class="icon-link">
                 <a href="#">
                <i class='bx bx-data' ></i> 
                <span class="link-nama">Data Master</span>
            </a>
            <i class='bx bx-chevron-down arrow'></i>  
            </div>
                <ul class="sub-master">
                        <li><a class="link-name" href="">Data Master</a></li>
                        <li><a href="#">Kamar</a></li>
                        <li><a href="#">Pasien</a></li>
                </ul>
        </li>
        <li>
            <div class="icon-link">
                 <a href="#">
                    <i class='bx bx-doughnut-chart'></i>
                <span class="link-nama">Pemeriksaan</span>
            </a>
            <i class='bx bx-chevron-down arrow'></i> 
            </div>  
            <ul class="sub-master">
                <li><a class="link-name" href="">Pemeriksaan</a></li>
                <li><a href="rajal.html">Rawat Jalan</a></li>
                <li><a href="rajal.html">Rawat Inap</a></li>
        </ul>  
        </li>
        <li>
            <a href="#">
                <i class='bx bx-capsule'></i>
                <span class="link-nama">Resep Obat</span>
            </a>
            <ul class="sub-master blank">
                <li><a class="link-name" href="">Resep Obat</a></li>
        </ul>
        </li> 
        <li>
          <a href="/logout">
            <i class='bx bx-log-out '  ></i>
              <span class="link-logout">Keluar</span>
          </a>
      </li>
</div>   

<!-- ====== Bagian Akun ======  -->

<section class="home-section">
<nav class="navbar bg-body-tertiary" style="border-radius: 11px; margin-bottom: 10px; margin-top: 10px;">
  <img src="/assets/profil.jpg" alt="" width="50" height="50" style="border-radius: 40px; margin-left: 980px; ">

  <div class="container">
    <a class="navbar-brand" href="#">
    </a>
  </div>
</nav>

<div class="kotak-akun">
  <div class="header-wraper">
  </div>
</div>
<!-- ====== Bagian Data ====== -->
<div class="kotak-data">
  <div class="kotak-wraper">
    <div class="jumlah-ada kamar-kosong">
      <div class="judul-kotak">
        <span class="amount-isi">
          
        </span>
        <div class="amount-ada">
          <i class='bx bx-accessibility pp'></i>
          <span class="amount-judul">Jumlah Pasien</span>
        </div>
      </div>
      <span class="lihat-detail">Lihat Detail <i class='bx bx-right-arrow-circle arr '></i></span>
    </div>

    <div class="jumlah-ada kamar-isi">
        <div class="judul-kotak">
          <span class="amount-isi">
          </span>
          <div class="amount-ada">
            <i class='bx bx-bed pp'></i>
            <span class="amount-judul">Kamar Terisi</span>
          </div>
        </div>
        <span class="lihat-detail">Lihat Detail <i class='bx bx-right-arrow-circle arr '></i></span>
      </div>

      <div class="jumlah-ada obat">
        <div class="judul-kotak">
          <span class="amount-isi">
            
        </span>
          <div class="amount-ada">
            <i class='bx bx-first-aid pp'></i>
            <span class="amount-judul">Jumlah Obat</span>
          </div>
        </div>
        <span class="lihat-detail">Lihat Detail <i class='bx bx-right-arrow-circle arr '></i></span>
      </div>

      <div class="jumlah-ada pasien">
        <div class="judul-kotak">
          <span class="amount-isi">
        </span>
          <div class="amount-ada">
            <i class='bx bx-edit-alt pp'></i>
            <span class="amount-judul">Registrasi Baru</span>
          </div>
        </div>
        <span class="lihat-detail">Lihat Detail <i class='bx bx-right-arrow-circle arr '></i></span>
      </div>
  </div>
</div>

<div class="tabular-wraper">
  <h3 class="main--title">Jadwal Hari ini</h3>
  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>Jam</th>
          <th>Tugas</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>06:30-07:00</td>
          <td>Melakukan presensi dan pemeriksaan alat</td>
        </tr>
        <tr>
          <td>07:00-09:00</td>
          <td>Melakukan pembinaan Masyarakat</td>
        </tr>
        <tr>
          <td>09:00-12:00</td>
          <td>Penjagaan di ruang Melati 1</td>
        </tr>
        <tr>
          <td>12:30-13:00</td>
          <td>Pemerikasaan di ruang VIP 1</td>
        </tr>
        <tr>
          <td>13:00-14:00</td>
          <td>Pengecekan stok obat</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</section>


    <script src="{{ asset('script.js') }}"></script>

</body>
</html>