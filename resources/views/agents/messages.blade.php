@extends('layouts.agents_master')

@section('title') History @endsection

@section('content')

     @component('common-components.breadcrumb')
         @slot('title') Notifications  @endslot
         @slot('li_1') View  @endslot
     @endcomponent



<div class="card ">
    <div class="card-body">
    <h5>Just In</h5>

<!-- <form action="">
    @csrf
    <input type="text" class="form-control" placeholder="Search...">
    <button class="btn btn-primary btn-rounded shadow">Search</button>
</form> -->
{{$my_messages->links()}}

    <ul class="list-group">
    @forelse($my_messages as $message)

    <li class="list-group-item {{$my_notification->status=='read'?'active':''}} border border-white" aria-current="true">
      <h6 class="text-white">{{$message->title}}</h6>
        <p>
            {{$message->body}}
        </p>
        <span>{{$message->created_at->diffForHumans()}}</span>
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