<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="images/users/avatar-2.jpg" alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">

                <a href="#" class="text-dark font-weight-medium font-size-16">{{Auth::user()->name}}</a>
                <p class="text-body mt-1 mb-0 font-size-13">{{Auth::user()->role}}</p>

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
                        <li><a href="layouts-compact-sidebar">Free Listings</a></li>
                        <li><a href="layouts-icon-sidebar">Premium Listings</a></li>
                        <li><a href="layouts-boxed">Published Listings</a></li>
                        <li><a href="layouts-preloader">Unpublished Listings</a></li>
                        <li><a href="layouts-preloader">Expired Listings</a></li>
                        <li><a href="layouts-preloader">Inactive Listings</a></li>
                        <li><a href="layouts-preloader">Favourites</a></li>
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