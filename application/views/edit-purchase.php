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
                                    <div class="panel-heading"><h3 class="panel-title">Update Purchase Data</h3></div>
                                    <div class="panel-body">
                                        <div class=" form">
								<?php 
								foreach($purchaseById as $purchase)
								{
								?>		
								<form class="cmxform form-horizontal tasi-form" id="vendor_form" action="<?php echo base_url('purchase/update/').$purchase->id;?>"method="POST" enctype="multipart/form-data" >
											
											
                                                <div class="form-group ">
                                                    <label for="cname" class="control-label col-lg-2">Item Name</label>
                                                    <div class="col-lg-10">
                                                        <input class=" form-control" id="cname" name="item_name" value="<?php echo $purchase->item_name;?>"type="text" required="" aria-required="true">
                                                    </div>
                                                </div>
												<div class="form-group">
													<label for="active" class="control-label col-lg-2">Vendor Name</label>
													<div class="col-lg-10">
													
														<select class="form-control" id="active" name="vendor_name">
														
														<?php
														
														foreach($vendors as $vendor)
														{
															if($vendor->vendor_name==$purchase->vendor_name)
															{
																?>
																<option value="<?php echo $vendor->	vendor_name;?>" selected>
																	<?php echo $vendor->vendor_name;?>
																</option>
																<?php 
															}
															else 
															{
																?>
																<option value="<?php echo $vendor->vendor_name;?>">
														  <?php echo $vendor->vendor_name;?>
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
													 <input class=" form-control" id="cname" name="quantity" type="number" value="<?php echo $purchase->quantity;?>"required="" aria-required="true">
													</div>
												</div>
												
												<div class="form-group ">
                                                    <label for="cname" class="control-label col-lg-2">Item Price:</label>
                                                    <div class="col-lg-10">
                                                        <input class=" form-control" value="<?php echo $purchase->item_price;?>"id="cname" name="item_price" type="number">
                                                    </div>
                                                </div>
												
												<div class="form-group ">
                                                    <label for="cname" class="control-label col-lg-2">purchaser name:</label>
                                                    <div class="col-lg-10">
                                                        <input class=" form-control" value="<?php echo $purchase->buyer_name;?>"id="cname" name="buyer_name" type="text" >
                                                    </div>
                                                </div>
												

												<div class="form-group">
													<label for="active" class="control-label col-lg-2">Purchase Date</label>
													<div class="col-lg-10">
													
														<input type="text" value="<?php echo $purchase->purchase_date;?>"name="purchase_date"class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
													</div>
												</div>
												<div class="form-group">
													<label for="active" class="control-label col-lg-2">Warranty Ex. Date</label>
													<div class="col-lg-10">
													
														<input type="text" value="<?php echo $purchase->warranty_ex_date;?>"name="warranty_ex_date"class="form-control" placeholder="mm/dd/yyyy" id="datepicker1">
													</div>
												</div>
												
												<div class="form-group">
													<label for="cname" class="control-label col-lg-2">Memo/Bill Voucher</label>
													<div class="col-lg-10">
													<p><?php 
													$file=explode(".",$purchase->bill_image);
													$extension=end($file);
													if($extension=="pdf")
													{
														?>
														
														<a href="<?php echo base_url('purchase/view_pdf/').$purchase->id;?>" target="_blank">View Bill/Voucher</a>
													<?php 
													}
													
													else if($extension=="jpg" || $extension=="jpeg" || $extension=="png")
													{
														?>
														<img src="<?php echo base_url().$purchase->bill_image;?>" alt="" width="100px" height="100px"/>
														<?php 
													}
													else
													{
														echo"<p style='color:red'> No Memo/Bill file upload for this purchase</p>";
													}
													?></p>
													 <input class=" form-control" name="bill_image" type="file" value="<?php echo $purchase->bill_image;?>">
													</div>
												</div>
												
												<div class="form-group ">
												<label for="cname" class="control-label col-lg-2"> Description</label>
												<div class="col-lg-10">
													<div class="panel-body"> 
													<textarea name="description" class="summernote" id="" cols="40" rows="15"> <?php echo $purchase->description;?></textarea>
														
													</div>
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
                                                        <a href="<?php echo base_url('purchase');?>" class="btn btn-default waves-effect" type="button" data-dismiss="modal">Cancel</a>
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