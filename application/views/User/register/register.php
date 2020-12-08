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
            <h1>Registration </h1>
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
                <h3 class="card-title">Registration</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  
               
           
             
                <div class="form-group col-xl-12 col-md-12 col-sm-12 col-12 mb-3">
                  <input type="text" name="name" class="form-control" placeholder="Parent Name *" required="">
                </div>
                <div class="form-group col-xl-12 col-md-12 col-sm-12 col-12 mb-3">
                  <select name="state" class="form-control" required="">
                    <option value="">Select State</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                    <option value="Daman &amp; Diu">Daman &amp; Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Puducherry">Puducherry</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                  </select>
                </div>
                <div class="form-group col-xl-12 col-md-12 col-sm-12 col-12">

                    <input type="number" class="form-control" name="pincode" id="pincode" value="<?php if(isset($pincode)){ echo $pincode; } ?>" placeholder="Enter Pincode" required>

                  </div> 

                <div class=" form-group col-xl-12 col-md-12 col-sm-12 col-12 mb-3 input-group mobile_feild">
                  <input id="phoneInput" type="text" name="phone" class="form-control" placeholder="Mobile *" min="6000000000" max="9999999999" autocomplete="off" required="">
                  <div class="input-group-append">
                    <button id="sendOtp" class="btn btn-danger" type="button">Get OTP</button>
                  </div>
                </div>
                <p id="resendOtp" class="text-danger"></p>
                <button type="button" id="resendOtpBtn" class="d-none">click here to get otp on call</button>
                <div class="form-group col-xl-12 col-md-12 col-sm-12 col-12 mb-3">
                  <input type="text" name="otp" class="form-control" placeholder="OTP" required="">
                </div>
                <div class="form-group col-xl-12 col-md-12 col-sm-12 col-12 mb-3">
                  <select id="planSelect" name="_subscription" class="form-control text-capitalize" required="">
                    <option value="">Select Subscription</option>
                  <option value="1">Yearly Plan (Rs 3000/-)</option>
                  <option value="2">Two-year Plan (Rs 5000/-)</option>
                  <option value="3">Three-Year Plan (Rs 5400/-)</option></select>
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
