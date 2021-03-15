@extends('layouts.agents_master')

@section('title') History @endsection

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
                        <td>{{$single_plan->cost_per_month}}</td>
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
</div>
<!-- end row -->

@endsection

@section('script')

<!-- form wizard -->
<script src="{{URL::asset('/libs/jquery-steps/jquery-steps.min.js')}}"></script>
<!-- form wizard init -->
<script src="{{URL::asset('/js/pages/form-wizard.init.js')}}"></script>

@endsection