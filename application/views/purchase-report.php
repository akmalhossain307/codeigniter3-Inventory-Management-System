<!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        
						
						
						
						
						
						
						<div class="row">

							<!-- TODO -->
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
									<center><h3 class="panel-title"> PURCHASE REPORT</h3>
									
									</center>
                                         
                                    </div> 
                                    <div class="panel-body todoapp"> 
                                        <div class="row">
										<div id="content">
											<center><h2>Jayson Group IT</h2>
											<p>Purchase Report:<b>As on:</b> <?php echo date("d F,Y");?></p>
											</center>
										</div>
										<button id="print">Print</button> <br /> <br />
										<table class="table table-bordered" border="1"id="datatable">
										
								  <thead>
									<tr>
									  <th scope="col">SL No.</th>
									  <th scope="col">Item Name</th>
									  <th scope="col">Quantity</th>
									  <th scope="col">Purchase Date</th>
									  <th scope="col">Warranty Ex. Date</th>
									  <th scope="col">Comment</th>
									</tr>
								  </thead>
								  <tbody>
									<?php 
									$serial_counter=0;
									foreach($totalPurchase as $purchase)
									{
									$serial_counter++;	
									?>
									<tr align="center">
									  <td><?php echo $serial_counter;?></td>
									  <td><?php echo $purchase->item_name;?></td>
									  <td><?php echo $purchase->quantity;?></td>
									  <td><?php echo date("d F,Y",strtotime($purchase->purchase_date));?></td>
									  <td><?php echo date("d F,Y",strtotime($purchase->warranty_ex_date));?></td>
									  <td><?php echo $purchase->description;?></td>
									
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