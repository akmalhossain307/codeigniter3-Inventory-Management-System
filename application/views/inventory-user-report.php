<!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        
						
						
						
						
						
						
						<div class="row">

							<!-- TODO -->
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
									<center><h3 class="panel-title"> INVENTORY USER REPORT</h3></center>
                                         
                                    </div> 
                                    <div class="panel-body todoapp"> 
                                        <div class="row">
										<div id="content">
											<center><h2>Jayson Group IT</h2>
											<p>Inventory User Report: <b>As on:</b> <?php echo date("d F,Y");?></p>
											</center>
										</div>
										<br /><br />
										<button id="print">Print</button> <br /> <br />
										<table class="table table-bordered" border="1"id="datatable">
										
										
								  <thead>
									<tr>
									  <th scope="col">SL No.</th>
									  <th scope="col">User Name</th>
									  <th scope="col">Designation</th>
									  <th scope="col">Department</th>
									  <th scope="col">Location</th>
									  <th scope="col">IP Address</th>
									  <th scope="col">Assigned Inventory</th>
									  <th scope="col">Description</th>
									</tr>
								  </thead>
								  <tbody>
									<?php 
									$serial_counter=0;
									foreach($totalInventoryUser as $inventoryUser)
									{
									$serial_counter++;	
									?>
									<tr align="center">
									  <td><?php echo $serial_counter;?></td>
									  <td><?php echo $inventoryUser['user_name'];?></td>
									  <td><?php echo $inventoryUser['user_designation'];?></td>
									  <td><?php echo $inventoryUser['user_department'];?></td>
									  <td><?php echo $inventoryUser['user_location'];?></td>
									  <td><?php echo $inventoryUser['user_ip'];?></td>
									  <td><?php echo $inventoryUser['item_name'];?>(<?php echo $inventoryUser['qty'];?>)</td>
									  <td><?php echo $inventoryUser['description'];?></td>
									  
									</tr>
									<?php }?>
									
								  </tbody>
								</table>


										
                                        </div> <br /><br />
                                    </div>
									 
                                </div>
                            </div> <!-- end col -->

                        </div> <!-- end row -->
						
						


                    </div> <!-- container -->
                               
                </div> <!-- content -->