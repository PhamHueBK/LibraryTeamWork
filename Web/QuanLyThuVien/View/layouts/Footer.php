
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLongTitle">Đăng nhập</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<div class="modal-body col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
				<form action="?mode=reader&act=login" method="POST" class="form-horizontal" role="form">
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" id="email" placeholder="Email" required="true">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" id="password" required="true">
					</div>
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary">Đăng nhập</button>
					</div>
					
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
				
			</div>

		</div>
	</div>
</div>
<!-- //Modal1 -->	
<!-- Modal2 -->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLongTitle">Đăng ký tài khoản</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<div class="modal-body col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
				<form action="?mode=reader&act=create" method="POST" class="form-horizontal" role="form">
					<div class="form-group">
						<label>Email <span style="color: red">*</span></label>
						<input type="email" name="email" class="form-control" id="email" placeholder="Email" required="true">
					</div>

					<div class="form-group">
						<label>Password <span style="color: red">*</span></label>
						<input type="password" name="password" class="form-control" id="password" required="true">
					</div>
					<div class="form-group">
						<label>Họ tên <span style="color: red">*</span></label>
						<input type="txt" name="tenBanDoc" class="form-control" id="tenBanDoc" placeholder="Họ và tên" required="true">
					</div>
					<div class="form-group">
						<label>Ngày sinh</label>
						<input type="date" name="ngaySinh" class="form-control" id="ngaySinh">
					</div>
					<div class="form-group">
						<label>Giới tính</label>
						<div class="radio">
							<label>
								<input type="radio" name="gioiTinh" id="gioiTinh" value="Nam" checked="checked">Nam
							</label>
							<label>
								<input type="radio" name="gioiTinh" id="gioiTinh" value="Nữ">Nữ
							</label>
						</div>
					</div>
					<div class="form-group">
						<label>Địa chỉ</label>
						<input type="txt" name="diaChi" class="form-control" id="diaChi">
					</div>
					<div class="form-group">
						<label>Số điện thoại</label>
						<input type="txt" name="soDienThoai" class="form-control" id="soDienThoai">
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Đăng ký tài khoản</button>
					</div>
					
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
				
			</div>

		</div>
	</div>
</div>
<div class="clearfix"> </div> 
<!-- //Modal2 -->	

<!-- modal -->
<div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div> 
			<div class="modal-body">
				<img src="View/images/g10.jpg" alt=""> 
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate. </p>
			</div> 
		</div>
	</div>
</div>
<!-- //modal --> 
<!-- //about -->
<!--stats-->
<div class="stats" id="stats">
	<div class="container">
		<div class="stats-info">
			<div class="col-md-3 col-xs-3 stats-grid slideanim">
				<i class="fa fa-users" aria-hidden="true"></i>
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='12760' data-delay='.5' data-increment="1">12760</div>
				
				<h4 class="stats-info">FOREIGN FOLLOWERS</h4>
			</div>
			<div class="col-md-3 col-xs-3 stats-grid slideanim">
				<i class="fa fa-book" aria-hidden="true"></i>
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='31000' data-delay='.5' data-increment="1">31000</div>
				
				<h4 class="stats-info">CLASSES COMPLETE</h4>
			</div>
			<div class="col-md-3 col-xs-3 stats-grid slideanim">
				<i class="fa fa-trophy" aria-hidden="true"></i>
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='79000' data-delay='.5' data-increment="10">79000</div>
				
				<h4 class="stats-info">STUDENTS ENROLLED</h4>
			</div>
			<div class="col-md-3 col-xs-3 stats-grid slideanim">
					<i class="fa fa-user" aria-hidden="true"></i>
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='600' data-delay='.5' data-increment="1">600</div>
			
				<h4 class="stats-info">CERTIFIED TEACHERS</h4>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--//stats-->
<!-- services -->
<div class="services" id="services" >
	<div class="container">  
		<h3 class="w3l-title">Dịch vụ của chúng tôi</h3>
		<div class="w3layouts_header">
			<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
		</div>
		<div class="services-w3ls-row">
			<div class="col-xs-4 services-grid agileits-w3layouts">
				<span class="fa fa-graduation-cap" aria-hidden="true"></span>
				<h6>01</h6>
				<h5>Thiết bị học tập</h5>
				<p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
			</div>
			<div class="col-xs-4 services-grid agileits-w3layouts">
				<h6>02</h6>
				<h5>Nói chuyện cùng diễn giả</h5>
				<p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
				<span class="fa fa-user-o grid-w3l-ser" aria-hidden="true"></span>
			</div>
			<div class="col-xs-4 services-grid agileits-w3layouts">
				<span class="fa fa-book" aria-hidden="true"></span>
				<h6>03</h6>
				<h5>Đặt & Mượn sách</h5>
				<p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
			</div> 
			<div class="clearfix"> </div>
		</div>  
	</div>
</div>
<!-- //services -->
<!-- Gallery -->
<section class="portfolio-w3ls" id="gallery">
		<h3 class="w3l-title">Hình ảnh hoạt động của thư viện</h3>
		<div class="w3layouts_header">
			<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
		</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="View/images/g1.jpg" class="swipebox"><img src="View/images/g1.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HUST Library</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="View/images/g2.jpg" class="swipebox"><img src="View/images/g2.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HUST Library</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="View/images/g3.jpg" class="swipebox"><img src="View/images/g3.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HUST Library</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="View/images/g7.jpg" class="swipebox"><img src="View/images/g7.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HUST Library</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="View/images/g5.jpg" class="swipebox"><img src="View/images/g5.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HUST Library</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
					</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="View/images/g6.jpg" class="swipebox"><img src="View/images/g6.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HUST Library</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="View/images/g11.jpg" class="swipebox"><img src="View/images/g11.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HUST Library</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="View/images/g8.jpg" class="swipebox"><img src="View/images/g8.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HUST Library</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
					<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="View/images/g9.jpg" class="swipebox"><img src="View/images/g9.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HUST Library</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="View/images/g10.jpg" class="swipebox"><img src="View/images/g10.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HUST Library</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="View/images/g4.jpg" class="swipebox"><img src="View/images/g4.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HUST Library</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="View/images/g12.jpg" class="swipebox"><img src="View/images/g12.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HUST Library</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="clearfix"> </div>
</section>
<!-- //gallery -->
<!-- team -->
<div class="team-w3l" id="team">
	<div class="container">
		<h3 class="w3l-title">Các diễn giả nổi tiếng</h3>
		<div class="w3layouts_header">
			<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
		</div>
		<div class="team-w3l-grid">
			<div class="col-md-4 col-xs-4 about-poleft t1">
				<div class="about_img"><img src="View/images/t1.jpg" alt="">
				  <h5>Victoria</h5>
				  <div class="about_opa">
					<p>Professor</p>
					<ul class="fb_icons2 text-center">
						<li><a class="fa fa-facebook" href="#"></a></li>
						<li><a class="fa fa-twitter" href="#"></a></li>
						<li><a class="fa fa-google" href="#"></a></li>
						<li><a class="fa fa-linkedin" href="#"></a></li>
						<li><a class="fa fa-pinterest-p" href="#"></a></li>
					</ul>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 about-poleft t2">
				<div class="about_img"><img src="View/images/t2.jpg" alt="">
				  <h5>Darponia</h5>
				  <div class="about_opa">
					<p>Senior Lecturers</p>
					<ul class="fb_icons2 text-center">
						<li><a class="fa fa-facebook" href="#"></a></li>
						<li><a class="fa fa-twitter" href="#"></a></li>
						<li><a class="fa fa-google" href="#"></a></li>
						<li><a class="fa fa-linkedin" href="#"></a></li>
						<li><a class="fa fa-pinterest-p" href="#"></a></li>
					</ul>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 about-poleft t3">
				<div class="about_img"><img src="View/images/t3.jpg" alt="">
				  <h5>Kylie</h5>
				  <div class="about_opa">
					<p>Lecturers</p>
					<ul class="fb_icons2 text-center">
						<li><a class="fa fa-facebook" href="#"></a></li>
						<li><a class="fa fa-twitter" href="#"></a></li>
						<li><a class="fa fa-google" href="#"></a></li>
						<li><a class="fa fa-linkedin" href="#"></a></li>
						<li><a class="fa fa-pinterest-p" href="#"></a></li>
					</ul>
				  </div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="team-w3l-grid grid-2-team">
			<div class="col-md-4 col-xs-4 about-poleft t1">
				<div class="about_img"><img src="View/images/t4.jpg" alt="">
				  <h5>Cameron</h5>
				  <div class="about_opa">
					<p>Professor</p>
					<ul class="fb_icons2 text-center">
						<li><a class="fa fa-facebook" href="#"></a></li>
						<li><a class="fa fa-twitter" href="#"></a></li>
						<li><a class="fa fa-google" href="#"></a></li>
						<li><a class="fa fa-linkedin" href="#"></a></li>
						<li><a class="fa fa-pinterest-p" href="#"></a></li>
					</ul>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 about-poleft t2">
				<div class="about_img"><img src="View/images/t5.jpg" alt="">
				  <h5>Darponia</h5>
				  <div class="about_opa">
					<p>Senior Lecturers</p>
					<ul class="fb_icons2 text-center">
						<li><a class="fa fa-facebook" href="#"></a></li>
						<li><a class="fa fa-twitter" href="#"></a></li>
						<li><a class="fa fa-google" href="#"></a></li>
						<li><a class="fa fa-linkedin" href="#"></a></li>
						<li><a class="fa fa-pinterest-p" href="#"></a></li>
					</ul>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 about-poleft t3">
				<div class="about_img"><img src="View/images/t6.jpg" alt="">
				  <h5>Austin</h5>
				  <div class="about_opa">
					<p>Lecturers</p>
					<ul class="fb_icons2 text-center">
						<li><a class="fa fa-facebook" href="#"></a></li>
						<li><a class="fa fa-twitter" href="#"></a></li>
						<li><a class="fa fa-google" href="#"></a></li>
						<li><a class="fa fa-linkedin" href="#"></a></li>
						<li><a class="fa fa-pinterest-p" href="#"></a></li>
					</ul>
				  </div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //team -->
<!-- contact -->
<div id="mail" class="contact">
	<div class="container">
		<h3 class="w3l-title">Thông tin liên hệ</h3>
		<div class="w3layouts_header">
			<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
		</div>
		<div class="agile_banner_bottom_grids">
			<div class="col-md-4 col-xs-4 w3_agile_contact_grid">
				<div class="agile_contact_grid_left">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
				</div>
				<div class="agile_contact_grid_right agilew3_contact">
					<h4>Địa chỉ</h4>
					<p>Trường đại học Bách khoa Hà Nội</p>
					<p>Số 1 Đại Cồ Việt</p>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 w3_agile_contact_grid">
				<div class="agile_contact_grid_left agileits_w3layouts_left">
					<i class="fa fa-mobile" aria-hidden="true"></i>
				</div>
				<div class="agile_contact_grid_right agileits_w3layouts_right">
					<h4>Số điện thoại</h4>
					<p>+(1234) 2332 232 <span>+(1236) 2334 232</span></p>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 w3_agile_contact_grid">
				<div class="agile_contact_grid_left agileits_w3layouts_left1">
					 <i class="fa fa-envelope-o" aria-hidden="true"></i>
				</div>
				<div class="agile_contact_grid_right agileits_w3layouts_right1">
					<h4>Email</h4>
					<p><a href="mailto:info@example.com">info@example1.com</a>
						<span><a href="mailto:info@example.com">info@example2.com</a></span></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="w3l-form">
			<h3 class="w3l-title">Phản hồi của bạn</h3>
			<div class="contact-grid1">
				<div class="contact-top1">
					<form action="#" method="post">
						<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<label>Họ tên*</label>
							<input type="text" name="Name" placeholder="Name" required="true">
							<label>E-mail*</label>
							<input type="email" name="E-mail" placeholder="E-mail" required="true">
						</div>
						<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<label>Số điện thoại*</label>
							<input type="text" name="number" placeholder="Phone Number" required="true">
							<label>Chủ đề*</label>
							<input type="text" name="subject" placeholder="Subject" required="true">
						</div>
						<div class="form-group">
							<label>Nội dung phản hồi*</label>
							<textarea placeholder name="Message" required="true"></textarea>
						</div>
							<input type="submit" value="Send">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="wthree_footer_grid_left">
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
				<h4>About Us</h4>
				<p>Donec viverra nunc eu neque porta, quis laoreet nisl gravida. Proin gravida, 
					diam ut consectetur porttitor.</p>
			</div>
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
				<h4>Navigation</h4>
				<ul>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="index.html">Home</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#about" class="scroll">About Us</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#services" class="scroll">Services</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#team" class="scroll">Team</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#gallery" class="scroll">Gallery</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#mail" class="scroll">Mail Us</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1 w3l-3">
				<h4>Others</h4>
				<ul>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Media</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Mobile Apps</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Privacy Policy</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1 wthree_footer_grid_right1">
				<h4>Contact Us</h4>
				<ul>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+(000) 123 311</li>
					<li><i class="fa fa-fax" aria-hidden="true"></i>+123 421</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="w3layouts_copy_right">
	<div class="container">
		<p>© 2017 Scholarly. All rights reserved | Design by <a href="#">Pham Hue.</a></p>
	</div>
</div>
<!-- //footer -->

<!-- js-scripts -->			
<!-- js-files -->
<!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js-files -->
<!-- Baneer-js -->

<!-- smooth scrolling -->
<script src="View/js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->
<!-- stats -->
<script type="text/javascript" src="View/js/numscroller-1.0.js"></script>
<!-- //stats -->
<!-- moving-top scrolling -->
<script type="text/javascript" src="View/js/move-top.js"></script>
<script type="text/javascript" src="View/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //moving-top scrolling -->
<!-- gallery popup -->
<script src="View/js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
jQuery(function($) {
	$(".swipebox").swipebox();
});
</script>
<!-- //gallery popup -->
<!--/script-->
	<script src="View/js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
			</script>
<!-- //Baneer-js -->
<!-- Calendar -->
<script src="View/js/jquery-ui.js"></script>
	<script>
	  $(function() {
		$( "#datepicker" ).datepicker();
	 });
	</script>
<script>
    $(document).ready(function() {
        $('#table').DataTable({
            responsive: true
        });
    });
    </script>
<!-- //Calendar -->	

<!-- //js-scripts -->
</body>
</html>