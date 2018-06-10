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
         $this->call(ClassSeeder::class);
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 36b615645537cc9deccbf491342f197eae9630b2
         $this->call(FacultySeeder::class);
         $this->call(SectionSeeder::class);
         $this->call(StudentSeeder::class);
         $this->call(SubjectSeeder::class);
         $this->call(AssignSubjectSeeder::class);
         $this->call(AssignTeacherSeeder::class);

<<<<<<< HEAD
>>>>>>> 36b615645537cc9deccbf491342f197eae9630b2
=======
>>>>>>> 36b615645537cc9deccbf491342f197eae9630b2
    }
}
