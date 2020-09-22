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
                                    <div class="panel-heading"><h3 class="panel-title">Update Stock</h3></div>
                                    <div class="panel-body">
                                        <div class=" form">
								<?php 
								foreach($stockById as $stock)
								{
								?>		
								<form class="cmxform form-horizontal tasi-form" id="vendor_form" action="<?php echo base_url('stock/update/').$stock->id;?>"method="POST" >
											
											
                                                <div class="form-group ">
                                                    <label for="cname" class="control-label col-lg-2">Item Name</label>
                                                    <div class="col-lg-10">
                                                        <input class=" form-control" id="cname" name="item_name" value="<?php echo $stock->item_name;?>"type="text" required="" aria-required="true">
                                                    </div>
                                                </div>
												<div class="form-group">
													<label for="active" class="control-label col-lg-2">Category</label>
													<div class="col-lg-10">
													
														<select class="form-control" id="active" name="category_name">
														
														<?php
														
														foreach($categories as $category)
														{
															if($stock->category_name==$category->category_name)
															{
																?>
																<option value="<?php echo $category->	category_name;?>" selected>
																	<?php echo $category->category_name;?>
																</option>
																<?php 
															}
															else 
															{
																?>
																<option value="<?php echo $category->category_name;?>">
														  <?php echo $category->category_name;?>
														  </option>
																<?php 
															}
															?>
															
														  
														  
														  
														  <?php 
														}
													
														?>
														  
														</select>
													</div>
												</div>
												
												<div class="form-group">
													<label for="cname" class="control-label col-lg-2">Item Quantity</label>
													<div class="col-lg-10">
													 <input class=" form-control" id="cname" name="quantity" type="number" value="<?php echo $stock->quantity;?>"required="" aria-required="true">
													</div>
												</div>
												

												<div class="form-group">
													<label for="active" class="control-label col-lg-2">Adding Date</label>
													<div class="col-lg-10">
													
														<input type="text" value="<?php echo $stock->adding_date;?>"name="adding_date"class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
													</div>
												</div>
												<div class="form-group">
													<label for="active" class="control-label col-lg-2">Status</label>
													<div class="col-lg-10">
													
														<select class="form-control" id="active" name="status">
														<?php 
														if($stock->status=="1")
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
                                                        <a href="<?php echo base_url('stock');?>" class="btn btn-default waves-effect" type="button" data-dismiss="modal">Cancel</a>
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