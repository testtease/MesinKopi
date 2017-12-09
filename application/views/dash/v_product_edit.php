<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Produk
        
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          

          <div class="box box-primary">
           
            <form role="form" action="<?php echo base_url();?>dashboard/update" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Produk</label>
                  <input type="hidden" name="id_product" value="<?php echo $product->id_product; ?>">
                  <input type="hidden" name="gbr" value="<?php echo $product->img; ?>">
                  <input type="text" class="form-control" placeholder="Enter Nama Produk" name="nama" value="<?php echo $product->nama; ?>">
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" class="form-control" placeholder="Enter Harga" name="harga" value="<?php echo $product->harga; ?>">
                </div>
                <div class="form-group">
                  <label>Spesifikasi</label>
                  <textarea name="detail" value="" class="form-control ckeditor" rows="3"><?php echo $product->detail; ?></textarea>
                </div>
                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea name="deskripsi" value="" class="form-control ckeditor" rows="3"><?php echo $product->deskripsi; ?></textarea>
                </div>
                <div class="form-group">
                  <label>Kategori Produk</label>
                  <select class="form-control" name="kategori">
                    <?php foreach ($kategori as $key):?>
                    <option <?php if ($product->kategori == $key->id_kategori) {
                      echo "selected";
                    } ?> value="<?php echo $key->id_kategori; ?>"><?php echo $key->nama_kategori; ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tampilkan Di Rekomendasi Produk</label>
                  <select class="form-control" name="status">
                    <option <?php if($product->status == "0"){echo "selected";}?> value="0">Tidak</option>
                    <option <?php if($product->status == "1"){echo "selected";}?> value="1">Tampilkan</option>
                  </select>
                </div>
                <div class="form-group">
                <label>Upload Gambar</label>
                <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail" style="width: 150px;">
                                               <img src="<?php 
                                               if ($product->img == NULL) {
                                                   echo base_url('assets2/noimage.png');
                                               }
                                               else
                                               {
                                                echo base_url('uploads/'.$product->img);
                                               };?>" alt="" />
                                            </div>

                                            
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                               <span class="btn btn-file btn-default"><span class="fileupload-new">Select image</span>
                                               <span class="fileupload-exists">Change</span>
                                               <input type="file" name="gambar" class="default" /></span>
                                               <a href="#" class="btn fileupload-exists btn-default" data-dismiss="fileupload">Remove</a>
                                            </div>
                                         </div>
                                         <p class="help-block">Upload gambar maksimal 2MB</p>

              </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?php echo base_url();?>dashboard/product" class="btn btn-default">Cancel</a>
              </div>
            </form>
          </div>

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">
    
  
  </script>


  