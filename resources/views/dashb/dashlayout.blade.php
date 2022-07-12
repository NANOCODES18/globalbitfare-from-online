
<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="MwqyOMZC0JrX14sssEcwQWuKa3Vrs2mmYg6tdleD">
    <title>dashboard | User panel</title>
				<!-- Fonts and icons -->
		<script src="dash/js/plugin/webfont/webfont.min.js"></script>
	<!-- Sweet Alert -->
		<script src="dash/js/plugin/sweetalert/sweetalert.min.js "></script>
		<!-- CSS Files -->
		<link rel="stylesheet" href="dash/css/bootstrap.min.css">
        <link rel="stylesheet" href="dash/css/fonts.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/all.min.css" integrity="sha512-6c4nX2tn5KbzeBJo9Ywpa0Gkt+mzCzJBrE1RB6fmpcsoN+b/w/euwIMuQKNyUoU/nToKN3a8SgNOtPrbW12fug==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="dash/css/atlantis.min.css">
		<link rel="stylesheet" href="dash/css/customs.css">
		<link rel="stylesheet" href="dash/css/style.css">
		<link rel="stylesheet" href="dash/css/atlantis.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

		<!-- Bootstrap Notify -->
		<script src="dash/js/plugin/bootstrap-notify/bootstrap-notify.min.js "></script>
		<script src="dash/js/plugin/sweetalert/sweetalert.min.js "></script>
		<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>
		<!-- Livewire Styles -->
<style>
    [wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid] {
        display: none;
    }

    [wire\:offline] {
        display: none;
    }

    [wire\:dirty]:not(textarea):not(input):not(select) {
        display: none;
    }

    input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {
        animation-duration: 50000s;
        animation-name: livewireautofill;
    }

    @keyframes livewireautofill { from {} }
</style>

		 <!--PayPal-->
		 <script>
            // Add your client ID and secret
            var PAYPAL_CLIENT = 'iidjdjdj';
            var PAYPAL_SECRET = 'jijdjkdkdk';

            // Point your server to the PayPal API
            var PAYPAL_ORDER_API = 'https://api.paypal.com/v2/checkout/orders/';
        </script>
        <script src="https://www.paypal.com/sdk/js?client-id=iidjdjdj"></script>

</head>
<body data-background-color="dark">
    <div id="app">

        <!--/PayPal-->


        <!--End of Tawk.to Script-->
		<div class="wrapper">
			        <div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="blue">
        <a href="#" class="logo" style="font-size: 27px; color:#fff;">
            Global Bitfare
        </a>
        <button class="ml-auto navbar-toggler sidenav-toggler" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <!-- <i class="icon-menu"></i> -->
                <i class="fas fa-bars"></i>
            </span>
        </button>
        <button class="topbar-toggler more"><i class="fas fa-ellipsis-v"></i></button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <!-- <i class="icon-menu"></i> -->
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue">

        <div class="container-fluid">
            <div class="text-center d-md-block d-none">
                <a href="{{route("userdashb_deposit")}}" class="pricing-action btn btn-warning btn-sm">Fund your Account</a> &nbsp;
                <a href="{{route('userdashb_withdrawal')}}" class="pricing-action btn btn-danger btn-sm">Withdraw Funds</a>

            </div>
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

                <!-- <li class="nav-item hidden-caret">
                    <form action="javascript:void(0)" method="post" id="styleform" class="form-inline">

                        <div class="form-group">
                            <label class="style_switch">
                                <input name="style" id="style" type="checkbox" value="true" class="modes">
                                <span class="slider round"></span>
                            </label>
                        </div>
                        <input type="hidden" name="_token" value="MwqyOMZC0JrX14sssEcwQWuKa3Vrs2mmYg6tdleD">
                    </form>
                </li> -->
                <li class="nav-item hidden-caret">
                    <div id="google_translate_element"></div>
                </li>

                <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <div class="user-box">

                                    <div class="u-text">
                                        <h4>{{Auth::user()->name}}</h4>
                                        <p class="text-muted">{{Auth::user()->email}}</p><a href="{{route('userdashb_profile')}}" class="btn btn-xs btn-secondary btn-sm">Account Settings</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('userdashb_deposit')}}">Deposit</a>
                                <a class="dropdown-item" href="{{route('userdashb_withdrawal')}}">Withdraw</a>
                                <a class="dropdown-item" href="{{route('userdashb_investment_plans')}}">Buy Plan</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('logout')}}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                                    </a>
                                <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                    @csrf
                                    <input type="hidden" name="_token" value="MwqyOMZC0JrX14sssEcwQWuKa3Vrs2mmYg6tdleD">
                                </form>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>
<!-- <script type="text/javascript">
    //create investment
        $("#styleform").on('change',function(){
        $.ajax({
            url: "https://pggg.xwayminage.com/dashboard/changetheme",
            type: 'POST',
            data:$("#styleform").serialize(),
            success: function (data) {
				location.reload(true);
            },
            error: function (data) {
                console.log(data);
            },

        });
    });

</script>  -->
       <!-- Stored in resources/views/child.blade.php -->

<!-- Sidebar -->

<div class="sidebar sidebar-style-2" data-background-color="light">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{Auth::user()->name}}

                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="{{route('userdashb_profile')}}">
                                    <span class="link-collapse">Account Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item ">
                    <a href="{{route('userdashb')}}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item d-md-none  ">
                    <a href="{{route('userdashb_deposit')}}">
                        <i class="fa fa-download " aria-hidden="true"></i>
                        <p>Fund your Account</p>
                    </a>
                </li>
                <li class="nav-item d-md-none  ">
                    <a href="{{route('userdashb_withdrawal')}}">
                        <i class="fa fa-arrow-alt-circle-up " aria-hidden="true"></i>
                        <p>Withdraw Funds</p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="{{route('userdashb_investment_history')}}">
                        <i class="fa fa-signal " aria-hidden="true"></i>
                        <p>Profit Record</p>
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="{{route('transactionhistory')}}">
                        <i class="fa fa-briefcase " aria-hidden="true"></i>
                        <p>Transactions history</p>
                    </a>
                </li>
                                    <li class="nav-item ">
                        <a href="{{route('assets_and_exchange')}}">
                            <i class="fa fa-coins" aria-hidden="true"></i>
                            <p>Crypto Exchange</p>
                        </a>
                    </li>

                <li class="nav-item  ">
                    <a data-toggle="collapse" href="#mpack">
                        <i class="fas fa-cubes"></i>
                        <p>Invest</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="mpack">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{route('userdashb_investment_plans')}}">
                                    <span class="sub-item">Subscribe to a Plan</span>
                                </a>
                            </li>
                            <li>
                                <a href="myplans.html">
                                    <span class="sub-item">My Investment</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a href="{{route('userdashb_referrals')}}">
                        <i class="fa fa-recycle " aria-hidden="true"></i>
                        <p>Refer Users</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{route('contact')}}">
                        <i class="fa fa-life-ring" aria-hidden="true"></i>
                        <p>Help/Support</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->











@include("flash-message")

@yield('dashbody')











{{--
footer starts --}}


<footer class="footer bg-light text-dark">
    <div class="container-fluid">
        <div class="text-center row copyright text-align-center">
            <p>All Rights Reserved &copy; Global Bitfare 2022</p>
        </div>
    </div>
</footer>
</div>
</div>
</div>

<!--   Core JS Files   -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="dash/js/core/popper.min.js"></script>
<script src="dash/js/core/bootstrap.min.js "></script>
<script src="dash/js/customs.js"></script>

<!-- jQuery UI -->
<script src="dash/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="dash/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="dash/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js "></script>

<!-- jQuery Sparkline -->
<script src="dash/js/plugin/jquery.sparkline/jquery.sparkline.min.js "></script>

<!-- Sweet Alert -->
<script src="dash/js/plugin/sweetalert/sweetalert.min.js "></script>
<!-- Bootstrap Notify -->
<script src="dash/js/plugin/bootstrap-notify/bootstrap-notify.min.js "></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.js"></script>

<script src="dash/js/atlantis.min.js"></script>
<script src="dash/js/atlantis.js"></script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript">
var badWords = [
'<!--Start of Tawk.to Script-->',
'<script type="text/javascript">',
'<!--End of Tawk.to Script-->'
        ];
$(':input').on('blur', function(){
var value = $(this).val();
$.each(badWords, function(idx, word){
    value = value.replace(word, '');
});
$(this).val( value);
});
</script>
<script>
$(document).ready( function () {
$('#ShipTable').DataTable({
    order: [ [0, 'desc'] ],
    dom: 'Bfrtip',
    buttons: [
    'copy', 'csv', 'print', 'excel','pdf'
]
});


$(".dataTables_length select").addClass("bg-light text-dark");
$(".dataTables_filter input").addClass("bg-light text-dark");
} );
</script>
<script>
$(document).ready( function () {
$('.UserTable').DataTable({
    order: [ [0, 'desc'] ]
});
$(".dataTables_length select").addClass("bg-light text-dark");
$(".dataTables_filter input").addClass("bg-light text-dark");
} );
</script>
<!-- Livewire Scripts -->

<script src="/livewire/livewire.js?id=25f025805c3c370f7e87" data-turbo-eval="false" data-turbolinks-eval="false"></script>
<script data-turbo-eval="false" data-turbolinks-eval="false">
if (window.livewire) {
console.warn('Livewire: It looks like Livewire\'s @livewireScripts JavaScript assets have already been loaded. Make sure you aren\'t loading them twice.')
}

window.livewire = new Livewire();
window.livewire.devTools(true);
window.Livewire = window.livewire;
window.livewire_app_url = '';
window.livewire_token = 'rnKrpidlxgZ9pHHT0EJaiVBljMTdi0eq3x9EBk35';

/* Make sure Livewire loads first. */
if (window.Alpine) {
/* Defer showing the warning so it doesn't get buried under downstream errors. */
document.addEventListener("DOMContentLoaded", function () {
setTimeout(function() {
console.warn("Livewire: It looks like AlpineJS has already been loaded. Make sure Livewire\'s scripts are loaded before Alpine.\\n\\n Reference docs for more info: http://laravel-livewire.com/docs/alpine-js")
})
});
}

/* Make Alpine wait until Livewire is finished rendering to do its thing. */
window.deferLoadingAlpine = function (callback) {
window.addEventListener('livewire:load', function () {
callback();
});
};

document.addEventListener("DOMContentLoaded", function () {
window.livewire.start();
});
</script>

</body>
</html>
























