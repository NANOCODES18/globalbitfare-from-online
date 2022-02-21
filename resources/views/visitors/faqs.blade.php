@extends("layouts.spacedcustomlayout")

@section('body')
    <script language="JavaScript" type="text/javascript">
        function del(id) {
            if (confirm("Are you sure you want to delete this FAQ")) {
                window.location.href = 'https://globalbitfare.com/faqs?set=del&del=' + id;
            }
        }
    </script>
    <script language="JavaScript" type="text/javascript">
        function del(id) {
            if (confirm("Are you sure you want to delete this FAQ")) {
                window.location.href = 'https://globalbitfare.com/admin?n=faq&set=del&del=' + id;
            }
        }
    </script>
    <div class="banner-area center">
        <div class="area">
            <div class="bodycontainer2">
                <h1 class="tlt text-white" style="margin: 20px 0;">Frequently <span class="text-default">asked
                        questions.</span></h1>
                <div class="banner-title">
                    <span class="decor-equal"></span>
                </div>
                <div style="margin: 20px 0;">
                    <a href="{{ route('index') }}">HOME</a> / FAQS
                </div>
            </div>
            <div id="particles-js"></div>
        </div>
    </div>
    <div class="bodycontainer2 padding">
        <div class="title_container">
            <h4>General Questions.</h4>
            <span class="decor_default"></span>
        </div>

        <div class="accordion row" style="min-height:350px">
            <div class="accordion-section">
                <a class="accordion-section-title" href="#accordion-2">HOW DO I GET STARTED?</a>
                <div id="accordion-2" class="accordion-section-content padding">
                    <p>The information you need to provide for your wallet to be created are;


                        . Your Full Names

                        . Date Of Birth

                        . Your� Email Address.

                        . Your Phone Number.</p>
                </div>
            </div>

            <div class="accordion-section">
                <a class="accordion-section-title" href="#accordion-3">WHEN DO I START TO EARN?</a>
                <div id="accordion-3" class="accordion-section-content padding">
                    <p>Your wallet will be created by a mining expert and it will be connected to global bitfare network, a
                        mail will be sent to you from�www.blockchain.com�containing your wallet information ( wallet ID) and
                        a� pseudorandomly generated system password will be sent to you accordingly.</p>
                </div>
            </div>

            <div class="accordion-section">
                <a class="accordion-section-title" href="#accordion-4">HOW DO I VERIFY MY WALLET ADDRESS?</a>
                <div id="accordion-4" class="accordion-section-content padding">
                    <p>YOU ARE REQUIRED TO VERIFY YOUR EMAIL ADDRESS ONCE YOUR WALLET IS READY.


                        1. You&#39;re to login with the pseudorandomly generated system password after you have verified
                        your email address.

                        2. Once you login into your wallet you&#39;re advise/ required to immediately change the
                        pseudorandomly generated system password to a new or a unique password of your choice that you alone
                        can have access to.

                        3.� You are also advise to set the various security verifications processes to enable you secure
                        your investment.

                        4.� After you must have� changed your password and also completed the security setup.

                        5. Go to�www.globalbitfare.com�to sign up, use the same email address you provided, because the
                        email is already connected to global bitfare network through�blockchain.com. Once you have completed
                        your sign up process;

                        6. You can now go and fund your wallet with the required amount of Bitcoin plan that you must have
                        chosen.</p>
                </div>
            </div>


            @if ($faqs)
            @foreach ($faqs as $faq)

            <div class="accordion-section">
                <a class="accordion-section-title" href="#accordion-3">{{$faq->question}} </a>
                <div id="accordion-3" class="accordion-section-content padding">
                    <p>{{$faq->answer}}</p>
                </div>
            </div>


            @endforeach
        @endif
        </div>
    </div>
    </div>
    <a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up show-back-to-top"></a>
@endsection()
