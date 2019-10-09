<!DOCTYPE html>
<html lang="en">
	<head>
		<title>A Event | Trang Chủ</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <base href="{{asset('')}}">
		<style>#loading{-webkit-transition:1.5s;-o-transition:1.5s;position:fixed;top:0;right:0;bottom:0;left:0;z-index:99999;transition:1.5s;background:#000;width:100%;height:100%}#loading #progress{-webkit-transition:1.5s;-o-transition:1.5s;display:none;transition:1.5s;background:#000;width:0;height:1px}#loading #progress,#loading .progstat-wrapper{-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);position:absolute;top:50%;transform:translateY(-50%)}#loading .progstat-wrapper{margin-top:0;width:100%;color:#fff;font-size:14px;font-weight:300;letter-spacing:3px;text-align:center}#loading .logo-loader{-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);margin-top:-100px;width:150px;height:150px}</style>
		<script>!function(){function n(n){return document.getElementById(n)}document.addEventListener("DOMContentLoaded",function(){var e=n("loading"),t=n("progress"),o=n("progstat"),r=document.images,i=0,d=r.length;if(0==d)return u();function a(){var n=100/d*(i+=1)<<0;if(t.style.width=n,o.innerHTML=n,i===d)return u()}function u(){e.style.opacity=0,setTimeout(function(){e.style.display="none";var n=document.getElementById("loading");n.parentNode.removeChild(n)},1500)}for(var c=0;c<d;c++){var s=new Image;s.onload=a,s.onerror=a,s.src=r[c].src}},!1)}();</script>
		<link rel="stylesheet" href="./source/css/core.min.css">
		<link rel="stylesheet" href="./source/css/main.min.css"><link href="https://fonts.googleapis.com/css?family=K2D&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pangolin&display=swap" rel="stylesheet">
	</head>
	<body>
		<div id="loading">
			<div class="logo-loader"><img src="./source/img/icons/loading.gif" alt=""></div>
			<div class="progstat-wrapper">Loading: <span id="progstat">0</span>%</div>
			<div id="progress"></div>
		</div>
		<div id="fb-root"></div>
		<header>
			<div class="container">
				<div class="row">
					<div class="left-menu">
						<div class="logo"><a href="{{route('index')}}"><img src="./source/img/logo.png" alt=""></a></div>
					</div>
					<div class="add-event"><a href="{{route('login')}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" class="sc-ckVGcZ cRPCZL"><g fill="none" fill-rule="evenodd"><circle id="oval-plus" class="sc-dxgOiQ kSEybs" stroke-width="2" cx="12" cy="12" r="11"></circle><path d="M6,12 L18,12" id="Line" class="sc-dxgOiQ kSEybs" stroke-width="2" stroke-linecap="square"></path><path d="M12,6 L12,18" id="Line2" class="sc-dxgOiQ kSEybs" stroke-width="2" stroke-linecap="square"></path></g></svg><span>ADD A EVENT</span></a></div>
					<div class="button-login"><a href="{{route('login')}}"><svg class="sc-eNPDpu cjclFo" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26"><g transform="translate(1 1)" stroke="#fff" stroke-width="2" fill="none"><circle cx="12" cy="12" r="12"></circle><path d="M15.65 6.78a3.56 3.56 0 0 0-3.5-3.65H12a3.56 3.56 0 0 0-3.65 3.5v.15c0 .42.42 2.45.42 2.45.3 1.78 1.46 3.3 3.23 3.3s2.92-1.47 3.23-3.3c0 0 .42-2.03.42-2.45zM3.13 20.09v-.37c0-1.62 1.2-2.82 2.82-3.23l6.05-1.1 6.1 1.15c1.57.47 2.77 1.56 2.77 3.23v.37"></path></g></svg><span>Login</span></a></div>
				</div>
			</div>
        </header>
        
    @yield('content')
		        




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
		</footer>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?&amp;key=AIzaSyCHvmyTralDp2Y0m7zEiN185u1vtArcC5s&amp;libraries=places"></script>
		<script type="text/javascript" src="./source/js/map.js"></script>
		<script type="text/javascript" src="./source/js/core.min.js"></script>
		<script type="text/javascript" src="./source/js/main.min.js"></script>
	</body>
</html>