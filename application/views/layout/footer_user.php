<!-- start footer Area -->
<footer class="footer-area section-gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>About Us</h6>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
					</p>
					<p class="footer-text">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
			<div class="col-lg-5  col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>Newsletter</h6>
					<p>Stay update with our latest</p>
					<div class="" id="mc_embed_signup">
						<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
							<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
							<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
							<div style="position: absolute; left: -5000px;">
								<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
							</div>

							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
				<div class="single-footer-widget">
					<h6>Follow Us</h6>
					<p>Let us be social</p>
					<div class="footer-social d-flex align-items-center">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- End footer Area -->

<script src="<?= base_url() ?>/template2/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>/template2/js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="<?= base_url() ?>/template2/js/easing.min.js"></script>
<script src="<?= base_url() ?>/template2/js/hoverIntent.js"></script>
<script src="<?= base_url() ?>/template2/js/superfish.min.js"></script>
<script src="<?= base_url() ?>/template2/js/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url() ?>/template2/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url() ?>/template2/js/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>/template2/js/jquery.sticky.js"></script>
<script src="<?= base_url() ?>/template2/js/jquery.nice-select.min.js"></script>
<script src="<?= base_url() ?>/template2/js/parallax.min.js"></script>
<script src="<?= base_url() ?>/template2/js/waypoints.min.js"></script>
<script src="<?= base_url() ?>/template2/js/jquery.counterup.min.js"></script>
<script src="<?= base_url() ?>/template2/js/mail-script.js"></script>
<script src="<?= base_url() ?>/template2/js/main.js"></script>

<script type="text/javascript">
	function findTotal() {

		var jumlah = document.getElementsByName('jumlah');
		var harga = document.getElementsByName('harga');

		var tot = 0;
		var jml = 0;
		var hrg = 0;

		for (var i = 0; i < jumlah.length; i++) {
			if (parseInt(jumlah[i].value))
				jml += parseInt(jumlah[i].value);
		}
		for (var i = 0; i < harga.length; i++) {
			if (parseInt(harga[i].value))
				hrg += parseInt(harga[i].value);
		}
		tot = parseInt(jml) * parseInt(hrg);
		document.getElementById('total').value = tot;
		// if (parseInt($('input[name="stok"]').val()) <= parseInt(jumlah)) {
        //         alert('stok tidak tersedia! stok tersedia : ' + parseInt($('input[name="stok"]').val()))
        //         reset()
        //     }
	}
</script>

</body>

</html>