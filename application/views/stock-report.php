<!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        
						
						
						
						
						
						
						<div class="row">

							<!-- TODO -->
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
									<center><h3 class="panel-title"> STOCK REPORT</h3></center>
                                         
                                    </div> 
                                    <div class="panel-body todoapp"> 
                                        <div class="row">
										<div id="content">
											<center><h2>Jayson Group IT</h2>
											<p>Stock Report:<b>As on:</b> <?php echo date("d F,Y");?></p>
											</center>
										</div>
										<br /><br />
										<button id="print">Print</button> <br /> <br />
										<table class="table table-bordered" border="1"id="datatable">
										
										
								  <thead>
									<tr>
									  <th scope="col">SL No.</th>
									  <th scope="col">Item Name</th>
									  <th scope="col">Quantity</th>
									  <th scope="col">Adding Year</th>
									  <th scope="col">Status</th>
									</tr>
								  </thead>
								  <tbody>
									<?php 
									$serial_counter=0;
									foreach($totalStocks as $stock)
									{
									$serial_counter++;	
									?>
									<tr align="center">
									  <td><?php echo $serial_counter;?></td>
									  <td><?php echo $stock->item_name;?></td>
									  <td><?php echo $stock->quantity;?></td>
									  <td><?php echo date("Y",strtotime($stock->adding_date));?></td>
									  <td><?php 
									  if($stock->status=="1")
									  {
										  echo"Active";
									  }
									  else 
									  {
										  echo"Inactive";
									  }
										  ?></td>
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