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
            <form class="form-horizontal" action="<?php echo base_url('crud/add'); ?>" method="post">
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
                    <input type="text" class="form-control" id="level" name="level" placeholder="Level">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Hapuss</button>
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

