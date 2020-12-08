<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center mt-2">
            <h1>Student Information</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8 offset-md-2">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Add Student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control required title-case text" name="studentname" id="studentname" value="<?php if(isset($studentname)){ echo $studentname; } ?>" placeholder="Enter Name of Student" required>
                  </div>
                   <div class="form-group col-md-12">
                    <textarea type="text" class="form-control required title-case text" name="address" id="address" value="" placeholder="Enter Address of Student" required ><?php if(isset($address)){ echo $address; } ?></textarea>
                  </div>
                  <div class="form-group col-md-12">
                    <input type="number" class="form-control" maxlength="10" name="mobileno" id="mobileno" value="<?php if(isset($mobileno)){ echo $mobileno; } ?>" placeholder="Enter Mobile No." required>
                  </div>
                 
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control" name="standard" id="standard" value="<?php if(isset($standard)){ echo $standard; } ?>" placeholder="Enter Student standard" required>
                  </div>
                  <div class="form-group col-md-12">
                    <input type="numer" class="form-control " name="age" id="age" value="<?php if(isset($age)){ echo $age; } ?>" placeholder="Enter Age" required>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4">Add</button>
                  <?php } ?>
                  <a href="<?php echo base_url() ?>User/dashboard" class="btn btn-default ml-4">Cancel</a>
                </div>
              </form>
            </div>

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>





</body>
</html>
