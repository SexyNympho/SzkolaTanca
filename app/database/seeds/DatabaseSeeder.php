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

            $this->call('RelationsCleaner');
            $this->call('ImageSeeder');
            
            if (Config::get('database.production'))
            {
                $this->call('ProductionSeeder');
            }
            else
            {
                $this->call('DanceClassesSeeder');
            }
            
            $this->call('NewsSeeder');
            $this->call('DanceEventSeeder');
            $this->call('ReminderSeeder');
            $this->call('UserSeeder');
            $this->call('NewsSeeder');
	}

}