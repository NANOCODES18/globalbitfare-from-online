@extends('dashb.dashlayout')
@section('dashbody')
 <!-- Content Header (Page header) -->



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
                <input type="text" class="form-control myInput readonly text-dark bg-light" value="https://globalbitfare.com//register/?refid={{Auth::user()->id}}" id="myInput" readonly>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" onclick="myFunction()" type="button" id="button-addon2"><i class="fas fa-copy"></i></button>
                </div>
            </div>

            <strong>or your Referral ID</strong><br>
            <h4 style="color:green;">{{Auth::user()->id}}</h4> <br>
            <h3 class="title1">
                <small>You were referred by</small><br>
                <i class="fa fa-user fa-2x"></i><br>
                <small>{{$refname? $refname:"none"}}</small>
            </h3>
        </div>
        <div class="mt-4 col-md-12">
            <h2 class="title1 text-dark text-left">Your Referrals.</h2>
            <div class="table-responsive">
                {{-- <table class="table UserTable table-hover text-dark">
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
                </table> --}}
                <table class="table table-bordered no-margin">
                    <thead>
                      <tr>
                          <th>SN</th>
                        <th>Name</th>
                        <th>Registration date</th>
                       <th>Email address</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if ($all_ref->count()>0)
                            @foreach ($all_ref as $ref)
                            <tr>
                                <td>
                                  <a href="#" class="text-yellow hover-warning">
                                    {{$loop->index + 1}}
                                  </a>

                                </td>
                                <td>{{$all_ref->name}}</td>

                                <td>{{$all_ref->email}}</td>

                              </tr>
                            @endforeach
                        @else

                        <tr>
                            <td colspan="4">
                                <h5 class="text-yellow hover-warning"> You have no referral, please share yout referral link to family and friends to earn referral bonus</h5>
                            </td>
                        </tr>

                        @endif

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



@endsection()
