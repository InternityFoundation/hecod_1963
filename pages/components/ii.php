<form id="iiForm">
                                        <div class="form-group row">
										<input class="form-control" type="hidden" name="users_id" value="<?php echo $data->id; ?>">
                                            <div class="col-md-6">
                                            <label class="col-form-label required">Insurance Provider</label>
                                                <input class="form-control" type="text" name="insuranceProv" placeholder="Insurance Provider" value="<?php echo $joindata->insuranceProv; ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label required">Policy Number</label>
                                                <input class="form-control" type="number" name="policyNo" placeholder="Policy Number" value="<?php echo $joindata->policyNo; ?>">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                            <label class="col-form-label required">Policy Name</label>
                                                <input class="form-control" type="text" name="policyName" placeholder="Policy Name" value="<?php echo $joindata->policyName; ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label required">Valid Till</label>
                                                <input class="form-control" type="text" name="validTill" placeholder="Valid Till" value="<?php echo $joindata->validTill; ?>">
                                        </div>
                                        </div>
										<div class="form-group row">
                                            <div class="col-md-3 offset-md-9">
											<button type="submit" name="ii" class="btn btn-danger large">Save</button>
                                        </div>
                                        </div>
                                    </form>