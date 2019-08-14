<ul class="nav nav-tabs nav-justified mb-3">
    <li class="nav-item"><a href="{{ route('users.show',['id'=>$user->id]) }}" class="nav-link {{ Request::is('user/' .$user->id) ? 'active' : '' }}">TimeLine <span class="badge badge-secondary">{{ $count_microposts }}</span></a></li>
    <li class="nav-item"><a href="{{ route('users.followings',['id'=>'$user->id']) }}" class="nav-link {{ Request::is('users/*/followings') ? 'active': '' }}">Followings<span class="badge badge-secondary">{{ $count_followings }}</span></a></li>
    <li class="nav-item"><a href="{{ route('users.followers',['id'=>]) }}" class="nav-link {{ Request::is('users/*/followers') ? 'active' : ''}}">FOllowers <span class="badge badge-secondary">{{ $count_followers }}</span></a></li>
</ul>