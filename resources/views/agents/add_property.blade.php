@extends('layouts.agents_master')

@section('title') Add Property @endsection

@section('css')
<!-- Plugins css -->
<link href="{{URL::asset('/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />



@endsection

@section('content')

     @component('common-components.breadcrumb')
         @slot('title') Add Property  @endslot
         @slot('li_1') Setup  @endslot
     @endcomponent

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Setup Listing</h4>
                

                <form id="form-horizontal" class="form-horizontal form-wizard-wrapper">


                    <h3>Listing Details</h3>


                    <fieldset>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input name="title" type="text" class="form-control" placeholder="Enter title of property">
                                </div>

                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="description" col="30" row="50"  class="form-control" placeholder="Enter title of property"></textarea>
                                </div>


                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="">Category</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">s</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Type</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">s</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Subtype</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">s</option>
                                    </select>
                                </div>

                                

                            </div>
                        </div>

                    </fieldset>


                    <h3>Properties</h3>

                    <fieldset>
                        <h6>Listings Property</h6>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Bedrooms</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Bathroom</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Toilet</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Parking</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Total Area</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Covered Area</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Price</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Discount</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>

                            </div>


                        

                       
                        
                    </fieldset>

                </form>

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

<!-- Plugins js -->
<script src="{{URL::asset('/libs/dropzone/dropzone.min.js')}}"></script>





@endsection