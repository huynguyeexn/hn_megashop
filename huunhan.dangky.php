<!DOCTYPE html>
<html lang="vi">
<head>
	<?php include_once 'hn_layout/huunhan.layout.meta' ?>
</head>
<body style="background-color: #ffffff">
	<!-- HEADER -->
	<?php include_once 'hn_layout/huunhan.layout.header' ?>
	<!-- END HEADER -->

	<!------------------------------------------>

	<section class="breadcrumbs">
		<div class="container">
			<ul>
				<li>
					<a href="huunhan.index.php">Trang chủ</a>
					<i class="fas fa-chevron-right"></i>
				</li>
				<li>
					<span>Đăng nhập</span>
				</li>
			</ul>
		</div>
	</section>
	<section class="hn-page">
		<div class="container">
			<div class="hn-page-title">
				<h4>Đăng Ký</h4>
			</div>
			<div class="row">
				<div class="col-12">
					<form action="">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="ho"><strong>Họ:</strong></label>
									<input type="text" placeholder="Họ:" class="form-control" id="ho">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="ten"><strong>Tên:</strong></label>
									<input type="text" placeholder="Tên:" class="form-control" id="ten">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="email"><strong>Email:</strong></label>
									<input type="text" placeholder="Email:" class="form-control" id="email">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="password"><strong>Mật khẩu:</strong></label>
									<input type="password" placeholder="Mật khẩu:" class="form-control" id="password">
								</div>
							</div>
						</div>
						<div class="form-group">
							<button class="btn-primary px-4 py-2" style="margin-top: 20px;">Đăng ký</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>


	<!------------------------------------------>

	<!-- MAP -->
	<?php include_once 'hn_layout/huunhan.layout.map' ?>
	<!-- END MAP -->

	<!------------------------------------------>

	<!-- FOLLOW -->
	<?php include_once 'hn_layout/huunhan.layout.follow' ?>
	<!-- END FOLLOW -->

	<!------------------------------------------>

	<!-- FOOTER -->
	<?php include_once 'hn_layout/huunhan.layout.footer' ?>
	<!-- END FOOTER -->

	<!------------------------------------------>

	<!-- COPYRIGHT -->
	<?php include_once 'hn_layout/huunhan.layout.copyright' ?>
	<!-- END COPYRIGHT -->

	<!------------------------------------------>

</body>

<!-- jquery.slim.min.js -->
<script src="hn_js/jquery-3.4.0.slim.min.js"></script>
<!-- jquery -->
<script src="hn_js/jquery-3.4.0.min.js"></script>
<!-- fancybox script -->
<script src="hn_js/jquery.fancybox.min.js"></script>
<!-- popper js -->
<script src="hn_js/popper.min.js"></script>
<!-- bootstrap.min.js -->
<script src="hn_js/hn_bootstrap_js/bootstrap.min.js"></script>

<!-- owlcarousel -->
<script src="hn_owlcarousel/owl.carousel.min.js"></script>


<script>
	//carousel script
	$(".partner-carousel").owlCarousel({loop:!1,margin:10,responsiveClass:!0,responsive:{0:{items:1,nav:!1},360:{items:2,nav:!1},760:{items:3,nav:!0},1000:{items:5,nav:!0},1200:{items:6,nav:!0,loop:!1}}}),$(".news-carousel").owlCarousel({loop:!1,margin:10,responsiveClass:!0,responsive:{0:{items:1,nav:!1},480:{items:2,nav:!0},768:{items:3,nav:!0},1024:{items:4,nav:!0,loop:!1}}}),$("#hn-review-carousel").owlCarousel({autoplay:!0,autoplayTimeout:5e3,loop:!0,margin:0,items:1}),$(".owl-carousel").owlCarousel({loop:!1,margin:10,responsiveClass:!0,responsive:{0:{items:2,nav:!1},480:{items:3,nav:!0},768:{items:4,nav:!0},1024:{items:4,nav:!0,loop:!1}}});

	// dropdown script
	$('.dropdown-toggle').dropdown({
		flip:false
	})
	$(document).ready(function(){
		$('.dropdown a.drop').on("click", function(e){
			$(this).next('ul').toggle();
			e.stopPropagation();
			e.preventDefault();
		});
	});
</script>	
</html>