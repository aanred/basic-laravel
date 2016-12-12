<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createUsers();
    }

    /**
     * Create users seeder
     * 
     * @return void
     */
    private function createUsers()
    {
        if ( !$superadmin = User::where('email', 'ahmad.subhan@aol.com')->first() ) {
        	// Super admin
        	$superadmin = User::create([
                'name' => 'Ahmad Subhan',
                'email' => 'ahmad.subhan@aol.com',
                'username' => 'director',
                'password' => bcrypt('secret1234'),
                'status' => 1,
            ]);
        }
    }
}
