        <?php include('inc/header.inc.php'); ?>
        <?php $result = $adData->fetureData('diagnostic',$id); ?>
                         <!-- end page header -->           
		<!-- start page inner -->
            <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Diagnostic</h3>
                </div>
                <!-- start page main wrapper -->
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-white">
                                <div class="card-body">
								<div id="success-alert"></div>
                                    <div class="col-auto">
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg">Add</button>
                                                <div class="modal fade bs-example-modal-lg" id="dia" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content bg-gradient-purple">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-white text-center" id="myLargeModalLabel">Add Diagnostic</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                            <form id="diagnosticForm" enctype='multipart/form-data'>	
											<input class="form-control" type="hidden" name="users_id" value="<?php echo $data->id; ?>">
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" name="diaCenter" placeholder="Enter Center Name">
                                        </div>
                                        <div class="col-md-6">
                                                <input class="form-control" type="text" name="diaDoctor" placeholder="Enter Doctor Name">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <input class="form-control date-picker" type="text" name="diaPreOn" placeholder="Test Performed on">
                                        </div>
                                            <div class="col-md-6">
                                                <input class="form-control date-picker" type="text" name="diaRepOn" placeholder="Test Report on">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-md-12">
                                                <input class="form-control" type="number" name="diaPhone" placeholder="Enter Center Number">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                               <!-- <input class="form-control" type="text" placeholder="Address"> -->
											   <textarea class="form-control" name="diaAddress" placeholder="Enter Address"></textarea>
                                        </div>
                                        <div class="col-md-6">
											<textarea class="form-control" name="diaNotes" placeholder="Enter Notes"></textarea>
                                        </div>
                                        </div>
										<div class="row">
										<div class="card w-100 mb-3 ml-3 mr-3" style=" border: 1.5px solid;box-sizing: border-box;border-color:#eeeeee">
										<input type='file' id='diaReport' name='diaReport' />
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
													<button type="submit" class="btn btn-success" name="diagnostic">Add</button>
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
                                                    <th>Date</th>
                                                    <th>Center Name</th>
                                                    <th>Doctor</th>
                                                    <th>File</th>
                                                    <th>View</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
									<?php
									if(!empty($result)){
										$srNo = 1;
										foreach($result as $diaData){ ?>
                                                <tr>
                                                    <td><?php echo $srNo ?></td> 
                                                    <td>Self</td>
                                                    <td><?php echo $diaData->diaPreOn; ?></td> 
                                                    <td><?php echo $diaData->diaCenter; ?></td>
                                                    <td><?php echo $diaData->diaDoctor; ?></td>
                                                    <td><img src="../upload/diag/<?php echo $diaData->diaReport; ?>" class="image-responsive img-size"></td>
                                                    <td class="text-center text-success"><i class="fas fa-eye"></i></td>
                                                    <td class="text-center"><a href="#" class="delete  text-danger" data-id="<?php echo $diaData->diaid; ?>"><i class="fas fa-trash"></i></a></td>
                                                </tr>
									<?php  $srNo++; } } ?>
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
<script src="../ajax/diagnostic.js"></script>

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

<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Are you sure?')){
            e.preventDefault();
            //return false;
			console.log(0);
        } else {
        var id = $("a.delete").attr("data-id");
		$.get( 
				"../action.php", { 
					id: id 
				}, 
				function(data) { 
					//$('#stage').html(data); 
					console.log(data);
				});
		}
    });
});
</script>

</body>

</html>