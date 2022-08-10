<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TJualBeliTruck extends Migration
{
    public function up()
    {
        $this->forge->addField([			
			'id'          => [
				'type'           => 'INT',
				'constraint'     => '11',
        		'auto_increment' => true,
			],
			'id_pemilik'          => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'tgl_transaksi' => [
                'type'  => 'DATE',
				'null'       	 => true,
            ],
            'file_invoice' => [
                'type'  => 'VARCHAR',
                'constraint' => '255',
            ],
            'no_kendaraan' => [
                'type'  => 'VARCHAR',
                'constraint' => '12',
            ],
            'keterangan' => [
                'type'  => 'VARCHAR',
                'constraint' => '225',
            ],
		]);
		$this->forge->addPrimaryKey('id', true);
		$this->forge->createTable('t_jual_beli');
    }

    public function down()
    {
        $this->forge->dropTable('t_jual_beli');
    }
}
