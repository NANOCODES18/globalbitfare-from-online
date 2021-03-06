@extends("layouts.spacedcustomlayout")

@section('body')

    <script>
        $(function() {
            $("#tabs").tabs();
        });
    </script>
    <link rel="stylesheet" type="text/css" href="slick/slick.css">
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
    <style>
        .slick-dots {
            bottom: -10px !important;
        }

        .slick-dotted.slick-slider {
            margin-bottom: 0px;
        }

    </style>
    <div class="Modern-Slider row center">
        <!-- Item -->
        <div class="item">
            <div class="img-fill">
                <img src="images/912465.jpg" alt="">
                <div class="info-slick">
                    <div>
                        <h1 class="headering"><span class="text-default">SECURE</span> AND <span
                                class="text-default">EASY WAY</span><br>TO BITCOIN MINNING</h1>
                        <a href="#" class="btn">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item">
            <div class="img-fill">
                <img src="images/913441.jpg" alt="">
                <div class="info-slick">
                    <div>
                        <h1 class="headering"><span class="text-default">BITCOIN</span> INVESTMENT<br>YOU CAN <span
                                class="text-default">TRUST</span></h1>
                        <a href="{{route('login')}}" class="btn">GET STARTED</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Item -->
    </div>
    <script src="js/jquery.fittext.js"></script>
    <script>
        $(".headering").fitText(1.3, {
            minFontSize: 35
        });
    </script>
    <div class="dark">
        <div class="bodycontainer" style="padding:0 30px">
            <div class="row" style="background: #1D1D1D; top: -40px; position: relative; text-align: left;">
                <div class="col-4">
                    <div class="col-3 col-m-4 center">
                        <img src="images/download-bitcoin.png">
                    </div>
                    <div class="col-9 col-m-8 center-sm">
                        <h5 class="text-white">Download Bitcoin Wallet</h5>
                        <p>Get it on PC or Mobile to create, send and receive bitcoins.</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="col-3 col-m-4 center">
                        <img src="images/add-bitcoins.png">
                    </div>
                    <div class="col-9 col-m-8 center-sm">
                        <h5 class="text-white">Add Funds & Start Investment</h5>
                        <p>Add bitcoins you???ve created or exchanged via credit card.</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="col-3 col-m-4 center">
                        <img src="images/buy-sell-bitcoins.png">
                    </div>
                    <div class="col-9 col-m-8 center-sm">
                        <h5 class="text-white">Withdraw Your Profit</h5>
                        <p>Request for withdrawal and receive it within 1day.</p>
                    </div>
                </div>
            </div>
            <div class="center">
                <h1 class="tlt text-white">ABOUT <span class="text-default">US</span></h1>
                <p class="sub_tlt">MOST FLEXIBLE CRYPTOCURRENCY INVESTMENT COMPANY</p>
            </div>

            <div class="row" style="margin-top: 20px">
                <div class="col-6 center">
                    <img src="images/about-us.png">
                    <div id="particles-js" style="z-index:1; margin-top:200px; margin-left:-100px; height:530px;"></div>
                </div>
                <div class="col-6">
                    <h2 class="text-white">GLOBAL BITFARE</h2>
                    <p>Global Bitfare Investment Company is a distinctive investment company offering our investors access
                        to high-growth investment opportunities in Bitcoin markets and other services. We implement best
                        practices of trading & mining of Bitcoins through our operations, while offering flexibility in our
                        investment plans. Our company benefits from an extensive network of global clients.</p>
                    <div id="tabs" style="margin-bottom: 20px">
                        <ul>
                            <li><a href="#tabs-1">OUR MISSION</a></li>
                            <li><a href="#tabs-2">OUR ADVANTAGES</a></li>
                            <li><a href="#tabs-3">OUR GUARANTEES</a></li>
                        </ul>
                        <div id="tabs-1">
                            <p>Our aim is to utilize our expertise & knowledge which will benefit our clients and the users
                                of our services.</p>
                        </div>
                        <div id="tabs-2">
                            <p>Our mission as an official partner of Bitcoin Foundation is to help you enter and better
                                understand the world of #1 cryptocurrency and avoid any issues you may encounter.</p>
                        </div>
                        <div id="tabs-3">
                            <p>We are here because we are passionate about open, transparent markets and aim to be a major
                                driving force in widespread adoption, we are one the bests in cryptocurrency investment.</p>
                        </div>
                    </div>
                    <a href="{{ route('about') }}" class="btn default">READ MORE</a>
                </div>
            </div>
        </div>
    </div>

    <div class="darkgrey">
        <div class="bodycontainer-left">
            <div class="row lineup">
                <div class="col-8 center">
                    <div class="col-6 col-m-6">
                        <div><img src="images/strong-security.png" style="height:40px"></div>
                        <h5 class="text-white">STRONG SECURITY</h5>
                        <p>Protection against DDoS attacks,<br>full data encryption</p>
                    </div>
                    <div class="col-6 col-m-6">
                        <div><img src="images/world-coverage.png" style="height:40px"></div>
                        <h5 class="text-white">WORLD COVERAGE</h5>
                        <p>Providing services in 99% countries<br>around all the globe</p>
                    </div>
                    <div class="col-6 col-m-6">
                        <div><img src="images/payment-options.png" style="height:40px"></div>
                        <h5 class="text-white">PAYMENT OPTIONS</h5>
                        <p>Popular methods: Bitcoin, Ethereum,<br>Skril</p>
                    </div>
                    <div class="col-6 col-m-6">
                        <div><img src="images/mobile-app.png" style="height:40px"></div>
                        <h5 class="text-white">MOBILE FRIENDLY</h5>
                        <p>Our User Dashboard is Made<br>to match all Mobile resolution</p>
                    </div>
                    <div class="col-6 col-m-6">
                        <div><img src="images/cost-efficiency.png" style="height:40px"></div>
                        <h5 class="text-white">COST EFFICIENCY</h5>
                        <p>Reasonable trading fees for traders<br>and all market makers</p>
                    </div>
                    <div class="col-6 col-m-6">
                        <div><img src="images/high-liquidity.png" style="height:40px"></div>
                        <h5 class="text-white">HIGH LIQUIDITY</h5>
                        <p>Fast access to high liquidity orderbook<br>for top currency pairs</p>
                    </div>
                </div>
                <div class="col-4 video-lightbox">
                    <a href="#" class="play circle js-video-button" data-video-id="GmOzih6I1zs"><i
                            class="fa fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-modal-video.min.js"></script>
    <link rel="stylesheet" href="css/modal-video.min.css">
    <script>
        $(".js-video-button").modalVideo();
    </script>
    <div class="dark" style="padding: 40px 20px 80px 20px" id="investment">
        <div class="bodycontainer center">
            <h1 class="tlt text-white">AFFORDABLE <span class="text-default">PACKAGES</span></h1>
            <p class="sub_tlt">CHOOSE YOUR PREFERABLE PLAN FOR INVESTMENT.</p>
            <div class="row">




                @if ($investmentplans)
                @foreach ( $investmentplans as $plan )
                <div class="col-4 col-m-12">
                    <div class="pricing_header default">
                        <h3 class="bold">{{$plan->plan }}</h3>
                        <h6 class="bold">WEEKLY {{$plan->percentage}}% FOR {{$plan->noofrepeat }} TIMES</h6>
                    </div>
                    <div class="pricing_body">
                        <ul>
                            <li>WEEKLY RETURN</li>
                            <li>FOR {{$plan->noofrepeat }} TIMES</li>
                            <li>{{$plan->percentage}}% ROI EACH TIME</li>
                        </ul>
                        <div class="row pricing_info">
                            <div class="col-6 col-m-6 col-sm-6" style="padding:10px 0 0 0">
                                MINIMUM<br>$ {{$plan->minimum }} </div>
                            <div class="col-6 col-m-6 col-sm-6 v2" style="padding: 10px 0 0 0">
                                MAXIMUM<br>$ {{$plan->maximum }} </div>
                            <div class="col-12 v3" style="padding: 0">
                                <input type="text" value="$ {{$plan->minimum }}" id="{{$loop->index}}">
                            </div>
                            <div class="col-12" style="padding: 0">
                                <input type="text" class="range_47" data-id="{{$loop->index}}" data-times="{{$plan->noofrepeat }}" data-cent="{{$plan->percentage}}"
                                    data-per="{{$loop->index}}_per" data-total="{{$loop->index}}_total" value="{{$plan->minimum }}" data-prefix="$ "
                                    data-type="single" data-min="{{$plan->minimum }}" data-max="{{$plan->maximum }}" data-from="{{$plan->minimum }}" />
                            </div>
                            <div class="col-6 col-m-6 col-sm-6" style="padding:10px 0 0 0">
                                PER TIME<br><span id="{{$loop->index}}_per">$ {{$plan->minimum }}</span>
                            </div>
                            <div class="col-6 col-m-6 col-sm-6 v2" style="padding:10px 0 0 0">
                                TOTAL RETURN<br><span id="{{$loop->index}}_total">$ 55000</span>
                            </div>
                        </div>
                    </div>
                    <div class="pricing_footer">
                        <a href="{{ route('register') }}" class="btn default round-xxlarge">SIGN UP</a>
                    </div>
                </div>

















                @endforeach

                @else
                    <h5> Not available at the moment </h5>
                @endif




            </div>
        </div>
    </div>
    <style>
        .irs-single,
        .irs-min,
        .irs-max {
            display: none !important;
        }

        .irs-bar {
            border-top: 1px solid #FF6600 !important;
            border-bottom: 1px solid #FF6600 !important;
            background: #FF6600 !important;
        }

        .irs-bar-edge {
            border: 1px solid #FF6600 !important;
            background: #FF6600 !important;
            background: #FF6600 !important;
        }

        .irs-slider {
            border: 3px solid #AAA !important;
            background: #FF6600 !important;
        }

    </style>
    <link rel="stylesheet" href="css/ion.rangeSlider.css">
    <link rel="stylesheet" href="css/ion.rangeSlider.skinHTML5.css">
    <script src="js/ion.rangeSlider.min.js"></script>
    <script>
        var $range = $(".range_47");
        $range.ionRangeSlider();

        $range.on("change", function() {
            var $this = $(this),
                value = $this.prop("value");
            var output = $this.prop("value") * ($this.data("cent") / 100);
            $("#" + $this.data("id")).val("$ " + $this.prop("value"));
            $("#" + $this.data("per")).html("$ " + output.toFixed(1));
            $("#" + $this.data("total")).html("$ " + (output * $this.data("times")).toFixed(1));
            console.log("Value: " + value);
        });
    </script>
    <div class="calculator-container" style="position: relative; top: -50px; margin-bottom: -50px;">
        <div class="bodycontainer center" style="padding: 0 20px">
            <form class="bitcoin-calculator round-large	cards" id="bitcoin-calculator">
                <h1 class="tlt text-white"><span class="text-default">BITCOIN</span> CALCULATOR</h1>
                <p style="margin: 20px 0; font-size: 14px">FIND OUT THE CURRENT BITCOIN VALUE WITH OUR EASY-TO-USE CONVERTER
                </p>
                <div style="margin: 20px 0">
                    <!-- Input #1 Starts -->
                    <input class="form-input" name="btc-calculator-value" value="1">
                    <!-- Input #1 Ends -->
                    <div class="form-info"><i class="fa fa-bitcoin"></i></div>
                    <div class="form-equal">=</div>
                    <!-- Input/Result Starts -->
                    <input class="form-input form-input-result" name="btc-calculator-result">
                    <!-- Input/Result Ends -->
                    <!-- Select Currency Starts -->
                    <div class="form-wrap">
                        <select id="currency-select"
                            class="form-input select-currency select-primary select2-hidden-accessible"
                            name="btc-calculator-currency" data-dropdown-class="select-primary-dropdown" tabindex="-1"
                            aria-hidden="true">
                            <option value="0">USD</option>
                            <option value="1">AUD</option>
                            <option value="2">BRL</option>
                            <option value="3">CAD</option>
                            <option value="4">CHF</option>
                            <option value="5">CLP</option>
                            <option value="6">CNY</option>
                            <option value="7">DKK</option>
                            <option value="8">EUR</option>
                            <option value="9">GBP</option>
                            <option value="10">HKD</option>
                            <option value="11">INR</option>
                            <option value="12">ISK</option>
                            <option value="13">JPY</option>
                            <option value="14">KRW</option>
                            <option value="15">NZD</option>
                            <option value="16">PLN</option>
                            <option value="17">RUB</option>
                            <option value="18">SEK</option>
                            <option value="19">SGD</option>
                            <option value="20">THB</option>
                            <option value="21">TWD</option>
                        </select>
                    </div>
                    <!-- Select Currency Ends -->
                </div>
                <p><i>* Data updated every 15 minutes</i></p>
            </form>
        </div>
        <div class="bitcoin-calculator-bg"></div>
    </div>
    <style>
        .btcwdgt.btcwdgt-chart .btcwdgt-footer {
            display: none !important;
        }

        .btcwdgt-headlines.btcwdgt-clean {
            margin: 0 auto !important;
            border: 1px solid #333 !important;
            box-shadow: none !important;
            max-width: 615px !important;
            width: 100%;
        }

    </style>
    <div class="dark">
        <div class="row lineup">
            <div class="col-4 col-m-12 testimony-lightbox">
                <div class="bodycontainer center-mode" style="position: relative">

                    <ul class="testimonials" style="padding: 40px 20px">
                        <li>
                            <div class="padding">
                                <span class="comment">
                                    <p>I got my first investment profit of $15k. Big thanks to you guys at global bitfare.
                                    </p>
                                </span>
                            </div>
                            <div class="author">
                                <img src="uploads/small/8671597592136.png" class="circle">
                                <div style="margin-top:10px" class="bold">Robert Pope</div>
                            </div>
                        </li>
                        <li>
                            <div class="padding">
                                <span class="comment">
                                    <p>Big shout out to you guys at global bitfare. I just got my Bitcoin back. I love you
                                        guyz</p>
                                </span>
                            </div>
                            <div class="author">
                                <img src="uploads/small/8211597591949.png" class="circle">
                                <div style="margin-top:10px" class="bold">Steve Walter</div>
                            </div>
                        </li>
                        <li>
                            <div class="padding">
                                <span class="comment">
                                    <p>I'm indeed grateful. I want to thank you guys for keeping to your words.</p>
                                </span>
                            </div>
                            <div class="author">
                                <img src="uploads/small/4991597591857.png" class="circle">
                                <div style="margin-top:10px" class="bold">Ruth Allison</div>
                            </div>
                        </li>
                        <li>
                            <div class="padding">
                                <span class="comment">
                                    <p>Thank you global bitfare. I&#39;m debt free. I have been able to repay my loan of
                                        $64,000????</p>
                                </span>
                            </div>
                            <div class="author">
                                <img src="uploads/small/6981597591504.png" class="circle">
                                <div style="margin-top:10px" class="bold">Veronica Keith</div>
                            </div>
                        </li>
                        <li>
                            <div class="padding">
                                <span class="comment">
                                    <p>Thank you global bitfare. You guys are amazing. I just recovered my lost bitcoin of
                                        2.6BTC. ????</p>
                                </span>
                            </div>
                            <div class="author">
                                <img src="uploads/small/4941597591323.png" class="circle">
                                <div style="margin-top:10px" class="bold">Abraham willard</div>
                            </div>
                        </li>
                        <li>
                            <div class="padding">
                                <span class="comment">
                                    <p>Thank you global bitfare for keeping to your words. I invested with $2k and i just
                                        received an investment profit of $26k within a week. ???</p>
                                </span>
                            </div>
                            <div class="author">
                                <img src="uploads/small/4111597591055.png" class="circle">
                                <div style="margin-top:10px" class="bold">Jessica phel</div>
                            </div>
                        </li>
                        <li>
                            <div class="padding">
                                <span class="comment">
                                    <p>I want to thank global bitfare, i just received the sum of $17k from my investment.
                                        My whole family is indeed happy. I&#39;m hoping to invest big by next week.</p>
                                </span>
                            </div>
                            <div class="author">
                                <img src="uploads/small/5761597590797.png" class="circle">
                                <div style="margin-top:10px" class="bold">Fatimah Harmed</div>
                            </div>
                        </li>
                        <li>
                            <div class="padding">
                                <span class="comment">
                                    <p>Thank you so much, I just made my first $20k. Thank you global bitfare.</p>
                                </span>
                            </div>
                            <div class="author">
                                <img src="uploads/small/5511597007223.png" class="circle">
                                <div style="margin-top:10px" class="bold">Steve Brutt</div>
                            </div>
                        </li>
                        <li>
                            <div class="padding">
                                <span class="comment">
                                    <p>I'm now a super woman because of you guys. Thank you global bitfare.</p>
                                </span>
                            </div>
                            <div class="author">
                                <img src="uploads/small/5321597006964.png" class="circle">
                                <div style="margin-top:10px" class="bold">Hanna jackson</div>
                            </div>
                        </li>
                        <li>
                            <div class="padding">
                                <span class="comment">
                                    <p>Thank you global bitfare.</p>
                                </span>
                            </div>
                            <div class="author">
                                <img src="uploads/small/5221597006888.png" class="circle">
                                <div style="margin-top:10px" class="bold">Howard keil</div>
                            </div>
                        </li>
                        <li>
                            <div class="padding">
                                <span class="comment">
                                    <p>You guys are amazing. Thank you now I&#39;m financially stable. global bitfare is the
                                        best</p>
                                </span>
                            </div>
                            <div class="author">
                                <img src="uploads/small/6961597006775.png" class="circle">
                                <div style="margin-top:10px" class="bold">Oliver moore</div>
                            </div>
                        </li>
                        <li>
                            <div class="padding">
                                <span class="comment">
                                    <p>Thank you global bitfare. You guys are indeed amazing</p>
                                </span>
                            </div>
                            <div class="author">
                                <img src="uploads/small/6391597006127.png" class="circle">
                                <div style="margin-top:10px" class="bold">Sarah Petterson</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-8 col-m-12 center">
                <div class="bodycontainer">
                    <div class="btcwdgt-chart" bw-theme="dark" style="width:100%"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://widgets.bitcoin.com/widget.js" id="btcwdgt"></script>
    <script src="js/select2.min.js"></script>
    <script>
        /* ----------------------------------------------------------- */
        /*  VARIABLES FOR SELECT INPUT AND BITCOIN CALCULATOR FORM
        /* ----------------------------------------------------------- */

        var userAgent = navigator.userAgent.toLowerCase(),
            plugins = {
                selectFilter: $("#currency-select"),
                btcCalculator: $("#bitcoin-calculator"),
            };


        /* ----------------------------------------------------------- */
        /*  REPLACE OLD SELECT IN BITCOIN CALCULATOR FORM
        /* ----------------------------------------------------------- */

        if (plugins.selectFilter.length) {
            for (var i = 0; i < plugins.selectFilter.length; i++) {
                var select = $(plugins.selectFilter[i]);
                select.select2({
                    placeholder: select.attr("data-placeholder") ? select.attr("data-placeholder") : false,
                    minimumResultsForSearch: select.attr("data-minimum-results-search") ? select.attr(
                        "data-minimum-results-search") : 10,
                    maximumSelectionSize: 3,
                    dropdownCssClass: select.attr("data-dropdown-class") ? select.attr("data-dropdown-class") : ""
                });
            }
        }

        /* ----------------------------------------------------------- */
        /*  BITCOIN CALCULATOR [ WWW.BLOCKCHAIN.INFO API ]
        /* ----------------------------------------------------------- */

        if (plugins.btcCalculator.length) {

            $.getJSON("https://blockchain.info/ticker", function(btcJsonData) {
                    var currencyList = [];
                    var index = 0;

                    for (var currency in btcJsonData) {
                        currencyList.push({
                            "id": index,
                            "text": currency
                        });
                        index++;
                    }

                    for (var i = 0; i < plugins.btcCalculator.length; i++) {
                        var btcForm = $(plugins.btcCalculator[i]),
                            btcFormInput = $(btcForm.find('[name="btc-calculator-value"]')),
                            btcFormOutput = $(btcForm.find('[name="btc-calculator-result"]')),
                            btcFormCurrencySelect = $(btcForm.find('[name="btc-calculator-currency"]'));

                        btcFormCurrencySelect.select2({
                            placeholder: btcFormCurrencySelect.attr("data-placeholder") ? btcFormCurrencySelect
                                .attr("data-placeholder") : false,
                            minimumResultsForSearch: btcFormCurrencySelect.attr("data-minimum-results-search") ?
                                btcFormCurrencySelect.attr("data-minimum-results-search") : 50,
                            maximumSelectionSize: 3,
                            dropdownCssClass: btcFormCurrencySelect.attr("data-dropdown-class") ?
                                btcFormCurrencySelect.attr("data-dropdown-class") : '',
                            data: currencyList
                        });

                        if (btcFormInput.length && btcFormOutput.length) {
                            // BTC => Currency
                            (function(btcFormInput, btcFormOutput, btcFormCurrencySelect) {
                                var lastChanged = 'btc';

                                btcFormInput.on('input', function() {
                                    // store current positions in variables
                                    var selectionStart = this.selectionStart,
                                        selectionEnd = this.selectionEnd;

                                    this.value = toCryptoCurrencyFormat(this.value);

                                    // restore cursor position
                                    this.setSelectionRange(selectionStart, selectionEnd);

                                    btcFormOutput.val(toCurrencyFormat('' + btcJsonData[
                                            btcFormCurrencySelect.select2('data')[0].text]["buy"] *
                                        this.value));
                                    lastChanged = 'btc';
                                });

                                // Currency => BTC
                                btcFormOutput.on('input', function() {
                                    // store current positions in variables
                                    var selectionStart = this.selectionStart,
                                        selectionEnd = this.selectionEnd;

                                    this.value = toCurrencyFormat(this.value);

                                    // restore cursor position
                                    this.setSelectionRange(selectionStart, selectionEnd);

                                    btcFormInput.val(toCryptoCurrencyFormat('' + this.value / btcJsonData[
                                        btcFormCurrencySelect.select2('data')[0].text]["sell"]));
                                    lastChanged = 'currency';
                                });

                                btcFormInput.trigger('input');
                                btcFormOutput.blur();

                                btcFormCurrencySelect.on('change', function() {
                                    if (lastChanged === 'btc') {
                                        btcFormOutput.val(toCurrencyFormat('' + btcJsonData[
                                            btcFormCurrencySelect.select2('data')[0].text][
                                            "buy"] * btcFormInput.val()));
                                    } else {
                                        btcFormInput.val(toCryptoCurrencyFormat('' + btcFormOutput.val() /
                                            btcJsonData[btcFormCurrencySelect.select2('data')[0]
                                                .text]["sell"]));
                                    }
                                });
                            })(btcFormInput, btcFormOutput, btcFormCurrencySelect);
                        }
                    }
                })
                .fail(function() {
                    console.log('Error while fetching data from https://blockchain.info/ticker');
                });
        }

        function toCurrencyFormat(stringValue) {
            var value = parseFloat(stringValue.replace(/[^\d.]/g, '')).toFixed(2);
            return $.isNumeric(value) ? value : 0;
        }

        function toCryptoCurrencyFormat(stringValue) {
            var value = stringValue.replace(/[^\d.]/g, '');
            return $.isNumeric(value) ? value : 0;
        }
    </script>

    <script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script src="slick/slick-animation.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        // Init slick slider + animation
        $(document).ready(function() {

            $(".Modern-Slider").slick({
                autoplay: true,
                autoplaySpeed: 10000,
                speed: 600,
                slidesToShow: 1,
                slidesToScroll: 1,
                pauseOnHover: false,
                dots: false,
                pauseOnDotsHover: true,
                cssEase: 'linear',
                // fade:true,
                draggable: false,
                prevArrow: '<button class="PrevArrow"></button>',
                nextArrow: '<button class="NextArrow"></button>',
            });
            $(".testimonials").slick({
                autoplay: true,
                autoplaySpeed: 10000,
                speed: 600,
                slidesToShow: 1,
                slidesToScroll: 1,
                pauseOnHover: false,
                dots: false,
                arrows: false,
                adaptiveHeight: true
            });

        })
    </script>
    <a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up show-back-to-top"></a>
@endsection
