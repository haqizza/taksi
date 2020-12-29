<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TAKSI</title>
	<meta name="description" content="Kotak Aksi Covid-19 | Jasa Pengiriman Tanpa Kontak">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<style {csp-style-nonce}>
		*{
            font-family: 'Roboto';
            margin:0;
        }
        #container{
            width: 80%;
            margin: auto;
        }
        *{
            font-family: 'Roboto';
            margin:0;
            padding:0;
        }
        a, a:hover{
            text-decoration: none;
        }
        .menu-item:hover{
            background-color: rgb(0,0,0,0.5);
        }
        .menu-item{
            border-radius: 5px;
            margin: 0 0.125rem;
            padding: 0.5rem;
            color: white;
        }
        .flex-horizon{
            width: 100%;
            display: flex;
            flex-flow: rows wrap;
            align-item:start;
            justify-content: start;
            padding: 0;
        }
	</style>
</head>
<body>
    <div class="navbar bg-info">
        <div class="flex-horizon">
            <a href="/">
                <div class="menu-item">Halaman Utama</div>
            </a>
            <a href="<?=base_url();?>/mahasiswa">
                <div class="menu-item">Tentang</div>
            </a>
            <a href="<?=base_url();?>/dosen">
                <div class="menu-item">Kontak</div>
            </a>
        </div>
        <div>
            <a href="<?=base_url();?>/login">
                <div class="menu-item">Login</div>
            </a>
        </div>
    </div>
    <div id="container" class="card">
        <div class="card-header text-center">
            <h5>Resi Pengiriman</h5>
            <h4><?= $data['kode_pengiriman'];?></h4>
        </div>
        <div class="card-body">
            <table class="table table-borderless">
                <tr>
                    <td width="20%">Status Pengiriman</td>
                    <td>
                        <div class="btn btn-success"><?= ucwords($data['status_pengiriman']); ?></div>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Pengiriman</td>
                    <td><?=$data['pengiriman']; ?></td>
                </tr>
                <tr>
                    <td>Nama Pengirim</td>
                    <td><?=$data['nama_pengirim']; ?></td>
                </tr>
                <tr>
                    <td>Alamat Pengirim</td>
                    <td><?=$data['alamat_pengirim']; ?></td>
                </tr>
                <tr>
                    <td>Telepon Pengirim</td>
                    <td><?=$data['telp_pengirim']; ?></td>
                </tr>
                <tr>
                    <td>Nama Penerima</td>
                    <td><?=$data['nama_penerima']; ?></td>
                </tr>
                <tr>
                    <td>Alamat Penerima</td>
                    <td><?=$data['alamat_penerima']; ?></td>
                </tr>
                <tr>
                    <td>Telepon Penerima</td>
                    <td><?=$data['telp_penerima']; ?></td>
                </tr>
                <tr>
                    <td>Barang</td>
                    <td><?=$data['nama_barang']; ?></td>
                </tr>
                <tr>
                    <td>Ukuran Barang</td>
                    <td><?php
                        $n = $data['ukuran_barang']; 
                        if($n == 1){echo "Kecil";}
                        else if($n == 2){echo "Sedang";}
                        else if($n == 3){echo "Besar";}
                    ?></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td><?=$data['keterangan']; ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
<script src="https://kit.fontawesome.com/c89fc36b61.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>