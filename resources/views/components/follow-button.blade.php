<form method="POST" action="{{url('profiles/'. $user->name .'/follow')}}">
    @csrf
    <button
        type="submit"
        class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs mr-2"
    >
    {{auth()->user()->following($user) ? 'Unfollow me' : 'Follow me'}}
    </button>
</form>