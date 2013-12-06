@extends('home/layout')

@section('content')
    @include('home/longNews', array('news' => $news))
    
    @if (isset($comments))
    <section id="comments">
        <?php echo $comments; ?>
        
        @if (isset($createComment))
            <?php echo $createComment; ?>
        @endif
        
    </section>
    @endif
@stop