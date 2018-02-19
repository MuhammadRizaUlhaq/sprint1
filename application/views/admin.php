<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo site_url('user/index'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- box body -->
      <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Data Costumer</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
                    <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Jenis Kelamin</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
              
              </tbody>
            </table>
        </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
            <a href="<?php echo site_url('admin/tambah_costumer') ?>" class="btn btn-sm btn-info btn-flat pull-left">Tambah Costumer Baru</a>
            <a href="<?php echo site_url('admin/lihat_costumer') ?>" class="btn btn-sm btn-default btn-flat pull-right">Lihat Semua Costumer</a>
        </div>
        <!-- /.box-footer -->
      </div>
      <!-- box user -->
      <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Data Users</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Fullname</th>
                  <th>Level</th>
                </tr>
              </thead>
            <tbody>
            </tbody>
          </table>
          </div>
          <!-- /.table-responsive -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
            <a href="<?php echo site_url('admin/tambah_user'); ?>" class="btn btn-sm btn-info btn-flat pull-left">Tambah User Baru</a>
            <a href="<?php echo site_url('admin/lihat_user') ?>" class="btn btn-sm btn-default btn-flat pull-right">Lihat Semua User</a>
        </div>
        <!-- /.box-footer -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view('template/footer')?> 