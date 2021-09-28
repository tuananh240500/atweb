<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_user')->truncate();
        DB::table('roles')->truncate();
        DB::table('tbl_users')->truncate();
        
        $adminRole = Role::create(
            [
                'name' => 'Admin',
                'description' => 'Admin',
                'created_at'        => new \dateTime,
                'updated_at'        => new \dateTime,
            ]);
        
        $editorRole = Role::create(
            [
                'name' => 'Editor',
                'description' => 'Editor',
                'created_at'        => new \dateTime,
                'updated_at'        => new \dateTime,
            ]);
        
        $memberRole = Role::create(
            [
                'name' => 'Member',
                'description' => 'Member',
                'created_at'        => new \dateTime,
                'updated_at'        => new \dateTime,
            ]);
        
        $admin = User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'birthday' => '1999-01-01',
            'phone' => '0983940328',
            'email' => 'admin@ptit.com',
            'password' => Hash::make('admin'),
            'created_at'        => new \dateTime,
            'updated_at'        => new \dateTime,
        ]);
        
        $editor = User::create([
            'name' => 'Modular',
            'username' => 'mod',
            'birthday' => '1999-01-01',
            'phone' => '0983940329',
            'email' => 'mod@ptit.com',
            'password' => Hash::make('mod'),
            'created_at'        => new \dateTime,
            'updated_at'        => new \dateTime,
        ]);
        
        $user = User::create([
            'name' => 'Member',
            'username' => 'member',
            'birthday' => '1999-01-01',
            'phone' => '0983940326',
            'email' => 'member@ptit.com',
            'password' => Hash::make('member'),
            'created_at'        => new \dateTime,
            'updated_at'        => new \dateTime,
        ]);
        
        // add user to user role and admin to admin role
        $user->roles()->attach($memberRole);
        $admin->roles()->attach($adminRole);
        $editor->roles()->attach($editorRole);
    }
}

