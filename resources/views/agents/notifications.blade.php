@extends('layouts.agents_master')

@section('title') History @endsection

@section('content')

     @component('common-components.breadcrumb')
         @slot('title') Notifications  @endslot
         @slot('li_1') View  @endslot
     @endcomponent



<div class="card">
    <div class="card-body">
    <h2>Notifications</h2>

<!-- <form action="">
    @csrf
    <input type="text" class="form-control" placeholder="Search...">
    <button class="btn btn-primary btn-rounded shadow">Search</button>
</form> -->
{{$my_notifications->links()}}

    <ul class="list-group">
    @forelse($my_notifications as $my_notification)

    <li class="list-group-item {{$my_notification->status=='read'?'active':''}} border border-white" aria-current="true">
      <h6 class="text-white">{{$my_notification->title}}</h6>
        <p>
            {{$my_notification->body}}
        </p>
        <span>{{$my_notification->created_at->diffForHumans()}}</span>
    </li>

    @empty  
        <h6 clas="mt-4 text-center">No notifications yet...</h6>
    @endforelse
 
 
</ul>
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