<!-- Start content -->
                <div class="content">
                    <div class="container">
					
					<?php if($this->session->flashdata('success')): ?>
					  <div class="alert alert-success alert-dismissible" role="alert" id="btn">
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
                                    <div class="panel-heading"><h3 class="panel-title">Add New Brand</h3></div>
                                    <div class="panel-body">
                                        <div class=" form">
                                            <form class="cmxform form-horizontal tasi-form" method="POST" action="<?php echo base_url('brand/create');?>">
                                                <div class="form-group ">
                                                    <label for="cname" class="control-label col-lg-2">Brand Name</label>
                                                    <div class="col-lg-10">
                                                        <input class=" form-control" id="cname" name="brand_name" type="text" required="" aria-required="true">
                                                    </div>
                                                </div>
												
												<div class="form-group">
													<label for="active" class="control-label col-lg-2">Status</label>
													<div class="col-lg-10">
													
														<select class="form-control" id="active" name="status">
														  <option value="1">Active</option>
														  <option value="0">Inactive</option>
														</select>
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
							
							
							
							<button class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#custom-width-modal"> +Add New Brand</button>
							
                                
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
                                        <h3 class="panel-title">BRAND List</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>SL No:</th>
                                                            <th>Brand Name</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>
													<?php
													$serial=0;
													foreach($brandlist as $brand)
													{
													$serial++;	
													?>
													
                                                        <tr>
                                                            <td>#<?php echo $serial;?></td>
                                                            <td><?php echo $brand->brand_name;?></td>
															<?php 
															
															if($brand->status=="1")
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
                                                            
                                                            <td> 
															
															<a href="<?php echo base_url('brand/view/').$brand->id;?>" class="on-default edit-row" title="Edit"><i class="fa fa-pencil"style="color:#29B6F6"></i></a> 
															&nbsp;&nbsp;|| &nbsp;&nbsp; 
															<a href="<?php echo base_url('brand/delete/').$brand->id;?>" onclick="return confirm('Are you sure to delete this Brand?');"title="Remove"class="on-default remove-row"><i class="fa fa-trash-o" style="color:red"></i></a></td>
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