<footer class="ftco-footer ftco-bg-dark ftco-section">
	<div class="container">

		<div class="row">
			<div class="col-md-12 text-center">

				<p>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>
						document.write(new Date().getFullYear());
					</script> All rights reserved | Created <i class="icon-heart" aria-hidden="true"></i> by Geraldine
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


<script src="<?= base_url(); ?>assets/User/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/User/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url(); ?>assets/User/js/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/User/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/User/js/jquery.easing.1.3.js"></script>
<script src="<?= base_url(); ?>assets/User/js/jquery.waypoints.min.js"></script>
<script src="<?= base_url(); ?>assets/User/js/jquery.stellar.min.js"></script>
<script src="<?= base_url(); ?>assets/User/js/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>assets/User/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url(); ?>assets/User/js/aos.js"></script>
<script src="<?= base_url(); ?>assets/User/js/jquery.animateNumber.min.js"></script>
<script src="<?= base_url(); ?>assets/User/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
</script>
<script src="<?= base_url(); ?>assets/User/js/google-map.js"></script>
<script src="<?= base_url(); ?>assets/User/js/main.js"></script>

<!-- Bootstrap Datepicker Plugin Js -->
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
	$(function() {
		$(".datepicker").datepicker({
			format: 'yyyy-mm-dd',
			todayHighlight: true,
			autoclose: true,
			orientation: 'bottom auto',

		});
	});

	$('.datepicker').on('change', function() {
		var dob = new Date(this.value);
		var today = new Date();
		var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
		if (age < 2 || age > 17) {
			swal({
				title: "Opps !!!",
				text: "Tanggal Lahir Tidak Memenuhi Ketentuan",
				showConfirmButton: false,
				type: 'error',
			});
			$('#umur').val('');
			$('.datepicker').val('');
		} else {
			$('#umur').val(age);
		}
	});
</script>
<script>
	function cekJpg(file) {
		var sFileName = file.files[0].name;
		var sFileExtension = sFileName.split('.')[sFileName.split('.').length - 1].toLowerCase();
		var iFileSize = file.size;
		var iConvert = (file.files[0].size / 1048576).toFixed(2);
		var FileSize = file.files[0].size / 1024 / 1024; // in MB

		/// OR together the accepted extensions and NOT it. Then OR the size cond.
		/// It's easier to see this way, but just a suggestion - no requirement.
		if (!(sFileExtension === "JPG" ||
				sFileExtension === "JPEG" ||
				sFileExtension === "GIF" ||
				sFileExtension === "PNG" ||
				sFileExtension === "jpg" ||
				sFileExtension === "jpeg" ||
				sFileExtension === "gif" ||
				sFileExtension === "png") || FileSize > 0.5) { /// 10 mb
			txt = "Tipe File :   '" + sFileExtension + "'\n\n";
			txt += "Size:  " + iConvert + " MB \n\n";
			txt += "Tidak Diperbolehkan Karna Bukan Format File Yang Diperbolehkan JPG,JPEG,PNG dan tidak lebih dari 500 KB.\n\n" + sFileExtension + FileSize;
			console.log(txt);
			swal({
				title: "ERROR !!!",
				text: txt,
				showConfirmButton: true,
				type: 'error'
			});
			$(file).val('');
			return false;
		} else {
			console.log('ini salah');
		}
	}
</script>