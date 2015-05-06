<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$posts = [
			[ 'email' => 'admin@gmail.com', 'name' => 'admin', 'password' => Hash::make('adminrahasia')],
			[ 'email' => 'oke@gmail.com', 'name' => 'oke', 'password' => Hash::make('okerahasia')]
		];

		DB::table('login')->insert($posts);
	}

}
