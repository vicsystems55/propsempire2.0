@extends('layouts.agents_master')

@section('title') History @endsection

@section('css')

<link href="{{URL::asset('libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::asset('libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('libs/bootstrap-touchspin/bootstrap-touchspin.min.css')}}" rel="stylesheet" />

@endsection

@section('content')

     @component('common-components.breadcrumb')
         @slot('title') Subscription  @endslot
         @slot('li_1') View  @endslot
     @endcomponent

<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{$single_plan->plan_name}}</h4>
                <p class="card-title-desc">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste dicta animi neque natus quae. Numquam 
                    quasi ab corporis temporibus aliquid tempore! Fugit, neque id. Ex voluptas possimus aperiam illum suscipit?
                </p>
                <hr>
                Properties

                <table class="table table-striped">
                    <tr>
                        <td class="font-weight-bold">Cost per month:</td>
                        <td>NGN {{number_format($single_plan->cost_per_month, 2)}}</td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Maximum Listings:</td>
                        <td>{{$single_plan->max_listings}}</td>
                    </tr>

                    <tr>
                        <td class="font-weight-bold">Premium Listings:</td>
                        <td>{{$single_plan->premium_listings}}</td>
                    </tr>

                    <tr>
                        <td class="font-weight-bold">Auto Boost:</td>
                        <td>{{$single_plan->auto_boost}}</td>
                    </tr>
                </table>



                

            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card card-body">
                <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                    <div class="row" style="margin-bottom:40px;">
                        <div class="col-md-8 col-md-offset-2">
                            <p>
                                <div>
                                    {{$single_plan->cost_per_month}}
                                </div>
                            </p>

                            <div class="form-group">
                                <label class="control-label">Select Duration</label>
                                <input name="quantity" data-toggle="touchspin" type="text" value="1">
                            </div>
                            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
                            <input type="hidden" name="orderID" value="345">
                            <input type="hidden" name="amount" value="{{$single_plan->cost_per_month * 100}}"> {{-- required in kobo --}}
                            <!-- <input type="hidden" name="quantity" value="3"> -->
                            <input type="hidden" name="currency" value="NGN">
                            <input type="hidden" name="metadata" value="{{ json_encode($array = [
                            
                                'subscription_plan_id' => $single_plan->id,
                                'plan_name' => $single_plan->plan_name,
                                'agent_id' => Auth::user()->id,
                                'subscription_fee' => $single_plan->cost_per_month,
                               
                               
                                
                            ]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                            <input type="hidden" name="callback_url" value="{{config('app.url')}}create_subscription">
                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

                            <p>
                                <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                    <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                </button>
                            </p>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>
<!-- end row -->

@endsection


@section('script')

<!-- form wizard -->
<script src="{{URL::asset('/libs/jquery-steps/jquery-steps.min.js')}}"></script>
<!-- form wizard init -->
<script src="{{URL::asset('/js/pages/form-wizard.init.js')}}"></script>

<script src="{{URL::asset('/libs/select2/select2.min.js')}}"></script>
<script src="{{URL::asset('/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{URL::asset('/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{URL::asset('/libs/bootstrap-touchspin/bootstrap-touchspin.min.js')}}"></script>
<script src="{{URL::asset('/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

<!-- form advanced init -->
<script src="{{URL::asset('/js/pages/form-advanced.init.js')}}"></script>
@endsection