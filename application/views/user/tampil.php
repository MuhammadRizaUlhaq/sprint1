<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class='content-header'>
      <h1>
        User
        <small>Daftar Semua User</small>
      </h1>
      <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-users'></i>User</a></li>
        <li class='active'>Daftar Semua User</li>
      </ol>
    </section>  
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class='box-title'><?php echo anchor('user/tambah', '<i class="glyphicon glyphicon-plus"></i> Tambah Data', array('class' => 'btn btn-primary btn-sm')); ?>
              </h3>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table class="table table-stripped table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Fullname</th>
                      <th>Level</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php 
                   $no = 1;
                   foreach ($user as $u) {
                   ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $u->username ?></td>
                      <td><?php echo $u->password ?></td>
                      <td><?php echo $u->fullname ?></td>
                      <td><?php echo $u->level ?></td>
                      <td>
                        <?php 
                        echo anchor('user/edit/'.$u->userid, '<i class="btn btn-primary glyphicon glyphicon-edit" title="Edit"></i>'); 
                        echo anchor('user/hapus/'.$u->userid, '<i class="btn btn-primary glyphicon glyphicon-trash" title="Delete"></i>'); ?>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.table-responsive -->
      </div>
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view('template/footer'); ?>
