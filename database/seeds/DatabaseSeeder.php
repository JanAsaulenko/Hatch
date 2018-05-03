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
            'tittle' => 'Soborna street',
            'comments' => 'something wrong with the road',
            'username' => 'Anton',
            'lat' => '112233',
            'lng' => '445566',
            'created_at' => '2017-01-01',
        ]);
        DB::table('posts')->insert([
            'tittle' => 'Keletskaya street',
            'comments' => 'something wrong with the lighters',
            'username' => 'Vova',
            'lat' => '112233',
            'lng' => '445566',
            'confirmed' => '1',
            'created_at' => '2017-01-01',
        ]);
        DB::table('posts')->insert([
            'tittle' => 'Soborna street',
            'comments' => 'something happend with the threes with the road',
            'username' => 'Peter',
            'lat' => '112233',
            'lng' => '445566',
            'created_at' => '2017-01-01',
        ]);
    }
}