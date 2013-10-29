<?php
/**
 * Created by JetBrains PhpStorm.
 * User: MateuszT
 * Date: 27/10/13
 * Time: 11:58
 * To change this template use File | Settings | File Templates.
 */

class DanceClassesSeeder extends DatabaseSeeder {
    public function run()
    {
        DB::table('danceClasses')->truncate();
        DB::table('instructors')->truncate();
        DB::table('danceStyles')->truncate();

        $danceClass = new DanceClass;
        $danceClass->classDate = '16:00:00';
        $danceClass->duration = 1;
        $danceClass->level = "Początkujący";
        $danceClass->weekDay = 1;
        $danceClass->save();

        $danceClass2 = new DanceClass;
        $danceClass2->classDate = '17:00:00';
        $danceClass2->weekDay = 1;
        $danceClass2->duration = 1;
        $danceClass2->level = "Debile";
        $danceClass2->save();

        $danceClass3 = new DanceClass;
        $danceClass3->classDate = '15:00:00';
        $danceClass3->weekDay = 2;
        $danceClass3->duration = 1;
        $danceClass3->level = "Idioci";
        $danceClass3->save();

        $danceClass4 = new DanceClass;
        $danceClass4->classDate = '16:00:00';
        $danceClass4->weekDay = 3;
        $danceClass4->duration = 1;
        $danceClass4->level = "Advanced";
        $danceClass4->save();

        $instructor = new Instructor;
        $instructor->name = "Aneta";
        $instructor->surname = "Kocot";
        $instructor->save();
        $instructor->danceClasses()->save($danceClass);
        $instructor->danceClasses()->save($danceClass2);

        $instructor = new Instructor;
        $instructor->name = "Roman";
        $instructor->save();
        $instructor->danceClasses()->save($danceClass3);
        $instructor->danceClasses()->save($danceClass4);

        $danceStyle = new DanceStyle;
        $danceStyle->name = "Taniec towarzyski";
        $danceStyle->save();
        $danceStyle->danceClasses()->save($danceClass);

        $danceStyle = new DanceStyle;
        $danceStyle->name = "Dupcing";
        $danceStyle->save();
        $danceStyle->danceClasses()->save($danceClass2);
        $danceStyle->danceClasses()->save($danceClass3);
        $danceStyle->danceClasses()->save($danceClass4);
    }
}