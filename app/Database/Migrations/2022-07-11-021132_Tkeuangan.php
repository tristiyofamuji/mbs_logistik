<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tkeuangan extends Migration
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
				'type'           => 'DATE',
			],
			'tgl_keluar' => [
				'type'           => 'DATE',
            ],
            'keterangan' => [
                'type'  => 'VARCHAR',
                'constraint' => '225',
            ],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
			'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);
		$this->forge->addPrimaryKey('id', true);
		$this->forge->createTable('t_keuangan',TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('t_keuangan');
    }
}
