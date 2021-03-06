@extends('dashb.dashlayout')
@section('dashbody')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          Transactions
        </h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="breadcrumb-item"><a href="#">deposits</a></li>
          <li class="breadcrumb-item active">Pending deposits</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
              <!-- Default box -->
                <div class="box box-solid bg-dark">
                  <div class="box-header with-border">
                    <h3 class="box-title">Pending Deposits</h3>

                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                              title="Collapse">
                        <i class="fa fa-minus"></i></button>
                      <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                    </div>
                  </div>
                  <div class="box-body">
                      <div class="table-responsive">
                          <table class="table table-striped table-bordered no-margin">
                            <thead>
                              <tr>
                                 <th class="text-center">S/N</th>
                                 <th>Name</th>
                                 <th class="text-right">Deposit Date</th>
                                 <th class="text-right">Amount</th>
                                 <th class="text-right">Method</th>
                                 <th class="text-right">Account</th>
                                 <th class="text-right">Status</th>
                              </tr>
                             </thead>
                             <tbody>
                                 @if ($user_pending_deposit->count()>0)
                                 @foreach ( $user_pending_deposit as $pending_deposit )
                                 <tr>
                                    <td class="text-center">{{$loop->index + 1}}</td>
                                    <td><a href="#" class="text-yellow hover-warning">{{ Auth::user()->name }}</a></td>
                                    <td class="text-right"><span></span>{{Carbon\Carbon::parse($pending_deposit->depositDate)->diffForHumans()}}</td>
                                    <td class="text-right"><span>{{$currency}}</span> {{$pending_deposit->amount}}</td>
                                    <td class="text-right"><span>{{$currency}}</span>{{$pending_deposit->method}}</td>
                                    <td class="text-right"><span>{{$currency}}</span>{{$pending_deposit->methodAccount	}}</td>
                                    <td class="text-right"><span class="label label-danger">Deposit pending</span></td>
                                 </tr>

                                 @endforeach

                                 @else

                                 <tr>

                                    <td colspan="6" class="text-center"><a href="#" class="text-yellow hover-warning">You have no pending deposit</a></td>
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
