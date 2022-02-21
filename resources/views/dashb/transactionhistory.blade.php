@extends("dashb.dashlayout")
@section('dashbody')



<div class="sidebar sidebar-style-2" data-background-color="light">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            ugo

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
                    <a href="{{route('index')}}">
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
                        <a href="{{route('assets_and_exchange')}}l">
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
        <div class="main-panel bg-light">
			<div class="content bg-light">
				<div class="page-inner">
					<div class="mt-2 mb-4">
					<h1 class="title1 text-dark">Transactions on your account</h1>
					</div>
					<div>
    </div>					<div>
    </div>					<div class="mb-5 row">
					<div class="col text-center card p-4 bg-light">

					        <nav>
								<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">

								  <h4 class="pt-3 nav-item nav-link active " id="nav-home-tab" data-toggle="tab" href="#1" role="tab" aria-controls="nav-home" aria-selected="true"> Deposits</h4>

								  <h4 class="pt-3 nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#2" role="tab" aria-controls="nav-profile" aria-selected="false">Withdrawals</h4>

								  <h4 class="pt-3 nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#3" role="tab" aria-controls="nav-contact" aria-selected="false">Others</h4>
							    </div>
							</nav>

							<div class="px-3 py-3 tab-content px-sm-0" id="nav-tabContent">


								<div class="tab-pane fade show active bg-light card p-3" id="1" role="tabpanel" aria-labelledby="nav-home-tab">
									<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
        							<table id="UserTable" class="UserTable table table-hover text-dark">
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
        								</table>
        							</div>
								</div>


								<div class="tab-pane fade p-3 bg-light" id="2" role="tabpanel" aria-labelledby="nav-profile-tab">
									<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
        							<table id="UserTable" class="UserTable table table-hover text-dark">
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
        								</table>
        							</div>
								</div>


								<div class="tab-pane fade p-3 bg-light" id="3" role="tabpanel" aria-labelledby="nav-contact-tab">
									<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
        								<table id="UserTable" class="UserTable table table-hover text-dark">
        									<thead>
        										<tr>
        											<th>Amount</th>
        											<th>Type</th>
        											<th>Plan/Narration</th>
        											<th>Date created</th>
        										</tr>
        									</thead>
        									<tbody>
        									        										<tr>
        											<td>$5</td>
        											<td>Bonus</td>
        											<td>SignUp Bonus</td>
        											<td>Wed, Feb 16, 2022 8:43 AM</td>
        										</tr>
        									        									</tbody>
        								</table>

        							</div>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- Submit MT4 MODAL modal -->
			<div id="submitmt4modal" class="modal fade" role="dialog">
			  <div class="modal-dialog">
			    <!-- Modal content-->
			    <div class="modal-content">
					<div class="modal-header bg-light">
						<h4 class="modal-title text-dark">Subscribe to subscription Trading</h4>
						<button type="button" class="close text-dark" data-dismiss="modal">&times;</button>
			      </div>
			     	<div class="modal-body bg-light">
              			<form role="form" method="post" action="#">
							<input type="hidden" name="_token" value="DtPT5ws6g6qtmDL1zs7dZecZ31wBLvYFS1MwBR03">							<div class="form-row">
								<div class="form-group col-md-6">
									<h5 class="text-dark">Subscription Duration</h5>
									<select class="form-control bg-light text-dark" onchange="calcAmount(this)" name="duration" class="duration" id="duratn">
										<option value="default">Select duration</option>
										<option>Monthly</option>
										<option>Quaterly</option>
										<option>Yearly</option>
									</select>
								</div>
								<div class="form-group col-md-6">
									<h5 class="text-dark">Amount to Pay</h5>
									<input class="form-control subamount bg-light text-dark" type="text" id="amount" disabled><br/>

								</div>
								<div class="form-group col-md-6">
									<h5 class="text-dark ">MT4 ID*:</h5>
									<input class="form-control bg-light text-dark"  type="text" name="userid" required>
								</div>
								<div class="form-group col-md-6">
									<h5 class="text-dark ">MT4 Password*:</h5>
									<input class="form-control bg-light text-dark"  type="text" name="pswrd" required>
								</div>
								<div class="form-group col-md-6">
									<h5 class="text-dark ">Account Type:</h5>
									<input  class="form-control bg-light text-dark" Placeholder="E.g. Standard" type="text" name="acntype" required>
								</div>
								<div class="form-group col-md-6">
									<h5 class="text-dark ">Currency*:</h5>
									<input  class="form-control bg-light text-dark" Placeholder="E.g. USD" type="text" name="currency" required>
								</div>
								<div class="form-group col-md-6">
									<h5 class="text-dark ">Leverage*:</h5>
									<input  class="form-control bg-light text-dark" Placeholder="E.g. 1:500"  type="text" name="leverage" required>
								</div>
								<div class="form-group col-md-6">
									<h5 class="text-dark ">Server*:</h5>
									<input  class="form-control bg-light text-dark" Placeholder="E.g. HantecGlobal-live"  type="text" name="server" required>
								</div>
								<div class="form-group col-12">
									<small class="text-dark">Amount will be deducted from your Account balance</small>
								</div>
								<div class="form-group col-md-6">
									<input id="amountpay" type="hidden" name="amount">
					   				<input type="submit" class="btn btn-primary" value="Subscribe Now">
								</div>
							</div>
					   </form>
			      </div>
			    </div>
			  </div>
			</div>





            @endsection
