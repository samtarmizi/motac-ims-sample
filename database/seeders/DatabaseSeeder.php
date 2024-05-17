<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // prepare production users data
        /** 
         *      Superadmin Admin MOTAC
         *      superadmin@motac.gov.my
         * */ 
        User::create([
            'name' => 'Superadmin Admin MOTAC',
            'email' => 'superadmin@motac.gov.my',
            'password' => Hash::make('password'),
            'level' => 'admin',
        ]);

         /** 
         *      Stockkeeper Admin MOTAC
         *      stockkeeper@motac.gov.my
         * */ 

        User::create([
            'name' => 'Stockkeeper Admin MOTAC',
            'email' => 'stockeeper@motac.gov.my',
            'password' => Hash::make('password'),
            'level' => 'stockkeeper',
        ]);

         /** 
         *      Customer Admin MOTAC
         *      customer@motac.gov.my
         * */ 
        User::create([
            'name' => 'Customer Admin MOTAC',
            'email' => 'customer@motac.gov.my',
            'password' => Hash::make('password'),
            'level' => 'customer',
        ]);
        
    }
}
