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
            'password' => Hash::make('teacherTest')
        ]);

        DB::table('users')->insert([
            'email' => 'student@gmail.com',
            'password' => Hash::make('studentTest')
        ]);

        $this->call([
            TeachersSeeder::class,
            StudentsSeeder::class
        ]);
    }
}