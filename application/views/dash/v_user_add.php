<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah User
        
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          

          <div class="box box-primary">
           
            <form role="form" action="<?php echo base_url();?>dashboard/add" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" placeholder="Enter Username" name="username">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="Enter Password" name="password" id="password">
                </div>
                <div class="form-group">
                  <label>Confirm Password</label>
                  <input type="password" class="form-control" placeholder="Confirm Password" name="password2" id="password2">
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?php echo base_url();?>dashboard/user" class="btn btn-default">Cancel</a>
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
    
  var password = document.getElementById("password")
  , confirm_password = document.getElementById("password2");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

  </script>


  