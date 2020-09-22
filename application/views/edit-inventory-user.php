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
					
					
                        
						<!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
							
							
                                                    <div class="modal-body">
                                                        
														
										<?php 
										foreach($inventoryUserData as $userData)
										{
										
										?>
										
														
														
														
														
														<div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Update Inventory User</h3></div>
                                    <div class="panel-body">
                                        <div class=" form">
                                            <form class="cmxform form-horizontal tasi-form"  method="POST" action="<?php echo base_url('inventory/update_inventory_user/').$userData->id;?>">
											
											<div class="col-lg-6">
                                                <div class="form-group ">
                                                    <label for="cname" class=" col-lg-4">User Serial</label>
                                                    
                                                        <input class=" form-control" id="cname" name="user_serial" type="text" required="" aria-required="true" value="<?php echo $userData->user_serial;?>">
                                                </div>
												
												<div class="form-group ">
                                                    <label for="cname" class=" col-lg-4">User Name</label>
                                                    
                                                        <input class=" form-control" id="cname" name="user_name" type="text" value="<?php echo $userData->user_name;?>" required="" aria-required="true">
                                                </div>
												
												<div class="form-group ">
                                                    <label for="cname" class=" col-lg-4">Department Name</label>
                                                    
                                                        <input class=" form-control" id="cname" name="user_department" type="text" required="" aria-required="true" value="<?php echo $userData->user_department;?>">
                                                </div>
												<div class="form-group ">
                                                    <label for="cname" class=" col-lg-4">Designation</label>
                                                    
                                                        <input class=" form-control" id="cname" name="user_designation" type="text" required="" aria-required="true" value="<?php echo $userData->user_designation;?>">
                                                </div>
												
											</div>
											
											
											<div class="col-lg-1"> </div>
											
											
											<div class="col-lg-5">
                                                
												<div class="form-group ">
                                                    <label for="cname" class=" col-lg-4">Location</label>
                                                    
                                                        <input class=" form-control" id="cname" name="user_location" type="text" required="" aria-required="true" value="<?php echo $userData->user_location;?>">
                                                </div>
												<div class="form-group ">
													<label for="cname" class=" col-lg-4"> IP Address</label>
                                                   <input class=" form-control" id="cname" name="user_ip" type="text" required="" aria-required="true" value="<?php echo $userData->user_ip;?>">
													
                                                   
                                                </div>
												
												
												<div class="form-group ">
													<label for="cname" class=" col-lg-4">Available Inventory</label>
                                                    
                                                    <select class="form-control" name="assigned_inventory">
                                                    <?php
													foreach($notAssignedInventories as $inventory)
													{
														if($userData->assigned_inventory==$inventory->id)
														{
													?>
														<option value="<?php echo $inventory->id;?>" selected > <?php echo $inventory->item_name;?></option>
														
														
														
													<?php 
													}
													else 
													{
														?>
														<option value="<?php echo $inventory->id;?>"> <?php echo $inventory->item_name;?></option>
														
														<?php 
													}
													}
													?>
                                                        
                                                    </select>
													
													
                                                   
                                                </div>
												
												
												
												
												
											</div>
											

												</div>
                                                   
												
												
												
                                                
												<div class="col-lg-12"> 
												<center>
													<button class="btn btn-success waves-effect waves-light" type="submit">Update</button>
													
													<a href="<?php echo base_url('inventory/inventory_user');?>"class="btn btn-default waves-effect" data-dismiss="modal" > Back</a>
                                                        
												</center>
												</div>
												
                                            </form>
                                        </div> <!-- .form -->
                                    </div> <!-- panel-body -->
									
									<?php 										
										}
										
										?>
                                </div>
														
       
							
							
							
							
                            </div>
                        </div> <!-- End Row -->
						
						


                    </div> <!-- container -->
                               
                </div> <!-- content -->