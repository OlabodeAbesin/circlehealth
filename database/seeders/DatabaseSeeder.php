<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Default User to login with
        $user = [
                'name' => 'John Doe',
                'email' => 'johndoe@gmail.com',
                'password' => 123456789,
                'type' => User::TYPE_NURSE
                ];
        User::create($user);

        // Seeding for patient

        $this->call([PatientSeeder::class]);
    }
}
