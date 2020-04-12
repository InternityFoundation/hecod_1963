<form id="emForm">
                                        <div class="form-group row">
											<input class="form-control" type="hidden" name="users_id" value="<?php echo $data->id; ?>">
                                            <div class="col-md-6">
                                            <label class="col-form-label required">Name</label>
                                                <input class="form-control" name="emName" type="text" placeholder="Name" value="<?php echo $joindata->emName; ?>" disabled>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label required">Relationship</label>
                                                <input class="form-control" type="text" name="emRelation" placeholder="Relationship" value="<?php echo $joindata->emRelation; ?>" disabled>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                            <label class="col-form-label required">Primary Phone</label>
                                                <input class="form-control" type="text" name="emMobile" placeholder="Primary Phone" value="<?php echo $joindata->emMobile; ?>" disabled>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label">Secondary Phone</label>
                                                <input class="form-control" type="text" name="emsecMobile" placeholder="Secondary Phone" value="<?php echo $joindata->emsecMobile; ?>" disabled>
                                        </div>
                                        </div> 
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                            <label class="col-form-label required">Address Line 1</label>
                                                <input class="form-control" type="text" name="emaddLine1" placeholder="Address Line 1" value="<?php echo $joindata->emaddLine1; ?>" disabled>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label">Address Line 2</label>
                                                <input class="form-control" type="text" name="emaddLine2" placeholder="Address Line 2" value="<?php echo $joindata->emaddLine2; ?>" disabled>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                            <label class="col-form-label required">Town/City</label>
                                                <input class="form-control" type="text" name="emcity" placeholder="Town/City" value="<?php echo $joindata->emcity; ?>" disabled>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="col-form-label required">Distric</label>
                                                <input class="form-control" type="text" name="emdistric" placeholder="Distric" value="<?php echo $joindata->emdistric; ?>" disabled>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="col-form-label required">State</label>
                                                <input class="form-control" type="text" name="emstate" placeholder="State" value="<?php echo $joindata->emstate; ?>" disabled>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="col-form-label required">Pincode</label>
                                                <input class="form-control" type="text" name="empincode" placeholder="Pincode" value="<?php echo $joindata->empincode; ?>" disabled>
                                        </div>
                                        </div>
                                    </form>