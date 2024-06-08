<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        
        <h6 style="padding-left: 12px; font-family: Mulish;"><b>Detail Kontak</b></h6>
        <div class="container">
          <div class="row">
            <div class="col">
            <div class="mb-3">
              <label for="notelp" class="form-label" style="font-family: Mulish;">Nomor Telpon</label>
              <input type="notelp" class="form-control" style="width: 100%; font-family: Mulish;" id="notelp" placeholder="No. Telpon">
            </div>
            <div class="mb-3">
              <label for="alamat" class="form-label" style="font-family: Mulish;">Alamat</label>
              <input type="alamat" class="form-control" style="width: 100%; font-family: Mulish;" id="alamat" placeholder="Alamat">
            </div>
            </div>
            <div class="col">
            <div class="mb-3">
              <label for="email" class="form-label" style="text-align: flex; font-family: Mulish;">Email</label>
              <input type="email" class="form-control" style="width: 100%; font-family: Mulish;" id="email" placeholder="Alamat Email">
            </div>
            <div class="mb-3">
              <label for="kotakab" class="form-label" style="text-align: flex; font-family: Mulish;">Kota/Kabupaten</label>
              <input type="kotakab" class="form-control" style="width: 100%; font-family: Mulish;" id="kotakab" placeholder="Kota/Kabupaten">
            </div>
            </div>
            </div>
          </div>
          <br><br><br>
          <div class="d-flex justify-content-end mt-3">
        <form action="registertiga.blade.php" method="post">
          <button type="button" class="btn btn-success btn-sm me-2">Sebelumnya</button>
          <input type="submit" class="btn btn-secondary btn-sm" value="Selanjutnya">
        </form>
      </div>
          <br><br>
        </div>
      </div>
    </div>
    </div>

  <!-- END FROM Register -->
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
