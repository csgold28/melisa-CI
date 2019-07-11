<div class="login-box-body">
    <p class="login-box-msg">Masuk Member Area</p>

    <form action="../../index2.html" method="post">
      <div class="form-group has-feedback">
        <label>No. Handphone</label>
        <input type="number" class="form-control" placeholder="No. Handphone">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <br>
      <a href="#">Kirim vefirikasi ulang Email</a>     
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="#">Lupa Password ? KLIK DISINI</a><br><br>
    <a class="text-center">Belum punya Akun ?</a><br>
          <a href="<?=base_url('reg_member')?>" class="btn btn-warning btn-block btn-flat">DAFTAR GRATIS !!</a>
    </div>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
