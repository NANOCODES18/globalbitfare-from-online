@extends('dashb.dashlayout')
@section('dashbody')


    <div class="main-panel bg-light">
        <div class="content bg-light">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h2 class="text-dark pb-2">Welcome, {{ Auth::user()->name }}!</h2>
                    <h5 id="ann" class="text-darkop-7 mb-4">You are welcome</h5>


                </div>
                <div>
                </div>
                <div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="p-3 card bg-light shadow">
                            <div class="d-flex align-items-center">
                                <span class="mr-3 stamp stamp-md bg-warning">
                                    <i class="fa fa-download"></i>
                                </span>
                                <div>
                                    <h5 class="mb-1 text-dark">${{ $funds ? $funds->totaldepost : 0.01 }}</< /h5>
                                        <small class="text-muted text-dark">Total Deposit</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="p-3 card bg-light shadow">
                            <div class="d-flex align-items-center">
                                <span class="mr-3 stamp stamp-md bg-success">
                                    <i class="fa fa-coins"></i>
                                </span>
                                <div>
                                    <h5 class="mb-1 text-dark"><b>${{ $funds ? $funds->totalprofit : 0.01 }}</b></h5>
                                    <small class="text-muted text-dark">Total Profit</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="p-3 card bg-light shadow">
                            <div class="d-flex align-items-center">
                                <span class="mr-3 stamp stamp-md bg-secondary">
                                    <i class="fa fa-gift"></i>
                                </span>
                                <div>
                                    <h5 class="mb-1 text-dark"><b>${{ $funds ? $funds->totalbonus : 0.01 }}</b></h5>
                                    <small class="text-muted text-dark">Total Bonus</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="p-3 card bg-light shadow">
                            <div class="d-flex align-items-center">
                                <span class="mr-3 stamp stamp-md bg-secondary">
                                    <i class="fa fa-dollar-sign"></i>
                                </span>
                                <div>
                                    <h5 class="mb-1 text-dark"><b>${{ $funds ? $funds->balance : 0.01 }}</b></h5>
                                    <small class="text-muted">Account Balance</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="p-3 card bg-light shadow">
                            <div class="d-flex align-items-center">
                                <span class="mr-3 stamp stamp-md bg-info">
                                    <i class="fa fa-retweet"></i>
                                </span>
                                <div>
                                    <h5 class="mb-1 text-dark"><b>${{ $funds ? $funds->totalrefbonus : 0.01 }}</b></h5>
                                    <small class="text-muted text-dark">Total Referral Bonus</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="p-3 card bg-light shadow">
                            <div class="d-flex align-items-center">
                                <span class="mr-3 stamp stamp-md bg-danger">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <div>
                                    <h5 class="mb-1 text-dark">
                                        <b>{{ $userallinvestemt ? $userallinvestemt : 'error' }}</b></h5>
                                    <small class="text-muted text-dark">Total Investment Plans</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="p-3 card bg-light shadow">
                            <div class="d-flex align-items-center">
                                <span class="mr-3 stamp stamp-md bg-success">
                                    <i class="fa fa-envelope-open"></i>
                                </span>
                                <div>
                                    <h5 class="mb-1 text-dark">
                                        <b>{{ $usercurrentinvestemt ? $usercurrentinvestemt : 'error' }}</b></h5>
                                    <small class="text-muted text-dark">Total Active Investment Plans</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="p-3 card bg-light shadow">
                            <div class="d-flex align-items-center">
                                <span class="mr-3 stamp stamp-md bg-danger">
                                    <i class="fa fa-arrow-alt-circle-up"></i>
                                </span>
                                <div>
                                    <h5 class="mb-1 text-dark">${{ $funds ? $funds->totalwithdrawal : 0.01 }}</h5>

                                    <small class="text-muted text-dark">Total Withdrawals</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="pt-1 col-12">
                        <h3>Personal Trading Chart</h3>
                        <div class="tradingview-widget-container" style="margin:30px 0px 10px 0px;">
                            <div id="tradingview_f933e"></div>
                            <div class="tradingview-widget-copyright"><a href="#" rel="noopener" target="_blank"><span
                                        class="blue-text"></span> <span class="blue-text">Personal trading
                                        chart</span></a></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                            <script type="text/javascript">
                                new TradingView.widget({
                                    "width": "100%",
                                    "height": "550",
                                    "symbol": "COINBASE:BTCUSD",
                                    "interval": "1",
                                    "timezone": "Etc/UTC",
                                    "theme": 'light',
                                    "style": "9",
                                    "locale": "en",
                                    "toolbar_bg": "#f1f3f6",
                                    "enable_publishing": false,
                                    "hide_side_toolbar": false,
                                    "allow_symbol_change": true,
                                    "calendar": false,
                                    "studies": [
                                        "BB@tv-basicstudies"
                                    ],
                                    "container_id": "tradingview_f933e"
                                });
                            </script>
                        </div>

                    </div>



                    <div class="white-box" style="height: 450px; width:100%">
                        <h4 style="margin-bottom:5px;"> Forex Market Fundamental Data</h4>
                        <!-- TradingView Widget BEGIN -->

                        <span id="tradingview-copyright"><a ref="nofollow noopener" target="_blank"
                                href="http://www.tradingview.com"
                                style="color: rgb(173, 174, 176); font-family: &quot;Trebuchet MS&quot;, Tahoma, Arial, sans-serif; font-size: 13px;"></a></span>
                        <script src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js">
                            {
                                "currencies": [
                                    "EUR",
                                    "USD",
                                    "JPY",
                                    "BTC",
                                    "ETH",
                                    "LTC",
                                    "GBP",
                                    "CHF",
                                    "AUD",
                                    "CAD",
                                    "NZD",
                                    "CNY"
                                ],
                                "isTransparent": false,
                                "colorTheme": "light",
                                "width": "100%",
                                "height": "100%",
                                "locale": "en"
                            }
                        </script>

                    </div>
                </div>
            </div>
            <!-- end of chart -->
        </div>







        <div class="row">



            <div class="col-lg-6 col-12">
                <!-- Default box -->
                <div class="box box-solid bg-dark">
                    <div class="box-header with-border">
                        <h3 class="box-title">Recent Deposits</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                                title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered no-margin">
                                <tbody>
                                    @if ($user_deposits->count() > 0)
                                        @foreach ($user_deposits as $item)
                                            <tr>
                                                <td>{{ $item->created_at->diffForHumans() }}</td>
                                                <td>${{ $item->amount }}</td>
                                                <td>
                                                    @if ($item->status > 0)
                                                        <a href='#' class='text-green hover-success'>Completed </a>
                                                    @else
                                                        <a href='#' class='text-yellow hover-warning'>pending</a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="2"><a href="{{ route('userdashb_deposit') }}"
                                                    class="text-yellow hover-warning">You have no succeful deposit
                                                    click here to make a deposit</a></td>
                                        </tr>
                                    @endif


                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>

            <div class="col-lg-6 col-12">
                <!-- Default box -->
                <div class="box box-solid bg-dark">
                    <div class="box-header with-border">
                        <h3 class="box-title">Recent Withdrawals</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                                title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered no-margin">
                                <tbody>

                                    @if ($withdrawals->count() > 0)
                                        @foreach ($withdrawals as $item)
                                            <tr>
                                                <td>{{ $item->created_at->diffForHumans() }}</td>
                                                <td>{{ $item->amount }}</td>
                                                <td>
                                                    @if ($item->status > 0)
                                                        <a href='#' class='text-green hover-success'>Completed</a>
                                                    @else
                                                        <a href='#' class='text-yellow hover-warning'>pending</a>
                                                    @endif
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="2"><a href="{{ route('userdashb_withdrawal') }}"
                                                    class="text-yellow hover-warning">You have not made any succesful
                                                    withdrawal</a></td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>

        </div>
        </section>
        <!-- /.content -->
    </div>

@endsection()
