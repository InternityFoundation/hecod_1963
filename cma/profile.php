        <?php include('inc/header.inc.php'); ?> 
		<!-- start page inner -->
            <div class="page-inner">
				<h3 class="breadcrumb-header mb-3">User Details</h3>
                <!-- start page main wrapper -->
				 
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-lg-8 col-md-12"> 
                            <div class="card card-white card-profile">
								<div class="card-header mb-3"> 
								<h4 class="float-left"></h4>
								<button type="button" class="btn btn-sm btn-info mr-4 float-right" data-toggle="modal" data-target=".bs-example-modal-lg">Settings</button>
								<div class="modal fade bs-example-modal-lg" id="doctorChange" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content bg-gradient-purple">
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-white" id="myLargeModalLabel">Change Password</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                            <form id="doctorResetForm">	 											 
              <input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>">             
              <input type="hidden" name="adminId" value="<?php echo $data->doctorId; ?>">  
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                            <label class="col-form-label required">New Password</label>
                                                <input class="form-control" type="password" name="docPassword" id="docPassword" placeholder="Enter New Password">
                                        </div>
                                        </div>
                                        <div class="form-group row">
										<div class="col-md-12">
                                            <label class="col-form-label required">Confirm Password</label>
                                                <input class="form-control" name="confirm_password" type="password" placeholder="Enter Confirm Password">
                                        </div>
                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-success" id="adminReset" name="adminReset"><span id="loading">Add</span></button>
                                                </div>
                                            </div>
											
                                    </form> 
                                        </div> 
                                    </div>
								</div>
								<div id="success-alert"></div> 
                                <div class="card-body mb-3">
                                    <div class="col-12">
                            <div class="accordion-style" id="accordionExample">
								<!--<div class="alert alert-success" id="success-alert" style="display:none"></div> -->
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="mb-0">Personal Information</h4>
                                    </div>
                                    <div class="card-body">
										<div class="row">
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Doctor Name : </strong><span class="tag"><?php echo $data->doctorName; ?></span></div></div>
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Email : </strong><span class="tag"><?php echo $data->email; ?></span></div></div>
										</div>
										<div class="row">
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Mobile : </strong><span class="tag"><?php echo $data->mobile; ?></span></div></div>
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Designation : </strong><span class="tag"><?php echo $data->designation; ?></span></div></div>
										</div>
										<div class="row">
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Spaciality : </strong><span class="tag"><?php echo $data->spaciality; ?></span></div></div>
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Registration Number : </strong><span class="tag"><?php echo $data->registrationNumber; ?></span></div></div>
										</div>
										<div class="row">
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Center Name : </strong><span class="tag"><?php echo $data->centerName; ?></span></div></div>
											<div class="col-md-6"><div class="alert alert-default userData"><strong>Center Address : </strong><span class="tag"><?php echo $data->centerAddress; ?></span></div></div>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                </div>
                            </div>
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

<script src="../ajax/doctorPassword.js"></script>

</body>

</html>
