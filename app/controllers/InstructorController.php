<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InstructorController
 *
 * @author MateuszT
 */
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
        
        return View::make('instructors/instructorForm', array('instructor' => $instructor, 'actionArray' => array('InstructorController@postCreate')));
    }
    
    public function Delete($instructor)
    {
        $instructor->delete();
        
        return Redirect::action('InstructorController@Index');
    }
    
    public function Update($instructor)
    {
        return View::make('instructors/instructorForm', array('instructor' => $instructor, 'actionArray' => array('InstructorController@postUpdate', 'instructor' => $instructor->id)));
    }
    
    public function postCreate()
    {
        $instructor = new Instructor;
        if (!$instructor->create(Input::all()))
        {
            return "problem adding instructor";
        }
        
        return Redirect::action('InstructorController@Index');
    }
    
    public function postUpdate($instructor)
    {
        if (!$instructor->update(Input::all()))
        {
            return 'problem saving changes';
        }
        
        return Redirect::action('InstructorController@Index');
    }
}
