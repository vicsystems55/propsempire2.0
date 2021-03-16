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
                

                <form method="post" action="{{route('create_listing')}}" id="form-horizontal" class="form-horizontal form-wizard-wrapper">
                    @csrf

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
                                    <select onchange="get_type(this.id)" name="category_id" id="category_select"  class="form-control">
                                        <option value="">--Select Category--</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option> 
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label id="_type_label" for="">Type</label>
                                    <select onchange="get_subtype(this.id)" name="type_id" id="_type"  class="form-control">
                                        <option value="">--Select Type--</option>
                                        @foreach($types as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option> 
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label id="_subtype_label" for="">Subtype</label>
                                    <select name="subtype_id" id="_subtype"  class="form-control">
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

                    <fieldset >
                        

                      

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Bedrooms</label>
                                        <input type="number" value="0" name="bedrooms"  class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Bathroom</label>
                                        <input type="number" value="0" name="bathrooms"  class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Toilet</label>
                                        <input type="number" value="0" name="toilets"  class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Parking</label>
                                        <input type="number" value="0" name="parkings"  class="form-control">
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
                                        <input type="number" value="0" name="discount"  class="form-control">
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
    // document.getElementById('latitude_input').value = '';
    // document.getElementById('longitude_input').value = '';
    
    // document.getElementById('latitude_view').innerHTML = '';
    // document.getElementById('longitude_view').innerHTML = '';
});
</script>

<script>

// var allOfThem = $('#form-horizontal #category_select');

// console.log(allOfThem)

// document.getElementById('category_select');

function get_type(did) {

    $("#_type_label").html('Loading...')
    
var did = $('#'+ did).val();
    console.log(did)

    $.ajax('/get_types', {
    type: 'GET',  // http method
    data: { 
        category: did
    }, 
     // data to submit
    success: function (response, status, xhr) {
        // $('#_type').append('status: ' + status + ', data: ' + data);

        $("#_type_label").html('Select Type')

        console.log(response.length);
        // console.log(response[0]['name']);

        var len = response.length;

                $("#_type").empty();
                for( var i = 0; i<len; i++){
                    var id = response[i]['id'];
                    var name = response[i]['name'];
                    
                    $("#_type").append("<option value='"+id+"'>"+name+"</option>");
                }
    },
    error: function (jqXhr, textStatus, errorMessage) {
        $("#_type_label").html('Select Type')
            $('p').append('Error' + errorMessage);
    }
});
}

function get_subtype(did) {

    $("#_subtype_label").html('Loading...')

    var did = $('#'+ did).val();
    console.log(did)

    $.ajax('/get_subtypes', {
    type: 'GET',  // http method
    data: { 
        type: did
    }, 
    // data to submit
    success: function (response, status, xhr) {
        // $('#_type').append('status: ' + status + ', data: ' + data);

        $("#_subtype_label").html('Select Type')

        console.log(response.length);
        // console.log(response[0]['name']);

        var len = response.length;

                $("#_subtype").empty();
                for( var i = 0; i<len; i++){
                    var id = response[i]['id'];
                    var name = response[i]['name'];
                    
                    $("#_subtype").append("<option value='"+id+"'>"+name+"</option>");
                }
    },
    error: function (jqXhr, textStatus, errorMessage) {
        $("#_subtype_label").html('Select Type')
            $('p').append('Error' + errorMessage);
    }
    });
}








</script>




@endsection