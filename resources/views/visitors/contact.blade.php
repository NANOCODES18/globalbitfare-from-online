@extends("layouts.spacedcustomlayout")

@section("body")


<div class="banner-area center">
    <div class="area">
        <div class="bodycontainer">
            <h1 class="tlt text-white" style="margin: 20px 0;">Contact <span class="text-default">Us</span></h1>
            <div class="banner-title">
               <span class="decor-equal"></span>
            </div>
            <div  style="margin: 20px 0;">
                <a href="{{route('index')}}">HOME</a> / CONTACT US
            </div>
        </div>
        <div id="particles-js"></div>
    </div>
    </div>
    <div class="bodycontainer">



    <div class="row">
    <div class="col-12 col-m-12 col-sm-12">
         <div class="col-8 col-sm-12">
         <div class="title_container">
        <h4>Feel free to drop us a message.</h4>
        <span class="decor_default"></span>
    </div>
    <div class="alerter"></div>
    <script type="text/javascript" src="js/mail.js"></script>
    <form method="POST" action="{{route('postcontact')}}" id="contactform">
        @csrf
    <p>What can we help you with?</p>
        <div class="row">
             <div class="col-12" style="padding:5px 0">
            <select name="topic" style="width:100%" class="round">
                <option value="Trading Question">Trading Question</option>
                <option value="Finance Question">Finance Question</option>
                <option value="Technical Question">Technical Question</option>
            </select>
             </div>
    <div class="col-6" style="padding:5px 0">
    <input type="text" name="name" placeholder="Name" required style="width:100%;" class="round" value="">
    </div>
    <div class="col-6" style="padding:5px 0">
    <input type="text" name="email" placeholder="Email" required style="width:100%" class="round" value="">
    </div><div class="col-12" style="padding:5px 0">
    <textarea name="message" placeholder="Message" class="round" required style="width:100%; height: 120px"></textarea>
    </div>
    <div class="col-12" style="padding:5px 0">
    <button name="Submit" type="submit" id="sendform" class="btn default round">Send</button>

    </div>
    </div>
    </form>
    </div>


         <div class="col-4 col-sm-12">
            <div class="darkgrey row">
                <div class="col-3 col-m-2 col-sm-3 center">
                    <i class="fa fa-home fa-2x text-default"></i>
                </div>
                <div class="col-9 col-m-10 col-sm-9">
                    <h6 style="line-height:30px !important">ADDRESS:</h6>
                    <p>{{$compd? $compd->companyLocation : "coming soon"}}</p>
                </div>
                <div class="col-3 col-m-2 col-sm-3 center">
                    <i class="fa fa-envelope fa-2x text-default"></i>
                </div>
                <div class="col-9 col-m-10 col-sm-9">
                    <h6 style="line-height:30px !important">EMAIL ADDRESSE:</h6>
                    <p><a href="mailto://{{$compd? $compd->companyEmail : "coming soon"}}">{{$compd? $compd->companyEmail : "coming soon"}}</a></p>
                </div>
            </div>
        </div>
     </div>


    </div>
    </div>

    </div>
    <a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up show-back-to-top"></a>
















</header>
<!-- START SECTION BANNER -->

<div class="section section-x">
    <div class="container">
        <div class="row gutter-vr-30px">
            <div class="col-lg-4">
                <div class="text-block">
                    <div class="section-head">
                        <h5 class="heading-xs dash fw-4">Send us a message</h5>
                        <h2>Tell us how we may help you and leave us your contact info</h2>
                    </div>
                </div>
            </div><!-- .col -->
            <div class="col-lg-8">
                                    <form class="" action="{{route('postcontact')}}" method="POST">
                                        @csrf
                    <div class="form-results"></div>
                    <div class="row">
                        <div class="form-field col-md-6">
                            <input name="name" required type="text" placeholder="Your Name" class="input bg-secondary">
                        </div>
                        <div class="form-field col-md-6">
                            <input name="email" required type="email" placeholder="Your Email" class="input bg-secondary">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-field col-md-6">
                                                            <input name="phone" type="tel" placeholder="Your Phone" class="input bg-secondary">
                        </div>
                        <div class="form-field col-md-6">
                            <input name="subject" type="text" placeholder="Subject" class="input bg-secondary">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-field col-md-12">
                            <textarea name="message" required placeholder="Briefly tell us what you want... " class="input input-msg bg-secondary" aria-required="true"></textarea>
                            <button type="submit" class="btn btn-md" name="send">Send Message</button>
                        </div>
                    </div>
                </form><!-- end form -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div>
<!-- .section -->

<!-- section  -->
        <div class="section tc-light section-x" style="padding-bottom: 30px;">
    <div class="container">
        <div class="row gutter-vr-30px">
            <div class="col-md-12">
                <div class="contact-text">
                    <div class="text-box">
                        <h3>Visit Us</h3>
                        <p class="lead"><em class="contact-icon ti-direction"></em> {{$compd? $compd->companyLocation : "coming soon"}}</p>
                    </div>
                    <ul class="contact-list">
                        <li>
                            <em class="contact-icon ti-mobile"></em>
                            <div class="conatct-content">
                                <a href="tel:{{$compd? $compd->companyPhone : "coming soon"}}">{{$compd? $compd->companyPhone : "coming soon"}}</a>
                            </div>
                        </li>
                        <li>
                            <em class="contact-icon ti-email"></em>
                            <div class="conatct-content">
                                <a href="mailto:{{$compd? $compd->companyEmail : "coming soon"}}">{{$compd? $compd->companyEmail : "coming soon"}}</a>
                            </div>
                        </li>
                                                        <li>
                            <em class="contact-icon ti-world"></em>
                            <div class="conatct-content">
                                                                    <a href="{{route('index')}}">www.auxilliarytradex.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
    <!-- bg -->
    <div class="bg-image bg-fixed">
        <img src="images/bg-l.jpg" alt="">
    </div>
    <!-- .bg -->
</div>

<!-- code -->

<!-- end code -->
<!-- section / cta-->
<div class="section section-cta bg-primary tc-light">
<div class="container">
    <div class="row gutter-vr-30px align-items-center justify-content-between">
        <div class="col-lg-8 text-center text-lg-left">
            <div class="cta-text-s2">
                <h2><span>Start your journey to</span> <strong> Financial freedom </strong></h2>
            </div>
        </div>
        <div class="col-lg-4 text-lg-right text-center">
            <div class="cta-btn">
                <a href="{{route('register')}}" class="btn btn-lg">Get Started</a>
            </div>
        </div>
    </div>
</div>
</div>


@endsection()
