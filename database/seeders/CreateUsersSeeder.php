<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'Test Admin',
               'email'=>'testadmin@gmail.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Test Moderator',
                'email'=>'testmoderator@gmail.com',
                'type'=>2,
                'password'=> bcrypt('123456'),
             ],
             [
                'name'=>'Test Instructor',
                'email'=>'testinstructor@gmail.com',
                'type'=>3,
                'password'=> bcrypt('123456'),
             ],
             [
                'name'=>'Test Student',
                'email'=>'teststudent@gmail.com',
                'type'=>0,
                'password'=> bcrypt('123456'),
             ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}