

<!DOCTYPE html>
<html>
<head>
@include("header")
	<!--start-ckeckout-->
	<div class="ckeckout">
		<div class="container">
			<div class="ckeckout-top">
			<div class="cart-items">
			 <h3>Alışveriş Sepetim (3)</h3>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});
					});
			   </script>
			<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cart-header1').fadeOut('slow', function(c){
							$('.cart-header1').remove();
						});
						});
					});
			   </script>
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cart-header2').fadeOut('slow', function(c){
							$('.cart-header2').remove();
						});
						});
					});
			   </script>

			<div class="in-check" >
				<ul class="unit">
					<li><span>Seçili Ürün</span></li>
					<li><span>Ürün Adı</span></li>
					<li><span>Birim Fiyatı</span></li>
					<li><span>Teslimat Detayları</span></li>
					<li> </li>
					<div class="clearfix"> </div>
				</ul>
				<ul class="cart-header">
					<div class="close1"> </div>
						<li class="ring-in"><a href="single" ><img src="images/c-1.jpg" class="img-responsive" alt=""></a>
						</li>
						<li><span class="name">Analog Watches</span></li>
						<li><span class="cost">$ 290.00</span></li>
						<li><span>Free</span>
						<p>Delivered in 2-3 business days</p></li>
					<div class="clearfix"> </div>
				</ul>
				<ul class=" cart-header1">
					<div class="close2"> </div>
						<li class="ring-in"><a href="single" ><img src="images/c-2.jpg" class="img-responsive" alt=""></a>
						</li>
						<li><span class="name">Analog Watches</span></li>
						<li><span class="cost">$ 300.00</span></li>
						<li><span>Free</span>
						<p>Delivered in 2-3 business days</p></li>
						<div class="clearfix"> </div>
				</ul>
				<ul class="cart-header2">
					<div class="close3"> </div>
						<li class="ring-in"><a href="single" ><img src="images/c-3.jpg" class="img-responsive" alt=""></a>
						</li>
						<li><span class="name">Analog Watches</span></li>
						<li><span class="cost">$ 360.00</span></li>
						<li><span>Free</span>
						<p>Delivered in 2-3 business days</p></li>
						<div class="clearfix"> </div>
				</ul>
			</div>
			</div>
		 </div>
		</div>
	</div>
	<!--end-ckeckout-->
	<!--information-starts-->
	<div class="information">
		<div class="container">
			<div class="infor-top">
				<div class="col-md-3 infor-left">
					<h3>Follow Us</h3>
					<ul>
						<li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>
						<li><a href="#"><span class="twit"></span><h6>Twitter</h6></a></li>
						<li><a href="#"><span class="google"></span><h6>Google+</h6></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>Information</h3>
					<ul>
						<li><a href="#"><p>Specials</p></a></li>
						<li><a href="#"><p>New Products</p></a></li>
						<li><a href="#"><p>Our Stores</p></a></li>
						<li><a href="contact"><p>Contact Us</p></a></li>
						<li><a href="#"><p>Top Sellers</p></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>My Account</h3>
					<ul>
						<li><a href="account"><p>My Account</p></a></li>
						<li><a href="#"><p>My Credit slips</p></a></li>
						<li><a href="#"><p>My Merchandise returns</p></a></li>
						<li><a href="#"><p>My Personal info</p></a></li>
						<li><a href="#"><p>My Addresses</p></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>Store Information</h3>
					<h4>The company name,
						<span>Lorem ipsum dolor,</span>
						Glasglow Dr 40 Fe 72.</h4>
					<h5>+955 123 4567</h5>
					<p><a href="mailto:example@email.com">contact@example.com</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--information-end-->
@include("footer")
</body>
</html>
