<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('posts')->insert([
            'address' => 'Soborna street',
            'comments' => 'something wrong with the road',
            'img' => '111',
            'latitude' => '112233',
            'longitude' => '445566',
        ]);


        DB::table('posts')->insert([
            'address' => 'Keletskaya street',
            'comments' => 'something wrong with the lighters',
            'img' => '22',
            'latitude' => '112233',
            'longitude' => '445566',
            'confirmed' => '1',
        ]);

        DB::table('posts')->insert([
            'address' => 'Soborna street',
            'comments' => 'something happend with the threes with the road',
            'img' => '33',
            'latitude' => '112233',
            'longitude' => '445566',
        ]);
    }
}
