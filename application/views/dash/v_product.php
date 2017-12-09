<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Produk
        
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
               <a href="<?php echo base_url();?>dashboard/add_product" class="btn btn-default"><i class="fa fa-plus"></i> Tambah Data</a>
          </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tab_pengampu" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Img</th>
                  <th>Nama Produk</th>                  
                  <th>Harga</th>
                  <th>Kategori</th>
                  <th>Rekomendasi</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                <?php $i = 1; ?>
                <?php foreach ($product as $key) {?>
                <?php 
                if ($key->status == "0")
                {
                  $stat = "Tidak";
                }
                if ($key->status == "1")
                {
                  $stat = "Ya";
                }
                ?>
                <tr>
                  <td><?php echo $i?></td>
                  <td><img src="<?php echo base_url('uploads/'.$key->img);?>" height="150px"></td></td>
                  <td><?php echo $key->nama;?></td>
                  <td><?php echo $key->harga;?></td>
                  <td><?php echo $key->nama_kategori;?></td>
                  <td><?php echo $stat;?></td>
                  <td>
                  <a class="btn btn-success btn-xs" href="<?php echo base_url(); ?>dashboard/edit_product/<?php echo $key->id_product; ?>"><i class="fa fa-pencil"></i></a>

                  <a href="<?php echo base_url(); ?>dashboard/delete_product/<?php echo $key->id_product; ?>" class="btn btn-danger btn-xs confirm" onclick="return pertanyaan();"><i class="fa fa-close" ></i></a>              
                  </td>
                </tr>
                <?php $i++; }?>
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Img</th>
                  <th>Nama Produk</th>                  
                  <th>Harga</th>
                  <th>Kategori</th>
                  <th>Rekomendasi</th>
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
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
    });

    
  </script>


  