<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('users')->delete();

		User::create([
            'name'     => '李锐',
            'account'  => 'account1',
            'email'    => 'xb6131300@126.com',
            'password' => Hash::make('123456')
        ]);

		User::create([
            'name'     => '陈曦',
            'account'  => 'account2',
            'email'    => '6131300@qq.com',
			'password' => Hash::make('123456')
		]);

		User::create([
			'name'     => '管理员',
            'account'  => 'account3',
			'email'    => "xb6131300@gmail.com",
			'password' => Hash::make('root')
		]);

		User::create([
			'name'     => '张三',
            'account'  => 'account4',
			'email'    => '85303051@qq.com',
			'password' => Hash::make('123')
		]);
	}
}
?>