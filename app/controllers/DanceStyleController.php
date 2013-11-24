<?php

class DanceStyleController extends BaseController {
    
    public function Index()
    {
        return View::make('danceStyles/index', array('danceStyles' => DanceStyle::all()));
    }
    
    public function Create()
    {
        $danceStyle = new DanceStyle;
        $actionArray = array('DanceStyleController@Persist', 'danceStyle' => 0);
        
        return View::make('danceStyles/edit', array('danceStyle' => $danceStyle, 'actionArray' => $actionArray));
    }
    
    public function Update($danceStyle)
    {
        return View::make('danceStyles/edit', array('danceStyle' => $danceStyle));
    }
    
    public function DanceStyle($danceStyle)
    {
        return View::make('danceStyles/details', array('danceStyle' => $danceStyle));
    }
    
    public function Persist($danceStyle)
    {
        if ($danceStyle->id == 0)
        {
            return $this->PersistCreate(Input::all());
        }
        
        return $this->PersistUpdate($danceStyle, Input::all());
    }
    
    private function PersistCreate($input)
    {
        $binder = new Binder();
        $danceStyle = $binder->Bind("Dancestyle", $input);
        
        if (!$danceStyle->save())
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
