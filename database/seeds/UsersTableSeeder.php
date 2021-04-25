<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'      => 'Author unknown',
                'email'     => 'author_unknown@test.com',
                'password'  => bcrypt(str_random(16)),
            ],
            [
                'name'      => 'Author',
                'email'     => 'author@test.com',
                'password'  => bcrypt(12345678),
            ],
        ];

        DB::table('users')->insert($data);
    }
}
