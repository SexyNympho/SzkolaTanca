<?php

class HomeController extends BaseController {
    
    public function Index()
    {
        $news = News::orderBy('created_at', 'DESC')->get();
        
        return View::make('home/index', array('allNews' => $news));
    }

    public function News($news)
    {
        $newsView = View::make('home/singleNews', array('news' => $news));
        
        $comments = $news->comments;
        $newsView->nest('comments', 'comments/comments', array('com' => $comments));
        
        if (Auth::check() && Auth::user()->hasRole('User'))
        {
            $newsView->nest('createComment', 'comments/create', array('news' => $news));
        }
        
        return $newsView;
    }

    public function AddNews()
    {
        $eventsForDropdown = $this->GetEventsArray();
        
        return View::make('home/editNews', array('news' => new News, 'danceEvents' => $eventsForDropdown));
    }

    private function GetEventsArray()
    {
        $events = DanceEvent::all();
        $forDropDown = array();
        $forDropDown[0] = "select a dance event";
        
        foreach($events as $event)
        {
            $forDropDown[$event->id] = $event->title;
        }
        
        return $forDropDown;
    }
    
    public function PostAddNews()
    {
        $news = new News;

        if (!$news->create(Input::all()))
        {
            return 'error adding news';
        }

        return Redirect::action('HomeController@Index');
    }
}