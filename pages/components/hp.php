<form id="hpForm">
                                        <div class="form-group row">
											<input class="form-control" type="hidden" name="users_id" value="<?php echo $data->id; ?>">
                                            <div class="col-md-6">
                                            <label class="col-form-label required">Preferred Hospital Name</label>
                                                <input class="form-control" type="text" name="hospitalName" placeholder="Preferred Hospital Name" value="<?php echo $joindata->hospitalName; ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label required">Preferred Hospital Address</label>
                                                <input class="form-control" type="text" name="hospitalAdd" placeholder="Preferred Hospital Address" value="<?php echo $joindata->hospitalAdd; ?>">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                            <label class="col-form-label required">Spaicial Requierements</label>
                                             <textarea class="form-control" name="spaicialRequire" placeholder="Spaicial Requierements"><?php echo $joindata->spaicialRequire; ?></textarea>
                                        </div>
                                        </div>
										<div class="form-group row">
                                            <div class="col-md-3 offset-md-9">
											<button type="submit" name="hp" class="btn btn-danger large">Save</button>
                                        </div>
                                        </div>
                                    </form>