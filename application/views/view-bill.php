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
                                <?php
									
									foreach($billById as $bill)
									{
										$file=$bill->bill_image;
										if($file=="")
										{
											echo"No file uploaded";
										}
									?>
									<embed src="<?php echo base_url().$bill->bill_image;?>" type="application/pdf" width="100%" height="600px" />
                                 <?php 
									}
								 ?>
								 <br />
								 <br />
								 <br />
								 <center> 
								 <a href="<?php echo base_url('purchase')?>" class="btn btn-danger"> Back</a>
								 </center>
                            </div>
                            
                        </div> <!-- End Row -->


                    </div> <!-- container -->
                               
                </div> <!-- content -->