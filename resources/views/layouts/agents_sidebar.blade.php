<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="{{config('app.url')}}images/users/avatar-2.jpg" alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">

                <a href="#" class="text-dark font-weight-medium font-size-16">{{Auth::user()->name}}</a>
                <p class="text-body mt-1 mb-0 font-size-13">{{Auth::user()->role}}</p>

            </div>

            <div class="">

            <?php
                $my_subscription = App\MemberSubscription::with('subscription_plans')->where('agent_id', Auth::user()->id)->first();

                $listing_published = App\Listing::where('posted_by', Auth::id())->where('status', 'published')->get();

                // $my_subscriptionx = MemberSubscription::with('subscription_plans')->where('agent_id', Auth::id())->first();
            ?>

                @if($my_subscription)

                <div class="card">
                    <div class="card-body">
                    <h6>Current Subscription:</h6>
                        <h4>{{$my_subscription->plan_name??'FREE PLAN'}}</h4>

                    <h6>Published Listings:</h6>
                    <h4><span id="published_counter">{{$listing_published->count()}}</span>/ {{$my_subscription->subscription_plans->max_listings}}</h4>
                        <a href="" class="btn btn-success shadow">Upgrade</a>
                    </div>
                </div>



                @else

                @endif
                

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
              

                <!-- <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-airplay"></i><span class="badge badge-pill badge-info float-right">2</span>
                        <span>Dashboard</span>
                    </a>
                   
                </li> -->

                <li>
                    <a href="{{route('agents')}}" class=" waves-effect">
                        <i class="mdi mdi-calendar-text"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('agents.add_property')}}" class=" waves-effect">
                        <i class="mdi mdi-calendar-text"></i>
                        <span>Add Property</span>
                    </a>
                </li>
                

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-flip-horizontal"></i>
                        <span>Listings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('agents.all_listings')}}">All Listings</a></li>
                        <li><a href="{{route('agents.free_listings')}}">Free Listings</a></li>
                        <li><a href="{{route('agents.premium_listings')}}">Premium Listings</a></li>
                        <li><a href="{{route('agents.published_listings')}}">Published Listings</a></li>
                        <li><a href="{{route('agents.unpublished_listings')}}">Unpublished Listings</a></li>
                        <li><a href="{{route('agents.expired_listings')}}">Expired Listings</a></li>
                        <li><a href="{{route('agents.inactive_listings')}}">Inactive Listings</a></li>
                        <li><a href="{{route('agents.favourite_listings')}}">Favourites</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-flip-horizontal"></i>
                        <span>Subscriptions</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('agents.all_plans')}}">All Plans</a></li>
                        <li><a href="{{route('agents.my_subscriptions')}}">My Subscriptions</a></li>
                        <li><a href="{{route('agents.history')}}">History</a></li>
                        
                    </ul>
                </li>

                <li>
                    <a href="{{route('agents.notifications')}}" class=" waves-effect">
                        <i class="mdi mdi-calendar-text"></i>
                        <span>Notifications</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('agents.messages')}}" class=" waves-effect">
                        <i class="mdi mdi-calendar-text"></i>
                        <span>Messages</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('agents.accounts')}}" class=" waves-effect">
                        <i class="mdi mdi-calendar-text"></i>
                        <span>Accounts</span>
                    </a>
                </li>

               


               

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->