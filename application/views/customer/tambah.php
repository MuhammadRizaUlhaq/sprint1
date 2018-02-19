<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/sidebar'); ?>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal"method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Telepon</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukkan No Telepon">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="gender" name="gender" placeholder="Jenis Kelamin">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="delete" class="btn btn-default">Hapuss</button>
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

