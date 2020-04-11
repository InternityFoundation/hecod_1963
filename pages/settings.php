        <?php include('inc/header.inc.php'); ?> 
<?php
$joindata = $values->joins($id);
//echo "<pre>";
//print_r($joindata); 
//echo $joindata->name;
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
								<h4 class="float-left">Settings</h4>
								<a href="profile" class="btn btn-sm btn-info mr-4 float-right">Profile</a>
								</div>
                                <div class="card-body mb-3">
                                    <div class="col-12">
								<h4 class="login-title">Reset Your Password</h4>
            <div id="success-alert"></div>
                      <form id="passwordResetForm">                     
              <input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>">             
              <input type="hidden" name="email" value="<?php echo $joindata->email; ?>">              
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control" id="confirm_password">
                            </div>
              <div class="row">
                            <div class="col-auto mr-auto"><button type="submit" name="reset" class="btn btn-outline-warning">Update &rarr;</button></div>
              </div>
                        </form>

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
                    <img src="<?php if(!empty($data->profilePhoto)){ echo "../upload/profile/">$data->profilePhoto; } else { echo "https://hecod.in/img/user.png"; }; ?>" id="photoshow" class="rounded-circle">
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
                  <?php echo $joindata->name.'&nbsp;'.$joindata->lastname; ?><span class="font-weight-light">, 28</span>
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
<script src="../ajax/passwordreset.js"></script>

</body>

</html>
