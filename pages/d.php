        <?php include('inc/header.inc.php'); ?>
			<!-- start page inner -->
            <div class="page-inner">
				<h3 class="breadcrumb-header mb-3">Dashboard</h3> 
                <!-- start page main wrapper -->
				
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card card-white stats-widget bg-gradient-orange">
                                <div class="card-body">
                                    <div class="float-left">
                                        <span class="stats-number text-white">1</span>
                                        <p class="stats-info text-white">Prescription</p>
                                    </div>
                                    <div class="float-right">
                                        <i class="fas fa-notes-medical text-white stats-icon"></i>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="progress mb-0 mt-3">
                                        <div class="progress-bar bg-white" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card card-white stats-widget bg-gradient-purple">
                                <div class="card-body">
                                    <div class="float-left">
                                        <span class="stats-number text-white">1</span></span>
                                        <p class="stats-info text-white">Lab Tests</p>
                                    </div>
                                    <div class="float-right">
                                        <i class="fas fa-flask stats-icon text-white"></i>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="progress mb-0 mt-3">
                                        <div class="progress-bar bg-white" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card card-white stats-widget bg-gradient-cyan">
                                <div class="card-body">
                                    <div class="float-left">
                                        <span class="stats-number  text-white">3</span>
                                        <p class="stats-info  text-white">Procedure</p>
                                    </div>
                                    <div class="float-right">
                                        <i class="fas fa-procedures stats-icon text-white"></i>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="progress mb-0 mt-3">
                                        <div class="progress-bar bg-white" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                            <span class="sr-only">40% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card card-white stats-widget bg-gradient-green">
                                <div class="card-body">
                                    <div class="float-left">
                                        <span class="stats-number text-white">3</span>
                                        <p class="stats-info text-white">Immunization</p>
                                    </div>
                                    <div class="float-right">
                                        <i class="fas fa-eye-dropper stats-icon text-white"></i>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="progress mb-0 mt-3">
                                        <div class="progress-bar bg-white" role="progressbar" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100" style="width: 58%;">
                                            <span class="sr-only">58% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
					<div class="row">
                        <div class="col-md-12">
						<div class="card-header"> 
								<h4>Data</h4>
								</div>
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
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-heading clearfix">
                                        <h4 class="card-title">Blood Pressure</h4>
                                    </div>
                                    <canvas id="chart2"></canvas>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-heading clearfix">
                                        <h4 class="card-title">Heart Rate</h4>
                                    </div>
                                    <canvas id="chart1"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-heading clearfix">
                                        <h4 class="card-title">Body Temprature</h4>
                                    </div>
                                    <canvas id="chart5"></canvas>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-heading clearfix">
                                        <h4 class="card-title">Respiratory Rate</h4>
                                    </div>
                                    <canvas id="chart6"></canvas>
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
    <!-- chartjs -->
    <script src='../plugins/chartjs/chart.min.js'></script>

    <!-- float pie -->
    <script src="../js/pages/chart.js"></script>

</body>

</html>
