<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tsopir extends Migration
{
    public function up()
    {
        $this->forge->addField([			
			'id' => [
				'type' => 'INT',
				'constraint' => '11',
        		'auto_increment' => true,
			],
			'id_pemilik' => [
				'type' => 'INT',
				'constraint' => '11',
			],
			'nama' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'telepon' => [
				'type' => 'VARCHAR',
				'constraint' => '20',
			],
			'no_whatsapp' => [
				'type' => 'VARCHAR',
				'constraint' => '20',
			],
			'alamat' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'no_kendaraan' => [
				'type' => 'VARCHAR',
				'constraint' => '20',
			],
 
		]);
		$this->forge->addPrimaryKey('id', true);
		$this->forge->createTable('t_sopir');
    }

    public function down()
    {
        $this->forge->dropTable('t_sopir');
    }
}
