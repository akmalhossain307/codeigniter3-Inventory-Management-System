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
					
					
					
					
					
					
						
						
                        
                    
						

                         <!-- End Row -->
						 
						 <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Assign Inventory to User</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            
                                                            <th>User Serial</th>
                                                            <th>User Name</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>
													
                                                        <tr>
                                                             
													 <?php 
					
													foreach($inventoryUsers as $users)
													{
														?>
													 
															<form method="POST" action="">
															<td><?php echo $users->user_serial;?></td>
                                                            <td><input type="checkbox" class="form-check-input" name="user_serial"value="<?php echo $users->user_serial;?>"><?php echo $users->user_name;?> </td>
															<td> 
															<button class="btn btn-success waves-effect waves-light" type="submit">Assign</button>
															
															</td>
															
															</form>
                                                        </tr>
														
														<?php 
													}
														?>
														
                                                       
                                                    </tbody>
                                                </table>
												
												<a href="<?php echo base_url('inventory')?>" class="btn btn-danger">Back</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> <!-- End Row -->


                    </div> <!-- container -->
                               
                </div> <!-- content -->