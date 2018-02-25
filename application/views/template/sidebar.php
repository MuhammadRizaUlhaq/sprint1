 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/admin/'); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('fullname'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
       <?php 
      $halaman = apache_getenv("HTTP_HOST") . apache_getenv("REQUEST_URI");
      $admin = 'localhost:801/public_html/admin';
      $user = 'localhost:801/public_html/user';
      $customer = 'localhost:801/public_html/customer';
      $rute = 'localhost:801/public_html/rute';
      $transportation = 'localhost:801/public_html/transportation'; 
      $transportation_type = 'localhost:801/public_html/transportation_type';
      $reservation = 'localhost:801/public_html/reservation';
      ?>
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li <?php if ($halaman==$admin) {echo "class='active'"; } ?> ><a href=<?php echo base_url("admin"); ?>><i class=" fa fa-dashboard"></i> Dashboard</a></li>
        <li <?php if ($halaman==$customer) {echo "class='active'"; } ?> ><a href=<?php echo base_url("customer"); ?>><i class="fa fa-user"></i> Data Customers</a></li>
        <li <?php if ($halaman==$reservation) {echo "class='active'"; } ?> ><a href=<?php echo base_url("reservation"); ?>><i class="fa fa-sticky-note"></i> Data Reservation</a></li>
        <li <?php if ($halaman==$rute) {echo "class='active'"; } ?> ><a href=<?php echo base_url("rute"); ?>><i class="fa fa-road"></i> Data Rute</a></li>
        <li <?php if ($halaman==$transportation) {echo "class='active'"; } ?> ><a href=<?php echo base_url("transportation"); ?>><i class="fa fa-plane"></i> Data Transportation</a></li>
        <li <?php if ($halaman==$transportation_type) {echo "class='active'"; } ?> ><a href=<?php echo base_url("transportation_type"); ?>><i class="fa fa-plane"></i> Data Transportation Type</a></li>
        <li <?php if ($halaman==$user) {echo "class='active'"; } ?> ><a href=<?php echo base_url("user"); ?>><i class="fa fa-users"></i> Data User</a></li>   
      </ul> 
   
    </section>
    <!-- /.sidebar -->
  </aside>