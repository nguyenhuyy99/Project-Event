@extends('master')
@section('content')
<main>
			<section class="login bg-main">
				<div class="container">
					<div class="box-login">
						<ul class="menu-login-register">
							<li class="item active"><a href="{{route('login')}}">ĐĂNG NHẬP</a></li>
							<li class="item"><a href="{{route('signin')}}">ĐĂNG KÍ</a></li>
						</ul>
						<div class="login-with"><span>LOGIN WITH</span><a href="#"><img src="./img/icons/google.svg" alt="" srcset=""></a><a href="#"><img src="./img/icons/facebook.svg" alt="" srcset=""></a></div>
						<div class="or-login"><span>or</span></div>
						<div class="box-form-login">
							<form action="#">
								<div class="form-group">
									<label for="user-name">Tên tài khoản hoặc Email:</label>
									<div class="form-input">
										<input id="user-name" type="text" placeholder="Username or e-mail"><span class="error">Bắt lỗi</span>
									</div>
								</div>
								<div class="form-group">
									<label for="pass">Mật khẩu:</label>
									<div class="form-input">
										<input id="pass" type="password" placeholder="Password"><span class="error">Bắt lỗi</span>
									</div>
									<div class="forgot-pass"><a href="#">Quên mật khẩu ???</a></div>
								</div>
								<button class="btn">ĐĂNG NHẬP</button>
							</form>
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer>
			<div class="container">
				<div class="row list-info-company">
					<div class="col-lg-6">
						<h5>HOGASH STUDIOS</h5>
						<p>Were a full-service digital agency that believes being a Favorite brand is more valuable than just being a Famous one. We craft beautifully useful, connected ecosystems that grow businesses and build enduring relationships between brands and humans.</p>
					</div>
					<div class="col-lg-2">
						<h5>COMPANY</h5>
						<ul class="list-item-footer">
							<li class="item-footer"><a href="#">Our Blog</a></li>
							<li class="item-footer"><a href="#">Instagram</a></li>
							<li class="item-footer"><a href="#">Snapchat</a></li>
							<li class="item-footer"><a href="#">Facebook</a></li>
							<li class="item-footer"><a href="#">Twitter</a></li>
							<li class="item-footer"><a href="#">Dribbble</a></li>
						</ul>
					</div>
					<div class="col-lg-2">
						<h5>MEMBER</h5>
						<ul class="list-item-footer">
							<li class="item-footer"><a href="#">Home</a></li>
							<li class="item-footer"><a href="#">About</a></li>
							<li class="item-footer"><a href="#">Pricing</a></li>
							<li class="item-footer"><a href="#">Blog</a></li>
							<li class="item-footer"><a href="#">Services</a></li>
							<li class="item-footer"><a href="#">Shop</a></li>
						</ul>
					</div>
					<div class="col-lg-2">
						<h5>FOLLOW</h5>
						<ul class="list-item-footer">
							<li class="item-footer"><a href="#">Account</a></li>
							<li class="item-footer"><a href="#">Billing</a></li>
							<li class="item-footer"><a href="#">Membership</a></li>
							<li class="item-footer"><a href="#">Receipt</a></li>
							<li class="item-footer"><a href="#">Invoice</a></li>
						</ul>
					</div>
				</div>
				<div class="coppy-right">
					<h3>@ 2020 <a href="https://www.facebook.com/hoangviet.hung.009"><span>A EVENT | ALL COPYRIGHT BY A EVENT</span></a></h3>
					<p>This is Project of Hùng, Tuyến, Huy, Sơn.</p>
				</div>
            </div>
@endsection