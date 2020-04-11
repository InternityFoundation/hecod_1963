<div class="page-sidebar-menu">
                    <ul class="accordion-menu">
                        <li class="card card-purple">
                            <div class="card-body user-profile-card">
                                    <img src="<?php base_url(); ?>/img/user.png" class="user-profile-image rounded-circle" alt="" />									
                              
									<div class="image-upload">
  <label for="file-input">
  <i class="fas fa-camera"></i>
  </label>

  <input id="file-input" type="file" />
</div>
                                    <a href=""><span><h4 class="text-center text-light m-t-lg"><?php echo $data->name; ?></h4></span></a>
                                </div>
                        </li>
                        <li> 
                            <a href="#/">
                                <i class="fas fa-tachometer-alt menu-icon"></i><span> Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#/profile/">
                                <i class="fas fa-user menu-icon"></i><span> Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="prescription">
                                <i class="fas fa-notes-medical menu-icon"></i><span> Prescription</span>
                            </a>
                        </li>
                        <li>
                            <a href="physiotherapy">
                                <i class="fab fa-accessible-icon menu-icon"></i><span> Physiotherapy</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="fas fa-heart menu-icon"></i><span> Vitals</span><i class="accordion-icon fa fa-angle-left"></i>
                            </a>
                            <ul>
                                <li><a href="bp">Blood Pressure</a></li>
                                <li><a href="bt">Body Temperature</a></li>
                                <li><a href="hr">Heart Rate</a></li>
                                <li><a href="rr">Respiratory Rate</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="fas fa-share-alt menu-icon"></i><span> Share</span><i class="accordion-icon fa fa-angle-left"></i>
                            </a>
                            <ul>
                                <li><a href="share-report">Share Report</a></li>
                                <li><a href="share-history">Share History</a></li>
                            </ul>
                        </li>
						<li>
                            <a href="javascript:void(0);">
                                <i class="fas fa-file-pdf menu-icon"></i><span> Report</span><i class="accordion-icon fa fa-angle-left"></i>
                            </a>
                            <ul>
                                <li><a href="by-module">By Module</a></li>
                                <li><a href="by-date">By Date</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="timeline">
                                <i class="fas fa-stream menu-icon"></i><span> Timeline</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="fas fa-list menu-icon"></i><span>Advance Features</span><i class="accordion-icon fa fa-angle-left"></i>
                            </a>
                            <ul>
                                <li><a href="allergies">Allergies</a></li>
                                <li><a href="problems">Problems</a></li>
                                <li><a href="immunizations">Immunizations</a></li>
                                <li><a href="medications">Medications</a></li>
                                <li><a href="procedures">Procedures</a></li>
                                <li><a href="lt">Lab Tests</a></li>
                                <li><a href="activities">Activities</a></li>
                                <li><a href="bmi">BMI</a></li>
                                <li><a href="spo2">SpO2</a></li>
                                <li><a href="bg">Blood Glucose</a></li>
                            </ul>
                        </li>
						<li class="menu-divider"></li>
                        <li>
                            <a href="support">
                                <i class="fas fa-question menu-icon"></i><span> Support</span>
                            </a>
                        </li>
						<li>
                            <a href="logout">
                                <i class="fas fa-sign-out-alt menu-icon"></i><span> Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>