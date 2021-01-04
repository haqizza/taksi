<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KurirMigration extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_kurir'            => [
					'type'           => 'INT',
					'constraint'     => 10,
					'auto_increment' => true,
			],
			'nama_kurir'          => [
					'type'           => 'VARCHAR',
					'constraint'     => 50,
			],
			'jk_kurir'        => [
					'type'           => 'ENUM("pria","wanita")',
			],
			'tgllahir_kurir'         => [
					'type'           => 'DATE',
			],
			'alamat_kurir'       => [
					'type'           => 'TEXT',
			],
			'telp_kurir'         => [
					'type'           => 'VARCHAR',
					'constraint'     => 15,
			],
			'email_kurir'         => [
					'type'           => 'VARCHAR',
					'constraint'     => 30,
					'null'           => true,
			],
			'created_at'   							=> [
				'type'           => 'DATETIME',
			],
			'updated_at'   							=> [
				'type'           => 'DATETIME',
			],
		]);
		$this->forge->addKey('id_kurir', true);
		$this->forge->createTable('kurir');
	}

	public function down()
	{
		$this->forge->dropTable('kurir');
	}
}
