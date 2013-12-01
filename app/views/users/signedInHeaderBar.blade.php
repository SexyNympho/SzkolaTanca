<p>
    Hi, {{ Auth::user()->login }}! 
    {{ link_to_route('signOut', 'sign out', array(), array('class' => 'smallLink')) }}
</p>