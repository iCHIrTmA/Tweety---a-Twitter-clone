<div class="flex p-4 border-b border-b gray-400">
    <div class="mr-2 flex-shrink-0">
        <a href="{{$tweet->user->path()}}">
            <img 
            src="{{ asset('images/hd_avatar.jpg') }}"
            alt="" 
            class="rounded-full mr-2"
            width="40"
            height="25" 
            >
        </a>
        
    </div>

    <div>
        <a href="{{$tweet->user->path()}}">
            <h5 class="font-bold mb-4">{{$tweet->user->name}}</h5>
        </a>
        <p class="text-sm">{{$tweet->body}}</p>
    </div>   
</div>