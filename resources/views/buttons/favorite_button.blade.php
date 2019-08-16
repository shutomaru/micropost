@if(Auth::user()->is_favoriting($micropost->id))
    {!! Form::open(['route'=>['favorites.unfavorite',$micropost->id],'method'=>'delete']) !!}
        {!! Form::submit('Unfavorite',['class'=>"btn btn-dark"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route'=>['favorites.favorite',$micropost->id]]) !!}
        {!! Form::submit('Favorite',['class'=>"btn btn-light"]) !!}
    {!! Form::close() !!}
@endif    
