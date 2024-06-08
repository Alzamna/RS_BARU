<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="/public/css/style_popup_register.css" rel="stylesheet">
  </head>
  <body style="background-color: #CDE4DE;">
  <div style="display: flex; align-items: center;">
    <img src="/public/assets/logo_rs-removebg-preview.png" alt="logo rs" style="width: 80px; height: auto;">
    <h2 style="margin-left: 10px;"><b>RS. Rachma Husada</b></h2>
  </div>


  <br><br>
  <!-- //FORM Register -->
    <div class="container"  style="padding: 40px;">
    <div class="card" style="border-radius: 30px;">
      <div class="card-body">
        <div class="content" style="text-align: center;">
            <h2><b>Register Pasien</b></h2>
            <h5>Masukan Informasi Pasien</h5>
        </div>
        <br><br><br><br>
        
        <h6 style="padding-left: 12px; font-family: Mulish;"><b>Detail Klinis</b></h6>
        <div class="container">
          <div class="row">
                <div class="row align-items-center">
                    <div class="col">
                        <label for="goldar" class="form-label" style="font-family: Mulish;">Golongan Darah</label>
                        <input type="goldar" class="form-control" style="width: 350px; font-family: Mulish;" id="goldar" placeholder="Golongan Darah">
                     </div>
                     <div class="col">
                        <label for="tb" class="form-label" style="font-family: Mulish;">Tinggi Badan</label>
                        <input type="tb" class="form-control" style="width: 350px; font-family: Mulish;" id="tb" placeholder="Tinggi Badan">
                     </div>
                     <div class="col">
                        <label for="bb" class="form-label" style="font-family: Mulish;">Berat Badan</label>
                        <input type="bb" class="form-control" style="width: 350px; font-family: Mulish;" id="bb" placeholder="Berat Badan">
                     </div> 
                    </div>
            </div>
            <br>
            <div class="mb-3">
                <label for="masukkan-alergi" class="form-label" style="font-family: Mulish;">Alergi (bila memiliki)</label>
                <input type="alergi" class="form-control" style="width: 96%; font-family: Mulish;" id="masukkan-alergi" placeholder=" ">
            </div>
            <div class="mb-3">
                <label for="masukkan-komplikasi" class="form-label" style="font-family: Mulish;">Komplikasi lain (bila memiliki)</label>
                <input type="komplikasi" class="form-control" style="width: 96%; font-family: Mulish;" id="masukkan-komplikasi" placeholder=" ">
            </div>
            <br>
          <div class="d-flex justify-content-end mt-3">
            <button type="button" class="btn btn-success btn-sm me-2"><a href="register.blade.php" style="text-decoration: none; color: #fff">Sebelumnya</a></button>
            <button type="button" class="btn btn-secondary btn-sm" onclick="showPopup()">Simpan</button>
            
          </div>
          <br><br>
        </div>
        
      </div>
    </div>
    </div>

  <!-- END FROM Register -->

  <!-- Popup -->
<div id="popup" class="popup">
  <i class="bi bi-check2-circle"></i>
  <h3>Registrasi Berhasil!</h3>
  <br>
  <h5>Data Pasien</h5>
  <h5>Telah Terdaftar</h5>
  <br>
  <div class="d-grid gap-2">
  <button class="btn btn-success" type="button"onclick="hidePopup()">Selesai</button>
  </div>
</div>

<script>
  function showPopup() {
    var popup = document.getElementById('popup');
    popup.style.display = 'block';
  }

  function hidePopup() {
    var popup = document.getElementById('popup');
    popup.style.display = 'none';
  }
</script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
