<div>
    <div class="card-header">
        <h3 class="card-title">{{ $user->name }}</h3>
    </div>
    <div class="card-body">
        <img class="rounded img-fluid" src="{{ Gravatar::src($user->email,500) }}" alt="">
    </div>
</div>
@include('buttons.follow_button',['user'=>$user])
