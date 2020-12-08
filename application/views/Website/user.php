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
            <h2>Participant Information</h2>
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
                <h4 class="card-title">Add Participant</h4>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control" name="participantname" id="participantname" value="<?php if(isset($participantname)){ echo $participantname; } ?>" placeholder="Enter Participant Name" required>
                  </div>
                   <div class="form-group col-md-4">
                    <input type="number" class="form-control" name="pincode" id="pincode" value="<?php if(isset($pincode)){ echo $pincode; } ?>" placeholder="Enter Pincode" required>
                  </div>
                   <div class="form-group col-md-4">
                    <input type="number" class="form-control" name="whatsappno" id="whatsappno" maxlength="10" value="<?php if(isset($whatsappno)){ echo $whatsappno; } ?>" placeholder="Enter Whatsapp No." required>
                  </div>
                     <div class="form-group col-md-4">
                  <input type="number" class="form-control required title-case text" name="otp" id="otp" value="<?php if(isset($otp)){ echo $otp; } ?>" placeholder="Enter OTP" required >
                  </div>
                   <div class="form-group form-check col-md-12">
                  <label class="form-check-label " style="margin-left: 20px;">
                    <input class="form-check-input title-case " style ="margin-top: 10px;" type="checkbox" name="remember"> I agree (Data Protection Policy)
                  </label>
                </div>
                <div class="form-group col-md-12">
                  <label style="color: #0386f7;">Already have account login now</label>
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
  <br>
  <!-- <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script> -->

<script type="text/javascript">
// Check Mobile Duplication..
  var phonenumber1 = $('#phonenumber').val();
  $('#phonenumber').on('change',function(){
    var phonenumber = $(this).val();
    $.ajax({
      url:'<?php echo base_url(); ?>User/check_duplication',
      type: 'POST',
      data: {"column_name":"phonenumber",
             "column_val":phonenumber,
             "table_name":"user"},
      context: this,
      success: function(result){
        if(result > 0){
          $('#phonenumber').val(phonenumber1);
          toastr.error(phonenumber+' Mobile No Exist.');
        }
      }
    });
  });

// Check Email Duplication..
  var emailaddress1 = $('#mobile').val();
  $('#emailaddress').on('change',function(){
    var emailaddress = $(this).val();
    $.ajax({
      url:'<?php echo base_url(); ?>User/check_duplication',
      type: 'POST',
      data: {"column_name":"emailaddress",
             "column_val":emailaddress,
             "table_name":"user"},
      context: this,
      success: function(result){
        if(result > 0){
          $('#emailaddress').val(emailaddress1);
          toastr.error(emailaddress+' Email Id Exist.');
        }
      }
    });
  });
</script>



</body>
</html>
