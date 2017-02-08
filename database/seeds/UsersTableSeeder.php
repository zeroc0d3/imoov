<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     protected $admin_email    = "admin@coreacl.app";
     protected $admin_password = "password";

     public function run ()
     {
         $user_repository    = App::make('user_repository');
         $group_repository   = App::make('group_repository');
         $profile_repository = App::make('profile_repository');

         $user_data = [
                 "email"     => $this->admin_email,
                 "password"  => $this->admin_password,
                 "activated" => 1
         ];

         $user = $user_repository->create($user_data);

         $profile_repository->attachEmptyProfile($user);

         $superadmin_group = $this->getSuperadminGroup($group_repository);
         $user_repository->addGroup($user->id, $superadmin_group->id);
     }

     /**
      * @param $group_repository
      * @return mixed
      */
     private function getSuperadminGroup ($group_repository)
     {
         $superadmin_group = $group_repository->all(["name" => "superadmin"])->first();
         return $superadmin_group;
     }
}
