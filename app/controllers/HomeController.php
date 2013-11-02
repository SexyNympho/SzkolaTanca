<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function Index()
	{
            $news = News::all();
                
            return View::make('home/index', array('allNews' => $news));
	}

        public function News($news)
        {
            return View::make('home/singleNews', array('news' => $news));
        }
        
        public function AddNews()
        {
            return View::make('home/editNews', array('news' => new News));
        }
        
        public function PostAddNews()
        {
            $news = new News;

            if (!$news->create(Input::all()))
            {
                return 'dupa blada';
            }
            
            return Redirect::action('HomeController@Index');
        }
}