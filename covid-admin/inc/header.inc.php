<?php include('head.inc.php'); ?>
<body>

    <!-- start page loading -->

     <!-- end page loading -->	 
	 
	 	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

    <!-- start page container -->
    <div class="page-container">
		<!-- start page sidebar -->
		
        <div class="page-sidebar blue">
            <a class="logo-box blue" href="<?php base_url(); ?>">
                <!--<span>HeCod</span>-->
				<img src="<?php base_url(); ?>/img/logos/logo.png" class="image-responsive">
                <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
                <i class="fas fa-times" id="sidebar-toggle-button-close"></i>
            </a>
            <div class="page-sidebar-inner">
                <?php include('sidebar-menu.inc.php'); ?>
            </div>
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
                                <a class="logo-box" href="<?php base_url(); ?>">
				<img src="<?php base_url(); ?>/img/logos/logo.png" class="image-responsive"></a>
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
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php base_url(); ?>/img/user.png" alt="" class="rounded-circle"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="profile">Profile</a></li>
                                        <li><a href="settings">Account Settings</a></li>
                                        <li role="separator" class="divider"></li>
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
