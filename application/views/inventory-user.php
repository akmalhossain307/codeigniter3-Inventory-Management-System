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
							
							<div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog" style="width:80%;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        
                                                    </div>
                                                    <div class="modal-body">
                                                        
														
														
														
														
														
														<div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Add New Inventory User</h3></div>
                                    <div class="panel-body">
                                        <div class=" form">
                                            <form class="cmxform form-horizontal tasi-form"  method="POST" action="<?php echo base_url('inventory/add_inventory_user');?>">
											
											<div class="col-lg-6">
                                                <div class="form-group ">
                                                    <label for="cname" class=" col-lg-4">User Serial</label>
                                                    
                                                        <input class=" form-control" id="cname" name="user_serial" type="text" required="" aria-required="true">
                                                </div>
												
												<div class="form-group ">
                                                    <label for="cname" class=" col-lg-4">User Name</label>
                                                    
                                                        <input class=" form-control" id="cname" name="user_name" type="text" required="" aria-required="true">
                                                </div>
												
												<div class="form-group ">
                                                    <label for="cname" class=" col-lg-4">Department Name</label>
                                                    
                                                        <input class=" form-control" id="cname" name="user_department" type="text" required="" aria-required="true">
                                                </div>
												<div class="form-group ">
                                                    <label for="cname" class=" col-lg-4">Designation</label>
                                                    
                                                        <input class=" form-control" id="cname" name="user_designation" type="text" required="" aria-required="true">
                                                </div>
												
											</div>
											
											
											<div class="col-lg-1"> </div>
											
											
											<div class="col-lg-5">
                                                
												<div class="form-group ">
                                                    <label for="cname" class=" col-lg-4">Location</label>
                                                    
                                                        <input class=" form-control" id="cname" name="user_location" type="text" required="" aria-required="true">
                                                </div>
												<div class="form-group ">
													<label for="cname" class=" col-lg-4"> IP Address</label>
                                                   <input class=" form-control" id="cname" name="user_ip" type="text" required="" aria-required="true">
													
                                                   
                                                </div>
												
												
												<div class="form-group ">
													<label for="cname" class=" col-lg-4">Available Inventory</label>
                                                    
                                                    <select class="form-control" name="assigned_inventory">
													<option value="0">no inventory</option>
                                                    <?php
													foreach($notAssignedInventories as $inventory)
													{
														
													?>
														<option value="<?php echo $inventory->id;?>"> <?php echo $inventory->item_name;?></option>
														
														
														
													<?php 
													}
													?>
                                                        
                                                    </select>
													
													
                                                   
                                                </div>
												
												
												
												
												
											</div>
											

												</div>
                                                   
												
												
												
                                                
												<div class="col-lg-12"> 
												<center>
													<button class="btn btn-success waves-effect waves-light" type="submit">Save</button>
                                                        <button class="btn btn-default waves-effect" type="button" data-dismiss="modal">Cancel</button>
												</center>
												</div>
												
                                            </form>
                                        </div> <!-- .form -->
                                    </div> <!-- panel-body -->
                                </div>
														
														
														
														
														
														
														
														
														
														
														
														
														
                                                    
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
							
							
							
							<button class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#custom-width-modal"> +Add New User</button>
							
                                
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">JAYSON-GROUP</a></li>
                                    <li><a href="#">Tables</a></li>
                                    <li class="active">Datatable</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">INVENTORY USER LIST</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>SL No:</th>
                                                            <th>User Serial</th>
                                                            <th>User Name</th>
                                                            <th>Department</th>
                                                            <th>Designation</th>
                                                            <th>Location</th>
                                                            <th>IP Address</th>
                                                            <th>Assigned Inventory </th>
                                                            <th>User Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>
													
													<?php
													$serial=0;		
													foreach($inventoryUsers as $inventoryUser)
													{
														$serial++;
														?>
														
														
														
                                                        <tr>
                                                            <td># <?php echo $serial;?></td>
                                                            <td><?php echo $inventoryUser->user_serial;?></td>
                                                            <td><?php echo $inventoryUser->user_name;?></td>
                                                            <td><?php echo $inventoryUser->user_department;?></td>
                                                            <td><?php echo $inventoryUser->user_designation;?></td>
                                                            <td><?php echo $inventoryUser->user_location;?></td>
                                                            <td><?php echo $inventoryUser->user_ip;?></td>
                                                            <td><a href="<?php echo base_url('inventory/view_assigned_inventory/').$inventoryUser->user_serial;?>" class="btn btn-primary">View Assignment</a></td>
															<?php 
															if($inventoryUser->user_status=="1")
															{
															?>
															<td> <a title="Deactivate now"href="<?php echo base_url('inventory/deactivate_user/').$inventoryUser->id;?>"class="btn btn-success">Active</a></td>
															<?php 															
															}
															else 
															{
															?>
															<td> <a title="Activate now"href="<?php echo base_url('inventory/activate_user/').$inventoryUser->id;?>"class="btn btn-danger">Inactive</a></td>
															<?php 															
															}
															?>
                                                            
                                                            <td> 
															
															<a href="<?php echo base_url('inventory/fetchInventoryUserById/').$inventoryUser->id;?>" class="on-default edit-row" title="Edit"><i class="fa fa-pencil"style="color:#29B6F6"></i></a> 
															&nbsp;&nbsp;|| &nbsp;&nbsp; 
															<a href="<?php echo base_url('inventory/delete_inventory_user/').$inventoryUser->id;?>" title="Remove"class="on-default remove-row" onclick="return confirm('Are you sure to delete this user?');"><i class="fa fa-trash-o" style="color:red"></i></a></td>
                                                        </tr>
														
														<?php 
														
													}
													?>
														
														
														
														
														
                                                       
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> <!-- End Row -->
						
						


                    </div> <!-- container -->
                               
                </div> <!-- content -->