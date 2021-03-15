@extends('layouts.agents_master')

@section('title') Add Property @endsection

@section('css')
<!-- Plugins css -->

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyA5ZHuSPiaMu-k_KyWvGj15UR3JWuHWM9E"></script>

<link href="{{URL::asset('libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::asset('libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('libs/bootstrap-touchspin/bootstrap-touchspin.min.css')}}" rel="stylesheet" />



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

                                <div class="form-group">
                                    <label for="">Location:</label>
                                    <input id="search_input" name="location" type="text" class="form-control" placeholder="Enter location">
                                </div>


                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="">Category</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">--Select Category--</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option> 
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Type</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">--Select Type--</option>
                                        @foreach($types as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option> 
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Subtype</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">--Select Subtype--</option>
                                        @foreach($subtypes as $subtype)
                                        <option value="{{$subtype->id}}">{{$subtype->name}}</option> 
                                        @endforeach
                                    </select>
                                </div>

                                

                            </div>
                        </div>

                    </fieldset>


                    <h3>Properties</h3>

                    <fieldset>
                        

                      

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Bedrooms</label>
                                        <input type="number" value="0"  class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Bathroom</label>
                                        <input type="number" value="0" name="bathroom"  class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Toilet</label>
                                        <input type="number" value="0" name="toilet"  class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Parking</label>
                                        <input type="number" value="0" name="parking"  class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Total Area</label>
                                        <input type="number" value="0" name="total_area"  class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Covered Area</label>
                                        <input type="number" value="0" name="covered_area"  class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Price</label>
                                        <input type="number" value="0" name="price"  class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Discount</label>
                                        <input type="number" value="0"  class="form-control">
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


<script src="{{URL::asset('/libs/select2/select2.min.js')}}"></script>
<script src="{{URL::asset('/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{URL::asset('/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{URL::asset('/libs/bootstrap-touchspin/bootstrap-touchspin.min.js')}}"></script>
<script src="{{URL::asset('/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>



<script>

var searchInput = 'search_input';

$(document).ready(function () {
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
        types: ['geocode'],
    });
    
    google.maps.event.addListener(autocomplete, 'place_changed', function () {
        var near_place = autocomplete.getPlace();
        document.getElementById('loc_lat').value = near_place.geometry.location.lat();
        document.getElementById('loc_long').value = near_place.geometry.location.lng();
        
        document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
        document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();
    });
});

$(document).on('change', '#'+searchInput, function () {
    document.getElementById('latitude_input').value = '';
    document.getElementById('longitude_input').value = '';
    
    document.getElementById('latitude_view').innerHTML = '';
    document.getElementById('longitude_view').innerHTML = '';
});
</script>




@endsection