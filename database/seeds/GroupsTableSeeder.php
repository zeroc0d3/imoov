<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run ()
     {
         $group_repository = App::make('group_repository');

         $group1 = [
                 "name" => "superadmin",
                 "permissions" => ["_superadmin" => 1]
         ];

         $group_repository->create($group1);

         $group2 = [
                 "name" => "editor",
                 "permissions" => ["_user-editor" => 1, "_group-editor" => 1]
         ];

         $group_repository->create($group2);

         $group3 = [
                 "name" => "base admin",
                 "permissions" => ["_user-editor" => 1]
         ];

         $group_repository->create($group3);

     }
}
