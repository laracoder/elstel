<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class SystemDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables();
        $this->seedRoles();
        $this->seedUsers();
    }

    private function seedRoles()
    {
        Role::create(['name' => 'administrator', 'guard_name' => 'web']);
    }

    private function seedUsers()
    {
        \App\User::create([
            'name' => 'system',
            'email' => 'system@elstel',
            'password' => Hash::make(env('ELSTEL_SYSTEM_USER_PASSWORD'))
        ]);
    }

    private function truncateTables(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('roles')->truncate();
        DB::table('users')->truncate();
        DB::table('ads')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
