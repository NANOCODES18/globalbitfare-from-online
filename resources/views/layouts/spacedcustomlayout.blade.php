<!doctype html>
<html class="no-js">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="favicon.png" rel="icon" type="image/x-icon" />
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
 <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<link href="{{asset('css/main.css')}}" rel="stylesheet"/>
<link href="{{asset('css/animate.min.css')}}" rel="stylesheet" />

<title>Global Bitfare| Your Trusted Bitcoin  Mining and Investment Company  :: {{$title}}</title>
<link rel="manifest" href="js/manifest.json">
<meta name="theme-color" content="#FD961A">
<meta name="msapplication-navbutton-color" content="#FD961A">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#FD961A">


<meta name="theme-color" content="#FD961A">
<meta name="msapplication-navbutton-color" content="#FD961A">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#FD961A">

<link href="{{asset('favicon.png')}}" rel="icon" type="image/x-icon" />
<link rel="icon" sizes="192x192" href="images/icon/icon-192.html">

<meta name="keywords" content="Global Bitfare, Bitcoin Investment, Bitcoin Trading Company" />
<meta property="og:image" content="images/icon/icon-310x310.png" />

<meta name="msapplication-square310x310logo" content="images/icon/icon-310x310.png">
<meta name="msapplication-square70x70logo" content="images/icon/icon-70x70.png">
<meta name="msapplication-square150x150logo" content="images/icon/icon-150x150.png">
<meta name="msapplication-wide310x150logo" content="images/icon/icon-310x150.png">

<link rel="apple-touch-icon-precomposed" href="images/icon/apple-touch-icon.png">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/icon/apple-touch-icon-57x57.html" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/icon/apple-touch-icon-72x72.html" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/icon/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/icon/apple-touch-icon-144x144.png" />


<meta property="og:site_name" content="Global Bitfare| Your Trusted Bitcoin  Mining and Investment Company">
<meta property="og:title" content="Your Trusted Bitcoin  Mining and Investment Company" />
<meta name="description" content="Global Bitfare  is totally different from its competitors trying to achieve something special starting with the...">
<meta property="og:description" content="Global Bitfare  is totally different from its competitors trying to achieve something special starting with the...">
<meta property="og:type" content="website" />

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/jquery.form.js')}}"></script>

<link href="{{asset('css/select2.min.css')}}" rel="stylesheet" />
<script>
$(document).ready(function() {
    function close_accordion_section() {
        $('.accordion .accordion-section-title').removeClass('active');
        $('.accordion .accordion-section-content').slideUp(300).removeClass('open');
    }

    $('.accordion-section-title').click(function(e) {
        // Grab current anchor value
        var currentAttrValue = $(this).attr('href');

        if($(e.target).is('.active')) {
            close_accordion_section();
        }else {
            close_accordion_section();

            // Add active class to section title
            $(this).addClass('active');
            // Open up the hidden content panel
            $('.accordion ' + currentAttrValue).slideDown(300).addClass('open');
        }

        e.preventDefault();
    });
});
</script>
<script>
var fade_outthis = function() {
	$(".alert").fadeOut().empty();
}
setTimeout(fade_outthis, 8000);

$(document).ready(function(){
    $(".closebtn").click(function(){
        $(this).parent().fadeOut().empty();
    });
});
</script>
</head>
<body class="loading_it">
<header class="header">
<div class="container row">
<ul class="topheader">
	<li class="logo">
		<div class="bodycontainer">
			<button class="btn round default right menu"><i class="fa fa-align-right"></i></button>
			<a href="{{route('index')}}">
				<img src="images/plogo.png" title="Global Bitfare| Your Trusted Bitcoin  Mining and Investment Company"/>
			</a>
		</div>
	</li>
	<li class="data">
		<div class="bodycontainer">
			<ul>
				<li><div>{{$company_features? $company_features->totaldeposit : 0}} USD</div>Payouts</li>
				<li><div>+5.26%</div>24 hour price</li>
				<li><div>12.820 BTC</div>24 hour volume</li>
				<li><div>{{$company_features? $company_features->onlinevisitors : 0}}</div>active traders</li>
				<li><div class="btcwdgt-price" bw-cur="usd"></div>Live Bitcoin price</li>
			</ul>
		</div>
	</li>
	<li class="account row">
		<div class="bodycontainer">
			<div class="button_container"><a href="{{route('login')}}" class="btn"><i class="fa fa-user"></i> SIGN IN</a></div>
				<div class="button_container"><a href="{{route('register')}}" class="btn v2"><i class="fa fa-user-plus"></i> REGISTER</a></div>		</div>
	</li>
</ul>
</div>


<!-- TradingView Widget BEGIN -->
	<div class="tradingview-widget-container" style="background: #1D1D1D; height: unset !important; overflow: hidden;">
		<div class="tradingview-widget-container__widget"></div>
		<!--<div class="tradingview-widget-copyright"><a href="#" rel="noopener" target="_blank"><span class="blue-text">Ticker-->
		<!--			Tape</span></a> by TradingView</div>-->
		<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js"
			async>
				{
					"symbols": [
						{
							"title": "S&P 500",
							"proName": "OANDA:SPX500USD"
						},
						{
							"title": "Nasdaq 100",
							"proName": "OANDA:NAS100USD"
						},
						{
							"title": "EUR/USD",
							"proName": "FX_IDC:EURUSD"
						},
						{
							"title": "BTC/USD",
							"proName": "BITSTAMP:BTCUSD"
						},
						{
							"title": "ETH/USD",
							"proName": "BITSTAMP:ETHUSD"
						}
					],
						"colorTheme": "dark",
							"isTransparent": true,
								"displayMode": "adaptive",
									"locale": "en"
				}
			</script>
	</div>
	<!-- TradingView Widget END -->






</header>
<nav class="center">
	<div class="bodycontainer">
		<ul>
			<li><a href="{{route('index')}}" class="active">HOME</a></li>
			<li><a href="{{route('about')}}">ABOUT US</a></li>
			<li><a href="{{route('index')}}#investment">INVESTMENT PLANS</a></li>
			<li><a href="#">LEGAL <i class="fa fa-chevron-down"></i></a>
				<ul>
					<li><a href="{{route('terms')}}">TERMS & CONDITIONS</a></li>
					<li><a href="{{route('faq')}}">FAQS</a></li>
				</ul>
			</li>
			<li><a href="{{route('contact')}}">CONTACT US</a></li>
			<li><a href="{{route('visref')}}">AFFILIATE</a></li>
		</ul>
	</div>
</nav>
<script>
	$(".menu").click( function(){
		$("nav").slideToggle();
	});
</script>

<div class="preloader">
<div id="bitcoin">
  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="200px" height="200px" viewBox="100 100 400 400" xml:space="preserve">
    <filter id="dropshadow" height="130%">
  <feGaussianBlur in="SourceAlpha" stdDeviation="5"/>
  <feOffset dx="0" dy="0" result="offsetblur"/>
  <feFlood flood-color="red"/>
<feComposite in2="offsetblur" operator="in"/>
<feMerge>
<feMergeNode/>
<feMergeNode in="SourceGraphic"/>
</feMerge>
</filter>
<path class="path" style="filter:url(#dropshadow)" fill="#000000" d="M446.089,261.45c6.135-41.001-25.084-63.033-67.769-77.735l13.844-55.532l-33.801-8.424l-13.48,54.068
	c-8.896-2.217-18.015-4.304-27.091-6.371l13.568-54.429l-33.776-8.424l-13.861,55.521c-7.354-1.676-14.575-3.328-21.587-5.073
	l0.034-0.171l-46.617-11.64l-8.993,36.102c0,0,25.08,5.746,24.549,6.105c13.689,3.42,16.159,12.478,15.75,19.658L208.93,357.23
	c-1.675,4.158-5.925,10.401-15.494,8.031c0.338,0.485-24.579-6.134-24.579-6.134l-9.631,40.468l36.843,9.188
	c8.178,2.051,16.209,4.19,24.098,6.217l-13.978,56.17l33.764,8.424l13.852-55.571c9.235,2.499,18.186,4.813,26.948,6.995
	l-13.802,55.309l33.801,8.424l13.994-56.061c57.648,10.902,100.998,6.502,119.237-45.627c14.705-41.979-0.731-66.193-31.06-81.984
	C425.008,305.984,441.655,291.455,446.089,261.45z M368.859,369.754c-10.455,41.983-81.128,19.285-104.052,13.589l18.562-74.404
	C306.28,314.65,379.774,325.975,368.859,369.754z M379.302,260.846c-9.527,38.187-68.358,18.781-87.442,14.023l16.828-67.489
	C327.767,212.14,389.234,221.02,379.302,260.846z"/>

</svg>
</div>
</div>
<script>
/*--window load functions--*/
jQuery(window).load(function(){
	var preLoder = $(".preloader");
	preLoder.fadeOut(1000);
	$("body").removeClass("loading_it");
});
</script>





<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+447458155378", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->



@yield('body')
@include('flash-message')

{{-- /*--window Scroll functions--*/
/*--window Scroll functions--*/ --}}
<script>
$(window).on('scroll', function () {
	/*--show and hide scroll to top --*/
	var ScrollTop = $('#back-to-top');
	if ($(window).scrollTop() > 500) {
		ScrollTop.fadeIn(1000);
	} else {
		ScrollTop.fadeOut(1000);
	}
});
</script>
<div class="footer_bg center">
		<div class="area">
			<div class="bodycontainer">
				<div style="z-index:2; position: relative">
					<h2 class="margintb">GET STARTED TODAY WITH BITCOIN INVESTMENT</h2>
					<p class="margintb">Open account for free and start trading Bitcoins!</p>
					<a href="get-started.html" class="btn">GET STARTED</a>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="bodycontainer">
			<div class="row">
				<div class="col-2 col-m-4 col-sm-12">
				<div class="padding">
					<h3>QUICK LINKS</h3>
					<ul>
						<li><a href="{{route('index')}}">Home</a></li>
						<li><a href="{{route('about')}}">About Us</a></li>
						<li><a href="{{route('faq')}}">FAQS</a></li>
						<li><a href="{{route('terms')}}">TERMS AND CONDITIONS</a></li>
						<li><a href="{{route('contact')}}">CONTACT US</a></li>
					</ul>
				</div>
				</div>
				<div class="col-2 col-m-4 col-sm-12">
				<div class="padding">
					<h3>HELP & SUPPORT</h3>
					<ul>
						<li><a href="https://cointelegraph.com/bitcoin-for-beginners/what-are-cryptocurrencies" target="_blank">WHAT IS BITCOIN?</a></li>
						<li><a href="https://www.investopedia.com/tech/how-to-buy-bitcoin/" target="_blank">HOW TO BUY BITCOIN</a></li>
						<li><a href="{{route('register')}}">REGISTER</a></li>
						<li><a href="{{route('login')}}">LOGIN</a></li>
						<li><a href="{{route('password.request')}}">FORGOT PASSWORD</a></li>
					</ul>
				</div>
				</div>
				<div class="col-3 col-m-4 col-sm-12">
				<div class="padding">
					<h3>CONTACT US</h3>
					<ul>
						<li>{{$compd? $compd->companyLocation : "coming soon"}}</li>
					</ul>
					<a href="mailto://{{$compd? $compd->companyEmail : "coming soon"}}"><h3>{{$compd? $compd->companyEmail : "coming soon"}}</h3></a>
					<a href="tel:{{$compd? $compd->companyPhone : "0"}}">{{$compd? $compd->companyPhone : "0"}}</a>
					<ul>
						<li>MON-SAT 08AM ⇾ 05PM</li>
						<ul class="social">
							<li><a href="#" class="circle"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="circle"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</ul>
				</div>
				</div>
				<div class="col-5 col-m-12 col-sm-12">
					<div class="col-6 col-m-6 col-sm-6" style="padding-bottom:0">
						<div class="value">$198.76B</div>
						MARKET CAP
						<div class="value">{{$company_features? $company_features->onlinevisitors : "coming soon"}}+</div>
						ACTIVE ACCOUNTS
					</div>
					<div class="col-6 col-m-6 col-sm-6" style="padding-bottom:0">
						<div class="value">243K</div>
						WEEKLY TRANSACTIONS
						<div class="value">127</div>
						SUPPORTED COUNTRIES
					</div>
					<div class="col-12" style="padding-top:0">
						<hr>
						SUPPORTED PAYMENT METHODS<br>
						<img src="{{asset('images/5b55bb652af1a.png')}}" style="width:40px">
						<img src="{{asset('images/1532345051h7.png')}}" style="width:40px">
						<img src="{{asset('images/1532345115h7.png')}}" style="width:40px">
					</div>
				</div>
			</div>
		<hr>
		<p class="center">Copyright © 2022  Global Bitfare, All Rights Reserved</p>
		</div>
	</footer>
	<script src="js/particle.js"></script>
	<script>
	particlesJS("particles-js", {
		"particles":{ "number":{"value":100,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}
	},"retina_detect":true});
	</script>
	<script>
	  (function(b,i,t,C,O,I,N) {
		window.addEventListener('load',function() {
		  if(b.getElementById(C))return;
		  I=b.createElement(i),N=b.getElementsByTagName(i)[0];
		  I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
		},false)
	  })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
	</script>
	</body>

	</html>
