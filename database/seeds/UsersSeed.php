<?php

use Illuminate\Database\Seeder;
use App\User,App\AdministrationGroup;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administration_group = new AdministrationGroup();
        $administration_group->name = 'super_admin';
        $administration_group->permissions = "*";
        $administration_group->description = "";
        $administration_group->save();


        User::create([
            'name'=>'amr',
            'email'=>'admin@admin.com',
            'type_user'=>'admin',   
            'administration_group_id'=>$administration_group->id,
            'password'=>bcrypt(12345678),
        ]);
    }
}
