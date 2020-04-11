        <?php include('inc/header.inc.php'); ?>
        <?php $result = $adData->fetureData('bloodGlucose',$id); ?>
		<!-- start page inner -->
            <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Support</h3>
                </div>
                <!-- start page main wrapper -->
                <div id="main-wrapper">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-white">
								<p>Submit Your Query</p>
                                <div class="card-body">
									<textarea class="form-control" placeholder="Post" rows="4"></textarea>
                                    <div class="post-options">
                                        <button class="btn btn-outline-primary float-right">Submit</button>
                                    </div>                                    
                                </div>
                            </div>
						</div>
						<div class="col-md-6">
                            <div class="card card-white">
								<p>Submit Query</p>
                                <div class="card-body">
									Query                                    
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
<script src="../ajax/bg.js"></script>
<script>
$('.date-picker').datepicker({
        orientation: "top auto",
        autoclose: true
    });
//$('#example').dataTable();
$('#example').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false
    } );
</script>

</body>

</html>