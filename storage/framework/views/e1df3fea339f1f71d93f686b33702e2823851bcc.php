
	<!-- Start Footer Area -->
	<!-- /End Footer Area -->

	<!-- Jquery -->
    <script src="<?php echo e(asset('frontend/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/jquery-migrate-3.0.0.js')); ?>"></script>
	<script src="<?php echo e(asset('frontend/js/jquery-ui.min.js')); ?>"></script>
	<!-- Popper JS -->
	<script src="<?php echo e(asset('frontend/js/popper.min.js')); ?>"></script>
	<!-- Bootstrap JS -->
	<script src="<?php echo e(asset('frontend/js/bootstrap.min.js')); ?>"></script>
	<!-- Color JS -->
	<script src="<?php echo e(asset('frontend/js/colors.js')); ?>"></script>
	<!-- Slicknav JS -->
	<script src="<?php echo e(asset('frontend/js/slicknav.min.js')); ?>"></script>
	<!-- Owl Carousel JS -->
	<script src="<?php echo e(asset('frontend/js/owl-carousel.js')); ?>"></script>
	<!-- Magnific Popup JS -->
	<script src="<?php echo e(asset('frontend/js/magnific-popup.js')); ?>"></script>
	<!-- Waypoints JS -->
	<script src="<?php echo e(asset('frontend/js/waypoints.min.js')); ?>"></script>
	<!-- Countdown JS -->
	<script src="<?php echo e(asset('frontend/js/finalcountdown.min.js')); ?>"></script>
	<!-- Nice Select JS -->
	<script src="<?php echo e(asset('frontend/js/nicesellect.js')); ?>"></script>
	<!-- Flex Slider JS -->
	<script src="<?php echo e(asset('frontend/js/flex-slider.js')); ?>"></script>
	<!-- ScrollUp JS -->
	<script src="<?php echo e(asset('frontend/js/scrollup.js')); ?>"></script>
	<!-- Onepage Nav JS -->
	<script src="<?php echo e(asset('frontend/js/onepage-nav.min.js')); ?>"></script>
	
	<script src="<?php echo e(asset('frontend/js/isotope/isotope.pkgd.min.js')); ?>"></script>
	<!-- Easing JS -->
	<script src="<?php echo e(asset('frontend/js/easing.js')); ?>"></script>

	<!-- Active JS -->
	<script src="<?php echo e(asset('frontend/js/active.js')); ?>"></script>


	<?php echo $__env->yieldPushContent('scripts'); ?>
	<script>
		setTimeout(function(){
		  $('.alert').slideUp();
		},5000);
		$(function() {
		// ------------------------------------------------------- //
		// Multi Level dropdowns
		// ------------------------------------------------------ //
			$("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
				event.preventDefault();
				event.stopPropagation();

				$(this).siblings().toggleClass("show");


				if (!$(this).next().hasClass('show')) {
				$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
				}
				$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
				$('.dropdown-submenu .show').removeClass("show");
				});

			});
		});
	  </script>
<?php /**PATH C:\Users\fatma\Downloads\chalange\resources\views/frontend/layouts/footer.blade.php ENDPATH**/ ?>