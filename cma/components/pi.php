<form id="piForm">
	<div class="form-group row">
	<input class="form-control" type="hidden" name="users_id" value="<?php echo $data->id; ?>">
        <div class="col-md-4">
            <label class="col-form-label required">First Name</label>
            <input class="form-control" type="text" name="firstName" placeholder="First Name" value="<?php echo $joindata->firstName; ?>" disabled>
        </div>
		<div class="col-md-4">
            <label class="col-form-label">Middle Name</label>
            <input class="form-control" type="text" name="middleName" placeholder="Middle Name" value="<?php echo $joindata->middleName; ?>" disabled>
                                        </div> 
                                        <div class="col-md-4">
                                            <label class="col-form-label required">Last Name</label>
                                                <input class="form-control" type="text" name="lastName" placeholder="Last Name" value="<?php echo $joindata->lastName; ?>" disabled>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                            <label class="col-form-label required">Date Of Birth</label>
                                                <input type="text" class="form-control date-picker" name="dob" placeholder="DD/MM/YYYY" value="<?php echo $joindata->dob; ?>" disabled>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label required">Gender</label>
												<select required="" name="gender" class="form-control">
                                                <option value="<?php if(!empty($joindata->gender)){ echo $joindata->gender; }; ?>" selected="selected"><?php if(!empty($joindata->gender)){ echo $joindata->gender; } else  { echo "Choose Gender"; } ?></option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        </div> 
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                            <label class="col-form-label required">Adhaar</label>
                                                <input class="form-control" type="text" name="adhaar" placeholder="Adhaar" value="<?php echo $joindata->adhaar; ?>" disabled>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label required">Email</label>
                                                <input class="form-control" type="text" name="email" placeholder="Email" value="<?php echo $joindata->email; ?>" disabled>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                            <label class="col-form-label required">Blood Group</label>
												<select name="bloodGroup" class="form-control">
                                                <option value="<?php if(!empty($joindata->bloodGroup)){ echo $joindata->bloodGroup; }; ?>" selected="selected"><?php if(!empty($joindata->bloodGroup)){ echo $joindata->bloodGroup; } else  { echo "Choose Blood Group"; } ?></option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option> 
                                            </select>
                                        </div> 
                                        <div class="col-md-3">
                                            <label class="col-form-label required">Mobile</label>
                                                <input class="form-control" type="number" name="mobile" placeholder="Mobile" value="<?php echo $joindata->mobile; ?>" disabled>
                                        </div>                                        
                                        <div class="col-md-3">
                                            <label class="col-form-label">Secondary Mobile</label>
                                                <input class="form-control" type="number" name="secMobile" placeholder="Secondary Mobile" value="<?php echo $joindata->secMobile; ?>" disabled>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                            <label class="col-form-label required">Address Line 1</label>
                                                <input class="form-control" type="text" name="addLine1" placeholder="Address Line 1" value="<?php echo $joindata->addLine1; ?>" disabled>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label required">Address Line 2</label>
                                                <input class="form-control" type="text" name="addLine2" placeholder="Address Line 2" value="<?php echo $joindata->addLine2; ?>" disabled>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                            <label class="col-form-label required">Town/City</label>
                                                <input class="form-control" type="text" name="city" placeholder="Town/City" value="<?php echo $joindata->city; ?>" disabled>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="col-form-label required">Distric</label>
                                                <input class="form-control" type="text" name="distric" placeholder="Distric" value="<?php echo $joindata->distric; ?>" disabled>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="col-form-label required">State</label>
                                                <input class="form-control" type="text" name="state" placeholder="State" value="<?php echo $joindata->state; ?>" disabled>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="col-form-label required">Pincode</label>
                                                <input class="form-control" type="number" name="pincode" placeholder="Pincode" value="<?php echo $joindata->pincode; ?>" disabled>
                                        </div>
                                        </div>
										</form>