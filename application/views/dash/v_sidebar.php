<?php $currentURL = current_url(); ?>
<?php $params = $this->uri->total_segments(); $ids = $this->uri->segment($params);?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul id="sidebar" class="sidebar-menu">

<li class="treeview">
          <a href="<?php echo base_url();?>dashboard">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>
<li class="treeview">
          <a href="<?php echo base_url();?>dashboard/user">
            <i class="fa fa-user"></i> <span>User</span>
          </a>
        </li>
<li class="treeview">
          <a href="<?php echo base_url();?>dashboard/product">
            <i class="fa fa-coffee"></i> <span>Product</span>
          </a>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>