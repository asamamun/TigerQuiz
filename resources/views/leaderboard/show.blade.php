@if(count($leaders))
        
        @foreach($leaders as $leader)
        <li> <a href="{{route('profile.show',$leader->user_id)}}"> {{$leader->user->name}} : {{$leader->marks}}</a></li>
        @endforeach
        @endif