  <div class="register-box-body">
    <p class="login-box-msg">Silahkan isi data Anda dibawah ini.</p>

    <form action="<?=base_url('assets')?>/index.html" method="post">
      <div class="form-group has-feedback">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama">
        <span class=" form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
         <label>Alamat</label>
        <input type="text" class="form-control" name="alamat" ">
        <span class=" form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Provinsi</label>
          <select class="form-control" name="provinsi" id="provinsi">
            <option value="0" disabled="true" selected="true">--Pilih Provinsi--</option>
            <?php
            foreach ($listprovinsi as $provinsi) {
               echo "<option value='".$provinsi->id."'>".$provinsi->nama."</option>"
             } ?>
          </select>
      </div>
      <div class="form-group has-feedback">
        <label>Kabupaten / Kota</label>
          <select class="form-control" name="regencies" id="regencies">
            <option value="0" disabled="true" selected="true">--Pilih Kabupaten/Kota--</option>
          </select>
      </div>
      <div class="form-group has-feedback">
        <label>Kecamatan</label>
          <select class="form-control" name="districts" id="districts">
            <option value="0" disabled="true" selected="true">--Pilih Kecamatan--</option>
          </select>
      </div>
      <div class="form-group has-feedback">
        <label>Desa / Kelurahan</label>
          <select class="form-control" name="villages" id="villages">
            <option value="0" disabled="true" selected="true">--Pilih Desa/Kel--</option>
          </select>
      </div>
      <div class="form-group has-feedback">
         <label>No. Handphone</label>
        <input type="number" class="form-control" name="nohp" ">
        <span class=" form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
         <label>Email</label>
        <input type="text" class="form-control" name="email" ">
        <span class=" form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
         <label>Password</label>
        <input type="password" class="form-control" name="password1" ">
        <span class=" form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
         <label>Ketik ulang Password</label>
        <input type="password" class="form-control" name="password2" ">
        <span class=" form-control-feedback"></span>
      </div>
      
      <label>*Dengan mendaftar, Anda telah membaca dan menyetujui <a href="#">Syarat & Ketentuan</a>&ensp;dan <a href="#">Pembebasan Tanggung Jawab.</a>
    </label>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-warning btn-block btn-flat">Daftar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <br>
    <label>Anda sudah punya akun ?&ensp;<a href="#">MASUK</a></label>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->