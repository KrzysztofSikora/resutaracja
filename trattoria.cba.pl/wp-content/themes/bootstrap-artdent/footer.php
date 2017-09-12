<?php
/**
 * The template for displaying the footer
 *
 */
?>






<!--<section class="section-footer">-->
<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			<div class="col-md-12">-->
<!--				<ul class="list-inline pull-left padding-footer-list">-->
<!--					<li><a class="page-scroll" href="/about-us">logo</a></li>-->
<!--				</ul>-->
<!--				<ul class="list-inline pull-right padding-footer-list">-->
<!---->
<!--					<li>-->
<!--						<p class="text-center">2017 © webParadise All rights reserved.</p>-->
<!--					</li>-->
<!--				</ul>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</section>-->
</div><!-- #wrapper -->



<!-- Scripts -->
<script src="<?php echo get_stylesheet_directory_uri() . '/vendor/jquery/jquery.min.js' ?> "></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/vendor/popper/popper.min.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js' ?> "></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/vendor/lumos/js/lumos-min.js' ?> "></script>




<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/vendor/cycle/jquery.cycle.all.js' ?>"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDljQbtstZ5JGUKuPDbVDK3CUxDdMghpmo&callback=initMap">
</script>

<script>
	$('.headerslider').cycle({
//		slideResize: true,
//		containerResize: true,
//		width: ($(window).width() < 1145) ? '1145px' : '100%',
//		height: '100%',
//		fit: 1,
		speed: 2000,
		fx: 'fade',
	});

	function initMap() {
		var uluru = {lat: -25.363, lng: 131.044};
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 4,
			center: uluru
		});
		var marker = new google.maps.Marker({
			position: uluru,
			map: map
		});
	}


	$("body > div:nth-child(1)").remove();

	if ($(window).width() < 992)
		if ($(".navbar").hasClass("absolute-top"))
			$(".navbar").removeClass("absolute-top").addClass("fixed-top");

	$(window).resize(function () {
		if ($(window).width() < 992) {

			console.log("resize width");

			if ($(".navbar").hasClass("absolute-top"))
				$(".navbar").removeClass("absolute-top").addClass("fixed-top").each(function () {
					console.log("add class fixed-top");
					location.reload();
				})
		}
		if ($(window).width() > 992) {

			if ($(".navbar").hasClass("fixed-top"))
				$(".navbar").removeClass("fixed-top").addClass("absolute-top").each(function () {
					console.log("add class absolute-top");
					location.reload();
				});
		}

	});


</script>




	<?php wp_footer(); ?>
</body>
</html>