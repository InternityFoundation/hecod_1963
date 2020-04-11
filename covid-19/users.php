<?php include('inc/header.inc.php'); ?> 
<?php $result = $adData->AllData('users'); ?>
 
        		<!-- start page inner -->
            <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Doctor Panel</h3>
                </div>
                <!-- start page main wrapper -->
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-white">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="display table" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Mobile</th>
                                                    <th>Join Date</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                             <tbody>
                                    <?php
                                    if(!empty($result)){
                                        $srNo = 1;
                                        foreach($result as $userData){ ?>
                                                <tr>
                                                    <td><?php echo $srNo; ?></td> 
                                                    <td><?php echo $userData->name; ?></td>
                                                    <td><?php echo $userData->email; ?></td>
                                                    <td><?php echo $userData->mobile; ?></td>
                                                    <td><?php echo $userData->created_at; ?></td>	
                                                    <td><?php echo ($userData->status==1)?"<span class='text-success'>Active</span>":"<span class='text-danger'>Inactive</span>"; ?></td>
													<td class="btn-group">
														<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
														<span class="caret"></span></button>
															<ul class="dropdown-menu" role="menu">
																<li><a href="user?id=<?php echo base64_encode($userData->id); ?>" class="delete text-success"><i class="fas fa-eye"></i> View</a></li>
																<li><a href="#" class="delete text-danger" data-id="<?php echo $userData->id; ?>"><i class="fas fa-trash"></i> Remove</a></li>
															</ul>
													</td>
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
				<!-- end page main wrapper -->
                <div class="page-footer">
                    <p>Copyright &copy; 2020 Hecod.in All rights reserved.</p>
                </div>            </div>
            <!-- end page inner -->
			</div>
            <!-- start page right sidebar -->
			<!-- start main right sidebar -->
			<div class="page-right-sidebar" id="main-right-sidebar">
                <div class="page-right-sidebar-inner">
                    <div class="right-sidebar-top">
                        <div class="right-sidebar-tabs">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active" id="chat-tab"><a href="#chat" aria-controls="chat" role="tab" data-toggle="tab">chat</a></li>                            </ul>
                        </div>
                        <a href="javascript:void(0)" class="right-sidebar-toggle right-sidebar-close" data-sidebar-id="main-right-sidebar"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="right-sidebar-content">
                        <!-- start tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="chat">
                                <div class="chat-list">
                                    <span class="chat-title">Recent</span>
                                    <a href="javascript:void(0);" class="right-sidebar-toggle chat-item unread" data-sidebar-id="chat-right-sidebar">
                                        <div class="user-avatar">
                                            <img src="#" alt="" />
                                        </div>
                                        <div class="chat-info">
                                            <span class="chat-author">ipsum dolor sit amet</span>
                                            <span class="chat-text">ipsum dolor sit amet</span>
                                            <span class="chat-time">08:50</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="load-more-messages" data-toggle="tooltip" data-placement="bottom" title="Load More">&bull;&bull;&bull;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- start chat right sidebar -->
            <div class="page-right-sidebar" id="chat-right-sidebar">
                <div class="page-right-sidebar-inner">
                    <div class="right-sidebar-top">
                        <div class="chat-top-info">
                            <span class="chat-name">ipsum dolor sit amet</span>
                            <span class="chat-state">2h ago</span>
                        </div>
                        <a href="javascript:void(0)" class="right-sidebar-toggle chat-sidebar-close float-right" data-sidebar-id="chat-right-sidebar"><i class="icon-keyboard_arrow_right"></i></a>
                    </div>
                    <div class="right-sidebar-content">
                        <div class="right-sidebar-chat slimscroll">
                            <div class="chat-bubbles">
                                <div class="chat-start-date">03/01/2020 5:58PM</div>
                                <div class="chat-bubble them">
                                    <div class="chat-bubble-img-container">
                                        <img src="#" alt="" />
                                    </div>
                                    <div class="chat-bubble-text-container">
                                        <span class="chat-bubble-text">Hello</span>
                                    </div>
                                </div>
                                <div class="chat-bubble me">
                                    <div class="chat-bubble-text-container">
                                        <span class="chat-bubble-text">Hello!</span>
                                    </div>
                                </div>
                                <div class="chat-start-date">03/02/2019 5:18AM</div>
                                <div class="chat-bubble me">
                                    <div class="chat-bubble-text-container">
                                        <span class="chat-bubble-text">lorem</span>
                                    </div>
                                </div>
                                <div class="chat-bubble them">
                                    <div class="chat-bubble-img-container">
                                        <img src="#" alt="" />
                                    </div>
                                    <div class="chat-bubble-text-container">
                                        <span class="chat-bubble-text">ipsum dolor sit amet</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chat-write">
                            <form class="form-horizontal" action="javascript:void(0);">
                                <input type="text" class="form-control" placeholder="Say something">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end chat right sidebar -->
            <!-- end main right sidebar -->
            <!-- end page right sidebar -->
            
        </div>
        <!-- end page content -->
    </div>
    <!-- end page container -->

    <!-- all js include start -->

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>	
	
    <!-- popper -->
    <script src="https://hecod.in/plugins/popper/js/popper.min.js"></script>

    <!-- bootstrap -->
    <script src="https://hecod.in/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- slimscroll -->
    <script src="https://hecod.in/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>

    <!-- custom scripts -->
    <script src="https://hecod.in/js/main.js"></script>	
	
    <!-- summernote -->
    <script src="https://hecod.in/plugins/summernote-master/summernote.min.js"></script>

    
    <!-- datatables -->
    <script src="https://hecod.in/plugins/datatables/js/jquery.datatables.min.js"></script>

    <!-- datepicker -->
    <script src="https://hecod.in/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	
	<!-- velidation js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
	
    <!-- form elements -->
    <script src="https://hecod.in/js/pages/form-elements.js"></script>
	

    <!-- all js include end --><script src="../ajax/bp.js"></script>
<script>
$('.date-picker').datepicker({
        orientation: "top auto",
        autoclose: true
    });
$('#example').DataTable( {
        "paging":   true,
        "ordering": true,
        "info":     true
    } );
</script>

</body>

</html>