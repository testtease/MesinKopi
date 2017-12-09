<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2016-2017 <a href="<?php echo base_url(); ?>">Menikmati Kopi</a>.</strong> All rights
    reserved.
  </footer>

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets2/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets2/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets2/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets2/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets2/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets2/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets2/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets2/dist/js/demo.js"></script>
<!-- page script -->
<script src="<?php echo base_url(); ?>assets2/plugins/select2/select2.full.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets2/ckeditor/ckeditor.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets2/bootstrap/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>

<script>

$(document).ready(function (){
      $("#loading-div-background").css({ opacity: 0.5 });
     <?php if(isset($clear_text_box)) { ?>    
      $('input[type=text]').each(function() {
          $(this).val('');
      });
     <?php } ?>
    });
  
    function ShowProgressAnimation(){
      $("#loading-div-background").show();
    }
    
  function pertanyaan()
            {
                if(confirm('Anda yakin ingin menghapus?'))
                    {
                        return true;
                    }
                else
                    {
                        return false;
                    }
            }

  function change_dosen_tidak_bersedia() {
      
      var kode_dosen = document.getElementById('kode_dosen');     
      window.location.href = "<?php echo base_url().'main/tidak_bersedia/' ?>" + kode_dosen.options[kode_dosen.selectedIndex].value;   
     }

  window.setTimeout(function() { $(".alert-success").fadeTo(500, 0).slideUp(500, function(){ $(this).remove(); }); }, 1500);
    
</script>
</body>
</html>