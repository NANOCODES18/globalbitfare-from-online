@extends('dashb.dashlayout')
@section('dashbody')
    <div class="main-panel bg-light">
        <div class="content bg-light">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-dark">Available packages</h1>
                </div>
                <div>
                </div>
                <div>
                </div>
                <div class="mb-5 row">
                    @if (isset($plans) && $plans->count() > 0)
                        @foreach ($plans as $plan)
                            <div class="col-lg-4">
                                <div class="pricing-table card purple border bg-light shadow p-4">
                                    <!-- Table Head -->

                                    <h2 class="text-dark">{{ $plan->name }}</h2>
                                    <!-- Price -->
                                    <div class="price-tag">
                                        <span class="symbol text-dark">$</span>
                                        <span class="amount text-dark">{{ $plan->minimum }}</span>
                                    </div>
                                    <!-- Features -->
                                    <div class="pricing-features">
                                        <div class="feature text-dark">Minimum Possible Deposit:<span
                                                class="text-dark">${{ $plan->minimum }}</span></div>
                                        <div class="feature text-dark">Maximum Possible Deposit:<span
                                                class="text-dark">${{ $plan->maximum }}</span></div>
                                        <div class="feature text-dark">Minimum Return:<span
                                                class="text-dark">${{ ($plan->minimum * $plan->percentage) / 100 }}</span>
                                        </div>
                                        <div class="feature text-dark">Maximum Return:<span
                                                class="text-dark">${{ ($plan->maximum * $plan->percentage) / 100 }}</span>
                                        </div>
                                        <div class="feature text-dark">Gift Bonus:<span class="text-dark">$0</span>
                                        </div>
                                        <div class="feature text-dark">Duration:<span
                                                class="text-dark">{{ $plan->duration }} Days</span></div>
                                    </div> <br>
                                    <!-- Button -->
                                    <div class="">
                                        <form action="{{ route('userdashb_plan') }}" method="POST">
                                            @csrf
                                            <input type="text" hidden name="plan" value="{{ $plan->plan }}" id="">
                                            <h5 class="text-dark">Amount to invest: ($1000 default)</h5>
                                            <input type="number" min="{{ $plan->minimum }}" max="{{ $plan->maximum }}"
                                                name="amount" placeholder="$1000" class="form-control text-dark bg-light">
                                            <br>


                                            <input type="submit" class="btn btn-block pricing-action btn-primary"
                                                value="Join plan">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif














                </div>
            </div>
        </div>
    @endsection()
