@extends('dashb.dashlayout')
@section('dashbody')
    <div class="main-panel bg-light">
        <div class="content bg-light">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-dark">Request for Withdrawal</h1>
                </div>
                <div>
                </div>
                <div>
                </div>



<section class="content-header">
    <h1>
    Fund withdrawal
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="breadcrumb-item"><a href="#">Make Withdrawal</a></li>
      <li class="breadcrumb-item active">Withdrawal</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

   <div class="row">

       <div class="col-lg-12 col-12">

           <div class="row">

              <div class="col-12">
                  <h3 class="page-header">Withdrawal Request Form</h3>
              </div>

              <div class="col-lg-6 col-12">
                  <div class="box bg-info box-solid">
                    <div class="box-header with-border">
                      <h4 class="box-title">make withdrawal</h4>
                      <ul class="box-controls pull-right">
                        <li><a class="box-btn-close" href="#"></a></li>
                        <li><a class="box-btn-slide"  href="#"></a></li>
                        <li><a class="box-btn-fullscreen" href="#"></a></li>
                      </ul>
                    </div>

                    <div class="box-content">
                      <div class="box-body">
                        <form action="{{route('userdashb_withdrawal_post')}}" method="post" >
                            @csrf
                          <div class="form-group row">
                              <label class="col-12" for="login1-username">Enter address</label>
                              <div class="col-12">
                                  <input type="text" required class="form-control" placeholder="enter bitcoin address" name="btcaddress" value="">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-12" for="lock1-password1">Amount (in {{$currency}})</label>
                              <div class="col-12">
                                  <input type="number" required class="form-control" id="lock1-password1" name="amount" placeholder="Enter Amount in USD">
                              </div>
                          </div>
                          <div class="form-group row mb-0">
                              <div class="col-12">
                                  <button type="submit" class="btn btn-success">
                                      <i class="fa fa-arrow-right mr-5"></i> Proceed with withdrawal
                                  </button>
                              </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
              </div>


           </div>

       </div>

    </div>

  </section>


                <!-- Withdrawal Modal -->
                <div id="withdrawdisabled" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header bg-light">
                                <h4 class="modal-title text-dark">Withdrawal Status</h4>
                                <button type="button" class="close text-dark" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body bg-light">
                                <h4 class="text-dark">Withdrawal is Disabled at the moment, Please check back later
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Withdrawals Modal -->
            </div>
        </div>
    @endsection()
