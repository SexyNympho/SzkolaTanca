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
        $danceClass2->level = "Zaawansowani";
        $danceClass2->save();

        $danceClass3 = new DanceClass;
        $danceClass3->classDate = '15:00:00';
        $danceClass3->weekDay = 2;
        $danceClass3->duration = 1;
        $danceClass3->level = "Średnio-zaawansowani";
        $danceClass3->save();

        $danceClass4 = new DanceClass;
        $danceClass4->classDate = '16:00:00';
        $danceClass4->weekDay = 3;
        $danceClass4->duration = 1;
        $danceClass4->level = "Expert";
        $danceClass4->save();

        $instructor = new Instructor;
        $instructor->name = "Aneta";
        $instructor->surname = "Kocot";
        $instructor->description = "Niesamowicie seksowna instruktorka, która zna się na rzeczy i, co udowodniono doświadczalnie, nawet totalnemu idiocie jest w stanie tak pokazać krok, że nawet go powtórzy i na trochę zapamięta. Jest też w stanie nawet najbardziej sceptycznego faceta skłonić do tańca i sprawić, że będzie mu to sprawiało przyjemność. Inna sprawa, że zazwyczaj boją się oni jej to powiedzieć i dalej narzekają żeby nie stracić twarzy... Tracą na tym dostęp do przyjemności płynącej z tańca, gdyż każda cierpliwość kiedyś się kończy, nawet tej, obdarzonej anielską cierpliwością, instruktorki.";
        $instructor->save();
        $instructor->danceClasses()->save($danceClass);
        $instructor->danceClasses()->save($danceClass2);

        $instructor = new Instructor;
        $instructor->name = "Roman";
        $instructor->description = "cóż... no Roman";
        $instructor->save();
        $instructor->danceClasses()->save($danceClass3);
        $instructor->danceClasses()->save($danceClass4);

        $danceStyle = new DanceStyle;
        $danceStyle->name = "Taniec towarzyski";
        $danceStyle->description = "adasdfasdfasdf";
        $danceStyle->save();
        $danceStyle->danceClasses()->save($danceClass);

        $danceStyle = new DanceStyle;
        $danceStyle->name = "Salsa";
        $danceStyle->description = "me likey";
        $danceStyle->save();
        $danceStyle->danceClasses()->save($danceClass2);
        $danceStyle->danceClasses()->save($danceClass3);
        $danceStyle->danceClasses()->save($danceClass4);
    }
}