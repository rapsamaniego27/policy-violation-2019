<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Student;

    
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = Student::create([
            'first_name' => 'Peter',
            'email' => 'peter@gmail.com',
            'password' => Hash::make('password')
        ]);

        factory(Student::class, 29)->create();

        
    }
}
