@extends('instructors/layout')

@section('content')
    <div class="photoGrid">
        @foreach($instructors as $instructor)
            <a href="{{ route('showInstructor', array('instructor' => $instructor->id)) }}">
                <?php $fullname = $instructor->name . ' ' . $instructor->surname ?>
                @include('images/image', array('photo' => $instructor->photo, 'caption' => $fullname))
            </a>
        @endforeach
    </div>
@stop

@section('admin')
    {{ link_to_route('instructorCreate', 'Add instructor') }}
@stop