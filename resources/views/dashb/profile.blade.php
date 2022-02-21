@extends('dashb.dashlayout')
@section('dashbody')




<div class="main-panel bg-light">
    <div class="content bg-light">
        <div class="page-inner">
            <div>
</div>                    <div>
</div>					<div>
</div>					<div class="row profile">
                <div class="p-2 col-md-12">
                    <div class="card p-md-5 p-1 shadow-lg bg-light">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a href="#per" class="nav-link active" data-toggle="tab">Personal Settings</a>
                            </li>
                            <li class="nav-item">
                                <a href="#set" class="nav-link" data-toggle="tab">Withdrawal Settings</a>
                            </li>
                            <li class="nav-item">
                                <a href="#pas" class="nav-link" data-toggle="tab">Password/Security</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sec" class="nav-link" data-toggle="tab">Other Settings</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="per">
                                <form method="POST" action="javascript:void(0)" id="updateprofileform">
<input type="hidden" name="_token" value="rnKrpidlxgZ9pHHT0EJaiVBljMTdi0eq3x9EBk35">    <div class="form-row">
<div class="form-group col-md-6">
    <h5 class="text-dark">Fullname</h5>
    <input type="text" class="form-control bg-light text-dark" value="ugo" name="name">
</div>
<div class="form-group col-md-6">
    <h5 class="text-dark">Email Address</h5>
    <input type="email" class="form-control bg-light text-dark" value="ugo.okiyi@gmail.com" name="email" readonly>
</div>
<div class="form-group col-md-6">
    <h5 class="text-dark">Phone Number</h5>
    <input type="text" class="form-control bg-light text-dark" value="08169856362" name="phone">
</div>
<div class="form-group col-md-6">
    <h5 class="text-dark">Date of Birth</h5>
    <input type="date" value="" class="form-control bg-light text-dark"  name="dob">
</div>
<div class="form-group col-md-6">
    <h5 class="text-dark">Nationality</h5>
    <textarea class="form-control bg-light text-dark" placeholder="Full Address" name="address" row="3"></textarea>
</div>

</div>
<button type="submit" class="btn btn-primary">Update Profile</button>
</form>

<!-- <script>

$('#updateprofileform').on('submit', function() {
//alert('love');
$.ajax({
url: "https://pggg.xwayminage.com/dashboard/profileinfo",
type: 'POST',
data: $('#updateprofileform').serialize(),
success: function(response) {
    if (response.status === 200) {
        $.notify({
            // options
            icon: 'flaticon-alarm-1',
            title: 'Success',
            message: response.success,
        },{
            // settings
            type: 'success',
            allow_dismiss: true,
            newest_on_top: false,
            showProgressbar: true,
            placement: {
                from: "top",
                align: "right"
            },
            offset: 20,
            spacing: 10,
            z_index: 1031,
            delay: 5000,
            timer: 1000,
            url_target: '_blank',
            mouse_over: null,
            animate: {
                enter: 'animated fadeInDown',
                exit: 'animated fadeOutUp'
            },

        });
    } else {

    }
},
error: function(data) {
    console.log(data);
},

});
});
</script>									 -->
</div>
                            <div class="tab-pane fade" id="set">
                                <form method="post" action="javascript:void(0)" id="updatewithdrawalinfo">
<input type="hidden" name="_token" value="rnKrpidlxgZ9pHHT0EJaiVBljMTdi0eq3x9EBk35">    <input type="hidden" name="_method" value="PUT">    <fieldset>
<legend>Bank Account</legend>
<div class="form-row">
    <div class="form-group col-md-6">
        <h5 class="text-dark">Bank Name</h5>
        <input type="text" name="bank_name" value=""  class="form-control text-dark bg-light" placeholder="Enter bank name">
    </div>
    <div class="form-group col-md-6">
        <h5 class="text-dark">Account Name</h5>
        <input type="text" name="account_name" value=""  class="form-control  text-dark bg-light" placeholder="Enter Account name">
    </div>
    <div class="form-group col-md-6">
        <h5 class="text-dark">Account Number</h5>
        <input type="text" name="account_no" value=""  class="form-control text-dark bg-light" placeholder="Enter Account Number">
    </div>
    <div class="form-group col-md-6">
        <h5 class="text-dark">Swift Code</h5>
        <input type="text" name="swiftcode" value=""  class="form-control text-dark bg-light" placeholder="Enter Swift Code">
    </div>
</div>
</fieldset>
<fieldset class="mt-2">
<legend>Cryptocurrency</legend>
<div class="form-row">
    <div class="form-group col-md-6">
        <h5 class="text-dark">Bitcoin</h5>
        <input type="text" name="btc_address" value=""  class="form-control text-dark bg-light" placeholder="Enter Bitcoin Address">
        <small class="text-dark">Enter your Bitcoin Address that will be used to withdraw your funds</small>
    </div>
    <div class="form-group col-md-6">
        <h5 class="text-dark">Ethereum</h5>
        <input type="text" name="eth_address" value=""  class="form-control text-dark bg-light" placeholder="Enter Etherium Address">
        <small class="text-dark">Enter your Ethereum Address that will be used to withdraw your funds</small>
    </div>
    <div class="form-group col-md-6">
        <h5 class="text-dark bg-light">Litecoin</h5>
        <input type="text" name="ltc_address" value=""  class="form-control text-dark bg-light" placeholder="Enter Litcoin Address">
        <small class="text-dark">Enter your Litecoin Address that will be used to withdraw your funds</small>
    </div>
</div>
</fieldset>
<button type="submit" class="px-5 btn btn-primary">Save</button>
</form>

<!--
<script>

$('#updatewithdrawalinfo').on('submit', function() {
// alert('love');
$.ajax({
    url: "https://pggg.xwayminage.com/dashboard/updateacct",
    type: 'POST',
    data: $('#updatewithdrawalinfo').serialize(),
    success: function(response) {
        if (response.status === 200) {
            $.notify({
                // options
                icon: 'flaticon-alarm-1',
                title: 'Success',
                message: response.success,
            },{
                // settings
                type: 'success',
                allow_dismiss: true,
                newest_on_top: false,
                showProgressbar: true,
                placement: {
                    from: "top",
                    align: "right"
                },
                offset: 20,
                spacing: 10,
                z_index: 1031,
                delay: 5000,
                timer: 1000,
                url_target: '_blank',
                mouse_over: null,
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                },

            });
        } else {

        }
    },
    error: function(data) {
        console.log(data);
    },

});
});
</script>								 -->
</div>
                            <div class="tab-pane fade" id="pas">
                                <form method="POST" action="#">
<input type="hidden" name="_token" value="rnKrpidlxgZ9pHHT0EJaiVBljMTdi0eq3x9EBk35">    <input type="hidden" name="_method" value="PUT">    <div class="form-row">
<div class="form-group col-md-6">
    <h5 class="text-dark">Old Password</h5>
    <input type="password" name="current_password" class="form-control text-dark bg-light" required>
</div>
<div class="form-group col-md-6">
    <h5 class="text-dark">New Password</h5>
    <input type="password" name="password" class="form-control text-dark bg-light" required>
</div>
<div class="form-group col-md-6">
    <h5 class="text-dark">Confirm New Password</h5>
    <input type="password" name="password_confirmation" class="text-dark bg-light form-control" required>
</div>
</div>
<button type="submit" class="btn btn-primary">Update Password</button>
</form>
<!-- <div class="mt-4">
<a href="https://pggg.xwayminage.com/dashboard/manage-account-security" class="text-decoration-none">Advance Account Settings <i class="fas fa-arrow-right"></i> </a>
</div>	 -->
                        </div>
                            <div class="tab-pane fade" id="sec">
                                <form method="POST" action="javascript:void(0)" id="updateemailpref">
<input type="hidden" name="_token" value="rnKrpidlxgZ9pHHT0EJaiVBljMTdi0eq3x9EBk35">    <input type="hidden" name="_method" value="PUT">    <div class="row">
<div class="mb-3 col-md-6">
    <h5 class="text-dark">Send confirmation OTP to my email when withdrawing my funds.</h5>
    <div class="selectgroup">
        <label class="selectgroup-item">
            <input type="radio" name="otpsend" id="otpsendYes" value="Yes" class="selectgroup-input" checked="">
            <span class="selectgroup-button">Yes</span>
        </label>
        <label class="selectgroup-item">
            <input type="radio" name="otpsend" id="otpsendNo" value="No" class="selectgroup-input">
            <span class="selectgroup-button">No</span>
        </label>
    </div>
</div>

<div class="mb-3 col-md-6">
    <h5 class="text-dark">Send me email when i get profit.</h5>
    <div class="selectgroup">
        <label class="selectgroup-item">
            <input type="radio" name="roiemail" id="roiemailYes" value="Yes" class="selectgroup-input" checked="">
            <span class="selectgroup-button">Yes</span>
        </label>
        <label class="selectgroup-item">
            <input type="radio" name="roiemail" id="roiemailNo" value="No" class="selectgroup-input">
            <span class="selectgroup-button">No</span>
        </label>
    </div>
</div>
<div class="mb-3 col-md-6">
    <h5 class="text-dark">Send me email when my investment plan expires.</h5>
    <div class="selectgroup">
        <label class="selectgroup-item">
            <input type="radio" name="invplanemail" id="invplanemailYes" value="Yes" class="selectgroup-input" checked="">
            <span class="selectgroup-button">Yes</span>
        </label>
        <label class="selectgroup-item">
            <input type="radio" name="invplanemail" id="invplanemailNo" value="No" class="selectgroup-input">
            <span class="selectgroup-button">No</span>
        </label>
    </div>
</div>
<div class="mt-2 col-12">
    <button type="submit" class="px-5 btn btn-primary">Save</button>
</div>
</div>

</form>



<script>
document.getElementById('otpsendYes').checked = true;
</script>





<script>
document.getElementById('roiemailYes').checked = true;
</script>


<script>
document.getElementById('invplanemailYes').checked = true;
</script>



<!-- <script>

$('#updateemailpref').on('submit', function() {
// alert('love');
$.ajax({
    url: "https://pggg.xwayminage.com/dashboard/update-email-preference",
    type: 'POST',
    data: $('#updateemailpref').serialize(),
    success: function(response) {
        if (response.status === 200) {
            $.notify({
                // options
                icon: 'flaticon-alarm-1',
                title: 'Success',
                message: response.success,
            },{
                // settings
                type: 'success',
                allow_dismiss: true,
                newest_on_top: false,
                showProgressbar: true,
                placement: {
                    from: "top",
                    align: "right"
                },
                offset: 20,
                spacing: 10,
                z_index: 1031,
                delay: 5000,
                timer: 1000,
                url_target: '_blank',
                mouse_over: null,
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                },

            });
        } else {

        }
    },
    error: function(data) {
        console.log(data);
    },

});
});
</script>	 -->
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


















































<style>
    .profile_link{
        color: black !important;
    }
    .profile_link_container:hover{
        color: blue !important;
    }
    .profile_link_container{
        color: white;
    }
</style>




<section class="content-header">
    <h1>
      Members Profile
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="breadcrumb-item"><a href="#">Members</a></li>
      <li class="breadcrumb-item active">My Profile</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-xl-4 col-lg-5">

        <!-- Profile Image -->
        <div class="box bg-yellow bg-deathstar-dark">
          <div class="box-body box-profile">
            <img class="profile-user-img rounded img-fluid mx-auto d-block" src="@if (Auth::user()->profilepic != "")
            storage/profile/{{Auth::user()->profilepic}}
            @else
            dashb/images/user2-160x160.jpg
            @endif" alt="User profile picture">
            <form action="{{route('userdashb_profile_pic')}}" id="myform" method="post" enctype="multipart/form-data">
                @csrf
             <div class="form-group">
              <input type="file" name="profilepic" id="uploadBox" onchange="fileupload()" required class="form-control" title="Change profile picture">
             </div>
             <div class="form-group">
                <button type="submit" class="btn btn-sm btn-success">Change</button>
            </div>
            </form>


            <h3 class="profile-username text-center mb-0">{{Auth::user()->name}}</h3>

            <h5 class="text-center mt-0"><i class="fa fa-envelope-o mr-10"></i>{{Auth::user()->email}}</h5>

            <div class="row social-states">
                <div class="col-6 text-right"><a href="#" class="link text-white"><i class="ion ion-ios-people-outline"></i> 0</a></div>
                <div class="col-6 text-left"><a href="#" class="link text-white"><i class="ion ion-images"></i> 4</a></div>
            </div>

            <div class="row">
              <div class="col-12">
                  <div class="media-list media-list-hover media-list-divided w-p100 mt-30">
                      <h4 class="media media-single p-15 profile_link_container">
                        <i class="fa fa-arrow-circle-o-right mr-10"></i>
                        <span class="title ">
                            <a class="profile_link " href="{{route('userdashb_profile')}}">My Profile</a>
                        </span>
                      </h4>
                      <h4 class="media media-single p-15 profile_link_container">
                        <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title"><a class="profile_link" href="{{route('userdashb_investment_plans')}}">Invests</a></span>
                      </h4>
                      <h4 class="media media-single p-15 profile_link_container">
                        <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title"><a href="{{route('userdashb_wallet_address')}}" class="profile_link"> The Wallet</a></span>
                      </h4>
                      <h4 class="media media-single p-15 profile_link_container">
                        <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title"><a href="{{route('userdashb_deposit')}}" class="profile_link">Deposit</a> </span>
                      </h4>
                      <h4 class="media media-single p-15 profile_link_container">
                        <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title"><a href="P{{route('userdash_pending_deposit')}}" class="profile_link">Pending Deposit</a> </span>
                      </h4>
                      <h4 class="media media-single p-15 profile_link_container">
                        <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title"><a href="{{route('userdash_pedinging_withdrawal')}}" class="profile_link">Pending Withdrawals</a> </span>
                      </h4>
                      <h4 class="media media-single p-15 profile_link_container">
                        <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title"> <a href="{{route('contact')}}" class="profile_link">Support</a></span>
                      </h4>
                  </div>
              </div>


            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
      <div class="col-xl-8 col-lg-7">
        <div class="box box-solid bg-black">
          <div class="box-header with-border">
            <h3 class="box-title">Personal details</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-12">
                  <form action="{{route('userdashb_personal_detail')}}" method="POST">
                    @csrf
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="name" type="text" value="{{Auth::user()->name}}" placeholder="{{Auth::user()->name}}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email Adress</label>
                    <div class="col-sm-10">
                      <input class="form-control" name='email' type="email" value="{{Auth::user()->email}}" placeholder="{{Auth::user()->email}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="phone" type="tel" value="{{Auth::user()->phone}}" placeholder="{{Auth::user()->phone}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-yellow">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <div class="box box-solid bg-black">
          <div class="box-header with-border">
            <h3 class="box-title">Personal address</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-12">
                  <form action="{{route('userdashb_personal_address')}}" method="post">
                    @csrf
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Street</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="street" value="{{Auth::user()->street}}" type="text" placeholder="{{Auth::user()->street}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="city" type="text" placeholder="{{Auth::user()->city}}" value="{{Auth::user()->city}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">State</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="state" type="text" value="{{Auth::user()->state}}" placeholder="{{Auth::user()->state}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Post Code</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="postal_code" type="number" placeholder="{{Auth::user()->post_code}}" value="{{Auth::user()->post_code}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Referral Link</label>
                    <div class="col-sm-10">
                      <input disabled style="color: black" readonly class="form-control" name="" type="text" value="https://auxilliarytradex.com/register/?refid={{Auth::user()->id}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-yellow">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <div class="box box-solid bg-black">
          <div class="box-header with-border">
            <h3 class="box-title">Social media</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-12">
                  <form action="{{route('userdashb_social_media')}}" method="POST">
                    @csrf
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Facebook</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="facebook" type="text" value="{{Auth::user()->facebook}}" placeholder="{{Auth::user()->facebook}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Instagram</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="instagram" type="text" value="{{Auth::user()->instagram}}" placeholder="{{Auth::user()->instagram}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Twitter</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="twitter" type="text" value="{{Auth::user()->twitter}}" placeholder="{{Auth::user()->twitter}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Linkedin</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="linkedin" type="text" value="{{Auth::user()->linkedin}}" placeholder="{{Auth::user()->linkedin}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-yellow">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  </section>
  <!-- /.content -->

@endsection()
