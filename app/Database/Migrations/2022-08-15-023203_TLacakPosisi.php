<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TLacakPosisi extends Migration
{
    public function up()
    {
        $this->forge->addField([			
			'id' => [
				'type'           => 'INT',
				'constraint'     => '11',
        		'auto_increment' => true,
			],
			'id_sopir' => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'posisi_gps' => [
                'type'           => 'VARCHAR',
                'constraint'     => '225',
            ],
            'keterangan' => [
                'type'           => 'VARCHAR',
                'constraint'     => '225',
            ],
 
		]);
		$this->forge->addPrimaryKey('id', true);
		$this->forge->createTable('t_lacak_posisi');
    }

    public function down()
    {
        $this->forge->dropTable('t_lacak_posisi');
    }
}
