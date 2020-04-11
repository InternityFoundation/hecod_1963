        <?php include('inc/header.inc.php'); ?>
        <?php //echo $id; ?>
        <?php $btDataResult = $adData->fetureData('bloodTemp',$id);  ?>
        <?php $bpDataResult = $adData->fetureData('bloodPressure',$id);  ?>
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
                                        <span class="stats-number text-white"><?php echo $adData->fetureDataCount('prescription',$id); ?></span>
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
                                        <span class="stats-number text-white"><?php echo $adData->fetureDataCount('userPhysiotherepy',$id); ?></span></span>
                                        <p class="stats-info text-white">Physiotherepy</p>
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
                                        <span class="stats-number  text-white">
        <?php echo $adData->fetureDataCount('bloodPressure',$id); ?> </span>
                                        <p class="stats-info  text-white">Blood Pressure</p>
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
                                        <span class="stats-number text-white"><?php echo $adData->fetureDataCount('bloodTemp',$id); ?></span>
                                        <p class="stats-info text-white">Body Temprature</p>
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
                         <?php
                                    if(!empty($bpDataResult)){
                                        $systolic = [];
                                        $distolic = [];
                                        $bpDate = [];
                                        foreach($bpDataResult as $bpData){
                                         $systolic[] = $bpData->systolic;
                                         $distolic[] = $bpData->distolic;
                                         $bpDate[] = $bpData->bpDate;
                                     } } 
                                     ?>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-heading clearfix">
                                        <h4 class="card-title">Blood Pressure</h4>
                                    </div>
                                    <canvas id="chart2"></canvas>
                                </div>
                            </div>
                        </div>
                       <?php
                                    if(!empty($btDataResult)){
                                        $btResult = [];
                                        $btCollDate = [];
                                        foreach($btDataResult as $btData){
                                         $btResult[] = $btData->btResult;
                                         $btCollDate[] = $btData->btCollDate;
                                     } } 
                                     ?>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-heading clearfix">
                                        <h4 class="card-title">Body Temprature</h4>
                                    </div>
                                    <canvas id="chart1"></canvas>
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
