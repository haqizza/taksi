<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserMigration extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_user'           		=> [
				'type'           => 'INT',
				'constraint'     => 10,
				'auto_increment' => true,
			],
			'username'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 30,
			],
			'password'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 50,
			],
			'kurir'      => [
				'type'           => 'INT',
				'constraint'     => 10,
				'null'     => true,
			],
			'role'          	=> [
				'type'           => 'ENUM("admin","kurir")',
			],
			'created_at'   							=> [
				'type'           => 'DATETIME',
			],
			'updated_at'   							=> [
				'type'           => 'DATETIME',
			],
		]);
		$this->forge->addKey('id_user', true);
		$this->forge->addForeignKey('kurir','kurir','id_kurir','CASCADE','CASCADE');
		$this->forge->createTable('user');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
