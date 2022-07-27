<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TDetailGaji extends Migration
{
    public function up()
    {
        $this->forge->addField([			
			'id'          => [
				'type'           => 'INT',
				'constraint'     => '11',
        		'auto_increment' => true,
			],
			'id_gaji'          => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'kode'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '20',
			],
			'nominal' => [
				'type'           => 'INT',
				'constraint'     => '11',
            ],
            'keterangan' => [
                'type'  => 'VARCHAR',
                'constraint' => '225',
            ],
 
		]);
		$this->forge->addPrimaryKey('id', true);
		$this->forge->createTable('t_detaiL_gaji');
    }

    public function down()
    {
        $this->forge->dropTable('t_detaiL_gaji');
    }
}
