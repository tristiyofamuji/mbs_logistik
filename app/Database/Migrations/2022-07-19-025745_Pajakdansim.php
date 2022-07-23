<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pajakdansim extends Migration
{
    public function up()
    {
        $this->forge->addField([			
			'id' => [
				'type' => 'INT',
				'constraint' => '11',
        		'auto_increment' => true,
			],
			'id_sopir' => [
				'type' => 'INT',
				'constraint' => '11',
			],
			'jenis_surat' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'jenis_kendaraan' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'masa_berlaku' => [
				'type' => 'DATE',
			],
			'wilayah' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'keterangan' => [
				'type' => 'VARCHAR',
				'constraint' => '20',
			],
 
		]);
		$this->forge->addPrimaryKey('id', true);
		$this->forge->createTable('t_pajak_sim');
    }

    public function down()
    {
        $this->forge->dropTable('t_pajak_sim');
    }
}
