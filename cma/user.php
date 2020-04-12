        <?php include('inc/header.inc.php'); ?> 
<?php
$id = base64_decode($_GET['id']);
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
                                    <div class="card-header">
                                        <h4 class="mb-0">Personal Information</h4>
                                    </div>
                                    <div class="card-body">
										<div class="row">
											<div class="col-md-4"><div class="alert alert-default userData"><strong>First Name : </strong><span class="tag"><?php echo $joindata->firstName; ?></span></div></div>
											<div class="col-md-4"><div class="alert alert-default userData"><strong>Middle Name : </strong><span class="tag"><?php echo $joindata->middleName; ?></span></div></div>
											<div class="col-md-4"><div class="alert alert-default userData"><strong>Last Name : </strong><span class="tag"><?php echo $joindata->lastName; ?></span></div></div>
										</div>
										
										<div class="row">
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Gender : </strong><span class="tag"><?php echo $joindata->gender; ?></span></div></div>
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Adhaar : </strong><span class="tag"><?php echo $joindata->Adhaar; ?></span></div></div>
										</div>
										
										<div class="row">
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Email : </strong><span class="tag"><?php echo $joindata->email; ?></span></div></div>
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Blood Group : </strong><span class="tag"><?php echo $joindata->bloodGroup; ?></span></div></div>
										</div>
										
										<div class="row">
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Mobile : </strong><span class="tag"><?php echo $joindata->mobile; ?></span></div></div>
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Second Mobile : </strong><span class="tag"><?php echo $joindata->secMobile; ?></span></div></div>
										</div>
										
										<div class="row">
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Address : </strong><span class="tag"><?php echo $joindata->addLine1; ?></span></div></div>
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Address : </strong><span class="tag"><?php echo $joindata->addLine2; ?></span></div></div>
										</div>
										
										<div class="row">
											<div class="col-md-3"><div class="alert alert-default userData"><strong>City : </strong><span class="tag"><?php echo $joindata->city; ?></span></div></div>
											<div class="col-md-3"><div class="alert alert-default userData"><strong>Distric : </strong><span class="tag"><?php echo $joindata->distric; ?></span></div></div>
											<div class="col-md-3"><div class="alert alert-default userData"><strong>State : </strong><span class="tag"><?php echo $joindata->state; ?></span></div></div>
											<div class="col-md-3"><div class="alert alert-default userData"><strong>pincode : </strong><span class="tag"><?php echo $joindata->pincode; ?></span></div></div>
										</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="mb-0">   Emergency Information </h4>
                                    </div>
                                   <div class="card-body">
										<div class="row">
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Name : </strong><span class="tag"><?php echo $joindata->emName; ?></span></div></div>
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Relation : </strong><span class="tag"><?php echo $joindata->emRelation; ?></span></div></div>
										</div>
										
										<div class="row">
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Mobile : </strong><span class="tag"><?php echo $joindata->emMobile; ?></span></div></div>
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Second Mobile : </strong><span class="tag"><?php echo $joindata->emsecMobile; ?></span></div></div>
										</div>		
										
										<div class="row">
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Address : </strong><span class="tag"><?php echo $joindata->emaddLine1; ?></span></div></div>
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Address : </strong><span class="tag"><?php echo $joindata->emaddLine2; ?></span></div></div>
										</div>						
										
										<div class="row">
											<div class="col-md-3"><div class="alert alert-default userData"><strong>City : </strong><span class="tag"><?php echo $joindata->emcity; ?></span></div></div>
											<div class="col-md-3"><div class="alert alert-default userData"><strong>Distric : </strong><span class="tag"><?php echo $joindata->emdistric; ?></span></div></div>
											<div class="col-md-3"><div class="alert alert-default userData"><strong>State : </strong><span class="tag"><?php echo $joindata->emstate; ?></span></div></div>
											<div class="col-md-3"><div class="alert alert-default userData"><strong>pincode : </strong><span class="tag"><?php echo $joindata->empincode; ?></span></div></div>
										</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="mb-0">  Employer Information </h4>
                                    </div>
                                    <div class="card-body">
										<div class="row">
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Employer : </strong><span class="tag"><?php echo $joindata->empEmployer; ?></span></div></div>
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Designation : </strong><span class="tag"><?php echo $joindata->empDesignation; ?></span></div></div>
										</div>
										
										<div class="row">
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Mobile : </strong><span class="tag"><?php echo $joindata->empMobile; ?></span></div></div>
											<div class="col-md-6"><div class="alert alert-default userData"><strong>CUG : </strong><span class="tag"><?php echo $joindata->empCUG; ?></span></div></div>
										</div>
										
										<div class="row">
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Address : </strong><span class="tag"><?php echo $joindata->empaddLine1; ?></span></div></div>
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Address : </strong><span class="tag"><?php echo $joindata->empaddLine2; ?></span></div></div>
										</div>								
										
										<div class="row">
											<div class="col-md-3"><div class="alert alert-default userData"><strong>City : </strong><span class="tag"><?php echo $joindata->empcity; ?></span></div></div>
											<div class="col-md-3"><div class="alert alert-default userData"><strong>Distric : </strong><span class="tag"><?php echo $joindata->empdistric; ?></span></div></div>
											<div class="col-md-3"><div class="alert alert-default userData"><strong>State : </strong><span class="tag"><?php echo $joindata->empstate; ?></span></div></div>
											<div class="col-md-3"><div class="alert alert-default userData"><strong>pincode : </strong><span class="tag"><?php echo $joindata->emppincode; ?></span></div></div>
										</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="mb-0">  Insurance Information  </h4>
                                    </div>
                                    <div class="card-body">
										<div class="row">
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Insurance Provider : </strong><span class="tag"><?php echo $joindata->insuranceProv; ?></span></div></div>
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Policy Number : </strong><span class="tag"><?php echo $joindata->policyNo; ?></span></div></div>
										</div>
										
										<div class="row">
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Policy Name : </strong><span class="tag"><?php echo $joindata->policyName; ?></span></div></div>
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Valid Till : </strong><span class="tag"><?php echo $joindata->validTill; ?></span></div></div>
										</div>	
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="mb-0">  Hospital Preference </h4>
                                    </div>
                                    <div class="card-body">
										<div class="row">
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Hospital Name : </strong><span class="tag"><?php echo $joindata->hospitalName; ?></span></div></div>
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Hospital Address : </strong><span class="tag"><?php echo $joindata->hospitalAdd; ?></span></div></div>
										</div>
										
										<div class="row">
											<div class="col-md-12"><div class="alert alert-default userData"><strong>Spaicial Requirement : </strong><span class="tag"><?php echo $joindata->spaicialRequire; ?></span></div></div>
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

</body>

</html>
