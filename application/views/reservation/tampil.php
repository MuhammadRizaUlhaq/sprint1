<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class='content-header'>
      <h1>
        Reservation
        <small>Daftar Semua Reservation</small>
      </h1>
      <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-sticky-note'></i>Reservation</a></li>
        <li class='active'>Daftar Semua Reservation</li>
      </ol>
    </section>  
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class='box-title'><?php echo anchor('reservation/tambah', '<i class="glyphicon glyphicon-plus"></i> Tambah Data', array('class' => 'btn btn-primary btn-sm')); ?>
              </h3>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table class="table table-stripped table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Code</th>
                      <th>Reservation At</th>
                      <th>Date</th>
                      <th>Customer Id</th>
                      <th>Seat Code</th>
                      <th>Rute Id</th>
                      <th>Depart At</th>
                      <th>User Id</th>
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
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                       <!-- <?php 
                        echo anchor('user/edit/'.$u->id, '<i class="btn btn-primary glyphicon glyphicon-edit" title="Edit"></i>'); 
                        echo anchor('user/hapus/'.$u->id, '<i class="btn btn-primary glyphicon glyphicon-trash" title="Delete"></i>'); ?>-->
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
