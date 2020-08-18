<?php

use Illuminate\Database\Seeder;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'fname' => 'teacher',
            'lname' => 'test',
            'bday' => '10/09/1997',
            'empid' => 'abc1123',
            'user_id' => 1
        ]);
    }
}
