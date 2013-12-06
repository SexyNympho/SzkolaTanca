@extends('home/layout')

@section('breadcrumbs')
    @parent
    <li>{{ link_to_route('singleNews', $news->title, array('news' => $news->id)) }}</li>
@stop

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