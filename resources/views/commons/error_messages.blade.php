@if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
          <li class="ml-4">{{ $error }}</li>
        @endforeach  
    </ul>
@endif