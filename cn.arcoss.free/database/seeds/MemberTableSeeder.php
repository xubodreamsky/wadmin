<?php

use App\Member;
use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//
		DB::table('member')->delete();

		Member::create([
				'account'  => 'derrick',
				'nick'     => 'mikcy',
				'name'     => '张三',
				'mobile'   => '13819887634',
				'gender'   => 0,
				'age'      => 34,
				'email'    => '6131300@qq.com',
				'password' => Hash::make('123')
			]);

		Member::create([
				'account'  => 'derrick2',
				'nick'     => 'mikcy2',
				'name'     => '李四',
				'mobile'   => '11819887634',
				'gender'   => 1,
				'age'      => 32,
				'email'    => '16131300@qq.com',
				'password' => Hash::make('123')
			]);

		Member::create([
				'account'  => 'derrick3',
				'nick'     => 'micky3',
				'name'     => '王五',
				'mobile'   => '13829887634',
				'gender'   => 1,
				'age'      => 26,
				'email'    => '61311300@qq.com',
				'password' => Hash::make('1223')
			]);
	}
}
