@extends('dashb.dashlayout')
@section('dashbody')
<style>
    .col-form-label{
        color: #060670 !important
    }
    label{color: #060670 !important}
</style>
    <div class="main-panel bg-light" style="background-color: black">
        <div class="content bg-light " >
            <div class="page-inner">
                <div>
                </div>
                <div>
                </div>
                <div>
                </div>
                <div class="row profile">
                    <div class="p-2 col-md-12">

        <<div class="col-xl-8 col-lg-7">
            <div class="box box-solid bg-black">
                <div class="box-header with-border">
                    <h3 class="box-title">Personal details</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('userdashb_personal_detail') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label style=" color: #060670"; class="col-sm-2 col-form-label" style="color: #060670">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="name" type="text"
                                            value="{{ Auth::user()->name }}"
                                            placeholder="{{ Auth::user()->name }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label style=" color: #060670"; class="col-sm-2 col-form-label">Email Adress</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name='email' type="email"
                                            value="{{ Auth::user()->email }}"
                                            placeholder="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label style=" color: #060670"; class="col-sm-2 col-form-label">Phone Number</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="phone" type="tel"
                                            value="{{ Auth::user()->phone }}"
                                            placeholder="{{ Auth::user()->phone }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label style=" color: #060670"; class="col-sm-2 col-form-label"></label>
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
                            <form action="{{ route('userdashb_personal_address') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label style=" color: #060670"; class="col-sm-2 col-form-label">Street</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="street"
                                            value="{{ Auth::user()->street }}" type="text"
                                            placeholder="{{ Auth::user()->street }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label style=" color: #060670"; class="col-sm-2 col-form-label">City</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="city" type="text"
                                            placeholder="{{ Auth::user()->city }}"
                                            value="{{ Auth::user()->city }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label style=" color: #060670"; class="col-sm-2 col-form-label">State</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="state" type="text"
                                            value="{{ Auth::user()->state }}"
                                            placeholder="{{ Auth::user()->state }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label style=" color: #060670"; class="col-sm-2 col-form-label">Post Code</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="postal_code" type="number"
                                            placeholder="{{ Auth::user()->post_code }}"
                                            value="{{ Auth::user()->post_code }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label style=" color: #060670"; class="col-sm-2 col-form-label">Referral Link</label>
                                    <div class="col-sm-10">
                                        <input disabled style="color: black" readonly class="form-control"
                                            name="" type="text"
                                            value="https://globalbitfare.com/register/?refid={{ Auth::user()->id }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label style=" color: #060670"; class="col-sm-2 col-form-label"></label>
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
                            <form action="{{ route('userdashb_social_media') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label style=" color: #060670"; class="col-sm-2 col-form-label">Facebook</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="facebook" type="text"
                                            value="{{ Auth::user()->facebook }}"
                                            placeholder="{{ Auth::user()->facebook }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label style=" color: #060670"; class="col-sm-2 col-form-label">Instagram</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="instagram" type="text"
                                            value="{{ Auth::user()->instagram }}"
                                            placeholder="{{ Auth::user()->instagram }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label style=" color: #060670"; class="col-sm-2 col-form-label">Twitter</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="twitter" type="text"
                                            value="{{ Auth::user()->twitter }}"
                                            placeholder="{{ Auth::user()->twitter }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label style=" color: #060670"; class="col-sm-2 col-form-label">Linkedin</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="linkedin" type="text"
                                            value="{{ Auth::user()->linkedin }}"
                                            placeholder="{{ Auth::user()->linkedin }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label style=" color: #060670"; class="col-sm-2 col-form-label"></label>
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
    @endsection()
