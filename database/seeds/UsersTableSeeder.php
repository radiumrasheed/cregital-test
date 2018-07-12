<?php

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call(UserTableSeeder::class);
		DB::table('users')->delete();

		$users = array(
			['name' => 'Admin', 'email' => 'admin@admin.com', 'password' => Hash::make('password')],
		);


		// Loop through each user above and create the record for them in the database
		foreach ($users as $user) {
			User::create($user);
		}

		Model::reguard();
	}
}
