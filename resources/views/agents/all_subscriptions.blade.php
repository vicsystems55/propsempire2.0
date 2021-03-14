@extends('layouts.agents_master')

@section('title') All Subscriptions @endsection

@section('content')

     @component('common-components.breadcrumb')
         @slot('title') All Subscriptions  @endslot
         @slot('li_1') View  @endslot
     @endcomponent

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Subscriptions</h4>
                <p class="card-title-desc">A powerful jQuery wizard plugin that supports accessibility and HTML5</p>

                

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