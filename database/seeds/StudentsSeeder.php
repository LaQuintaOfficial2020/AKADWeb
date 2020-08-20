<?php

use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'fname' => 'student',
            'lname' => 'test',
            'bday' => '10/09/1997',
            'studid' => 'abc1123',
            'overAllPoints' => 10,
            'pointsBal' => 6,
            'pointsUsed' => 4,
            'userId' => 2
        ]);
    }
}
