        <?php include('inc/header.inc.php'); ?> 	
		<!-- start page inner -->
            <div class="page-inner">
                <div class="page-title">
				<h3 class="breadcrumb-header">Report By Date Based</h3></div>
                <!-- start page main wrapper -->
				
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-white">
                                <div class="card-body  float-e-margins">
									<div class="col-12 mb-4">
										<div class="input-daterange input-group" id="datepicker">
    <input type="text" class="input-sm form-control" name="start" />
    <span class="input-group-text">to</span>
    <input type="text" class="input-sm form-control" name="end" />
</div>
										</div>
                                    <div class="col-12">
										<div class="row mb-6">
											<div class="col-md-3 col-lg-2 col-sm-6">
											<button type="button" class="btn btn-warning btn-block btn-block-text">Allergie(s)
											</div>
											<div class="col-md-3 col-lg-2 col-sm-6">
											<button type="button" class="btn btn-warning btn-block">Problem(s)</button>
											</div>
											<div class="col-md-3 col-lg-2 col-sm-6">
											<button type="button" class="btn btn-warning btn-block btn-block-text">Immunization(s)</button>
											</div>
											<div class="col-md-3 col-lg-2 col-sm-6">
											<button type="button" class="btn btn-warning btn-block">Medication(s)</button>
											</div>
											<div class="col-md-2 col-lg-2 col-sm-6">
											<button type="button" class="btn btn-warning btn-block">Prescription(s)</button>
											</div>
											<div class="col-md-2 col-lg-2 col-sm-6">
											<button type="button" class="btn btn-warning btn-block">Physiotherapy(s)</button>
											</div>
										</div>
										<div class="row mb-3 mt-3">
											<div class="col-md-3 col-lg-2 col-sm-6">
											<button type="button" class="btn btn-warning btn-block">Procedure(s)</button>
											</div>
											<div class="col-md-3 col-lg-2 col-sm-6">
											<button type="button" class="btn btn-warning btn-block">Lab Test(s)</button>
											</div>
											<div class="col-md-3 col-lg-2 col-sm-6">
											<button type="button" class="btn btn-warning btn-block">Activitie(s)</button>
											</div>
											<div class="col-md-3 col-lg-2 col-sm-6">
											<button type="button" class="btn btn-warning btn-block">BMI(s)</button>
											</div>
											<div class="col-md-3 col-lg-2 col-sm-6">
											<button type="button" class="btn btn-warning btn-block">SpO2(s)</button>
											</div>											
											<div class="col-md-3 col-lg-2 col-sm-6">
											<button type="button" class="btn btn-warning btn-block">Blood Glucose(s)</button>
											</div>
										</div>
									</div>
									<hr>
									<div class="row justify-content-center mt-3">
										<div class="col-4">
											<button type="button" class="btn btn-warning btn-block">Preview</button>
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

</body>

</html>
