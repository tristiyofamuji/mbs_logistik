<div id="ModalDelete" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<p style="center">
					Yakin akan dihapus?
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" data-bs-dismiss="modal" class="btn btn-default">
					Batal
				</button>
				<button id="btn_delete" type="button" data-bs-dismiss="modal" onclick="return true" class="btn btn-outline-theme">
					OK
				</button>
			</div>
		</div>
	</div >
</div>
<!-- BEGIN btn-scroll-top -->
<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
	</div>
	<!-- END #app -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

	<!-- ================== BEGIN core-js ================== -->
	<script src="<?= base_url() ?>/assets/js/vendor.min.js"></script>
	<script src="<?= base_url() ?>/assets/js/app.min.js"></script>

	<!-- ================== BEGIN page-js ================== -->
	<script src="<?= base_url() ?>/assets/plugins/jvectormap-content/world-mill.js"></script>
	<!-- <script src="<?= base_url() ?>/assets/plugins/apexcharts/dist/apexcharts.min.js"></script> -->
	<script src="<?= base_url() ?>/assets/js/demo/dashboard.demo.js"></script>
	<!-- ================== END page-js ================== -->

	<!-- required js -->
	<script src="<?= base_url() ?>/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
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
	<script src="<?= base_url() ?>/assets/js/demo/ui-modal-notification.demo.js"></script>
	<script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>

	<!-- script -->
	<script>
	xhr = null;

	// 	$('#datepicker').datepicker({
	// 	autoclose: true
	// });
	function loading(type, msg) {
			$('#snackbar2').addClass('show');
			$('#snackbar2').html(msg);
		}
	function loaded(){
  		$('#snackbar2').removeClass('show');
	}
	NProgress.configure({
		showSpinner: true,
		parent: '.br-mainpanel'
		});
	function loader_2()
		{
		return `<div class="col-md-12 col-xl-12 mg-0" style="padding: 70px 0px 70px 0px;">
						<div class="tx-center text-center tx-dark ht-150" style="margin-top:20%;">
						<img style="width:17px;" src="<?= base_url('assets/img/loading.gif'); ?>" alt=""> &nbsp;Processing...
						</div>
				</div>`;
		}
	$('#datatableDefault').DataTable({
		dom: "<'row mb-3'<'col-sm-4'l><'col-sm-8 text-end'<'d-flex justify-content-end'fB>>>t<'d-flex align-items-center'<'me-auto'i><'mb-0'p>>",
		lengthMenu: [ 10, 20, 30, 40, 50 ],
		responsive: true,
        ordering: true,
		searching: true,
		info: false,
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
	<!-- script -->
	<script>
		$('#datepicker').datepicker({
			autoclose: true
		});
	</script>
	</body>
	
</html>
