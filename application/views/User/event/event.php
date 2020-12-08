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
            <h1>Event Information</h1>
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
                <h3 class="card-title">Add Event</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control required title-case text" name="eventname" id="eventname" value="<?php if(isset($eventname)){ echo $eventname; } ?>" placeholder="Enter Name of Event" required>
                  </div>
                  
                  <div class="form-group col-md-6">
                    <input type="date" class="form-control"  name="date" id="date" value="<?php if(isset($date)){ echo $date; } ?>" placeholder="Enter Date" required>
                  </div>
                  <div class="form-group col-md-3">

                    <input type="number" class="form-control" name="fromage" id="fromage" value="<?php if(isset($fromage)){ echo $fromage; } ?>" placeholder="From Age" required>

                  </div>
                  <div class="form-group col-md-3">
                    <input type="number" class="form-control" name="toage" id="toage" value="<?php if(isset($toage)){ echo $toage; } ?>" placeholder=" To Age" required>
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
