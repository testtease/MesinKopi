<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data User
        
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

        <?php if ($this->session->flashdata('info')): ?>
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                <?php echo $this->session->flashdata('info'); ?>
              </div>
              <?php endif ?>
              
          <div class="box">

          <div class="box-header">
               <a href="<?php echo base_url();?>dashboard/add_user" class="btn btn-default"><i class="fa fa-plus"></i> Tambah User</a>
          </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tab_pengampu" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                <?php foreach ($user as $key) {?>
                <tr>
                  <td><?php echo $i?></td>
                  <td><?php echo $key->username;?></td>
                  <td>
                  <a class="btn btn-success btn-xs" href="<?php echo base_url(); ?>dashboard/edit_user/<?php echo $key->id_user; ?>"><i class="fa fa-pencil"></i></a>

                  <a href="<?php echo base_url(); ?>dashboard/delete_user/<?php echo $key->id_user; ?>" class="btn btn-danger btn-xs confirm" onclick="return pertanyaan();"><i class="fa fa-close" ></i></a>              
                  </td>
                </tr>
                <?php $i++; }?>
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <script type="text/javascript">

    $(function () {

    $("#tab_pengampu").DataTable({
      "paging": false,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
    });

    
  </script>


  