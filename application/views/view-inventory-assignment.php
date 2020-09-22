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
                            <div class="col-md-12">
                                
								
								<div class="modal-body">
                                                        
														
														<div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">View Assigned Inventory User Data</h3></div>
                                    <div class="panel-body">
                                        <div class=" form">
									
								<table class="table table-bordered">
								  <thead>
									<tr>
									  <th scope="col">User SL No.</th>
									  <th scope="col">User Name</th>
									  <th scope="col">Department</th>
									  <th scope="col">Designation</th>
									  <th scope="col">Location</th>
									  <th scope="col">IP Address</th>
									  <th scope="col">User Status</th>
									</tr>
								  </thead>
								  <tbody>
								  <?php 
					
					
						foreach($assignedUserData as $userData)
					{
						
						?>
								  
									
									<tr>
									  <td><?php echo $userData->user_serial;?></td>
									  <td><?php echo $userData->user_name;?></td>
									  <td><?php echo $userData->user_department;?></td>
									  <td><?php echo $userData->user_designation;?></td>
									  <td><?php echo $userData->user_location;?></td>
									  <td><?php echo $userData->user_ip;?></td>
									 
									  <?php 
															
															if($userData->user_status=="1")
															{
																?>
																<td>
															<p class="btn btn-info">Active</p>
															</td>
																<?php 
															}
															else 
															{
																?>
																<td>
															<p class="btn btn-danger">Inactive</p>
															</td>
																<?php 
															}
															?>
									  
									</tr>
									
									<?php 
									}
									
									?>
									
								  </tbody>
								</table>
								<center>
								<a href="<?php echo base_url('inventory')?>" class="btn btn-danger">Back</a>
								</center>
											
											</div> <!-- .form -->
                                    </div> <!-- panel-body -->
                                </div>
								
								
                            </div>
                            
                        </div> <!-- End Row -->

                    </div> <!-- container -->
					
					
					
					

                         <!-- End Row -->


                    </div> <!-- container -->
                               
                </div> <!-- content -->