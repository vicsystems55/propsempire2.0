@extends('layouts.agents_master')

@section('title') History @endsection

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/basic.css" integrity="sha512-Ucip2staDcls3OuwEeh5s9rRVYBsCA4HRr18+qd0Iz3nYpnfUeCIMh/82aHKeYgdaXGebmi9vcREw7YePXsutQ==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.css" integrity="sha512-CmjeEOiBCtxpzzfuT2remy8NP++fmHRxR3LnsdQhVXzA3QqRMaJ3heF9zOB+c1lCWSwZkzSOWfTn1CdqgkW3EQ==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.10.0/css/lg-fb-comment-box.css" integrity="sha512-3uOs0auw6fbnGTFkAY9zXrczqQ7sldt31cyQqODHaXkXl7IySp9Hybz/lF9GyGkpejqG3zLbFHXXmoRTvh8aIg==" crossorigin="anonymous" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.10.0/css/lightgallery.css" integrity="sha512-I/g40Mx7U2Oepd3iHIpQRqdQGJ3vgdw0ix8LxGxX9zKv1MDizjD6dRcJ3PC1qpyfkj4rikVNcpBKcnmuJWUaTQ==" crossorigin="anonymous" /> 

<link href="{{ URL::asset('/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />


     @component('common-components.breadcrumb')
         @slot('title') Listing  @endslot
         @slot('li_1') View  @endslot
     @endcomponent

     <div class="c">
        <div class="card">
            <div class="card-body">
               <div class="row">
                <div class="col-md-4 text-center p-2 {{$my_subscription?'':'d-none'}} {{$listing_images->count()<1?'d-none':''}}">
                    <button id="{{$single_listing->status =='published'?'unpublish':'publish'}}" class="shadow btn btn-{{$single_listing->status =='published'?'warning':'primary'}} shadow">{{$single_listing->status =='published'?'UNPUBLISH':'PUBLISH'}}</button>
                </div>
                <div class="col-md-4 text-center p-2 {{$my_subscription?'':'d-none'}} {{$listing_images->count()<1?'d-none':''}}">
                    <button id="{{$single_listing->premium =='1'?'unmake_premium':'make_premium'}}" class="shadow btn btn-{{$single_listing->premium =='1'?'warning':'primary'}} shadow">{{$single_listing->premium =='1'?'REMOVE AS PREMIUM':'MAKE PREMIUM'}}</button>
                </div>
                
                <div class="col-md-4 text-center p-2">
                    <a href="{{route('agents.all_plans')}}" class="shadow btn btn-primary shadow">{{$my_subscription?'UPGRADE':'PURCHASE'}}</a>
                </div>
               </div>
            </div>
        </div>
     </div>

<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                
                <h1 class="card-title"> {{$single_listing->title}}</h1>
                <p class="card-title-desc">
                    {{$single_listing->description}}
                </p>
                
                <p>
                <i class="fas fa-map-marker-alt"></i> {{$single_listing->location}}  
                </p>

                <table class="pl-3">
                    <tr>
                        <td>Category:</td>
                        <td></td>
                        <td>{{$single_listing->categories->name}}</td>
                    </tr>
                    <tr>
                        <td>Type:</td>
                        <td></td>
                        <td>{{$single_listing->types->name}}</td>
                    </tr>
                    <tr>
                        <td>Subtype:</td>
                        <td></td>
                        <td>{{$single_listing->subtypes->name}}</td>
                    </tr>
                </table>

                <table class="table">
                    <tr>
                        <td>
                        <i class="fas fa-bed"></i><br>
                        Bedrooms:
                          {{$single_listing->bedrooms}}
                        </td>
                        <td>
                        <i class="fas fas fa-bath"></i><br>
                        Bathrooms:
                          {{$single_listing->bathrooms}}
                        </td>
                        <td>
                        <i class="fas fas fa-toilet"></i><br>
                        Toilets:
                          {{$single_listing->toilets}}
                        </td>     
                    </tr>
                    <tr>
                        <td>
                        <i class="fas fa-car"></i><br>
                        Parking:
                          {{$single_listing->parking}}
                        </td>                        
                    </tr>

                </table>
                <table class="table">
                    <tr>
                        <td>
                        <i class="fas fa-tape"></i><br>
                        Total Area:
                        {{number_format($single_listing->total_area, 2)}} sqr.mtrs
                        </td>
                        <td>
                        <i class="fas fa-tape"></i><br>
                        Covered Area:
                        {{$single_listing->covered_area}}
                        </td>
 
                    </tr>
                </table>

                

            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"> Listing Assets</h4>

                <div id="lightgallery">

                        @forelse($listing_images as $image)

                        <a href="{{config('app.url')}}listing_images/{{$image->img_path}}">
                            <img class="shadow" style="min-width:120px; min-height:120px; max-width:200px; max-height:200px;" src="{{config('app.url')}}listing_images/{{$image->img_path}}" />
                        </a>
                       

                        

                        @empty

                            <h4 class="text-center">No images uploaded yet...</h4>

                        @endforelse
                    

                   
                   
                </div>

                

            <form enctype="multipart/form-data" action="{{route('upload_pix')}}" method="post">
                @csrf
                <input type="file" name="file" id="">
                <input type="text" name="listing_id" value="{{$single_listing->id}}">
                <input type="text" name="listing_slug" value="{{$single_listing->slug}}">
                <button class="btn btn-sm">upload!</button>
            </form>


                <p class="card-title-desc"></p>
                <form method="post" action="{{route('upload_pix')}}"
                    class="dropzone "
                    id="my-awesome-dropzone">
                    @csrf
                </form>
                    <div id="dpz-btn-select-files" class="card-body">
                    </div>
                <button id="select-files" class="btn btn-primary btn-block shadow">
                    Add Picture
                </button>

            </div>
        </div>

    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                More Features

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Air Conditioning
                                </label>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Barbeque
                                </label>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Dryer
                                </label>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Gym
                                </label>
                            </div>

                        </div>

                    </div>
               
          
            </div>
        </div>
    </div>
</div>
<!-- end row -->

@endsection

@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.js" integrity="sha512-0QMJSMYaer2wnpi+qbJOy4rOAlE6CbYImSlrgQuf2MBBMqTvK/k6ZJV126/EbdKzMAXaB6PHzdYxOX6Qey7WWw==" crossorigin="anonymous"></script>
<script>
          Dropzone.options.myAwesomeDropzone = {
          paramName: "file", // The name that will be used to transfer the file
          maxFilesize: 0.2, // MB
          dictDefaultMessage: 'Upload Pictures of property',
          
          dictRemoveFile: true,
          addRemoveLinks: true,
          dictRemoveFile: " Trash",
          // previewsContainer: "#dpz-btn-select-files",
          clickable: "#select-files",

          init: function() {
           
            this.on("addedfile", function(file) { 
              
              alert("Added file."); 
              
              });
          },

          sending: function(file, xhr, formData){
            formData.append("listing_id", '{{$single_listing->id}}');
            formData.append("listing_slug", '{{$single_listing->slug}}');
           
          },

          success: function(file, data){
            Swal.fire('Image Uploaded')
            console.log(data);

           

           
          },

        

          
          accept: function(file, done) {
            if (file.name == "justinbieber.jpg") {
              done("Naha, you don't.");
            }
            else { done(); }
          }
        };
  </script> 


<!-- form wizard -->
<script src="{{URL::asset('/libs/jquery-steps/jquery-steps.min.js')}}"></script>
<!-- form wizard init -->
<script src="{{URL::asset('/js/pages/form-wizard.init.js')}}"></script>

<script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js"></script>


<!-- Sweet Alerts js -->
<script src="{{ URL::asset('/libs/sweetalert2/sweetalert2.min.js')}}"></script>

<!-- Sweet alert init js-->
<script src="{{ URL::asset('/js/pages/sweet-alerts.init.js')}}"></script>

<script>

    lightGallery(document.getElementById('lightgallery'), {

        mode: 'lg-fade',
        cssEasing : 'cubic-bezier(0.25, 0, 0.25, 1)'

    });

</script>

<script>

    $('#publish').click(function(){
        $('#publish').html('processing...')
        $.ajax('/publish', {
            type: 'GET',  // http method
            data: {
                 slug: '{{$single_listing->slug}}'
                
                },  // data to submit
            success: function (data, status, xhr) {
                $('#publish').removeClass('btn-primary');
                $('#publish').addClass('btn-warning'); // add class
                $('#publish').html('UNPUBLISH')
                $('#published_counter').html(data) // change text
                Swal.fire('Published')
                    alert(data)
                // $('p').append('status: ' + status + ', data: ' + data);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                    console.log('Error' + errorMessage);
            }
        });
    });

    $('#unpublish').click(function(){
        $('#unpublish').html('processing...')
        $.ajax('/unpublish', {
            type: 'GET',  // http method
            data: {
                 slug: '{{$single_listing->slug}}'
                
                },  // data to submit
            success: function (data, status, xhr) {
                $('#unpublish').removeClass('btn-warning');
                $('#unpublish').addClass('btn-primary'); // add class
                $('#unpublish').html('PUBLISH') 
                $('#published_counter').html(data) // change text
                Swal.fire('unpublished')
                    alert(data)
                // $('p').append('status: ' + status + ', data: ' + data);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                   console.log('Error' + errorMessage);
            }
        });
    });


    $('#make_premium').click(function(){
        $('#make_premium').html('processing...')
        $.ajax('/make_premium', {
            type: 'GET',  // http method
            data: {
                 slug: '{{$single_listing->slug}}'
                
                },  // data to submit
            success: function (data, status, xhr) {
                // $('#make_premium').removeClass('btn-primary');
                $('#make_premium').addClass('btn-success'); // add class
                $('#make_premium').html('PUBLISHED AS PREMIUM') // change text
                Swal.fire('Changed to premium listing')
                    alert(data)
                // $('p').append('status: ' + status + ', data: ' + data);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                    console.log('Error' + errorMessage);
            }
        });
    });

    $('#unmake_premium').click(function(){
        $('#unmake_premium').html('processing...')
        $.ajax('/unmake_premium', {
            type: 'GET',  // http method
            data: {
                 slug: '{{$single_listing->slug}}'
                
                },  // data to submit
            success: function (data, status, xhr) {
                $('#make_premium').removeClass('btn-success');
                $('#make_premium').addClass('btn-primary'); // add class
                $('#unmake_premium').html('PUBLISHE AS PREMIUM') // change text
                Swal.fire('Removed as premium listing')
                    alert(data)
                // $('p').append('status: ' + status + ', data: ' + data);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                    console.log('Error' + errorMessage);
            }
        });
    });

    

</script>



@endsection