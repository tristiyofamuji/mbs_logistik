<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Gaji extends Migration
{
    public function up()
    {
        $this->forge->addField([			
			'id'          => [
				'type'           => 'INT',
				'constraint'     => '11',
        		'auto_increment' => true,
			],
			'id_sopir'          => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'wilayah'       => [
				'type'           => 'DATETIME',
				'constraint'     => true,
			],
			'periode' => [
				'type'           => 'DATE',
				'null'       	 => true,
            ],
            'keterangan' => [
                'type'  => 'VARCHAR',
                'constraint' => '225',
            ],
 
		]);
		$this->forge->addPrimaryKey('id', true);
		$this->forge->createTable('t_gaji');
    }

    public function down()
    {
        $this->forge->dropTable('t_gaji');
    }
}
