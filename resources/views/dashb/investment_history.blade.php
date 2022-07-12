@extends('dashb.dashlayout')
@section('dashbody')



    <div class="main-panel bg-light">
        <div class="content bg-light">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-dark">Your ROI history</h1>
                </div>
                <div>
                </div>
                <div>
                </div>
                <div class="mb-5 row">
                    <div class="col text-center card shadow-lg bg-light p-3">
                        <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
                            <table id="UserTable" class="UserTable table table-hover text-dark">
                                {{-- <thead>
                                    <tr>
                                        <th>Plan</th>
                                        <th>Amount</th>
                                        <th>Type</th>
                                        <th>Date created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table> --}}
                            <table class="table table-striped table-bordered no-margin">
                                <thead>
                                    <tr>
                                        <th class="text-center">S/N</th>
                                        <th>Plan Name</th>
                                        <th class="text-right">Amount</th>
                                        <th class="text-right">Invested Date</th>
                                        <th class="text-right">Mature Date</th>
                                        <th class="text-right">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($all_investment->count() > 0)
                                        @foreach ($all_investment as $investment)
                                            <tr>
                                                <td class="text-center">{{ $loop->index + 1 }}</td>
                                                <td><a href="#"
                                                        class="text-yellow hover-warning">{{ $investment->investmentplan }}</a>
                                                </td>
                                                <td class="text-right"><span>{{$currency}}</span>{{ $investment->amount }}</td>
                                                <td class="text-right"><span>{{$currency}}</span>
                                                    {{ $investment->investmentdate }}</td>
                                                <td class="text-right"><span>{{$currency}}</span>
                                                    {{ $investment->investmentmaturitydate }}</td>
                                                <td class="text-right"><span>{{$currency}}</span>
                                                    {{ $investment->investmentStatus = 0 ? 'CURRENTLY RUNNING' : 'EXPIRED' }}
                                                </td>
                                            </tr>
                                        @endforeach



                                    @else
                                        <tr>
                                            <td class="text-center">No Investment History Found</td>
                                        </tr>
                                    @endif

                                </tbody>
                            </table>
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
                            <input type="hidden" name="_token" value="DtPT5ws6g6qtmDL1zs7dZecZ31wBLvYFS1MwBR03">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <h5 class="text-dark">Subscription Duration</h5>
                                    <select class="form-control bg-light text-dark" onchange="calcAmount(this)"
                                        name="duration" class="duration" id="duratn">
                                        <option value="default">Select duration</option>
                                        <option>Monthly</option>
                                        <option>Quaterly</option>
                                        <option>Yearly</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <h5 class="text-dark">Amount to Pay</h5>
                                    <input class="form-control subamount bg-light text-dark" type="text" id="amount"
                                        disabled><br />

                                </div>
                                <div class="form-group col-md-6">
                                    <h5 class="text-dark ">MT4 ID*:</h5>
                                    <input class="form-control bg-light text-dark" type="text" name="userid" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <h5 class="text-dark ">MT4 Password*:</h5>
                                    <input class="form-control bg-light text-dark" type="text" name="pswrd" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <h5 class="text-dark ">Account Type:</h5>
                                    <input class="form-control bg-light text-dark" Placeholder="E.g. Standard" type="text"
                                        name="acntype" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <h5 class="text-dark ">Currency*:</h5>
                                    <input class="form-control bg-light text-dark" Placeholder="E.g. USD" type="text"
                                        name="currency" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <h5 class="text-dark ">Leverage*:</h5>
                                    <input class="form-control bg-light text-dark" Placeholder="E.g. 1:500" type="text"
                                        name="leverage" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <h5 class="text-dark ">Server*:</h5>
                                    <input class="form-control bg-light text-dark" Placeholder="E.g. HantecGlobal-live"
                                        type="text" name="server" required>
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






























        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                all My Investments
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="#">investment</a></li>
                <li class="breadcrumb-item active">All investments</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="box box-solid bg-dark">
                        <div class="box-header with-border">
                            <h3 class="box-title">List of all Investments</h3>

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
                                <table class="table table-striped table-bordered no-margin">
                                    <thead>
                                        <tr>
                                            <th class="text-center">S/N</th>
                                            <th>Plan Name</th>
                                            <th class="text-right">Amount</th>
                                            <th class="text-right">Invested Date</th>
                                            <th class="text-right">Mature Date</th>
                                            <th class="text-right">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($all_investment->count() > 0)
                                            @foreach ($all_investment as $investment)
                                                <tr>
                                                    <td class="text-center">{{ $loop->index + 1 }}</td>
                                                    <td><a href="#"
                                                            class="text-yellow hover-warning">{{ $investment->investmentplan }}</a>
                                                    </td>
                                                    <td class="text-right"><span>{{$currency}}</span>{{ $investment->amount }}</td>
                                                    <td class="text-right"><span>{{$currency}}</span>
                                                        {{ $investment->investmentdate }}</td>
                                                    <td class="text-right"><span>{{$currency}}</span>
                                                        {{ $investment->investmentmaturitydate }}</td>
                                                    <td class="text-right"><span>{{$currency}}</span>
                                                        {{ $investment->investmentStatus = 0 ? 'CURRENTLY RUNNING' : 'EXPIRED' }}
                                                    </td>
                                                </tr>
                                            @endforeach



                                        @else
                                            <tr>
                                                <td class="text-center">No Investment History Found</td>
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





    @endsection()
