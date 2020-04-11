<form id="empiForm">
                                        <div class="form-group row">
										<input class="form-control" type="hidden" name="users_id" value="<?php echo $data->id; ?>">
                                            <div class="col-md-6">
                                            <label class="col-form-label required">Employer</label>
                                                <input class="form-control" type="text" name="empEmployer" placeholder="Employer" value="<?php echo $joindata->empEmployer; ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label required">Designation</label>
                                                <input class="form-control" type="text" name="empDesignation" placeholder="Designation" value="<?php echo $joindata->empDesignation; ?>">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                            <label class="col-form-label required">Mobile</label>
                                                <input class="form-control" type="number" name="empMobile" placeholder="Mobile" value="<?php echo $joindata->empMobile; ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label required">CUG</label>
                                                <input class="form-control" type="text" name="empCUG" placeholder="CUG" value="<?php echo $joindata->empCUG; ?>">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                            <label class="col-form-label required">Address Line 1</label>
                                                <input class="form-control" type="text" name="empaddLine1" placeholder="Address Line 1" value="<?php echo $joindata->empaddLine1; ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label">Address Line 2</label>
                                                <input class="form-control" type="text" name="empaddLine2" placeholder="Address Line 2" value="<?php echo $joindata->empaddLine2; ?>">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                            <label class="col-form-label required">Town/City</label>
                                                <input class="form-control" type="text" name="empcity" placeholder="Town/City" value="<?php echo $joindata->empcity; ?>">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="col-form-label required">Distric</label>
                                                <input class="form-control" type="text" name="empdistric" placeholder="Distric" value="<?php echo $joindata->empdistric; ?>">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="col-form-label required">State</label>
                                                <input class="form-control" type="text" name="empstate" placeholder="State" value="<?php echo $joindata->empstate; ?>">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="col-form-label required">Pincode</label>
                                                <input class="form-control" type="number" name="emppincode" placeholder="Pincode" value="<?php echo $joindata->emppincode; ?>">
                                        </div>
                                        </div>
										<div class="form-group row">
                                            <div class="col-md-3 offset-md-9">
											<button type="submit" name="empi" class="btn btn-danger large">Save</button>
                                        </div>
                                        </div>
                                    </form>