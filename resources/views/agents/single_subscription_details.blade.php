@extends('layouts.agents_master')

@section('title') History @endsection

@section('content')

     @component('common-components.breadcrumb')
         @slot('title') Subscription  @endslot
         @slot('li_1') View  @endslot
     @endcomponent

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Subscription Details</h4>
                <p class="card-title-desc"></p>

                

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