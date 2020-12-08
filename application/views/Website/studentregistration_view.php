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
            <h1>Student Registration Information</h1>
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
                <h3 class="card-title">Add Student Registration</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control" name="parentname" id="parentname" value="<?php if(isset($parentname)){ echo $parentname; } ?>" placeholder="Enter Parent Name" required>
                  </div>
                   <div class="form-group col-md-3">
                    <input type="number" class="form-control" name="age" id="age" value="<?php if(isset($age)){ echo $age; } ?>" placeholder="Enter age" required>
                  </div>

                  <div class="form-group col-md-6">
                    <input type="email" class="form-control" name="emailid" id="emailid" value="<?php if(isset($emailid)){ echo $emailid; } ?>" placeholder="Enter Email ID" required>
                  </div>

                   <div class="form-group col-md-3">
                      <select name="grade" id="grade"class="form-control" required="">
                    <option value="">Select Grade</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                  </div>
                  <div class="form-group col-md-12">
                  <input type="text" class="form-control required title-case text" name="schoolcollegename" id="schoolcollegename" value="<?php if(isset($schoolcollegename)){ echo $schoolcollegename; } ?>" placeholder="Enter School/college Name" required >
                  </div>
                  <div class="form-group col-md-3">
                      <select name="country" id="country"class="form-control" required="">
                    <option value="">Select Country</option>
                    <?php foreach($country as $country)
                                {

                                  echo '<option value="'. $country->countryid.'" '.$selected.'>'. $country->countryname.'</option>';
                                    
                                
                                         }
                                        ?>  
                  </select>
                  </div>

                   <div class="form-group col-md-3">
                      <select name="state" id="state"class="form-control" required="">
                        <option value="">Select State</option>
                   
                  </select>
                  </div>
                    <div class="form-group col-md-3">
                      <select name="towncity" id="towncity"class="form-control" required="">
                    <option value="">Select Town/City</option>
                   
                  </select>
                  </div>
                  <div class="form-group col-md-3">
                      <select name="district" id="district"class="form-control" required="">
                    <option value="">Select District</option>
                    
                  </select>
                  </div>
                
                   
                     
                  <div class="form-group col-md-9">
                    <textarea type="text" class="form-control required title-case text" name="address" id="address" value="" placeholder="Enter Address" required><?php if(isset($address)){ echo $address; } ?></textarea>
                  </div>
                   <div class="form-group col-md-3">
                    <input type="number" class="form-control required title-case text" name="pincode" id="pincode" value="<?php if(isset($pincode)){ echo $pincode; } ?>" placeholder="Enter Pincode" required>
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
  <!-- <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script> -->
<br>




</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
 $('#country').change(function(){
  var countryid = $('#country').val();
  if(countryid != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>Profile/fetch_state",
    method:"POST",
    data:{countryid:countryid},
    success:function(data)
    {
      // alert(data);
      // console.log(data);
     $('#state').html(data);
     $('#towncity').html('<option value="">Select Town/City</option>');
    }
   });
  }
  else
  {
   $('#state').html('<option value="">Select State</option>');
   $('#towncity').html('<option value="">Select Town/City</option>');
  }
 });

 $('#state').change(function(){
  var stateid = $('#state').val();
  if(stateid != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>Profile/fetch_city",
    method:"POST",
    data:{stateid:stateid},
    success:function(data)
    {
     $('#towncity').html(data);
     $('#district').html('<option value="">Select District</option>');

    }
   });
  }
  else
  {
   $('#towncity').html('<option value="">Select Town/City</option>');
     $('#district').html('<option value="">Select District</option>');

  }
 });

  $('#towncity').change(function(){
  var cityid = $('#towncity').val();
  if(cityid != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>Profile/fetch_district",
    method:"POST",
    data:{cityid:cityid},
    success:function(data)
    {
     $('#district').html(data);
     
    }
   });
  }
  else
  {
   $('#district').html('<option value="">Select District</option>');
   

  }
 });
 
});
</script>

</html>

