<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class='content-header'>
      <h1>
          Customer
        <small>Daftar Semua customer</small>
      </h1>
      <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Customer</a></li>
        <li class='active'>Daftar Semu Customer</li>
      </ol>
    </section>  
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="bos-title"><?php echo anchor('customer/tambah', '<i class="glyphicon glyphicon-plus"></i>Tambah Data', array('class' => 'btn btn-primary btn-sm')); ?></h3>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table class="table table-stripped table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                      <th>Jenis Kelamin</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
               
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                       <!-- <?php 
                        echo anchor('customer/edit/'.$u->userid, '<i class="btn btn-primary glyphicon glyphicon-edit" title="Edit"></i>'); 
                        echo anchor('customer/hapus/'.$u->userid, '<i class="btn btn-primary glyphicon glyphicon-trash" title="Delete"></i>'); ?> -->
                      </td>
                    </tr>
                 
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
