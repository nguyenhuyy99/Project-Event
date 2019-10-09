@extends('master')
@section('content')

<main>
			<section class="register bg-main">
				<div class="container">
					<div class="box-register">
						<ul class="menu-login-register">
							<li class="item"><a href="{{route('login')}}">ĐĂNG NHẬP</a></li>
							<li class="item active"><a href="{{route('signin')}}">ĐĂNG KÍ</a></li>
						</ul>
						<div class="box-form-register">
							<form action="#">
								<div class="form-row">
									<div class="form-group col-lg-12">
										<label for="email">Email *</label>
										<div class="form-input">
											<input id="email" type="text" placeholder="Địa chỉ email *"><span class="error">Bắt lỗi</span>
										</div>
									</div>
									<div class="form-group col-lg-12">
										<label for="user-name">Username *</label>
										<div class="form-input">
											<input id="user-name" type="text" placeholder="Tên tài khoản *"><span class="error">Bắt lỗi</span>
										</div>
									</div>
									<div class="form-group col-lg-12">
										<label for="pass">Password *</label>
										<div class="form-input">
											<input id="pass" type="password" placeholder="Mật khẩu *"><span class="error">Bắt lỗi</span>
										</div>
									</div>
									<div class="form-group col-lg-12">
										<label for="repass">Retype Password *</label>
										<div class="form-input">
											<input id="repass" type="password" placeholder="Nhập lại mật khẩu *"><span class="error">Bắt lỗi</span>
										</div>
									</div>
									<div class="form-group col-lg-12">
										<label for="address">Phone Number *</label>
										<div class="form-input">
											<input id="address" type="phone" placeholder="Số điện thoại"><span class="error">Bắt lỗi</span>
										</div>
									</div>
									<div class="form-group col-lg-12">
										<label for="address">Address</label>
										<div class="form-input">
											<input id="address" type="text" placeholder="Địa chỉ"><span class="error">Bắt lỗi</span>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-lg-6">
										<label for="address">Date of birth *</label>
										<div class="form-input">
											<input type="date">
										</div>
									</div>
									<div class="form-group col-lg-6">
										<label for="address">Gender *</label>
										<div class="form-input">
											<label class="check-box" for="nam">Nam</label>
											<input id="nam" type="radio" name="gender" checked>
											<label class="check-box" for="nu">Nữ</label>
											<input id="nu" type="radio" name="gender">
										</div>
									</div>
									<div class="form-group col-lg-6">
										<label class="choose-file" for="file-avatar">Chọn ảnh đại diện</label>
										<div class="form-input">
											<input id="file-avatar" type="file" hidden>
										</div>
									</div>
									<div class="form-group col-lg-6">
										<div class="form-input">
											<select id="vip" name="">
												<option value="">Normal</option>
												<option value="">V.I.P</option>
											</select>
										</div>
									</div>
									<div class="form-group col-lg-12">
										<P>To learn more about how Music.com collects, uses, shares and protects your personal data please read our full Privacy Policy.</P>
										<p>To learn more about how Music.com collects, uses, shares and protects your personal data please read our full Privacy Policy.</p>
									</div>
								</div>
								<button class="btn">ĐĂNG KÝ</button>
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