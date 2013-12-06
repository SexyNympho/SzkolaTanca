<?php

class NewsSeeder extends DatabaseSeeder
{
    public function run()
    {       
        $news = new News;
        $news->title = 'Stuff';
        $news->newsText = 'Some other stuff :)';
        $news->save();
        
        $news = new News;
        $news->title = 'Longer stuff';
        $news->newsText = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec mollis odio, quis pulvinar lorem. In fermentum ultrices felis rutrum sagittis. Vivamus ornare condimentum tellus, at fermentum nulla. Aliquam erat volutpat. Nulla consectetur interdum suscipit. Pellentesque tincidunt purus id posuere tempor. Nunc imperdiet felis a turpis suscipit aliquet. Sed bibendum ullamcorper sapien.';
        $news->save();
    }
}