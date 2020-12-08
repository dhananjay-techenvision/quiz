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
            <h1>Unit Details</h1>
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
                <h3 class="card-title">Add Unit Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-6">
                    <label>Unit Name*</label>
                    <input type="text" class="form-control form-control-sm" name="unit_name" id="unit_name" value="<?php if(isset($unit_name)){ echo $unit_name; } ?>" placeholder="Enter Unit Name" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Unit Code</label>
                    <input type="text" class="form-control form-control-sm" name="unit_code" id="unit_code" value="<?php if(isset($unit_code)){ echo $unit_code; } ?>" placeholder="Enter Unit Code" required>
                  </div>
                 
                
                  
                <div class="card-footer row">
                  
                  <div class="col-md-6 text-right">
                   <!--  <?php if(isset($update)){ ?>
                      <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                    <?php } else{ ?> -->
                      <button id="btn_save" type="submit"  class="btn btn-success px-4"> <a href="<?php echo base_url() ?>User/unit_list" class="btn btn-default ml-4">Save</a></button>
                    <?php } ?>
                    <!-- <a href="<?php echo base_url() ?>User/unit_list" class="btn btn-default ml-4">Cancel</a> -->
                  </div>
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

<script type="text/javascript">

</script>
</body>
</html>
