<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/'); ?>dist/css/AdminLTE.min.css">
  <!-- Horizontal Form -->
  <style>
    .loginbox{
      margin: 180px auto;
      width: 450px;
      position: relative;
      border-radius: 15px;
      background: #ffffff;
    }
    body{
      background-color: rgb(209,209,209);
    }
  </style>
</head>
<body>
  <div class="box box-info loginbox">
    <div class="box-header with-border">
      <h3 class="box-title">Login Form</h3>
    </div>            
    <!-- form start -->
    <?php 
      if(isset($_POST['masuk'])){
        $u = $this->input->post('username');
        $p = $this->input->post('password');
        if($u=='admin' && $p=='admin'){
          header('location:'.base_url().'admin');
        }else if($u=='user' && $p=='user'){
          header('location:'.base_url().'welcome');
        }
      }
    ?>
      <form class="form-horizontal" action="" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
              <div class="col-sm-10 has-feedback">
                <input type="text" class="form-control" name="username" placeholder="Username">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10 has-feedback">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="reset" class="btn btn-default">Hapus</button>
          <button type="submit" name="masuk" class="btn btn-info pull-right">Masuk</button>
        </div>
      <!-- /.box-footer -->
    </form>
  </div>
</body>
</html>