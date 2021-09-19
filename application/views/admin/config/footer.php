<footer class="main-footer">
	<div class="pull-right hidden-xs">
		Jl. Anggrek No. 49, Cihapit, Bandung Wetan, Kota Bandung
	</div>
	<strong>Copyright &copy; 2018 <a href="#">Villa Merah Beta Version</a>.</strong> All rights reserved.
</footer>

</div>

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/bower_components') ?>/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components') ?>/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist') ?>/js/adminlte.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url('assets/plugins') ?>/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url('assets/plugins') ?>/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url('assets/plugins') ?>/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url('assets/bower_components') ?>/moment/min/moment.min.js"></script>
<script src="<?php echo base_url('assets/bower_components') ?>/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url('assets/bower_components') ?>/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url('assets/bower_components') ?>/moment/min/moment.min.js"></script>
<script src="<?php echo base_url('assets/bower_components') ?>/bootstrap-daterangepicker/daterangepicker.js"></script>

<script>
	$(function() {
		//Initialize Select2 Elements
		$('.select2').select2()

		//Datemask dd/mm/yyyy
		$('#datemask').inputmask('dd/mm/yyyy', {
			'placeholder': 'dd/mm/yyyy'
		})
		//Datemask2 mm/dd/yyyy
		$('#datemask2').inputmask('mm/dd/yyyy', {
			'placeholder': 'mm/dd/yyyy'
		})
		//Money Euro
		$('[data-mask]').inputmask()
	})
</script>

<script>
	$(document).ready(function() {

		load_data();
		<?php
		if ($this->uri->segment(2) == 'siswa') {
			$site = site_url('admin/fetch_siswa');
		} else if ($this->uri->segment(2) == 'siswa_bandung') {
			$site = site_url('admin/fetch_siswa_bandung');
		} else if ($this->uri->segment(2) == 'siswa_jaksel') {
			$site = site_url('admin/fetch_siswa_jaksel');
		} else if ($this->uri->segment(2) == 'siswa_jaktim') {
			$site = site_url('admin/fetch_siswa_jaktim');
		} else if ($this->uri->segment(2) == 'list_sekolah') {
			$site = site_url('admin/fetch_sekolah');
		}
		?>

		function load_data(query) {
			$.ajax({
				url: "<?php echo $site; ?>",
				method: "POST",
				data: {
					query: query
				},
				success: function(data) {
					$('#result').html(data);
				}
			})
		}

		$('#search_text').keyup(function() {
			var search = $(this).val();
			if (search != '') {
				load_data(search);
			} else {
				load_data();
			}
		});

	});
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

</html>
