        <?php include('inc/header.inc.php'); ?> 
		<!-- start page inner -->
            <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Body Temprature</h3>
                </div>
                <!-- start page main wrapper -->
                <div id="main-wrapper">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-white">
                                <div class="card-body">
								<div id="success-alert"></div>
                                    <div class="form-horizontal">
                                        <div class="form-group row">
                                            <div class="col-auto">
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg">Add</button>
                                                <div class="modal fade bs-example-modal-lg" id="bt" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content bg-gradient-purple">
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-white" id="myLargeModalLabel">Add</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                            <form id="bloodTempForm">	
											<input class="form-control" type="hidden" name="users_id" value="<?php echo $data->id; ?>">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                            <label class="col-form-label required required">Result</label>
                                                <input class="form-control" type="text" name="btResult" placeholder="(75-115.7) Fahrenheit (°F) ">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                            <label class="col-form-label required">Collection Date</label>
                                                <input class="form-control date-picker" type="text" name="btCollDate" placeholder="dd/mm/yyyy">
                                        </div>										
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
											<textarea class="form-control" name="btnotes" placeholder="Enter Notes"></textarea>
                                        </div>										
                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-success" name="bloodTemp">Add</button>
                                                </div>
                                            </div>
											
                                    </form>
                                        </div>
                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="example" class="display table" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Result</th>
                                                    <th>Collection Date Time</th>
                                                    <th>Location</th>
                                                    <th>Notes</th>
                                                </tr>
                                            </thead>
                                             <tbody>
                                    <?php
                                    if(!empty($result)){
                                        $srNo = 1;
                                        foreach($result as $btData){ ?>
                                                <tr>
                                                    <td><?php echo $srNo; ?></td> 
                                                    <td><?php echo $btData->btResult; ?></td>
                                                    <td><?php echo $btData->btCollDate; ?></td> 
                                                    <td><?php echo $btData->btCollDate; ?></td>
                                                    <td><?php echo $btData->btnotes; ?></td>
                                                 </tr>
                                    <?php $srNo++; } } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
						</div>
                    </div>
                    <!-- Row -->
					<div class="row">
						<div class="col-md-12">
							<button class="btn btn-primary btn-block">Screening Tool</button>
						</div>
					</div>
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
<script src="../ajax/bt.js"></script>
<script>
$('.date-picker').datepicker({
        orientation: "top auto",
        autoclose: true
    });
$('#example').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false
    } );
</script>

</body>

</html>