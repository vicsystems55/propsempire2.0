@extends('layouts.agents_master')

@section('title') All Listings @endsection
@section('css')
<link href="{{ URL::asset('/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('content')

     @component('common-components.breadcrumb')
         @slot('title') All Listings  @endslot
         @slot('li_1') View  @endslot
     @endcomponent

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body table-responsive">
                <h4 class="card-title">All Listings</h4>

                                    <table id="datatable" class="table table-striped " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                              
                                                <th>Category</th>
                                                
                                                <th>Created</th>
                                                <th>More</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            @foreach($published_listings as $list)
                                            <tr>
                                                <td>{{$list->title}}</td>
                                                
                                                <td>{{$list->categories->name}}</td>
                                                
                                                <td>{{$list->created_at->diffForHumans()}}</td>

                                                <td>
                                                    <a href="{{route('agents.single_listing', $list->slug)}}" class="btn btn-primary btn-sm shadow">Details</a>
                                                </td>
                                            </tr>
                                            @endforeach


                                           
                                           
                                            
                                        </tbody>
                                    </table>

            </div>
        </div>
    </div>
    <!-- <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Accordion example</h4>
                <p class="card-title-desc">Extend the default collapse behavior to create an accordion.</p>

                <div id="accordion">
                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseOne" class="text-dark" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                    ALL LISTINGS
                                </a>
                            </h6>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingTwo">
                            <h6 class="m-0">
                                <a href="#collapseTwo" class="text-dark collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                                    PREMIUM LISTINGS
                                </a>
                            </h6>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0 shadow-none">
                        <div class="card-header" id="headingThree">
                            <h6 class="m-0">
                                <a href="#collapseThree" class="text-dark collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                                   PUBLISHED LISTINGS
                                </a>
                            </h6>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-0 shadow-none">
                        <div class="card-header" id="headingFour">
                            <h6 class="m-0">
                                <a href="#collapseFour" class="text-dark collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
                                   PUBLISHED LISTINGS
                                </a>
                            </h6>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> -->
</div>
<!-- end row -->

@endsection

@section('script')

<!-- form wizard -->


<script src="{{ URL::asset('/libs/datatables/datatables.min.js')}}"></script>
<script src="{{ URL::asset('/js/pages/datatables.init.js')}}"></script>

@endsection