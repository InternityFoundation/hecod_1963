        <?php include('inc/header.inc.php'); ?> 
		<!-- start page inner -->
            <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Heart Rate</h3>
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
                                                <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target=".bs-example-modal-lg">Add Heart Rate</button>
                                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-warning" id="myLargeModalLabel">Add Heart Rate</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                            <form>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                            <label class="col-form-label required required">Result</label>
                                                <input class="form-control" type="text" placeholder="15-300 (BPM)">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                            <label class="col-form-label required">Collection Date</label>
                                                <input class="form-control date-picker" type="text" placeholder="dd/mm/yyyy">
                                        </div>										
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                            <label class="col-form-label">Notes</label>
											<textarea class="form-control" placeholder="Enter text"></textarea>
                                        </div>										
                                        </div>
                                                </div>
                                                <div class="modal-footer bg-primary">
                                                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
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
                                                    <th>Collection Date</th>
                                                    <th>Result</th>
                                                    <th>View</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td class="text-center"><i class="fa fa-user"></td>
                                                    <td>1/01/2020</td>
                                                    <td>44</td>												
                                                    <td class="text-center text-info"><i class="fas fa-eye"></i></td>
                                                    <td class="text-center text-danger"><i class="fas fa-trash"></i></td>
                                                </tr>												
                                                <tr>
                                                    <td>2</td>
                                                    <td class="text-center"><i class="fa fa-user"></td>
                                                    <td>2/01/2020</td>
                                                    <td>44</td>												
                                                    <td class="text-center text-info"><i class="fas fa-eye"></i></td>
                                                    <td class="text-center text-danger"><i class="fas fa-trash"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td class="text-center"><i class="fa fa-user"></td>
                                                    <td>3/01/2020</td>
                                                    <td>44</td>												
                                                    <td class="text-center text-info"><i class="fas fa-eye"></i></td>
                                                    <td class="text-center text-danger"><i class="fas fa-trash"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td class="text-center"><i class="fa fa-user"></td>
                                                    <td>5/01/2020</td>
                                                    <td>44</td>												
                                                    <td class="text-center text-info"><i class="fas fa-eye"></i></td>
                                                    <td class="text-center text-danger"><i class="fas fa-trash"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td class="text-center"><i class="fa fa-user"></td>
                                                    <td>6/01/2020</td>
                                                    <td>44</td>												
                                                    <td class="text-center text-info"><i class="fas fa-eye"></i></td>
                                                    <td class="text-center text-danger"><i class="fas fa-trash"></i></td>
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