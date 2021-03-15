@extends('layouts.agents_master')

@section('title') Pricing @endsection

@section('content')

     @component('common-components.breadcrumb')
         @slot('title') Pricing  @endslot
         @slot('li_1') Pages  @endslot
     @endcomponent

<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="text-center mb-5">
            <h4>Choose your Pricing plan</h4>
        </div>
    </div>
</div>

<div class="row">

   @foreach($all_plans->slice(0, 8) as $plan)

    <div class="col-xl-3 col-md-6">
        <div class="card plan-box">
            <div class="card-body ">
                <div class="media">
                    <div class="media-body">
                        <h5>{{$plan->plan_name}}</h5>
                        
                    </div>
                    <div class="ml-3">
                        <i class="null"></i>
                    </div>
                </div>
                <div class="py-4  text-center bg-soft-light">
                    <h1 class="m-0"><sup><small>NGN</small></sup> {{number_format($plan->cost_per_month, 2)}}/ <span class="font-size-13">Per month</span></h1>
                </div>

                <div class="plan-features text-muted mt-2">
                    <p><span class="font-weight-bold">{{$plan->max_listings}}</span> Maximum Listing</p>
                    <p><span class="font-weight-bold">{{$plan->premium_listings}}</span> Premium Listing</p>
                    <p><span class="font-weight-bold">{{$plan->auto_boost}}</span> Auto Boost</p>
                    
                    
                </div>

                <div class="text-center">
                    <a href="{{route('agents.single_plan_details', $plan->plan_name)}}" class="btn btn-primary waves-effect waves-light">Sign up Now</a>
                </div>

            </div>
        </div>
    </div>

   @endforeach

   <div class="">
        <div class="">
            <div class="">

               
                

                <p>
                    
                    <button class="btn btn-primary mt-1 text-center" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        SHOW MORE
                    </button>
                </p>
                <div class="collapse " id="collapseExample">
                    <div class="  ">


                    <div class="row">

                        @foreach($all_plans->slice(8, 25) as $plan)

                            <div class="col-xl-3 col-md-6">
                                <div class="card plan-box">
                                    <div class="card-body ">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5>{{$plan->plan_name}}</h5>
                                                
                                            </div>
                                            <div class="ml-3">
                                                <i class="null"></i>
                                            </div>
                                        </div>
                                        <div class="py-4  text-center bg-soft-light">
                                            <h1 class="m-0"><sup><small>NGN</small></sup> {{number_format($plan->cost_per_month, 2)}}/ <span class="font-size-13">Per month</span></h1>
                                        </div>

                                        <div class="plan-features text-muted mt-2">
                                            <p><span class="font-weight-bold">{{$plan->max_listings}}</span> Maximum Listing</p>
                                            <p><span class="font-weight-bold">{{$plan->premium_listings}}</span> Premium Listing</p>
                                            <p><span class="font-weight-bold">{{$plan->auto_boost}}</span> Auto Boost</p>
                                            
                                            
                                        </div>

                                        <div class="text-center">
                                            <a href="{{route('agents.single_plan_details', $plan->plan_name)}}" class="btn btn-primary waves-effect waves-light">Sign up Now</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>                   
                   
                   
                    </div>
                </div>

            </div>
        </div>
    </div>

   

    
    
</div>
<!-- end row -->
@endsection