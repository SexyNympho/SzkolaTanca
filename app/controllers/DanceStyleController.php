<?php

class DanceStyleController extends BaseController {
    
    public function Index()
    {
        return View::make('danceStyles/index', array('danceStyles' => DanceStyle::all()));
    }
    
    public function Create()
    {
        $danceStyle = new DanceStyle;
        $actionArray = array('DanceStyleController@PostCreate');
        
        return View::make('danceStyles/edit', array('danceStyle' => $danceStyle, 'actionArray' => $actionArray));
    }
    
    public function Update($danceStyle)
    {
        $actionArray = array('DanceStyleController@PostUpdate', 'danceStyle' => $danceStyle->id);
        
        return View::make('danceStyles/edit', array('danceStyle' => $danceStyle, 'actionArray' => $actionArray));
    }
    
    public function DanceStyle($danceStyle)
    {
        return View::make('danceStyles/details', array('danceStyle' => $danceStyle));
    }
    
    public function Persist($danceStyleId)
    {
        if ($danceStyleId == 0)
        {
            return $this->PersistCreate(Input::all());
        }
        
        return $this->PersistUpdate(DanceStyle::find($danceStyleId), Input::all());
    }
    
    private function PersistCreate($input)
    {
        if (!DanceStyle::create($input))
        {
            return "couldn't create the danceStyle";
        }
        
        return Redirect::action('DanceStyleController@Index');
    }
    
    private function PersistUpdate($danceStyle, $input)
    {
        if (!$danceStyle->update($input))
        {
            return Redirect::action('DanceStyleController@Update', array('danceStyle' => $danceStyle));
        }
        
        return Redirect::action('DanceStyleController@Index');
    }
    
    public function Delete($danceStyle)
    {
        $danceStyle->delete();
        
        return Redirect::action('DanceStyleController@Index');
    }
    
}
