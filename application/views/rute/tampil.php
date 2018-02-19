<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class='content-header'>
      <h1>
        Rute
        <small>Daftar Semua Rute</small>
      </h1>
      <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-road'></i>Rute</a></li>
        <li class='active'>Daftar Semua Rute</li>
      </ol>
    </section> 
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class='box-title'><?php echo anchor('rute/tambah', '<i class="glyphicon glyphicon-plus"></i> Tambah Data', array('class' => 'btn btn-primary btn-sm')); ?>
              </h3>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>From</th>
                      <th>To</th>
                      <th>Departure Date</th>
                      <th>Price</th>
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
                        
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view('template/footer'); ?>
