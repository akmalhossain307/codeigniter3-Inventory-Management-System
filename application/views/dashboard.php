<!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        
						
						
						<!-- Start Widget -->
                        <div class="row">
                            
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-purple"><i class="ion-ios7-cart"></i></span>
									
										
                                    <div class="mini-stat-info text-right text-muted">
									<?php 
									$item_counter=0;
									$qty_counter=0;
									foreach($totalStocks as $stock)
									{
										$item_counter++;
										$qty_counter=$qty_counter+$stock->quantity;
									}
										?>
										Stock Items:&nbsp;&nbsp;<b style="font-size:20px;font-weight:600;color:#555"><?php echo $item_counter;?></b> <br />
										Stock Quantities: &nbsp;&nbsp;<b style="font-size:20px;font-weight:600;color:#555"><?php echo $qty_counter;?></b>
                                        <br /><br /><br />
										<a href="<?php echo base_url('stock');?>" class="btn btn-primary"> Details</a>
                                    </div>
                                    
                                </div>
                            </div>
							
							<div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-purple"><i class="fa fa-users"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
									<?php 
									$vendor_counter=0;
									foreach($totalVendors as $vendor)
									{
										$vendor_counter++;
									}
										?>
                                        <span class="counter"><?php echo$vendor_counter;?></span>
                                        Total Vendors
										<br /><br /><br /><a href="<?php echo base_url('vendor');?>" class="btn btn-primary"> Details</a>
                                    </div>
                                    
                                </div>
                            </div>
							
							<div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i class="glyphicon glyphicon-tags"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
									<?php 
									$brand_counter=0;
									foreach($totalBrands as $brand)
									{
										$brand_counter++;
									}
										?>
                                        <span class="counter"><?php echo $brand_counter;?></span>
                                        Total Brands
										<br /><br /><br /><a href="<?php echo base_url('brand');?>" class="btn btn-primary"> Details</a>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-primary"><i class="ion-android-contacts"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
									<?php 
									$user_counter=0;
									foreach($totalInventoryUsers as $user)
									{
										$user_counter++;
									}
										?>
                                        <span class="counter"><?php echo $user_counter;?></span>
                                        
                                        Total Users
										<br /><br /><br /><a href="<?php echo base_url('inventory/inventory_user');?>" class="btn btn-primary"> Details</a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div> 
                        <!-- End row-->
						
						
						
						<div class="row">
                            
						

                            <!-- TODO -->
                            <div class="col-lg-10">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">TOTAL INVENTORY</h3> 
                                    </div> 
                                    <div class="panel-body todoapp"> 
                                        <div class="row">
										<h5 style="border-bottom:2px solid green;padding:5px">(All FACTORIES,DEPOT & HEAD OFFICE)</h5>
                                            <b>Total Inventory Items:</b> <?php
											$inventory_counter=0;
											foreach($totalInventories as $inventories){
												$inventory_counter=$inventory_counter+$inventories->quantity;
											}
											echo$inventory_counter;
											?> <br /> <b>Assigned</b>: <?php
											$assigned_inventory_counter=0;
											foreach($assignedInventories as $ass_inventories){
												$assigned_inventory_counter=$assigned_inventory_counter+$ass_inventories->quantity;
											}
											echo$assigned_inventory_counter;
											?>
											
											 <br />
											<b>Unassigned</b>: <?php
											$unassigned_inventory_counter=0;
											foreach($unassignedInventories as $unass_inventories){
												$unassigned_inventory_counter=$unassigned_inventory_counter+$unass_inventories->quantity;
											}
											echo$unassigned_inventory_counter;
											?> <br />
												<table class="table table-bordered">
													  <thead>
														<tr>
														  <th scope="col">SL No.</th>
														  <th scope="col">Item Name</th>
														  <th scope="col">Qty</th>
														</tr>
													  </thead>
													  <tbody>
													  <?php 
													  $serial_counter=0;
													  $sum=0;
													  foreach($countTotalInventory as $inventoryByItemName)
													  {
														$serial_counter++;  
													  ?>
														<tr>
														  <td><?php echo $serial_counter;?></td>
														  <td><?php echo $inventoryByItemName->item_name;?></td>
														  <td><?php echo $inventoryByItemName->qty;?></td>
														  
														  <?php
														  //echo$sum=$sum+$inventoryByItemName->quantity;
														 // echo $inventoryByItemName->quantity;
														  
														  ?>
														  
														
														</tr>
														<?php 
													  }
														?>
														
													  </tbody>
												</table>

											
											
                                        </div>

                                      
 
                                    </div> 
                                </div>
                            </div> <!-- end col -->
							
							<div class="col-lg-2"></div>

							
							
							
                           
                        </div> <!-- end row -->
						
						


                    </div> <!-- container -->
                               
                </div> <!-- content -->