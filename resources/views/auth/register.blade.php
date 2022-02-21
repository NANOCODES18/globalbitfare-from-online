@extends("layouts.customlayout")

@section('body')
    <div class="banner-area center">
        <div class="area">
            <div class="bodycontainer">
                <h1 class="tlt text-white" style="margin: 20px 0;">USER <span class="text-default">REGISTERATION</span></h1>
                <div class="banner-title">
                    <span class="decor-equal"></span>
                </div>
                <div style="margin: 20px 0;">
                    <a href="{{ route('index') }}">HOME</a> / CREATE AN ACCOUNT
                </div>
            </div>
            <div id="particles-js"></div>
        </div>
    </div>
    {{-- <script src="js/regvalidation.js"></script> --}}
    <link rel="stylesheet" href="css/intlTelInput.css">
    <div class="smallcontainer padding">
        <form action="{{ route('register') }}" method="POST" class="validate row" >
            @csrf
            <div class="col-12 col-m-12 col-sm-12">
                <div class="title_container">
                    <h4>Create an Account</h4>
                    <span class="decor_default"></span>
                </div>
            </div>
            <div class="col-12 col-m-12 col-sm-12">
                <input type="text" placeholder="Reference ID(Optional)" name="refid" value="@php if(isset($_GET['refid'])) { echo $_GET['refid'];} @endphp"  style="width:100%"
                    class="round">
            </div>
            <div class="col-12 col-m-12 col-sm-12">
                <input type="text" class="round" style="width:100%" placeholder="Enter Full Name" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

            </div>

            <div class="col-12 col-m-12 col-sm-12">
                <input class="round" type="email" placeholder="Email" style="width:100%" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

            </div>
            <div class="col-12 col-m-12 col-sm-12">
                <select name="gender"  style="width:100%" class="round">
                    <option id="emale">Male</option>
                    <option id="efemale">Female</option>
                </select>
            </div>
            <div class="col-12 col-m-12 col-sm-12">
                <input type="tel"  placeholder="Enter phone" required name="phone" value="" class="round"
                    style="width:100%;">
            </div>
            <div class="col-12 col-m-12 col-sm-12">
                <input type="text" placeholder="Zip Code" name="zip" value="" style="width:100%"
                    class="round">
                <div id="ezipErr" class="form_hint"> Zip code must not be empty!</div>
            </div>
            <div class="col-12 col-m-12 col-sm-12">
                <input type="text" placeholder="Address"  name="address" value="" style="width:100%"
                    class="round">
                <div id="eaddressErr" class="form_hint"> Address must not be empty!</div>
            </div>
            <div class="col-12 col-m-12 col-sm-12">
                <input class="round" style="width:100%" type="password" placeholder="Enter a strong password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div  class="form_hint"> Make your password stronger with more letters and at least a
                    numbers</div>
            </div>
            <div class="col-12 col-m-12 col-sm-12">
                <input  style="width:100%" class="round" placeholder="Confirm your password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

            </div>
            <div class="col-12 col-m-12 col-sm-12"><input type="checkbox" name="age" required> I am 18 years of age or older
            </div>
            <div class="col-12 col-m-12 col-sm-12"><input type="checkbox" name="agree" required checked> I agree to Global
                Bitfare| Your Trusted Bitcoin Mining and Investment Company <a href="{{ route('terms') }}"
                    target="_blank">Terms and conditions</a>
            </div>
            <div class="col-12 col-m-12 col-sm-12"><input type="checkbox" name="mail" required> I agree to receive Global
                Bitfare| Your Trusted Bitcoin Mining and Investment Company and third party emails</label>
            </div>
            <div class="col-12 col-m-12 col-sm-12">
                <input type="submit" value="Submit" class="btn round default" style="border:0"><br><br>
                <a href="{{ route('login') }}">Already have an account</a>
            </div>
        </form>
    </div>
    {{-- <script src="js/intlTelInput.js"></script> --}}
    <style>
        .intl-tel-input .country-list {
            background-color: #111111 !important;
            border: 1px solid #2d2d2d !important;
        }

        .intl-tel-input .country-list .divider {
            border-bottom: 1px solid #2D2D2D !important;
        }

        .intl-tel-input .selected-flag .iti-arrow {
            border-top: 4px solid #F1F1F1 !important;
        }

    </style>
    <a href="#" id="eback-to-top" class="back-to-top fa fa-arrow-up show-back-to-top"></a>







@endsection
