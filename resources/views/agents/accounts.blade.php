@extends('layouts.agents_master')

@section('title') History @endsection

@section('content')

     @component('common-components.breadcrumb')
         @slot('title') My Profile  @endslot
         @slot('li_1') View  @endslot
     @endcomponent



<div class="card ">
    <div class="card-body">
    <h5>My Profile</h5>

    <!-- <form action="">
        @csrf
        <input type="text" class="form-control" placeholder="Search...">
        <button class="btn btn-primary btn-rounded shadow">Search</button>
    </form> -->

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