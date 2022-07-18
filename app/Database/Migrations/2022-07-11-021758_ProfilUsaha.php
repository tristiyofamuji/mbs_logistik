<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProfilUsaha extends Migration
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
			'nama_usaha'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'alamat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'logo'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'telepon'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '20',
			],
			'npwp'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'no_sk' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
            ],
            'keterangan' => [
                'type'  => 'VARCHAR',
                'constraint' => '225',
            ],
 
		]);
		$this->forge->addPrimaryKey('id', true);
		$this->forge->createTable('t_profil_usaha');
    }

    public function down()
    {
        $this->forge->dropTable('t_profil_usaha');
    }
}
