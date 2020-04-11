        <?php include('inc/header.inc.php'); ?>
			<!-- start page inner -->
            <div class="page-inner">
				<h3 class="breadcrumb-header mb-3">Covid-19 test</h3> 
                <!-- start page main wrapper -->
				
                <div id="main-wrapper">
                <div class="row">
                        <div class="col-xl-12">
                            <div class="card card-white">
                                <div class="card-body">
                                   <button type="submit" id="check" class="btn btn-warning btn-block">Chek</button>
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

<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("#check").click(function(e){
        e.preventDefault();
        
    });
});
</script>

</body>

</html>
