<?php include("../functions.php"); ?>
<?php if(empty($adminid)){ $frame->redirect('../admin'); }?>
<?php $result = $adData->AllData('users'); ?>
      
<!DOCTYPE html> 
<html lang="en">

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="sddd" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="admin,dashboard" />
    <meta name="description" content="sddd" />

    <!-- title  -->
    <title>Dashboard - Health</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="https://hecod.in/img/logos/favicon.png">
    <link rel="apple-touch-icon" href="https://hecod.in/img/logos/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/logos/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/logos/apple-touch-icon-114x114.png">
	
    <!-- common plugins -->
    <link rel="stylesheet" href="https://hecod.in/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css?ver=1.1.0">	
    <link rel="stylesheet" href="https://hecod.in/plugins/icomoon/style.css" />
	
    <!-- bootstrap-datepicker plugin -->
    <link rel="stylesheet" href="https://hecod.in/plugins/bootstrap-datepicker/css/datepicker.css" />

    <!-- datatables plugin -->
    <link rel="stylesheet" href="https://hecod.in/plugins/datatables/css/jquery.datatables.min.css" />
    <link rel="stylesheet" href="https://hecod.in/plugins/datatables/css/jquery.datatables_themeroller.css" />		
	
    <!-- vertical-timeline plugin -->
    <link rel="stylesheet" href="https://hecod.in/plugins/vertical-timeline/css/style.css" />

    <!-- custom css -->
    <link rel="stylesheet" href="https://hecod.in/css/styles.css" />
    <link rel="stylesheet" href="https://hecod.in/css/custom.css" />
</head><body>

    <!-- start page loading -->
	<div id="preloader">
        <div class="row loader">
            <div class="loader-icon">
            <img src="https://hecod.in/img/logos/icon.png" class="image">
			</div>
        </div>
    </div>
     <!-- end page loading -->	 
	 
	 	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

    <!-- start page container -->
    <div class="page-container">
		<!-- start page sidebar -->
		
        <div class="page-sidebar bg-gradient-purple">
            <a class="logo-box bg-gradient-purple" href="https://hecod.in">
                <!--<span>HeCod</span>-->
				<img src="https://hecod.in/img/logos/logo.png" class="image-responsive">
                <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
                <i class="fas fa-times" id="sidebar-toggle-button-close"></i>
            </a>
            <div class="page-sidebar-inner">
                <div class="page-sidebar-menu">
                    <ul class="accordion-menu">
                        <li> 
                            <a href="dashboard">
                                <i class="fas fa-tachometer-alt menu-icon"></i><span> Dashboard</span>
                            </a>
                        </li>
                        <li class="menu-divider"></li>
                        <li>
                            <a href="support">
                                <i class="fas fa-question menu-icon"></i><span> Support</span>
                            </a>
                        </li>
						<li>
                            <a href="../logout">
                                <i class="fas fa-sign-out-alt menu-icon"></i><span> Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>            </div>
        </div>
         <!-- end page sidebar -->
        <!-- start page content -->
        <div class="page-content gradient">
            <!-- start page header -->
			<div class="page-header">
                <div class="search-form">
                    <form action="#" method="GET">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                            <span class="input-group-btn">
                                    <button class="btn btn-default" id="close-search" type="button"><i class="icon-close"></i></button>
                                </span>
                        </div>
                    </form>
                </div>
                <nav class="navbar navbar-default color-set">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <div class="logo-sm">
                                <a href="javascript:void(0)" id="sidebar-toggle-button"><i class="fa fa-bars"></i></a>
                                <a class="logo-box" href="https://hecod.in">
				<img src="https://hecod.in/img/logos/logo.png" class="image-responsive"></a>
                            </div>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <i class="fa fa-angle-down"></i>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="fa fa-bars"></i></a></li>
                                <li><a href="javascript:void(0)" id="toggle-fullscreen"><i class="fa fa-expand"></i></a></li>
                                <li><a href="javascript:void(0)" id="search-button"><i class="fa fa-search"></i></a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="javascript:void(0)" class="right-sidebar-toggle" data-sidebar-id="main-right-sidebar"><i class="fa fa-envelope"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
                                    <ul class="dropdown-menu dropdown-lg dropdown-content">
                                        <li class="drop-title">Notifications<a href="#" class="drop-title-link"><i class="fa fa-angle-right"></i></a></li>
                                        <li class="slimscroll dropdown-notifications">
                                            <ul class="list-unstyled dropdown-oc">
                                                <li>
                                                    <a href="#"><span class="notification-badge bg-primary"><i class="fa fa-photo"></i></span>
                                                            <span class="notification-info">HDHH<b>"NEW DELHI"</b>.
                                                                <small class="notification-date">20:00</small>
                                                            </span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
								                                <li class="dropdown user-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="https://hecod.in/img/user.png" alt="" class="rounded-circle"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Profile 2 </a></li>
                                        <li><a href="#"><span class="badge float-right badge-danger">42</span>Messages</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Account Settings</a></li>
                                        <li><a href="logout">Log Out</a></li>
								                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </div>
                        <!-- end page header -->
 
        		<!-- start page inner -->
            <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Admin</h3>
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
                                                    <td class="text-center text-success"><a href="#" class="delete text-success" data-id="<?php echo $userData->bpid; ?>"><i class="fas fa-eye"></i></a>/
													<a href="#" class="delete text-danger" data-id="<?php echo $userData->bpid; ?>"><i class="fas fa-trash"></i></a></td>
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