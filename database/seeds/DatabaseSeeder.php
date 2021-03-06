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
        $this->call(StudentTableSeeder::class);
        $this->call(TeacherTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(UserGroupTableSeeder::class);
        $this->call(SystemSettingTableSeeder::class);
    }
}
