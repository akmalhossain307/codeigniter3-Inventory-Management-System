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
                                                        
														
										<?php 
										foreach($inventoryDataById as $inventory)
										{
										?>				
														
														
														
														<div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Update Inventory Item</h3></div>
                                    <div class="panel-body">
                                        <div class=" form">
                                            <form class="cmxform form-horizontal tasi-form" method="POST" action="<?php echo base_url('inventory/update/').$inventory->id;?>" enctype="multipart/form-data">
											
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
                                                    
                                                        <input class=" form-control" id="cname" name="item_name" type="text" required="" aria-required="true" value="<?php echo $inventory->item_name;?>">
                                                </div>
												<div class="form-group ">
													<label for="cname" class=" col-lg-4">Bill/Voucher (pdf file)</label>
                                                    
                                                        <input class=" form-control" id="cname" name="bill_image" type="file" >
                                                   
                                                </div>
											</div>
											
											
											<div class="col-lg-1"> </div>
											
											
											<div class="col-lg-5">
                                                
												
												<div class="form-group ">
													<label for="cname" class=" col-lg-4"> Adding Date</label>
                                                   <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" name="adding_date" value="<?php echo $inventory->adding_date;?>">
													
                                                   
                                                </div>
												
												<div class="form-group ">
													<label for="cname" class=" col-lg-4"> Purchase Date</label>
                                                   <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker1" value="<?php echo $inventory->purchase_date;?>"name="purchase_date">
													
                                                   
                                                </div>
												<div class="form-group ">
													<label for="cname" class=" col-lg-4"> W.Expiry Date</label>
                                                   <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker2" value="<?php echo $inventory->warranty_ex_date;?>" name="warranty_ex_date">
													
                                                   
                                                </div>
												
												
												<div class="form-group ">
													<label for="cname" class=" col-lg-4">Item Quantity</label>
                                                     <input class=" form-control" id="cname" name="quantity" value="<?php echo $inventory->quantity;?>" type="number" required="" aria-required="true">
													
                                                   
                                                </div>
												<div class="form-group ">
													<label for="cname" class=" col-lg-4">Item SL No</label>
                                                     <input class=" form-control" id="cname" name="item_serial" value="<?php echo $inventory->item_serial;?>"type="text" required="" aria-required="true">
													
                                                   
                                                </div>
												
												<div class="form-group ">
													<label for="cname" class=" col-lg-4">User SL No</label>
                                                     <input class=" form-control" id="cname" name="user_serial" value="<?php echo $inventory->user_serial;?>"type="text"  aria-required="true">
													
                                                   
                                                </div>
											</div>
											
										<div class="col-lg-12">
										<div class="form-group ">
										<label for="cname" class="col-lg-4">Item Specifications</label>
												
													
                                                     
													<div class="panel-body"> 
													<textarea name="description" class="summernote" id="" cols="30" rows="10"><?php echo $inventory->description;?> </textarea>
													
														
													</div>
                                                   
                                              </div>
										</div>
											
									
											
												
												</div>
                                                   
												
												
												
                                                <div class="form-group">
												<div class="col-lg-5"> </div>
                                                    <div class=" col-lg-6">
                                                        <button class="btn btn-success waves-effect waves-light" type="submit">Update</button>
														<a href="<?php echo base_url('inventory');?>"class="btn btn-default waves-effect" >Back</a>
														
                                                        
                                                    </div>
													
                                                </div>
                                            </form>
                                        </div> <!-- .form -->
                                    </div> <!-- panel-body -->
									
										<?php } ?>
                                </div>
								
								
                            </div>
                            
                        </div> <!-- End Row -->


                    </div> <!-- container -->
                               
                </div> <!-- content -->