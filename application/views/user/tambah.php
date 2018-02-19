<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class='content-header'>
      <h1>
        User
        <small>Tambah User</small>
      </h1>
      <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-users'></i>User</a></li>
        <li class='active'>Tambah User</li>
      </ol>
    </section>  
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url(). 'user/tambah_aksi'; ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Full Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Fullname">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Level</label>

                  <div class="col-sm-10">
                    <select class="form-control" name="level">
                      <option value="-">-- SELECT LEVEL --</option>
                      <option value="admin">Admin</option>
                      <option value="user">User</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default">Hapus</button>
                
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view('template/footer'); ?>
