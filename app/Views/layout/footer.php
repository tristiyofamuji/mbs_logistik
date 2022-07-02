<!-- BEGIN btn-scroll-top -->
<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
	</div>
	<!-- END #app -->
	
    
</body>
	<!-- ================== BEGIN core-js ================== -->
	<script src="<?= base_url() ?>/assets/js/vendor.min.js"></script>
	<script src="<?= base_url() ?>/assets/js/app.min.js"></script>

	<!-- ================== BEGIN page-js ================== -->
	<script src="<?= base_url() ?>/assets/plugins/jvectormap-content/world-mill.js"></script>
	<script src="<?= base_url() ?>/assets/plugins/apexcharts/dist/apexcharts.min.js"></script>
	<script src="<?= base_url() ?>/assets/js/demo/dashboard.demo.js"></script>
	<!-- ================== END page-js ================== -->

	<!-- required js -->
	<script src="<?= base_url() ?>/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?= base_url() ?>/assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
	<script src="<?= base_url() ?>/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="<?= base_url() ?>/assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
	<script src="<?= base_url() ?>/assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
	<script src="<?= base_url() ?>/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="<?= base_url() ?>/assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
	<script src="<?= base_url() ?>/assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
	<script src="<?= base_url() ?>/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?= base_url() ?>/assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
	<!-- script -->
	<script>
	$('#datatableDefault').DataTable({
		dom: "<'row mb-3'<'col-sm-4'l><'col-sm-8 text-end'<'d-flex justify-content-end'fB>>>t<'d-flex align-items-center'<'me-auto'i><'mb-0'p>>",
		lengthMenu: [ 10, 20, 30, 40, 50 ],
		responsive: true,
        ordering: true,
		searching: true,
		buttons: [ 
		/* { extend: 'print', className: 'btn btn-default' },
		{ extend: 'csv', className: 'btn btn-default' } */
		]
	});
	
	window.setTimeout(function() { 
		$(".alert-warning").fadeTo(500, 0).slideUp(500,
		function(){ 
			$(this).remove(); 
		}); 
	}, 2000);
	
	window.setTimeout(function() { 
		$(".alert-success").fadeTo(500, 0).slideUp(500,
		function(){ 
			$(this).remove(); 
		}); 
	}, 5000);
    </script>
</html>
