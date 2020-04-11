        <?php include('inc/header.inc.php'); ?>
        <?php $result = $adData->fetureData('allergy',$id); ?>
		<!-- start page inner -->
            <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Blood Glucose</h3>
					<small>
                        This page makes it easy for you to enter and review information about your blood glucose.
                        <!-- To add blood glucose to your record, click 'Add Blood Glucose' and follow the on-screen instructions. -->
                        When you are done, the new information will be added to your health record.
                        <br>
                        <br>

                    </small>
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
                                                <div class="modal fade bs-example-modal-lg" id="al" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content bg-gradient-purple">
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-white" id="myLargeModalLabel">Add Allergy</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                            <form id="alForm">	 
											<input class="form-control" type="hidden" name="users_id" value="<?php echo $data->id; ?>">
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                            <label class="col-form-label required">Allergy</label>
                                            <input class="form-control" type="text" name="allergy" placeholder="Enter Allergy">
                                        </div>
                                            <div class="col-lg-6">
                                            <label class="control-label required">Do you still have this allergy?</label>
                                            <br>
                                            <input type="radio" name="stillHave">
                                            <label for="rdoStillHaveYes" style="margin-right: 12px;"> Yes </label>
                                            <input type="radio">
                                            <label for="rdoStillHaveNo"> No </label>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="control-label required">Duration:</label>
                                            <select required="" class="form-control" name="durationType">
                                                <option value="" selected="selected">Select</option>
                                                <option value="Day">Day</option>
                                                <option value="Hour">Hour</option>
                                                <option value="Minute">Minute</option>
                                                <option value="Month">Month</option>
                                                <option value="Week">Week</option>
                                                <option value="Year">Year</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="control-label">
                                            </label>
                                            <input type="number" min="1" name="duration" class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="control-label required">Severity:</label>
                                            <select required="" class="form-control" name="severity">
                                                <option value="" selected="selected">Choose One</option>
                                                <option value="Mild">Mild</option>
                                                <option value="Mild to Moderate">Mild to Moderate</option>
                                                <option value="Moderate">Moderate</option>
                                                <option value="Moderate to Severe">Moderate to Severe</option>
                                                <option value="Severe">Severe</option>
                                                <option value="Life Threatening Severity">Life Threatening Severity</option>
                                            </select>
                                        </div>
                                        </div>										
                                        <div class="form-group row">
                                            <div class="col-md-12">
											<textarea class="form-control" name="alnotes" placeholder="Enter Notes"></textarea>
                                        </div>										
                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-success" name="alForm">Add</button>
                                                </div>
                                            </div>
											
                                    </form>
                                        </div>
                                    </div>
                                            </div>
                                        </div>
                                    <div class="table-responsive">
                                        <table id="example" class="display table" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Entered By</th>
                                                    <th>Allery</th>
                                                    <th>Still Have</th>
                                                    <th>Duration</th>
                                                    <th>Serverity</th>
                                                    <th>Notes</th>
                                                    <th>View</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                    <?php
                                    if(!empty($result)){
                                        $srNo = 1;
                                        foreach($result as $alData){ ?>
                                                <tr>
                                                    <td><?php echo $srNo; ?></td> 
                                                    <td>Self</td>
                                                    <td><?php echo $alData->allergy; ?></td>
                                                    <td><?php echo $alData->stillHave; ?></td>
                                                    <td><?php echo $alData->durationType; ?>: <?php echo $alData->duration; ?></td>
                                                    <td><?php echo $alData->severity; ?></td>
                                                    <td><?php echo $alData->alnotes; ?></td>
                                                    <td class="text-center text-success"><i class="fas fa-eye"></i></td>
                                                    <td class="text-center"><a href="#" class="delete  text-danger" data-id="<?php echo $alData->alid; ?>"><i class="fas fa-trash"></i></a></td>
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
<script src="../ajax/allergies.js"></script>
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