<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
            Eloquent::unguard();

            $this->call('Truncate');
            $this->call('RelationsCleaner');
            
            if (Config::get('database.production'))
            {
                $this->call('ProductionSeeder');
            }
            else
            {
                $this->call('DanceClassesSeeder');
            }
            
            $this->call('DanceEventSeeder');
            $this->call('ReminderSeeder');
            $this->call('UserSeeder');
            $this->call('NewsSeeder');
            $this->call('CommentSeeder');
	}

}