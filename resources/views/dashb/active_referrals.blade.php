@extends('dashb.dashlayout')
@section('dashbody')

-->
<div class="main-panel bg-light">
<div class="content bg-light">
<div class="page-inner">
<div class="mt-2 mb-4">
<h1 class="title1 text-dark">Refer users to company community</h1>
</div>
<div>
</div>					<div>
</div>
<div class="row">
<div class="col-md-12 text-center card bg-light shadow-lg p-3 text-dark">
    <div class="p-4 row">
        <div class="col-md-8 offset-md-2">
            <strong>You can refer users by sharing your referral link:</strong><br>
            <div class="mb-3 input-group">
                <input type="text" class="form-control myInput readonly text-dark bg-light" value="http://company.com/ref/ugo" id="myInput" readonly>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" onclick="myFunction()" type="button" id="button-addon2"><i class="fas fa-copy"></i></button>
                </div>
            </div>

            <strong>or your Referral ID</strong><br>
            <h4 style="color:green;"> ugo</h4> <br>
            <h3 class="title1">
                <small>You were referred by</small><br>
                <i class="fa fa-user fa-2x"></i><br>
                <small>null</small>
            </h3>
        </div>
        <div class="mt-4 col-md-12">
            <h2 class="title1 text-dark text-left">Your Referrals.</h2>
            <div class="table-responsive">
                <table class="table UserTable table-hover text-dark">
                    <thead>
                        <tr>
                            <th>Client name</th>
                            <th>Ref. level</th>
                            <th>Parent</th>
                            <th>Client status</th>
                            <th>Date registered</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<script>
function myFunction() {
/* Get the text field */
var copyText = document.getElementById("myInput");
/* Select the text field */
copyText.select();
copyText.setSelectionRange(0, 99999); /* For mobile devices */
/* Copy the text inside the text field */
document.execCommand("copy");
/* Alert the copied text */
//alert("Copied the text: " + copyText.value);
swal("Copied", copyText.value, "success");
}
</script>





















 <!-- Content Header (Page header) -->
 <section class="content-header">
    <h1>
     Referrals
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="breadcrumb-item"><a href="#">Referrals</a></li>
      <li class="breadcrumb-item active">All Active Referrals</li>
    </ol>
  </section>

      <div class="col-12">
          <!-- Default box -->
            <div class="box box-solid bg-black">
              <div class="box-header with-border">
                <h3 class="box-title">Active Referrals</h3>

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
                      <table class="table table-bordered no-margin">
                        <thead>
                          <tr>
                              <th>SN</th>
                            <th>Name</th>
                            <th>Registration date</th>
                           <th>Email address</th>
                           <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                        @if ($all_active_ref->count()>0)
                                @foreach ($all_active_ref as $ref)
                                <tr>
                                    <td>
                                      <a href="#" class="text-yellow hover-warning">
                                        {{$loop->index + 1}}
                                      </a>

                                    </td>
                                    <td>{{$all_active_ref->name}}</td>

                                    <td>{{$all_active_ref->email}}</td>
                                    <td>Active</td>

                                  </tr>
                                @endforeach
                            @else

                            <tr>
                                <td colspan="4">
                                    <h5 class="text-yellow hover-warning"> You have no active referral, please your referrals need to make deposit for you to earn referral bonus</h5>
                                </td>
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
@endsection()
