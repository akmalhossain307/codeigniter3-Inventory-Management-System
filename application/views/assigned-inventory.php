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
                                                        
														
														
														
														<div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">View Assigned Inventory Data</h3></div>
                                    <div class="panel-body">
                                        <div class=" form">
									
								<table class="table table-bordered">
								  <thead>
									<tr>
									  <th scope="col">Item SL No.</th>
									  <th scope="col">Item Name</th>
									  <th scope="col">Quantity</th>
									  <th scope="col">Description</th>
									</tr>
								  </thead>
								  <tbody>
									<?php 
									if(empty($assignedInventory))
									{
										echo"<center><h2 style='color:red'>No inventory assigned to this user...</h2></center><br/><br/>";
									}
									else 
									{
									foreach($assignedInventory as $inventory)
									{
										
									?>
									<tr>
									  <td><?php echo $inventory->item_serial;?></td>
									  <td><?php echo $inventory->item_name;?></td>
									  <td><?php echo $inventory->quantity;?></td>
									  <td><?php echo $inventory->description;?></td>
									</tr>
									
									<?php 
									}
									}
									?>
									
								  </tbody>
								</table>
								<center>
								<a href="<?php echo base_url('inventory/inventory_user')?>" class="btn btn-danger">Back</a>
								</center>
											
											</div> <!-- .form -->
                                    </div> <!-- panel-body -->
                                </div>
														
														
														
														
														
														
														
														
                                </div>
														
														
														
														
														
                 
                        </div>
                        </div>
						

                         <!-- End Row -->


                    </div> <!-- container -->
                               
                </div> <!-- content -->