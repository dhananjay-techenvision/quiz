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
            <h1> Image Upload Details</h1>
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
                <h3 class="card-title">Add Image Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              
              <form class="m-0 input_form" id="form_action" role="form" action="" method="post" enctype="multipart/form-data">
                <div class="card-body row">
                     

                     <input type="file" class="form-control form-control-sm" id="profile_image" name="profile_image" size="33" />

                <!-- <input type="submit" value="Upload Image" /> -->
                 
                
                  
                <div class="card-footer row">
                  
                  <div class="col-md-6 text-right">
                   <!--  <?php if(isset($update)){ ?>
                      <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                    <?php } else{ ?> -->
                      <button id="btn_save" type="submit"  class="btn btn-success px-4">Save</button>
                    <!-- <?php } ?> -->
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
