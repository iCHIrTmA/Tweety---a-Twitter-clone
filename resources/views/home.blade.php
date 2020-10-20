@extends('layouts.app')

@section('content')
    <div class="lg: flex">
        <div class="lg: w-1/6">
            @include('_sidebar-links')
        </div>
        <div class="lg:flex-1 lg:mx-10">
            {{-- <div class="border border-blue-400 rounded-lg px-8 py-6">
                <form action="">
                    <textarea 
                    name="body"
                    class="w-full" 
                    placeholder="What's up doc?"  
                    ></textarea>

                    <hr class="my-4">

                    <footer class="flex justify-between">
                        <img 
                            src="images/hello.jpg" 
                            alt="" 
                            class="rounded-full mr-2"
                        >
                    <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">Tweet-a-roo!</button>

                    </footer>

                </form>
            </div> --}}
             @include('_publish-tweet-panel')

            <div class="border border-gray-300 rounded-lg">
                <div class="flex">
                    <div class="mr-4">
                        <img 
                            src="images/hello.jpg" 
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
