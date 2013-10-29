<?php
/**
 * Created by JetBrains PhpStorm.
 * User: MateuszT
 * Date: 27/10/13
 * Time: 12:32
 * To change this template use File | Settings | File Templates.
 */

class ScheduleController extends BaseController {
    public function Index()
    {
        $classes = DanceClass::all();

        $headers = array('At', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
        $rowArray = array();

        foreach($classes as $class)
        {
            if (!isset($rowArray[intval($class->classDate)]))
            {
                $rowArray[intval($class->classDate)] = new SplFixedArray(8);
            }
            $rowArray[intval($class->classDate)][0] = $class->classDate;
            $rowArray[intval($class->classDate)][$class->weekDay] = $class;
        }

        foreach($rowArray as $row)
        {
            for($i = 1; $i < 8; ++$i)
            {
                if (!isset($row[$i]))
                {
                    $row[$i] = null;
                }
            }
        }

        ksort($rowArray);

        return View::make('schedule/index', array('headers' => $headers, 'rows' => $rowArray));
    }

    public function Admin()
    {
        $classes = DanceClass::all();

        return View::make('schedule/list', array('classList' => $classes));
    }

    public function Edit($danceClass)
    {
        $dropDowns = $this->GetDropDowns();

        return View::make('schedule/edit',
            array(
                'danceClass' => $danceClass,
                'instructors' => $dropDowns['instructors'],
                'styles' => $dropDowns['styles'],
                'formActionArray' => array('ScheduleController@Edit', 'danceClass' => $danceClass->id),
            )
        );
    }

    public function postEdit($danceClass)
    {
        if (!$danceClass->update(Input::all()))
        {
            return Redirect::back()
                ->with('message', 'Something wrong happened while saving your model')
                ->withInput();
        }

        return Redirect::action('ScheduleController@Admin');
    }

    public function Create()
    {
        $danceClass = new DanceClass;
        $danceClass->level = 'asdf';
        $danceClass->classDate = '15:00:00';
        $dropDowns = $this->GetDropDowns();

        return View::make('schedule/edit',
            array(
                'danceClass' => $danceClass,
                'instructors' => $dropDowns['instructors'],
                'styles' => $dropDowns['styles'],
                'formActionArray' => 'ScheduleController@postCreate'
            )
        );
    }

    public function postCreate()
    {
        $danceClass = new DanceClass;

        if (!$danceClass->create(Input::all()))
        {
            return Redirect::back()->with('message', 'asdf')->withInput();
        }

        return Redirect::action('ScheduleController@Admin', array('danceClass' => $danceClass));
    }

    public function Delete($danceClass)
    {
        $danceClass->delete();

        return Redirect::action('ScheduleController@Admin');
    }

    private function GetDropDowns()
    {
        $instructors = Instructor::all();
        $instructorsDD = array();
        foreach($instructors as $instructor)
        {
            $instructorsDD[$instructor->id] = $instructor->name;
        }

        $styles = DanceStyle::all();
        $stylesDD = array();
        foreach($styles as $style)
        {
            $stylesDD[$style->id] = $style->name;
        }

        return array('instructors' => $instructorsDD, 'styles' => $stylesDD);
    }
}