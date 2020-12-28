<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PengirimanKurirMigration extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_kurir_pengiriman'   => [
				'type'           => 'INT',
				'constraint'     => 10,
				'auto_increment' => true,
			],
			'kurir'=> [
				'type'           => 'INT',
				'constraint'     => 10
			],
			'pengiriman'=> [
				'type'           => 'INT',
				'constraint'     => 10
			],
			'created_at'   							=> [
				'type'           => 'DATETIME',
			],
			'updated_at'   							=> [
				'type'           => 'DATETIME',
			],
		]);
		$this->forge->addKey('id_kurir_pengiriman', true);
		$this->forge->addForeignKey('kurir','kurir','id_kurir','CASCADE','CASCADE');
		$this->forge->addForeignKey('pengiriman','pengiriman','id_pengiriman','CASCADE','CASCADE');
		$this->forge->createTable('kurir_pengiriman');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('kurir_pengiriman');
	}
}
