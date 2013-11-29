<div id="userBar" class="group">
    @if (Auth::check())
        @include('users/signedInHeaderBar')
    @else
        @include('users/signInHeaderBar')
    @endif
</div>
<div id="userErrors">
    @if ($errors->has('accessRestricted'))
        @foreach($errors->get('accessRestricted') as $error)
        <p>{{ $error }}</p>
        @endforeach
    @endif
</div>