<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PembayaranMigration extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_pembayaran'           	=> [
				'type'           => 'INT',
				'constraint'     => 10,
				'auto_increment' => true,
			],
			'nama_pembayaran'           	=> [
				'type'           => 'VARCHAR',
				'constraint'     => 50,
			],
			'nomor_pembayaran'         	=> [
				'type'           => 'VARCHAR',
				'constraint'     => 20,
			],
			'created_at'   							=> [
				'type'           => 'DATETIME',
			],
			'updated_at'   							=> [
				'type'           => 'DATETIME',
			],
		]);
		$this->forge->addKey('id_pembayaran', true);
		$this->forge->createTable('pembayaran');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('pembayaran');
	}
}
