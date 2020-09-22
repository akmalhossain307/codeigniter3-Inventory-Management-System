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
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
                                                        
                                                    </div>
                                                    <div class="modal-body">
                                                        
														
														
														
														
														
														<div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Add New Inventory Item</h3></div>
                                    <div class="panel-body">
                                        <div class=" form">
                                            <form class="cmxform form-horizontal tasi-form" method="POST" action="<?php echo base_url('inventory/create');?>" enctype="multipart/form-data">
											
											<div class="col-lg-6">
                                                <div class="form-group ">
                                                    <label for="cname" class=" col-lg-4">Vendor Name</label>
													 <select class="form-control" name="vendor_name">
													 
													 <?php
													foreach($vendors as $vendor)
													{
														
													?>
														<option value="<?php echo $vendor->vendor_name;?>"> <?php echo $vendor->vendor_name;?></option>
														
													<?php 
													}
													?>	
													</select>
                                                </div>
												<div class="form-group ">
													<label for="cname" class=" col-lg-4">Brand Name</label>
                                                    <select class="form-control" name="brand_name">
                                                        <?php
													foreach($brands as $brand)
													{
														
													?>
														<option value="<?php echo $brand->brand_name;?>"> <?php echo $brand->brand_name;?></option>
														
													<?php 
													}
													?>
                                                        
                                                    </select>
                                                       
                                                   
                                                </div>
												<div class="form-group ">
													<label for="cname" class=" col-lg-4">Category Name</label>
                                                    
                                                    <select class="form-control" name="category_name">
                                                    <?php
													foreach($categories as $category)
													{
														
													?>
														<option value="<?php echo $category->category_name;?>"> <?php echo $category->category_name;?></option>
														
													<?php 
													}
													?>
                                                        
                                                    </select>
                                                   
                                                </div>
												<div class="form-group ">
                                                    <label for="cname" class=" col-lg-4">Item Name</label>
                                                    
                                                        <input class=" form-control" id="cname" name="item_name" type="text" required="" aria-required="true">
                                                </div>
												
											</div>
											
											
											<div class="col-lg-1"> </div>
											
											
											<div class="col-lg-5">
                                                
												
												<div class="form-group ">
													<label for="cname" class=" col-lg-4"> Adding Date</label>
                                                   <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" name="adding_date">
													
                                                   
                                                </div>
												
												
												
												
												
												<div class="form-group ">
													<label for="cname" class=" col-lg-4">Item Quantity</label>
                                                     <input class=" form-control" id="cname" name="quantity" type="number" required="" aria-required="true">
													
                                                   
                                                </div>
												<div class="form-group ">
													<label for="cname" class=" col-lg-4">Item SL No</label>
                                                     <input class=" form-control" id="cname" name="item_serial" type="text" required="" aria-required="true">
													
                                                   
                                                </div>
												<div class="form-group ">
													<label for="cname" class=" col-lg-4">Item Condition</label>
													<select name="item_condition" class=" form-control"id="">
													<option value="">Select</option>
													<option value="good">Good</option>
													<option value="average">Average</option>
													<option value="poor">Poor</option>
													
													</select>
                                                     
													
                                                   
                                                </div>
											</div>
											
										<div class="col-lg-12">
										<div class="form-group ">
										<label for="cname" class="col-lg-4">Item Specifications</label>
												
													
                                                     
													<div class="panel-body"> 
													<textarea name="description" class="summernote" id="" cols="30" rows="10"> </textarea>
													
														
													</div>
                                                   
                                              </div>
										</div>
											
									
											
												
												</div>
                                                   
												
												
												
                                                <div class="form-group">
												<div class="col-lg-5"> </div>
                                                    <div class=" col-lg-6">
                                                        <button class="btn btn-success waves-effect waves-light" type="submit">Save</button>
                                                        <button class="btn btn-default waves-effect" type="button" data-dismiss="modal">Cancel</button>
                                                    </div>
													
                                                </div>
                                            </form>
                                        </div> <!-- .form -->
                                    </div> <!-- panel-body -->
                                </div>
														
														
														
														
														
														
														
														
														
														
														
														
														
                                                    
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
							
							
							
							<button class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#custom-width-modal"> +Add New Inventory</button>
							
                                
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
                                        <h3 class="panel-title">INVENTORY LIST</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row"> 
										
                                            <div class="col-md-12 col-sm-12 col-xs-12" >
                                                <table id="datatable" class="table table-striped table-bordered" border="1">
                                                    <thead>
                                                        <tr>
                                                            <th>SL No:</th>
                                                            <th>Item SL No:</th>
                                                            <th>Inventory Name</th>
                                                            <th>Quantity</th>
                                                            <th>Item Status</th>
                                                            <th>Assinment Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>
													
													<?php 
													$serial=0;
													foreach($inventories as $inventory)
													{
														$serial++;
														?>
														
                                                        <tr>
                                                            <td># <?php echo $serial;?></td>
                                                            <td> <?php echo $inventory->item_serial;?></td>
                                                            <td><?php echo $inventory->item_name;?></td>
                                                            <td><?php echo $inventory->quantity;?></td>
															<td><?php echo $inventory->item_condition;?></td>
                                                              
                                                            
															<?php 
															if($inventory->assignment_status=="1")
															{
																?>
																<td style="color:green">   
																&nbsp;&nbsp;<a href="<?php echo base_url('inventory/show_assignment/').$inventory->user_serial;?>" class="btn btn-success"data-toggle="tooltip" data-placement="right" title="View Assignment">Assigned </a>
																</td>
																<?php 
															}
															else 
															{
																?>
																<td style="color:red">
																<a href="<?php echo base_url('inventory/assign_inventory/').$inventory->id;?>" class="btn btn-danger"data-toggle="tooltip" data-placement="right"title=" Assign Now">Not Assigned </a>
																</td>
																<?php 
															}
															
															?>
                                                            
                                                            <td> 
															<a href="<?php echo base_url('inventory/view/').$inventory->id;?>" title="View" class="on-default edit-row"><i class="fa fa-eye"></i></a> 
															
															&nbsp;&nbsp;||&nbsp;&nbsp;
															<a href="<?php echo base_url('inventory/edit/').$inventory->id;?>" class="on-default edit-row" title="Edit"><i class="fa fa-pencil"style="color:#29B6F6"></i></a> 
															&nbsp;&nbsp;|| &nbsp;&nbsp; 
															<a href="<?php echo base_url('inventory/remove/').$inventory->id;?>" title="Remove"class="on-default remove-row" onclick="return confirm('Are you sure to delete this Category?');" ><i class="fa fa-trash-o" style="color:red"></i></a></td>
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