<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class='content-header'>
      <h1>
        Rute
        <small>Tambah Rute</small>
      </h1>
      <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-road'></i>Rute</a></li>
        <li class='active'>Tambah Rute</li>
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
            <form class="form-horizontal" action=#" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Depart On</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control pull-right" id="datepicker" name="depart_on" placeholder="Depart On">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Rute From</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="rute_from" name="rute_from" placeholder="Rute From">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Rute To</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="rute_to" name="rute_to" placeholder="Rute To">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Price</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Transport Id</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="transport_id" name="transport_id" placeholder="Transport Id">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="delete" class="btn btn-default">Hapus</button>
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
