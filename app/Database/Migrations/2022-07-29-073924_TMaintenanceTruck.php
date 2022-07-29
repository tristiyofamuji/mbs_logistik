<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TMaintenanceTruck extends Migration
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
			'tgl_transaksi' => [
                'type'  => 'DATE',
				'null'       	 => true,
            ],
            'no_kendaraan' => [
                'type'  => 'VARCHAR',
                'constraint' => '20',
            ],
            'total_biaya' => [
                'type'  => 'INT',
                'constraint' => '11',
            ],
            'keterangan' => [
                'type'  => 'VARCHAR',
                'constraint' => '225',
            ],
		]);
		$this->forge->addPrimaryKey('id', true);
		$this->forge->createTable('t_maintenance_truck');
    }

    public function down()
    {
        $this->forge->dropTable('t_maintenance_truck');
    }
}
