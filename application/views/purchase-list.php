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
                                            <div class="modal-dialog" style="width:55%;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        
                                                    </div>
                                                    <div class="modal-body">
                                                        
														
														
														
														
														
														<div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Add New Purchase</h3></div>
                                    <div class="panel-body">
                                        <div class=" form">
                                            <form class="cmxform form-horizontal tasi-form"  method="POST" action="<?php echo base_url('purchase/add')?>" enctype="multipart/form-data">
                                                <div class="form-group ">
                                                    <label for="cname" class="control-label col-lg-3">Item Name</label>
                                                    <div class="col-lg-9">
                                                        <input class=" form-control" id="cname" name="item_name" type="text" required="" aria-required="true">
                                                    </div>
                                                </div>
												<div class="form-group">
													<label for="active" class="control-label col-lg-3">Vendor Name</label>
													<div class="col-lg-9">
													
														<select class="form-control" id="active" name="vendor_name">
														
														<?php 
														foreach($vendors as $vendor)
														{
															?>
															
														  <option value="<?php echo $vendor->vendor_name;?>">
														  <?php echo $vendor->vendor_name;?>
														  </option>
														  
														  
														  <?php 
														}
														?>
														  
														</select>
													</div>
												</div>
												
												<div class="form-group">
													<label for="cname" class=" control-label col-lg-3">Item Quantity</label>
													<div class="col-lg-9">
													 <input class=" form-control" id="cname" name="quantity" type="number" required="" aria-required="true">
													</div>
												</div>
												
												<div class="form-group">
													<label for="cname" class="control-label col-lg-3">Memo/Bill Voucher</label>
													<div class="col-lg-9">
													 <input class=" form-control" name="bill_image" type="file" >
													</div>
												</div>
												
												<div class="form-group ">
                                                    <label for="cname" class="control-label col-lg-3">Item Price:</label>
                                                    <div class="col-lg-9">
                                                        <input class=" form-control" id="cname" name="item_price" type="number">
                                                    </div>
                                                </div>
												
												<div class="form-group ">
                                                    <label for="cname" class="control-label col-lg-3">purchaser name:</label>
                                                    <div class="col-lg-9">
                                                        <input class=" form-control" id="cname" name="buyer_name" type="text" placeholder="Aminul (IT)">
                                                    </div>
                                                </div>
												

												<div class="form-group">
													<label for="active" class="control-label col-lg-3">Purchase Date</label>
													<div class="col-lg-9">
													
														<input type="text" name="purchase_date"class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
													</div>
												</div>
												<div class="form-group">
													<label for="active" class="control-label col-lg-3">Warranty Ex. Date</label>
													<div class="col-lg-9">
													
														<input type="text" name="warranty_ex_date"class="form-control" placeholder="mm/dd/yyyy" id="datepicker1">
													</div>
												</div>
												
												<div class="form-group ">
												<label for="cname" class="control-label col-lg-3"> Description</label>
												<div class="col-lg-9">
													<div class="panel-body"> 
													<textarea name="description" class="summernote" id="" cols="40" rows="15"> </textarea>
														
													</div>
													</div>
												</div>
												
												
												
												
												</div>
                                                   
												
												
												
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
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
							
							
							
							<button class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#custom-width-modal"> +Add New Purchase</button>
							
                                
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
                                        <h3 class="panel-title">Purchase Item List</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>SL No:</th>
                                                            <th>Item Name</th>
                                                            <th>Vendor Name</th>
                                                            <th>Purchased By</th>
                                                            <th>Quantity</th>
                                                            <th>Memo/Bill file</th>
                                                            <th>Item Price</th>
                                                            <th>Purchase Date</th>
                                                            <th>Warranty Ex. Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>
													
													<?php
													$serial=0;
													foreach($purchaseData as $purchase)
													{
													$serial++;	
													?>
                                                        <tr>
                                                            <td>#<?php echo $serial;?></td>
                                                            <td><?php echo $purchase->item_name;?></td>
                                                            <td><?php echo $purchase->vendor_name;?></td>
                                                            <td><?php echo $purchase->buyer_name;?></td>
                                                            <td><?php echo $purchase->quantity;?></td>
                                                            <td>
															<?php 
															$bill_image=$purchase->bill_image;
															$file=explode(".",$purchase->bill_image);
															$extension=end($file);
															if($extension=="jpg" || $extension=="jpeg" || $extension=="png")
															{
															?>
															<a href="<?php echo base_url('purchase/view_jpg/').$purchase->id;?>" target="_blank">
															<img src="<?php echo base_url().$purchase->bill_image;?>" alt="" width="100px"height="100px"/></a>
															
															<?php 															
															}
															
															else if($extension=="pdf") 
															{
																?>
																<a href="<?php echo base_url('purchase/view_pdf/').$purchase->id;?>" target="_blank">View Bill/Voucher</a>
																<?php 
															}
															else
															{
																
															
																echo"<p style='color:red'>No file uploaded</p>";
															
															}
															?>
															
															</td>
															<td><?php echo $purchase->item_price;?></td>
                                                            <td><?php echo date('d F, Y',strtotime($purchase->purchase_date));?>
															</td>
															
															<td><?php echo date('d F, Y',strtotime($purchase->warranty_ex_date));?>
															</td>
                                                           
                                                            <td>
															<a href="<?php echo base_url('purchase/view/').$purchase->id;?>" class="on-default edit-row update" title="Edit"><i class="fa fa-pencil"style="color:#29B6F6"></i></a> 
															&nbsp;&nbsp;|| &nbsp;&nbsp; 
															<a href="<?php echo base_url('purchase/delete/').$purchase->id;?>" title="Remove"class="on-default remove-row" onclick="return confirm('Are you sure to delete this stock item?');"><i class="fa fa-trash-o" style="color:red"></i></a>
															</td>
                                                            
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