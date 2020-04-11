<?php include('inc/header.inc.php'); ?> 
<?php
$joindata = $values->joins($id);
 ?>		
 <style>
   .image-upload>input {
  display: none;
}
 </style>
		<!-- start page inner -->
            <div class="page-inner">
				<h3 class="breadcrumb-header mb-3">Profile</h3>
                <!-- start page main wrapper -->
				
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="card card-white card-profile">
								<div class="card-header mb-3"> 
								<h4 class="float-left"></h4>
								<a href="settings" class="btn btn-sm btn-info mr-4 float-right">Settings</a>
								</div>
                                <div class="card-body mb-3">
                                    <div class="col-12">
                            <div class="accordion-style" id="accordionExample">
								<div id="success-alert"></div>
								<!--<div class="alert alert-success" id="success-alert" style="display:none"></div> -->
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Personal Information
        </button>
      </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                        <?php include("components/pi.php"); ?>
                                        </div>
                                    </div>
                                </div> 
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Emergency Information
        </button>
      </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                           <?php include("components/em.php"); ?>
                                        </div>
                                    </div> 
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Employer Information
        </button>
      </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                           <?php include("components/empi.php"); ?> 
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Insurance Information
        </button>
      </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <?php include("components/ii.php"); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Hospital Preference
        </button>
      </h2>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <?php include("components/hp.php"); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                </div>
                            </div>
                        </div>
						<div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
            <img src="https://ak8.picdn.net/shutterstock/videos/29724118/thumb/4.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="<?php if(!empty($data->profilePhoto)){ echo "../upload/profile/".$data->profilePhoto; } else { echo "https://hecod.in/img/user.png"; }; ?>" id="photoshow" class="rounded-circle">
                    <div id="msg"></div>
                    <form id="photoform" method="post" enctype="multipart/form-data">
                    <div class="image-upload">
  <label for="file-input">
    <img src="https://image.flaticon.com/icons/png/512/3/3901.png" style=" width: 30px;
    position: relative;
    top: 40px;
    left: 40px;
    border: none;" />
  </label>
  <input class="form-control" type="hidden" name="users_id" value="<?php echo $data->id; ?>">
  <input id="file-input" class="uploadImage" name="profilePhoto" type="file" />
</div>
</form>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                <a href="#" class="btn btn-sm btn-danger float-right">Message</a>
              </div>
            </div>
            <div class="card-body pt-0 mb-3">
              <div class="text-center">
                <h5 class="h3">
                  <?php if(empty($joindata->firstName)) { echo "Profile Name"; } else { echo $joindata->firstName.'&nbsp;'.$joindata->lastName;}?><span class="font-weight-light">, <?php 
                  $from = new DateTime($joindata->dob);
                  $to   = new DateTime('today');
echo $from->diff($to)->y;
                   ?></span>
                </h5>
				
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i><?php echo $joindata->city; ?>
                </div>
              </div>
            </div>
          </div>
          <!-- Progress track -->
        </div>
                    </div>
                    <!-- Row -->
                </div>
                
				<!-- end page main wrapper -->
				<?php include('../inc/footer.inc.php'); ?>
			</div>
            <!-- start page right sidebar -->
			<!-- start main right sidebar -->
			<?php include('../inc/right-sidebar.inc.php'); ?>
            <!-- end main right sidebar -->
                        <!-- end page right sidebar -->
            
        </div>
        <!-- end page content -->
    </div>
    <!-- end page container -->

    <!-- all js include start -->

<?php include('../inc/js.inc.php'); ?>
<script src="../ajax/profile.js"></script>

<script>
$('.date-picker').datepicker({
        orientation: "top auto",
        autoclose: true
    });

//Adding a submit function to the form 
$('#photoform').change(function(e){
  e.preventDefault();
  $.ajax({
    url: "../action.php",
    type: "POST",
    data: new FormData(this),
    contentType: false,
    cache: false,
    processData: false,
    beforeSend: function() {
      $("#loader_form").show();
    },
    success: function(data){
      $("#loader_form").hide();
      $("#photoshow").hide();
      console.log(data);
      $('#msg').html(data);
    },
  });
}); 
</script>

</body>

</html>
