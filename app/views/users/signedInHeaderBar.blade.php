<p>
    Witaj, {{ Auth::user()->login }}! 
    {{ link_to_route('signOut', 'wyloguj', array(), array('class' => 'smallLink')) }}
</p>