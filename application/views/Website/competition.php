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
            <h1>Competition Information</h1>
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
                <h3 class="card-title">Add Competition</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-12">
                    <input type="number" class="form-control" name="whatsappnumber" id="whatsappnumber" value="<?php if(isset($whatsappnumber)){ echo $whatsappnumber; } ?>" placeholder="Enter Whatsapp Number" required>
                  </div>
                   <div class="form-group col-md-12">
                      <select name="stateid" id="stateid"class="form-control" required="">
                    <option value="">Select State</option>
                    
                                        <?php foreach($state as $state)
                                {
                                    $selected ="";
                                if($state->stateid == $data[0]->stateid)
                                    {
                                $selected ="selected=selected";
                                    }
                                    
                                echo '<option value="'. $state->stateid.'" '.$selected.'>'. $state->statename.'</option>';
                                         }
                                        ?> 


                  </select>
                  </div>
                  <div class="form-group col-md-12">
                      <select name="cityid" id="cityid"class="form-control" required="">
                    <option value="">Select city</option>
                   
                  </select>
                  </div>
                   <div class="form-group col-md-12">
                    <input type="number" class="form-control" name="pincode" id="pincode" value="<?php if(isset($pincode)){ echo $pincode; } ?>" placeholder="Enter Pincode" required>
                  </div>
                     <div class="form-group col-md-12">
                  <input type="text" class="form-control required title-case text" name="schoolname" id="schoolname" value="<?php if(isset($schoolname)){ echo $schoolname; } ?>" placeholder="Enter School Name" required >
                  </div>
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control required title-case text" name="classcurrentlypresent" id="classcurrentlypresent" value="<?php if(isset($classcurrentlypresent)){ echo $classcurrentlypresent; } ?>" placeholder="Enter Class currently Present" required>
                  </div>
                    <div class="form-group col-md-12">
                    <textarea type="text" class="form-control required title-case text" name="instruction" id="instruction" value="" placeholder="Enter Instruction" required><?php if(isset($instruction)){ echo $instruction; } ?></textarea>
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





</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
 $('#stateid').change(function(){
  
  // alert("hii");

  var stateid = $('#stateid').val();
  if(stateid != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>Competition/fetch_city",
    method:"POST",
    data:{stateid:stateid},
    success:function(data)
    {
  // alert(data);

     $('#cityid').html(data);
     

    }
   });
  }
  else
  {
   $('#cityid').html('<option value="">Select City</option>');
     
  }
 });

  
 

});
</script>

</html>
