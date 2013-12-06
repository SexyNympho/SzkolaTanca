<div>
    {{ $hasErrors = $errors->has('signInError') }}
    @if ($hasErrors)
        @foreach($errors->get('signInError') as $error)
            {{ $error }}
        @endforeach
    @endif
    {{ @Form::open(array('route' => array('postSignIn', 'vm' => 'SignInVM'))) }}
        {{ @Form::text('Login', '', array('placeholder' => 'your@email.com')) }}
        {{ @Form::password('Password') }}
        {{ @Form::submit('zaloguj') }}
    {{ @Form::close() }}
    <p>{{ link_to_route('signUp', 'Rejestracja', array(), array('class' => 'smallLink')) }}</p>
</div>