        <?php include('inc/header.inc.php'); ?>
			<!-- start page inner -->
            <div class="page-inner">
				<h3 class="breadcrumb-header mb-3">Doctor Dashboard</h3> 
                <!-- start page main wrapper -->
				
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card card-white stats-widget bg-gradient-orange">
                                <div class="card-body">
                                    <div class="float-left">
                                        <span class="stats-number text-white"><?php echo $adData->allDataCount('covid'); ?></span>
                                        <p class="stats-info text-white"><a href="#" class="text-white">
										Active cases</a></p>
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
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card card-white stats-widget bg-gradient-purple">
                                <div class="card-body">
                                    <div class="float-left">
                                        <span class="stats-number text-white">1</span></span>
                                        <p class="stats-info"><a href="#" class="text-white">Discharge Cases</a></p>
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
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card card-white stats-widget bg-gradient-cyan">
                                <div class="card-body">
                                    <div class="float-left">
                                        <span class="stats-number  text-white">
        1 </span>
                                        <p class="stats-info  text-white">Death Cases</p>
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

    <script>
        var labelsChart1 = <?php print json_encode($btCollDate); ?>;
        var dataChart1 = <?php print json_encode($btResult); ?>;

        var labelsChart2 = <?php print json_encode($bpDate); ?>;
        var datasysChart2 = <?php print json_encode($systolic); ?>;
        var datadisChart2 = <?php print json_encode($distolic); ?>;
    
    </script>

    <!-- float pie -->
    <script src="../js/pages/chart.js"></script>

</body>

</html>
