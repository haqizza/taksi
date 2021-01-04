<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PengirimanMigration extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_pengiriman'           	    => [
				'type'           => 'INT',
				'constraint'     => 10,
				'auto_increment' => true,
			],
			'kode_pengiriman'        		=> [
				'type'           => 'VARCHAR',
				'constraint'     => 20,
			],
			'nama_pengirim'           	    => [
				'type'           => 'VARCHAR',
				'constraint'     => 50,
			],
			'alamat_pengirim'         	    => [
				'type'           => 'TEXT',
			],
			'telp_pengirim'        			=> [
				'type'           => 'VARCHAR',
				'constraint'     => 15,
			],
			'nama_penerima'           	    => [
				'type'           => 'VARCHAR',
				'constraint'     => 50,
			],
			'alamat_penerima'         	    => [
				'type'           => 'TEXT',
			],
			'telp_penerima'        			=> [
				'type'           => 'VARCHAR',
				'constraint'     => 15,
			],
			'nama_barang'           		=> [
				'type'           => 'VARCHAR',
				'constraint'     => 50,
			],
			'ukuran_barang'          		=> [
				'type'           => 'INT',
				'constraint'     => 10,
			],
			'foto'        			        => [
				'type'           => 'TEXT',
			],
			'keterangan'        			=> [
                'type'           => 'TEXT',
			],
			'pengiriman'        			=> [
                'type'           => 'VARCHAR',
                'constraint'     => 15,
			],
			'cara_pembayaran'        		=> [
                'type'           => 'INT',
				'constraint'     => 10,
			],
			'status_pengiriman'    			=> [
                'type'           => 'ENUM("menunggu penjemputan","sedang dijemput","dalam pengiriman","selesai dikirim")',
			],
            'kurir'        		            => [
                'type'           => 'INT',
                'constraint'     => 10,
                'null'           => true,
            ],
			'created_at'   					=> [
				'type'           => 'DATETIME',
			],
			'updated_at'   					=> [
				'type'           => 'DATETIME', 
			],
		]);
        $this->forge->addKey('id_pengiriman', true);
        $this->forge->addForeignKey('cara_pembayaran','pembayaran','id_pembayaran','CASCADE','CASCADE');
        $this->forge->addForeignKey('kurir','kurir','id_kurir','CASCADE','CASCADE');
		$this->forge->createTable('pengiriman');
	}


	public function down()
	{
		$this->forge->dropTable('pengiriman');
	}
}

