<?php

class InstructorController extends BaseController {
    
    public function Index()
    {
        return View::make('instructors/index', array('instructors' => Instructor::all()));
    }
    
    public function Instructor($instructor)
    {
        return View::make('instructors/singleInstructor', array('instructor' => $instructor));
    }
    
    public function Create()
    {
        $instructor = new Instructor;
        
        return View::make('instructors/instructorForm', array('instructor' => $instructor, 'routeArray' => array('instructorCreate')));
    }
    
    public function Delete($instructor)
    {
        $instructor->delete();
        
        return Redirect::action('InstructorController@Index');
    }
    
    public function Update($instructor)
    {
        return View::make('instructors/instructorForm', array('instructor' => $instructor, 'routeArray' => array('instructorUpdate', 'instructor' => $instructor->id)));
    }
    
    public function postCreate()
    {
        $instructor = new Instructor;
        if (!$instructor->create(Input::all()))
        {
            return "problem adding instructor";
        }
        
        $this->HandleFileUpload($instructor);
        
        return Redirect::route('showAllInstructors');
    }
    
    public function postUpdate($instructor)
    {
        if (!$instructor->update(Input::all()))
        {
            return 'problem saving changes';
        }
        
        $this->HandleFileUpload($instructor);
        
        return Redirect::route('showInstructor', array('instructor' => $instructor->id));
    }
    
    private function HandleFileUpload($instructor)
    {
        if (!Input::hasFile('instructorPhoto'))
        {
            return;
        }
        
        $file = Input::file('instructorPhoto');
        
        $persistence = new ImagePersistence();
        
        if ($instructor->photo != null)
        {
            $persistence->Delete($instructor->photo->Path());
            $instructor->photo->delete();
            $instructor->update();
        }
        
        $filename = str_random(16) . '_' . $file->getClientOriginalName();
        $persistence->Save($file, $filename);
        
        $photo = new Image;
        $photo->filename = $filename;
        $photo->save();
        $instructor->photo()->associate($photo);
        $instructor->update();
    }
}
