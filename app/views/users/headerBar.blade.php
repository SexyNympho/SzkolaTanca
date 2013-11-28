<div id="userBar" class="group">
    @if (Auth::check())
        @include('users/signedInHeaderBar')
    @else
        @include('users/signInHeaderBar')
    @endif
</div>