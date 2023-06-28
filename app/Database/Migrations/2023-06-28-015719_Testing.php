<?php
/**
 * Pascua, Neildric B. 201810165 neildric.pascua@cvsu.edu.ph
 * Erestain, Jhowie Mhay P. 201810164 jhowiemhay.erestain@cvsu.edu.ph
 */
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Testing extends Migration
{
    public function up()
    {
        //Will have test_id, test_name, test_description, test_status
        $this->forge->addField([
            'test_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true       
            ],
            'test_name' => [
                'type' => 'VARCHAR',
                'constraint' => '20'
            ],
            'test_description' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'test_status' => [
                'type' => 'INT',
                'constraint' => 1,
                'default_value' => 0 
            ],
        ]); 

        $this -> forge ->addKey('test_id', true);
        $this-> forge->createTable('tbl_test');
    }

    public function down()
    {
        //
        $this->forge->dropTable('tbl_test');
    }
}
