<?php include('inc/header.inc.php'); ?>
<?php $screening = $_GET['id']; ?>
			<!-- start page inner -->
            <div class="page-inner">
				<h3 class="breadcrumb-header mb-3">Covid-19 Live Location</h3> 
                <!-- start page main wrapper -->
				
                <div id="main-wrapper">
                <div class="row">
                        <div class="col-xl-12">
                            <div class="card card-white">
                                <div class="card-body">
									<div class="row justify-content-md-center">
										<div class="col-xl-6">
											<?php
												switch($screening){
													case "1":?>
													<a href="screening?id=<?php echo $screening+1 ?>" class="btn btn-primary btn-larg btn-block">Start Screening</a> 
													<?php
													break;
													case "2":?>
													<h3 class="text-center">COVID-19 Screening Tool</h3>
<p class="text-center">You’ll answer a few questions about symptoms, travel, and contact you’ve had with others.</p>
<p class="text-center">Your answers will not be shared with Hecod or the CDC without your permission. </p>
<p class="text-center">By using this tool, you agree to its terms and that Hecod will not be liable for any harm relating to your use.</p>
<p class="text-center">Recommendations provided by this tool do not constitute medical advice and should not be used to diagnose or treat medical conditions.</p>

													<a href="screening?id=<?php echo $screening+1 ?>" class="btn btn-primary btn-larg btn-block">Use For Myself</a> 
													<a href="screening?id=<?php echo $screening+2 ?>" class="btn btn-primary btn-larg btn-block">Screening</a> 
													<?php
													break;
													case "3":?>
													<h3 class="text-center">Before you start</h3>
<h5 class="text-center">Stop and call 1075 if you have any of these symptoms:</h5>

<p class="text-center">Constant chest pain or pressure</p>
<p class="text-center">Extreme difficulty breathing</p>
<p class="text-center">Severe, constant dizziness or lightheadedness</p>
<p class="text-center">Slurred speech</p>
<p class="text-center">Difficulty waking up</p>


													<a href="screening?id=<?php echo $screening+1 ?>" class="btn btn-primary btn-larg btn-block"> I have at least one of these symptoms</a> 
													<a href="screening?id=<?php echo $screening+2 ?>" class="btn btn-primary btn-larg btn-block">I do not have any of these symptoms</a>
														
													<?php
														break;
													case "4": ?>
														<h3 class="text-center">You Should Call 1075</h3>
														<p class="text-center">Based on your reported symptoms, you should seek care immediately.</p>
													<?php
														break;
													case "5": ?>
														How old are you?
													<a href="screening?id=<?php echo $screening+1 ?>" class="btn btn-primary btn-larg btn-block"> Under 18</a> 
													<a href="screening?id=<?php echo $screening+2 ?>" class="btn btn-primary btn-larg btn-block"> Between 18 and 64</a>
													<a href="screening?id=<?php echo $screening+3 ?>" class="btn btn-primary btn-larg btn-block">65 Or Other</a>													
													<?php
														break;
													case "6": ?>
													<p class="text-center">This tool is intended for people who are at least 18 years old</p>
													<p class="text-center">Visit the CDC site to get information about younger people and COVID-19.</p>

													<?php
														break;
													case "7": ?>
													<a href="screening?id=<?php echo $screening+1 ?>" class="btn btn-primary btn-larg btn-block"> I have traveled internationally</a> 
													<a href="screening?id=<?php echo $screening+2 ?>" class="btn btn-primary btn-larg btn-block"> I have not traveled internationally</a>

													<?php
														break;
													case "8": ?> 
													<h3 class="text-center">Do you live or work in a care facility?</h3>
													<p class="text-center">This includes a hospital, emergency room, other medical setting, or long-term facility.</p>
													<a href="screening?id=<?php echo $screening+1 ?>" class="btn btn-primary btn-larg btn-block"> I live in a long-term care facility</a> 
													<a href="screening?id=<?php echo $screening+1 ?>" class="btn btn-primary btn-larg btn-block"> I have worked in a hospital or other care facility in the past 14 days</a>
													<a href="screening?id=<?php echo $screening+1 ?>" class="btn btn-primary btn-larg btn-block"> No, I don’t live or work in a care facility</a>
													
													<?php
														break;
													case "9": ?> 
													<h3 class="text-center">Contact Your Work’s Occupational Health Provider</h3>
You should let your work know your current symptoms as soon as possible.

<p class="text-center">Your Next Steps</p>
<p class="text-center">Isolate From Others</p>
<p class="text-center">You should try to stay away from others for at least 7 days from when your symptoms first appeared. Your isolation can end if your symptoms improve significantly and if you have had no fever for at least 72 hours without the use of medicine. By isolating yourself, you can slow the spread of COVID-19 and protect others.</p>
<p class="text-center">Rest and Take Care</p>
<p class="text-center">Eat well, drink fluids, and get plenty of rest.</p>
<p class="text-center">Call Your Work Health Provider</p>
<p class="text-center">You should notify your work of your current symptoms as quickly as you can. This is vital to slowing the spread of COVID-19.</p>
<p class="text-center">Monitor Symptoms</p>
<p class="text-center">Watch for COVID-19 symptoms such as cough, fever, and difficulty breathing. If your symptoms get worse, contact your doctor’s office.</p>
<p class="text-center">Talk to Someone About Testing</p>
<p class="text-center">Your answers suggest you may need to get tested for COVID-19. You should get in touch with your doctor’s office or your state or local health department for more information. Testing access may vary by location and provider.</p>
<p class="text-center">Your Responses</p>
<p class="text-center">You are experiencing symptoms</p>
<p class="text-center">You have relevant conditions</p>
<p class="text-center">You have traveled internationally</p>
<p class="text-center">You have been to an area where it’s widespread </p>
<p class="text-center">You have not been exposed to others who are sick</p>
<p class="text-center">You live or work in a care facility</p>

													<?php	
													break;
													default:
														echo "No information available for that day."; 
														break;
												} 
												?>
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

</body>

</html>
