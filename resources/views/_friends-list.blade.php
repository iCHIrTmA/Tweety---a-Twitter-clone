<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    @foreach(auth()->user()->follows as $user)
        <li class="mb-4">
            <div class="flex items-center text-sm">
                <a href="{{route('profile', $user)}}">
                    <img src="{{ asset('images/default_avatar.jpg') }}" 
                    alt=""
                    class="rounded-full mr-2">
                </a>
                <a href="{{route('profile', $user)}}">
                {{$user->name}}
                </a>
            </div>
        </li>
    @endforeach
</ul>