<form id="piForm">
	<div class="form-group row">
	<input class="form-control" type="hidden" name="users_id" value="<?php echo $data->id; ?>">
        <div class="col-md-12">
            <label class="col-form-label required">full Name</label>
            <input class="form-control" type="text" name="firstName" placeholder="Full Name" value="" disabled>
        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                            <label class="col-form-label required">Date Of Birth</label>
                                                <input type="text" class="form-control date-picker" name="dob" placeholder="DD/MM/YYYY" value="" disabled>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label required">Gender</label>
												<select required="" name="gender" class="form-control">
                                               <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                            <label class="col-form-label required">Blood Group</label>
												<select name="bloodGroup" class="form-control">
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
                                                <input class="form-control" type="number" name="mobile" placeholder="Mobile" value="" disabled>
                                        </div>                                        
                                        <div class="col-md-3">
                                            <label class="col-form-label">Secondary Mobile</label>
                                                <input class="form-control" type="number" name="secMobile" placeholder="Secondary Mobile" value="" disabled>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                            <label class="col-form-label required">Address Line 1</label>
                                                <input class="form-control" type="text" name="addLine1" placeholder="Address Line 1" value="" disabled>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label required">Address Line 2</label>
                                                <input class="form-control" type="text" name="addLine2" placeholder="Address Line 2" value="" disabled>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                            <label class="col-form-label required">Town/City</label>
                                                <input class="form-control" type="text" name="city" placeholder="Town/City" value="" disabled>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="col-form-label required">Distric</label>
                                                <input class="form-control" type="text" name="distric" placeholder="Distric" value="" disabled>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="col-form-label required">State</label>
                                                <input class="form-control" type="text" name="state" placeholder="State" value="" disabled>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="col-form-label required">Pincode</label>
                                                <input class="form-control" type="number" name="pincode" placeholder="Pincode" value="" disabled>
                                        </div>
                                        </div>
										</form>