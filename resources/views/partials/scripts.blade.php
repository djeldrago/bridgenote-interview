 <!-- jQuery -->
    <script src="{{asset('vendor/bootstrap')}}/js/jquery-3.2.1.min.js"></script>
    <script src="{{asset('vendor/bootstrap')}}/js/jquery-1.11.1.min.js"></script>
		<!-- Bootstrap Core JS -->
		<script src="{{asset('vendor/bootstrap')}}/js/popper.min.js"></script>
		<script src="{{asset('vendor/bootstrap')}}/js/bootstrap.min.js"></script>
		<!-- <script src="{{asset('vendor/bootstrap')}}/js/bootstrap-select.min.js"></script> -->
		<!-- Sticky sidebar JS -->
		<script src="{{asset('vendor/bootstrap')}}/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>		
		<script src="{{asset('vendor/bootstrap')}}/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>		
		<!-- Datetimepicker JS -->
		<script src="{{asset('vendor/bootstrap')}}/plugins/select2/moment.min.js"></script>
		<script src="{{asset('vendor/bootstrap')}}/js/bootstrap-datetimepicker.min.js"></script>
		<!-- Select2 JS -->
		<script src="{{asset('vendor/bootstrap')}}/plugins/select2/select2.min.js"></script>
		<!-- Tagsinput JS -->
		<script src="{{asset('vendor/bootstrap')}}/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
		<!-- Full Calendar JS -->
        <script src="{{asset('vendor/bootstrap')}}/js/jquery-ui.min.js"></script>
        <script src="{{asset('vendor/bootstrap')}}/plugins/fullcalendar/fullcalendar.min.js"></script>
        <script src="{{asset('vendor/bootstrap')}}/plugins/fullcalendar/jquery.fullcalendar.js"></script>	
			
		<!-- Chart JS -->
		<script src="{{asset('vendor/bootstrap')}}/js/Chart.min.js"></script>
		<script src="{{asset('vendor/bootstrap')}}/js/chart.js"></script>
				<!-- Custom Js -->
		<script src="{{asset('vendor/bootstrap')}}/js/script.js"></script>
		<script>
		$(function () {
    $('.selectpicker').selectpicker();
});
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script>
	$(document).ready(function() {
    $('#data-table').DataTable();
} );
</script>
  @yield('scripts')