@extends('layouts.agents_master')

@section('title') Dashboard @endsection

@section('content')

    @component('common-components.breadcrumb')
         @slot('title') Dashboard   @endslot
         @slot('title_li') Welcome to Propsempire   @endslot
     @endcomponent

                    <div class="row">

                    <div class="col-xl-6">

                        <div class="row">

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="">
                                            <h5 class="">{{$my_listings->count()}}</h5>
                                            <h6 class="font-weight-bold">LISTINGS</h6>

                                            <h5 class="">{{$my_listings->where('premium','1')->count()}}</h5>
                                            <h6 class="font-weight-bold">PREMIUM LISTINGS</h6>

                                            <h5 class="">0</h5>
                                            <h6 class="font-weight-bold">EXPIRED LISTINGS</h6>

                                            <div>
                                                <a href="#" class="btn btn-success btn-sm">View more</a>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="">
                                            <h5 class="">{{$my_subscription->count()}}</h5>
                                            <p>SUBSCRIPTIONS</p>
                                            <div>
                                                <a href="#" class="btn btn-outline-success btn-sm">View more</a>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="">
                                            <h5 class="">0</h5>
                                            <p>REQUEST</p>
                                            <div>
                                                <a href="#" class="btn btn-outline-success btn-sm">View more</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                        
                        </div>

                    </div>
                       

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Impressions Report</h4>

                                    <div id="line-chart" class="apex-charts"></div>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                    <!-- end row -->

                    <div class="row">
                        

                        <div class="col-xl-4">
                            <div class="card bg-primary">
                                <div class="card-body">
                                    <div class="text-white-50">
                                        <h4 class="text-white">0</h4>
                                        <p>Referrals</p>
                                        <div>
                                            <p>
                                            <a href="#" class="btn btn-success btn-sm">Facebook</a> 
                                            </p>
                                            <p>
                                            <a href="#" class="btn btn-secondary btn-sm">Whatsapp</a> 
                                            </p>
                                            <p>
                                            <a href="#" class="btn btn-danger btn-sm">Instagram</a> 
                                            </p>
                                           
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-6 mt--2">
                                            <div class="">
                                                <img src="images/widget-img.png" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Reviews</h4>
                                    <div class="mb-4">
                                        <h5><span class="text-primary">500</span>+ Satisfied clients</h5>
                                    </div>
                                    <div class="mb-3">
                                        <i class="fas fa-quote-left h4 text-primary"></i>
                                    </div>
                                    <div id="reviewExampleControls" class="carousel slide review-carousel" data-ride="carousel">

                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div>
                                                    <p>To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words</p>
                                                    <div class="media mt-4">
                                                        <div class="avatar-sm mr-3">
                                                            <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                                    J
                                                                </span>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="font-size-16 mb-1">Jessie Mitchell</h5>
                                                            <p class="mb-2">CEO of ABC Company</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div>
                                                    <p>For science, music, sport, etc, Europe uses the same vocabulary languages only differ in their grammar</p>
                                                    <div class="media mt-4">
                                                        <div class="avatar-sm mr-3">
                                                            <img src="images/users/avatar-4.jpg" alt="" class="img-fluid rounded-circle">
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="font-size-16 mb-1">Kelly Rivera</h5>
                                                            <p class="mb-2">Web Developer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div>
                                                    <p>The new common language will be more simple and regular than the existing European languages.</p>
                                                    <div class="media mt-4">
                                                        <div class="avatar-sm mr-3">
                                                            <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                                    S
                                                                </span>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="font-size-16 mb-1">Simon Hawkins</h5>
                                                            <p class="mb-2">CEO of XYZ Company</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a class="carousel-control-prev" href="#reviewExampleControls" role="button" data-slide="prev">
                                            <i class="mdi mdi-chevron-left carousel-control-icon"></i>
                                        </a>
                                        <a class="carousel-control-next" href="#reviewExampleControls" role="button" data-slide="next">
                                            <i class="mdi mdi-chevron-right carousel-control-icon"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Inbox</h4>

                                    <ul class="inbox-wid list-unstyled">

                                          @forelse($my_messages as $message)


                                          <li class="inbox-list-item">
                                                <a href="#">
                                                    <div class="media">
                                                        <div class="mr-3 align-self-center">
                                                            <img src="images/users/avatar-3.jpg" alt="" class="avatar-sm rounded-circle">
                                                        </div>
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="font-size-16 mb-1">{{$message->title}}</h5>
                                                            <p class="text-truncate mb-0">{{$message->body}}</p>
                                                        </div>
                                                        <div class="font-size-12 ml-2">
                                                            {{$message->created_at->diffForHumans()}}
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>



                                          @empty

                                            <h6 class="text-center font-weight-bold">Empty...</h6>


                                          @endforelse      

                                        
                                       
                                    </ul>

                                    <div class="text-center">
                                        <a href="#" class="btn btn-primary btn-sm">Load more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <!-- <div class="row">
                       
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Latest Transactions</h4>

                                    <div class="table-responsive">
                                        <table class="table table-centered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Id no.</th>
                                                    <th scope="col">Billing Name</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col" colspan="2">Payment Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>15/01/2020</td>
                                                    <td>
                                                        <a href="#" class="text-body font-weight-medium">#SK1235</a>
                                                    </td>
                                                    <td>Werner Berlin</td>
                                                    <td>$ 125</td>
                                                    <td><span class="badge badge-soft-success font-size-12">Paid</span></td>
                                                    <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>16/01/2020</td>
                                                    <td>
                                                        <a href="#" class="text-body font-weight-medium">#SK1236</a>
                                                    </td>
                                                    <td>Robert Jordan</td>
                                                    <td>$ 118</td>
                                                    <td><span class="badge badge-soft-danger font-size-12">Chargeback</span></td>
                                                    <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>17/01/2020</td>
                                                    <td>
                                                        <a href="#" class="text-body font-weight-medium">#SK1237</a>
                                                    </td>
                                                    <td>Daniel Finch</td>
                                                    <td>$ 115</td>
                                                    <td><span class="badge badge-soft-success font-size-12">Paid</span></td>
                                                    <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>18/01/2020</td>
                                                    <td>
                                                        <a href="#" class="text-body font-weight-medium">#SK1238</a>
                                                    </td>
                                                    <td>James Hawkins</td>
                                                    <td>$ 121</td>
                                                    <td><span class="badge badge-soft-warning font-size-12">Refund</span></td>
                                                    <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="mt-3">
                                        <ul class="pagination pagination-rounded justify-content-center mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="#">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Revenue by location</h4>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div id="usa-vectormap" style="height: 230px"></div>
                                        </div>

                                        <div class="col-sm-5 ml-auto">
                                            <div class="mt-4 mt-sm-0">
                                                <p>Last month Revenue</p>

                                                <div class="media py-3">
                                                    <div class="media-body">
                                                        <p class="mb-2">California</p>
                                                        <h5 class="mb-0">$ 2,256</h5>
                                                    </div>
                                                    <div>
                                                        2.52 % <i class="mdi mdi-arrow-up text-success ml-1"></i>
                                                    </div>
                                                </div>
                                                <div class="media py-3 border-top">
                                                    <div class="media-body">
                                                        <p class="mb-2">Nevada</p>
                                                        <h5 class="mb-0">$ 1,853</h5>
                                                    </div>
                                                    <div>
                                                        1.26 % <i class="mdi mdi-arrow-up text-success ml-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- end row -->

                   
                    <!-- end row -->
@endsection

@section('script')
        <!-- plugin js -->
        <script src="{{ URL::asset('libs/apexcharts/apexcharts.min.js')}}"></script>
        
        <!-- jquery.vectormap map -->
        <script src="{{ URL::asset('libs/jquery-vectormap/jquery-vectormap.min.js')}}"></script>
        
        <!-- Calendar init -->
        <script src="{{ URL::asset('js/pages/dashboard.init.js')}}"></script>
@endsection