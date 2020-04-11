        <?php include('inc/header.inc.php'); ?>                           <!-- end page header -->           
		<!-- start page inner -->
            <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Lab Tests</h3>
                </div>
                <!-- start page main wrapper -->
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-white">
                                <div class="card-body">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <div class="col-auto mr-auto">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control">
                                                    <span class="input-group-prepend last">
                                                        <button class="btn btn-success" type="button">Go!</button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target=".bs-example-modal-lg">Add Lab Tests</button>
                                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-warning" id="myLargeModalLabel">Add Lab Tests</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                            <form>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                            <label class="col-form-label required">Lab Tests</label>
                                            <div class="input-group mb-3">
                                                    <input type="text" class="form-control">
                                                    <span class="input-group-prepend last">
                                                        <button class="btn btn-secondary" type="button"><span aria-hidden="true">&times;</span> Reset</button>
                                                    </span>
                                                </div>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-md-12">
                                            <label class="col-form-label required">Performed On:</label>
                                                <input class="form-control date-picker" type="text" placeholder="DD/MM/YYYY">
                                        </div>
                                        </div>										
                                        <div class="form-group row">
                                        <div class="col-md-6">
                                            <label class="col-form-label required">Result:</label>
                                                <input class="form-control" type="text" placeholder="Result">
                                        </div>
										<div class="col-md-6">
                                            <label class="col-form-label required">Unit:</label>
                                                <input class="form-control" type="text" placeholder="Unit">
                                        </div>
                                        </div>
										<div class="row">
										<label class="col-form-label ml-3">Lab Tests</label>
										<div class="card w-100 mb-3 ml-3 mr-3" style=" border: 1.5px solid;box-sizing: border-box;border-color:#eeeeee">
										<input type="file" name="file">
										<div class="row mt-3">
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-6"> JPEG, JPG, PNG and PDF.
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-6"> 2Mb per image. </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-6">
                                                            Maximum 4 images are allowed.
                                                        </div>
                                                    </div>
                                                </div>
										</div>
										</div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-success" data-dismiss="modal">Add</button>
                                                </div>
                                            </div>
											
                                    </form>
                                        </div>
                                    </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Entered By</th>
                                                    <th>Performed on</th>
                                                    <th>Lab Tests</th>
                                                    <th>File</th>
                                                    <th>View</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="8">No Data</td>
                                                </tr>
                                            </tbody>
                                        </table>
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

<?php include('inc/js.inc.php'); ?>

</body>

</html>