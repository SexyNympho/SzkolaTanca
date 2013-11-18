<?php

class GalleryController extends BaseController
{

    public function __construct()
    {
        View::composer('gallery/layout', function($v){
            $v->with('styles', DanceStyle::all()); 
        });
    }
    
    public function Index()
    {
        $danceStyle = DanceStyle::take(1)->get()->first();
        
        return $this->DanceStyle($danceStyle);
    }
    
    public function DanceStyle($danceStyle)
    {
        $events = DanceEvent::has('photos')->orderBy('eventDate', 'DESC')->get();
        $eventImages = array();
        foreach($events as $event)
        {
            if (!$event->danceStyles->contains($danceStyle->id))
            {
                continue;
            }
            
            $photo = $event->photos()->first();
            $eventImages[] = array('eventId' => $event->id, 'photo' => $photo, 'caption' => $event->title);
        }
        
        return View::make('gallery/danceStyle', array('selectedStyle' => $danceStyle->id, 'galleryData' => $eventImages));
    }
    
    public function Event($danceStyle, $event)
    {
        $photos = $event->photos;
        
        return View::make('gallery/event', array('selectedStyle' => $danceStyle->id, 'photos' => $photos, 'title' => $event->title));
    }
    
}
