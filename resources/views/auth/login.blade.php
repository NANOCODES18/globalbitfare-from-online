@extends("layouts.customlayout")
@section('body')


<div class="banner-area center">
    <div class="area">
        <div class="bodycontainer">
            <h1 class="tlt text-white" style="margin: 20px 0;">USER <span class="text-default">LOGIN</span></h1>
            <div class="banner-title">
               <span class="decor-equal"></span>
            </div>
            <div  style="margin: 20px 0;">
                <a href="{{route('index')}}">HOME</a> / LOGIN
            </div>
        </div>
        <div id="particles-js"></div>

    </div>
    </div>
        <div class="smallcontainer padding">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="title_container">
                  <h4>Login Authentication</h4>
                  <span class="decor_default"></span>
            </div>
            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  <div class="row margintb">
                    <a href="{{route('password.request')}}" class="right">Forgot password?</a>
                    <input type="checkbox" name="remember" value="1" id="label"><label for="check"> Remember Me</label>
                </div>
                <input type="submit" value="Login" class="btn round default"><br><br>
               <br><br>
        </form>

        </div>
    <a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up show-back-to-top"></a>




@endsection
