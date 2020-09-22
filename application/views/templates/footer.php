<footer class="footer text-right">
                    2018 &copy; JAYSON GROUP IT.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            

        </div>
        <!-- END wrapper -->
    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/waves.js"></script>
        <script src="<?php echo base_url()?>assets/js/wow.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url()?>assets/assets/jquery-detectmobile/detect.js"></script>
        <script src="<?php echo base_url()?>assets/assets/fastclick/fastclick.js"></script>
        <script src="<?php echo base_url()?>assets/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url()?>assets/assets/jquery-blockui/jquery.blockUI.js"></script>


        <!-- CUSTOM JS -->
        <script src="<?php echo base_url()?>assets/js/jquery.app.js"></script>
		
		

        <!--form validation-->
        <script type="text/javascript" src="<?php echo base_url()?>assets/assets/jquery.validate/jquery.validate.min.js"></script>

        <!--form validation init-->
        <script src="<?php echo base_url()?>assets/assets/jquery.validate/form-validation-init.js"></script>

        <!--form text editor init-->
        <script type="text/javascript" src="<?php echo base_url()?>assets/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
		<!--form validation init-->
        <script src="<?php echo base_url()?>assets/assets/summernote/summernote.min.js"></script>
		

        <script src="<?php echo base_url()?>assets/assets/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url()?>assets/assets/datatables/dataTables.bootstrap.js"></script>
		
		<!--form validation init-->
		<script src="<?php echo base_url()?>assets/assets/timepicker/bootstrap-datepicker.js"></script>


		<script>
		jQuery(document).ready(function(){
		
		// Date Picker
                jQuery('#datepicker').datepicker();
                jQuery('#datepicker1').datepicker();
                jQuery('#datepicker2').datepicker();
                jQuery('#datepicker-inline').datepicker();
                jQuery('#datepicker-multiple').datepicker({
                    numberOfMonths: 3,
                    showButtonPanel: true
                });
		});

            jQuery(document).ready(function(){
                $('.wysihtml5').wysihtml5();

                $('.summernote').summernote({
                    height: 200,                 // set editor height

                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor

                    focus: true                 // set focus to editable area after initializing summernote
                });
				
				

            });
        </script>
		
		
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
				
				function printData()
				{
					var divToPrint1=document.getElementById("content");
				   var divToPrint=document.getElementById("datatable");
				   
				   newWin= window.open("");
				   newWin.document.write(divToPrint1.outerHTML);
				   newWin.document.write(divToPrint.outerHTML);
				   
				   newWin.print();
				   newWin.close();
				}

				$('#print').on('click',function(){
				printData();
				})

            } );
        </script>
		
		<script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
				
				function printData()
				{
				   var divToPrint=document.getElementById("datatable");
				   newWin= window.open("");
				   newWin.document.write(divToPrint.outerHTML);
				   newWin.print();
				   newWin.close();
				}

				$('#print').on('click',function(){
				printData();
				})

            } );
        </script>
		


	</body>
</html>