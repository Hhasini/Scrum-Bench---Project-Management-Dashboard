<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
			'designation' => 'Admin',
        ]);
		DB::table('users')->insert([
            'name' => 'dev',
            'email' => 'dev@gmail.com',
            'password' => bcrypt('dev123'),
			'designation' => 'Developer',
        ]);
		DB::table('users')->insert([
            'name' => 'pm',
            'email' => 'pm@gmail.com',
            'password' => bcrypt('pm123'),
			'designation' => 'Developer',
        ]);

		DB::table('users')->insert([
			'name' => 'parmer',
			'email' => 'sajjf@gmail.com',
			'password' => bcrypt('paramer123'),

			'designation' => 'Project Manager',
		]);

		DB::table('users')->insert([
			'name' => 'adam',
			'email' => 'addam@gmail.com',
			'password' => bcrypt('adam123'),
			'designation' => 'Project Manager',

		]);

		DB::table('users')->insert([
			'name' => 'Amal',
			'email' => 'kamal@gmail.com',
			'password' => bcrypt('kamal123'),
			'designation' => 'Account Head',

		]);


		DB::table('users')->insert([
			'name' => 'Sunil',
			'email' => 'amal@gmail.com',
			'password' => bcrypt('amal123'),
			'designation' => 'Account Head',

		]);
		DB::table('users')->insert([
			'name' => 'kusal',
			'email' => 'kusal@gmail.com',
			'password' => bcrypt('kusal123'),
			'designation' => 'Developer',

		]);


        DB::table('users')->insert([
			'name' => 'sanjani perera',
			'email' => 'sanjani@gmail.com',
			'password' => bcrypt('sanjani123'),
			'designation' => 'Developer',

		]);

		DB::table('users')->insert([
			'name' => 'lihini avanthika',
			'email' => 'lihini@gmail.com',
			'password' => bcrypt('lihini123'),
			'designation' => 'Developer',

		]);


		DB::table('users')->insert([
			'name' => 'Hasini Nimeshika',
			'email' => 'hasini@gmail.com',
			'password' => bcrypt('hasini123'),
			'designation' => 'Developer',

		]);


		DB::table('users')->insert([
			'name' => 'Isuri',
			'email' => 'isuri@gmail.com',
			'password' => bcrypt('isuri123'),
			'designation' => 'Developer',

		]);

		DB::table('users')->insert([
			'name' => 'Danushka',
			'email' => 'danushka@gmail.com',
			'password' => bcrypt('danu123'),
			'designation' => 'Developer',

		]);

		DB::table('users')->insert([
			'name' => 'Anushka',
			'email' => 'anushka@gmail.com',
			'password' => bcrypt('anushka123'),
			'designation' => 'Developer',

		]);

		DB::table('users')->insert([
			'name' => 'Dasun',
			'email' => 'dasun@gmail.com',
			'password' => bcrypt('dasun123'),
			'designation' => 'Project Manager',

		]);

		DB::table('users')->insert([
			'name' => 'Anuradha',
			'email' => 'anuraddha@gmail.com',
			'password' => bcrypt('anuradha123'),
			'designation' => 'Project Manager',

		]);

		DB::table('users')->insert([
			'name' => 'Nuwan Perera',
			'email' => 'nuwan@gmail.com',
			'password' => bcrypt('nuwan123'),
			'designation' => 'Project Manager',

		]);

		DB::table('users')->insert([
			'name' => 'Sanka Perera',
			'email' => 'sanka@gmail.com',
			'password' => bcrypt('sanka123'),
			'designation' => 'Project Manager',

		]);

		DB::table('users')->insert([
			'name' => 'Kalpa Liyanage',
			'email' => 'kalpa@gmail.com',
			'password' => bcrypt('kalpa123'),
			'designation' => 'Project Manager',

		]);
		DB::table('users')->insert([
			'name' => 'Sadun Madusanka',
			'email' => 'sadun@gmail.com',
			'password' => bcrypt('sadun123'),
			'designation' => 'Project Manager',

		]);
		DB::table('users')->insert([
			'name' => 'Thusith Perera',
			'email' => 'thusith@gmail.com',
			'password' => bcrypt('thusith123'),
			'designation' => 'Project Manager',

		]);









	}

}
