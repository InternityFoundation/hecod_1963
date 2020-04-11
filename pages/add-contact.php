        <?php include('inc/header.inc.php'); ?> 
		<!-- start page inner -->
            <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Add Contact</h3>
                </div>
                <!-- start page main wrapper -->
                <div id="main-wrapper">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-white">
                                <div class="card-body">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <div class="col-auto">
                                                <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target=".bs-example-modal-lg">Add Add Contact</button>
                                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-warning" id="myLargeModalLabel">Add Contact</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                            <form>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                            <label class="col-form-label required">Name</label>
                                                <span class="input-group-addon">Dr.</span><input class="form-control" type="text" placeholder="Enter Name">
                                        </div>
                                            <div class="col-md-6">
                                            <label class="col-form-label required">Spaciality</label>
                                            <select class="form-control">
												<option value="" class="" selected="selected">---Select Speciality---</option>
												<option label="Acupressurist" value="1">Acupressurist</option>
												<option label="Aesthetic Medicine Specialist" value="2">Aesthetic Medicine Specialist</option>
												<option label="Allergist/Immunologist" value="3">Allergist/Immunologist</option>
												<option label="Alternative Medicine Specialist" value="4">Alternative Medicine Specialist</option>
												<option label="Anesthesiologist" value="5">Anesthesiologist</option>
												<option label="Audiologist" value="6">Audiologist</option>
												<option label="Ayurveda" value="7">Ayurveda</option>
												<option label="Bariatrician" value="8">Bariatrician</option>
												<option label="Cardiologist" value="9">Cardiologist</option>
												<option label="Cosmetic Physician" value="10">Cosmetic Physician</option>
												<option label="Cosmetic/Plastic Surgeon" value="11">Cosmetic/Plastic Surgeon</option>
												<option label="Dentist" value="12">Dentist</option>
												<option label="Dermatologist" value="13">Dermatologist</option>
												<option label="Diabetologist" value="14">Diabetologist</option>
												<option label="Dietitian/Nutritionist" value="15">Dietitian/Nutritionist</option>
												<option label="Ear-Nose-Throat (ENT) Specialist" value="16">Ear-Nose-Throat (ENT) Specialist</option>
												<option label="Endocrinologist" value="17">Endocrinologist</option>
												<option label="Epidemiologist" value="18">Epidemiologist</option>
												<option label="Gastroenterologist" value="19">Gastroenterologist</option>
												<option label="General Physician" value="20">General Physician</option>
												<option label="General Surgeon" value="21">General Surgeon</option>
												<option label="Geneticist" value="1001">Geneticist</option>
												<option label="Geriatrician" value="1002">Geriatrician</option>
												<option label="Gynaecologist" value="1003">Gynaecologist</option>
												<option label="Hematologist" value="1004">Hematologist</option>
												<option label="Hepatologist" value="1005">Hepatologist</option>
												<option label="Homeopath" value="1006">Homeopath</option>
												<option label="Integrated Medicine Specialist" value="1008">Integrated Medicine Specialist</option>
												<option label="Internal Medicine Specialist" value="1009">Internal Medicine Specialist</option>
												<option label="IVF Specialist" value="1007">IVF Specialist</option>
												<option label="Microbiologist" value="1010">Microbiologist</option>
												<option label="Mother and Child Care" value="1011">Mother and Child Care</option>
												<option label="Nephrologist" value="1012">Nephrologist</option>
												<option label="Neurologist" value="1013">Neurologist</option>
												<option label="Neurosurgeon" value="1014">Neurosurgeon</option>
												<option label="Non-invasive Cardiologist" value="1016">Non-invasive Cardiologist</option>
												<option label="Non-Invasive Conservative Cardiac Care Specialist" value="1015">Non-Invasive Conservative Cardiac Care Specialist</option>
												<option label="Nuclear Medicine Physician" value="1017">Nuclear Medicine Physician</option>
												<option label="Obstetrician" value="1018">Obstetrician</option>
<option label="Occupational Therapist" value="1019">Occupational Therapist</option>
<option label="Oncologist" value="1020">Oncologist</option
><option label="Ophthalmologist" value="1021">Ophthalmologist</option>
<option label="Optometrist" value="1022">Optometrist</option>
<option label="Oral And Maxillofacial Surgeon" value="1023">Oral And Maxillofacial Surgeon</option>
<option label="Orthopedist" value="1024">Orthopedist</option>
<option label="Other" value="1051">Other</option>
<option label="Pain Management Specialist" value="1026">Pain Management Specialist</option>
<option label="Pathologist" value="1027">Pathologist</option>
<option label="Pediatric Surgeon" value="1028">Pediatric Surgeon</option>
<option label="Pediatrician" value="1029">Pediatrician</option>
<option label="Phlebologist" value="1030">Phlebologist</option>
<option label="Physiotherapist" value="1031">Physiotherapist</option>
<option label="PMR (Physical Medicine &amp;amp; Rehabilitation) Specialist" value="1025">PMR (Physical Medicine &amp;amp; Rehabilitation) Specialist</option>
<option label="Podiatrist" value="1032">Podiatrist</option>
<option label="Proctologist" value="1033">Proctologist</option>
<option label="Psychiatrist" value="1034">Psychiatrist</option>
<option label="Psychologist" value="1035">Psychologist</option>
<option label="Pulmonologist" value="1036">Pulmonologist</option>
<option label="Radiologist" value="1037">Radiologist</option>
<option label="Rheumatologist" value="1038">Rheumatologist</option>
<option label="Robotic Surgeon" value="1039">Robotic Surgeon</option>
<option label="Sexologist" value="1040">Sexologist</option>
<option label="Siddha Specialist" value="1041">Siddha Specialist</option>
<option label="Somnologist" value="1042">Somnologist</option>
<option label="Speech Therapist" value="1043">Speech Therapist</option>
<option label="Toxicologist" value="1044">Toxicologist</option>
<option label="Trichologist" value="1045">Trichologist</option>
<option label="Unani Specialist" value="1046">Unani Specialist</option>
<option label="Urologist" value="1047">Urologist</option>
<option label="Venereologist" value="1048">Venereologist</option>
<option label="Veterinarian" value="1049">Veterinarian</option>
<option label="Yoga &amp; Naturopathy Specialist" value="1050">Yoga &amp; Naturopathy Specialist</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                            <label class="col-form-label required">Hospital</label>
											<input type="text" class="form-control" placeholder="Hospital">
                                        </div>										
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                            <label class="col-form-label required">Address Line 1</label>
											<input type="text" class="form-control" placeholder="Address Line 1">
                                        </div>						
                                            <div class="col-md-6">
                                            <label class="col-form-label required">Address Line 2</label>
											<input type="text" class="form-control" placeholder="Address Line 2">
                                        </div>										
                                        </div>						
										<div class="form-group row">
                                            <div class="col-md-6">
                                            <label class="col-form-label required">City/Village/Twon</label>
											<input type="text" class="form-control" placeholder="City/Village/Twon">
                                        </div>						
                                            <div class="col-md-6">
                                            <label class="col-form-label required">District</label>
											<input type="text" class="form-control" placeholder="District">
                                        </div>										
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                            <label class="col-form-label required">State</label>
                                            <select class="form-control">
												<option value="" class="" selected="selected">---Select State---</option>
<option label="Andaman and Nicobar Islands" value="001">Andaman and Nicobar Islands</option>
<option label="Andhra Pradesh" value="002">Andhra Pradesh</option>
<option label="Arunachal Pradesh" value="003">Arunachal Pradesh</option>
<option label="Assam" value="004">Assam</option>
<option label="Bihar" value="005">Bihar</option>
<option label="Chandigarh" value="006">Chandigarh</option>
<option label="Chhattisgarh" value="007">Chhattisgarh</option>
<option label="Dadra and Nagar Haveli" value="008">Dadra and Nagar Haveli</option>
<option label="Daman and Diu" value="009">Daman and Diu</option>
<option label="Goa" value="011">Goa</option>
<option label="Gujarat" value="012">Gujarat</option>
<option label="Haryana" value="013">Haryana</option>
<option label="Himachal Pradesh" value="014">Himachal Pradesh</option>
<option label="Jammu and Kashmir" value="015">Jammu and Kashmir</option>
<option label="Jharkhand" value="016">Jharkhand</option>
<option label="Karnataka" value="017">Karnataka</option>
<option label="Kerala" value="018">Kerala</option>
<option label="Lakshadweep" value="019">Lakshadweep</option>
<option label="Madhya Pradesh" value="020">Madhya Pradesh</option>
<option label="Maharashtra" value="021">Maharashtra</option>
<option label="Manipur" value="022">Manipur</option>
<option label="Meghalaya" value="023">Meghalaya</option>
<option label="Mizoram" value="024">Mizoram</option>
<option label="Nagaland" value="025">Nagaland</option>
<option label="National Capital Territory of Delhi" value="010">National Capital Territory of Delhi</option>
<option label="Odisha(Orissa)" value="026">Odisha(Orissa)</option>
<option label="Puducherry" value="027">Puducherry</option>
<option label="Punjab" value="028">Punjab</option>
<option label="Rajasthan" value="029">Rajasthan</option>
<option label="Sikkim" value="030">Sikkim</option>
<option label="Tamil Nadu" value="031">Tamil Nadu</option>
<option label="Telangana" value="036">Telangana</option>
<option label="Tripura" value="032">Tripura</option>
<option label="Uttar Pradesh" value="033">Uttar Pradesh</option>
<option label="Uttarakhand" value="034">Uttarakhand</option>
<option label="West Bengal" value="035">West Bengal</option>
											</select>
                                        </div>						
                                            <div class="col-md-6">
                                            <label class="col-form-label required">Pincode</label>
											<input type="number" class="form-control" placeholder="Pincode">
                                        </div>										
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                            <label class="col-form-label required">Mobile</label>
											<span class="input-group-addon">+91</span><input type="number" class="form-control" placeholder="District">
                                        </div>						
                                            <div class="col-md-6">
                                            <label class="col-form-label required">Email</label>
											<input type="email" class="form-control" placeholder="District">
                                        </div>										
                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-success" data-dismiss="modal">Add</button>
                                                </div>
                                            </div>
											
                                    </form>
                                        </div>
                                    </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Spaciality</th>
                                                    <th>Mobile</th>
                                                    <th>Email</th>
                                                    <th>View</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="8">No Data</td>
                                                </tr>
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
				<?php include('inc/footer.inc.php'); ?>
			</div>
            <!-- start page right sidebar -->
			<!-- start main right sidebar -->
			<?php include('inc/right-sidebar.inc.php'); ?>
            <!-- end main right sidebar -->
            <!-- end page right sidebar -->
            
        </div>
        <!-- end page content -->
    </div>
    <!-- end page container -->

    <!-- all js include start -->

<?php include('inc/js.inc.php'); ?>

</body>

</html>