<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TKeuangan extends Migration
{
    public function up()
    {
        $this->forge->addField([			
			'id'          => [
				'type'           => 'INT',
				'constraint'     => '11',
        		'auto_increment' => true,
			],
			'pemasukan'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'pengeluaran'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'tgl_masuk'       => [
				'type'           => 'DATETIME',
				'constraint'     => true,
			],
			'tgl_keluar' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
            ],
            'keterangan' => [
                'type'  => 'VARCHAR',
                'constraint' => '225',
            ],
 
		]);
		$this->forge->addPrimaryKey('id', true);
		$this->forge->createTable('t_keuangan');
    }

    public function down()
    {
        $this->forge->dropTable('t_keuangan');
    }
}
