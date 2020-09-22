<!-- Start content -->
                <div class="content">
                    <div class="container">
					
					<?php if($this->session->flashdata('success')): ?>
					  <div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<?php echo $this->session->flashdata('success'); ?>
					  </div>
					<?php elseif($this->session->flashdata('error')): ?>
					  <div class="alert alert-error alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<?php echo $this->session->flashdata('error'); ?>
					  </div>
					<?php endif; ?>
					
					

                        
                        <div class="row">
                            <div class="col-md-12">
                                
								
								<div class="modal-body">
                                                        
														
														<div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Update Brand</h3></div>
                                    <div class="panel-body">
                                        <div class=" form">
								<?php 
								foreach($brandById as $brand)
								{
								?>		
								<form class="cmxform form-horizontal tasi-form" id="vendor_form" action="<?php echo base_url('brand/update/').$brand->id;?>"method="POST" >
											
											
                                                <div class="form-group ">
                                                    <label for="cname" class="control-label col-lg-2">Brand Name</label>
                                                    <div class="col-lg-10">
                                                        <input class=" form-control" id="vendor_name" name="brand_name" type="text" value="<?php echo $brand->brand_name;?>"required="" aria-required="true">
                                                    </div>
                                                </div>
												<div class="form-group">
													<label for="active" class="control-label col-lg-2">Status</label>
													<div class="col-lg-10">
													
														<select class="form-control" id="status" name="status">
														<?php 
														if($brand->status=="1")
														{
															?>
															<option value="1" selected >Active</option>
															<option value="0" >Inactive</option>
															<?php 
														}
														else 
														{
														?>
														
														<option value="0" selected >Inactive</option>
														<option value="1" >Active</option>
														<?php 														
														}
														
														?>
														 
														  
														</select>
													</div>
												</div>
												
                                                <?php 											
											}
											?>   
												
												<br /><br /><br />
												
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
													<input type="hidden" name="vendor_id" id="vendor_id" /> 
                                                        <button class="btn btn-success waves-effect waves-light" type="submit" name="action" id="action">Update</button>
                                                        <a href="<?php echo base_url('brand');?>" class="btn btn-default waves-effect" type="button" data-dismiss="modal">Cancel</a>
                                                    </div>
                                                </div>
												</div>
                                            </form>
											
											</div> <!-- .form -->
                                    </div> <!-- panel-body -->
                                </div>
								
								
                            </div>
                            
                        </div> <!-- End Row -->


                    </div> <!-- container -->
                               
                </div> <!-- content -->