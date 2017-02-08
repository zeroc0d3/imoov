<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run ()
     {
         $permission_repository = App::make('permission_repository');
         $permission1           = [
                 "description" => "superadmin",
                 "permission"  => "_superadmin"
         ];
         $permission_repository->create($permission1);
         $permission2 = [
                 "description" => "user editor",
                 "permission"  => "_user-editor"
         ];
         $permission_repository->create($permission2);
         $permission3 = [
                 "description" => "group editor",
                 "permission"  => "_group-editor"
         ];
         $permission_repository->create($permission3);
         $permission4 = [
                 "description" => "permission editor",
                 "permission"  => "_permission-editor"
         ];
         $permission_repository->create($permission4);
         $permission5 = [
                 "description" => "profile type editor",
                 "permission"  => "_profile-editor"
         ];
         $permission_repository->create($permission5);
     }
}
