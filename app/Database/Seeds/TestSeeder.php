<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TestSeeder extends Seeder
{
    public function run()
    {
        //Admin and User

        $data = [
            ['test_name'=>'admin','test_description'=>'Administrator'],
            ['test_name'=>'user','test_description'=>'User']
        ];

        // Simple Queries
        $this->db->table('tbl_test')->insertBatch($data);
            }
}
