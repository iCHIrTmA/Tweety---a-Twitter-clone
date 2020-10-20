@extends('layouts.app')

@section('content')
    <div class="lg: flex">
        <div class="lg: w-1/6">
            @include('_sidebar-links')
        </div>
        <div class="lg:flex-1 lg:mx-10">
            @include('_publish-tweet-panel')

            <div class="border border-gray-300 rounded-lg">
                <div class="flex">
                    <div class="mr-4">
                        <img 
                            src="https://i.pravatar.cc/40" 
                            alt="" 
                            class="rounded-full mr-2"
                        >
                        
                    </div>

                    <div>
                        <h5 class="font-bold mb-4">John Doe</h5>
                        <p class="text-sm">Presumably, if you're watching this series, you've already made the decision to embrace all that Laravel has to offer. However, if you're still on the fence, give me just a moment to sell you on why I believe Laravel is the best framework choice in the PHP world.
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="lg: w-1/6">
            @include('_friends-list')
        </div>
    </div>
@endsection
