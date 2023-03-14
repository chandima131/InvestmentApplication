<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RelationshipManager;

class RelationshipmanagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $relationshipmanager = [
            'name'  => 'RM1',
            'email' => 'RM1@RM.com',
            'password' => bcrypt('password')
        ];
         RelationshipManager::create($relationshipmanager);
    }
}



