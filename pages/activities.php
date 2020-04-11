        <?php include('inc/header.inc.php'); ?> 
		<!-- start page inner -->
            <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Activities</h3>
                </div>
                <!-- start page main wrapper -->
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card card-white">
                                <div class="card-body">
                                    <ul class="nav nav-tabs justify-content-center mb-4" id="myTab4" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="today-tab4" data-toggle="tab" href="#today" role="tab" aria-controls="today" aria-selected="true">Today</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" id="week-tab4" data-toggle="tab" href="#week" role="tab" aria-controls="week" aria-selected="true">Week</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="month-tab4" data-toggle="tab" href="#month" role="tab" aria-controls="month" aria-selected="false">Month</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="year-tab4" data-toggle="tab" href="#year" role="tab" aria-controls="year" aria-selected="false">Year</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent4">
                                        <div class="tab-pane fade show active" id="today" role="tabpanel" aria-labelledby="today-tab4">No Today Data</div>
										<div class="tab-pane fade" id="week" role="tabpanel" aria-labelledby="week-tab4">No Week Data</div>
                                        <div class="tab-pane fade" id="month" role="tabpanel" aria-labelledby="month-tab4">No Month Data</div>
                                        <div class="tab-pane fade" id="year" role="tabpanel" aria-labelledby="year-tab4">No Year Data</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
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
                                                <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target=".bs-example-modal-lg">Add Activities</button>
                                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-warning" id="myLargeModalLabel">Add Activities</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                            <form>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                            <label class="col-form-label required">Activity:</label>
											<select class="form-control">
												<option value="" class="" selected="selected">Choose One</option>
												<option label="Walking + Steps" value="object:50">Walking + Steps</option>
												<option label="Running" value="object:51">Running</option>
												<option label="Cycling" value="object:52">Cycling</option>
												<option label="Swimming" value="object:53">Swimming</option>
											</select>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                            <label class="col-form-label required">Path/Area/Pool:</label>
                                            <input class="form-control" type="text" placeholder="Enter Path">
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="col-form-label required">Date:</label>
                                            <br>
                                            <input placeholder="dd/mm/yyyy" type="text" class="form-control date-picker">

                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3">
                                            <label class="col-form-label required">Wieght(kg):</label>
                                            <input class="form-control" type="text" placeholder="5-300">
                                            <p></p>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="col-form-label required">Distance(km):</label>
                                            <input placeholder="0.1-999" type="text" class="form-control">

                                        </div>
                                        <div class="col-lg-6">
                                            <label class="col-form-label required">Total Time:</label>
                                            <input placeholder="hh:mm" type="text" class="form-control date-picker">

                                        </div>
                                        </div>										
                                        <div class="form-group row">
                                            <div class="col-lg-12">                                            
                                            <label class="col-form-label"> Notes:</label>
                                            <textarea class="form-control" placeholder="Enter text"></textarea>
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
                                                    <th>Date</th>
                                                    <th>Activity</th>
                                                    <th>Path/Area/Pool</th>
                                                    <th>Distance(km)</th>
                                                    <th>Wieght(kg)</th>
                                                    <th>Total Time</th>
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

<?php include('../inc/js.inc.php'); ?>

</body>

</html>