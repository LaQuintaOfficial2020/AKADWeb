<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'teacher@gmail.com',
            'password' => Hash::make('teacherTest'),
            'api_token' => Str::random(60)
        ]);

        DB::table('users')->insert([
            'email' => 'student@gmail.com',
            'password' => Hash::make('studentTest'),
            'api_token' => Str::random(60)
        ]);

        $this->call([
            TeachersSeeder::class,
            StudentsSeeder::class
        ]);

        DB::table('classrooms')->insert([
            'id' => 1,
            'className' => 'test class',
            'maxStudents' => 40,
            'semester' => '1',
            'schoolYear' => '2020',
            'dateFrom' => '01/01/2020',
            'dateTo' => '21/09/2020',
            'status' => 'active'
        ]);
        DB::table('class_details')->insert([
            'studId' => 1,
            'classId' => 1,
        ]);
    }
}
