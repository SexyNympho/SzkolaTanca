@extends('users/layout')

@section('content')
<table>
    <tr>
        <td>Name</td>
        <td>Surname</td>
        <td>login</td>
        <td>email</td>
        <td>role</td>
        <td>update</td>
        <td>delete</td>
    </tr>
    @foreach($users as $user)
    <?php
        $userRoles = array();
        foreach($user->roles as $role)
        {
            $userRoles[] = $role->id;
        }
    ?>
    <tr>
        {{ Form::model($user, array('route' => array('postUpdateUser', 'user' => $user->id))) }}
        <td>{{ $user->name }}</td>
        <td>{{ $user->surname }}</td>
        <td>{{ $user->login }}</td>
        <td>{{ $user->email }}</td>
        <td>
            @if (Auth::user()->id !== $user->id)
                {{ Form::select('role', $rolesDropdown, $userRoles) }}
            @else
                {{ Form::hidden('role', $user->roles()->first()->id) }}
                {{ $user->roles()->first()->Name }}
            @endif
        </td>
        <td>{{ Form::submit('update') }}</td>
        <td>
            @if (!$user->HasRole('Admin'))
                {{ link_to_route('deleteUser', 'delete', array('user' => $user->id)) }}

            @endif
        </td>
        {{ Form::close() }} 
    </tr>
    @endforeach
</table>
@stop