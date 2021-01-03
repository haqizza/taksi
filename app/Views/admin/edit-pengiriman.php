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
    <div id="container" class="card">
        <div class="card-header text-right">    
            <a href="<?=base_url('/admin')?>">
                <h5><i class="fa fa-times text-dark"></i></h5>
            </a>
            <div class="text-center">
                <h5>Pengiriman</h5>
                <h4><?= $pengiriman['kode_pengiriman'];?></h4>
            </div>
        </div>
        <div class="card-body">
            <form action="<?=base_url('/admin/update_pengiriman');?>" method="post">
            <?= csrf_field() ?>
            <table class="table table-borderless">
                <tr hidden>
                    <td><input type="text" class="form-control input" name="kode_pengiriman" value="<?=$pengiriman['kode_pengiriman']; ?>"></td>
                </tr>
                <tr>
                    <td width="20%">Status Pengiriman</td>
                    <td>
                    <select name="status_pengiriman" class="form-control input">
                        <option value="menunggu penjemputan"<?php if($pengiriman['status_pengiriman'] == 'menunggu penjemputan'){echo 'selected';} ?>>Menunggu Penjemputan</option>
                        <option value="sedang dijemput"<?php if($pengiriman['status_pengiriman'] == 'sedang dijemput'){echo 'selected';} ?>>Sedang Dijemput</option>
                        <option value="dalam pengiriman"<?php if($pengiriman['status_pengiriman'] == 'dalam pengiriman'){echo 'selected';} ?>>Dalam Pengiriman</option>
                        <option value="selesai dikirim"<?php if($pengiriman['status_pengiriman'] == 'selesai dikirim'){echo 'selected';} ?>>Selesai Dikirim</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Pengiriman</td>
                    <td>
                        <select name="pengiriman" class="form-control input">
                            <option value="Reguler"<?php if($pengiriman['pengiriman'] == 'Reguler'){echo 'selected';} ?>>Reguler</option>
                            <option value="Express"<?php if($pengiriman['pengiriman'] == 'Express'){echo 'selected';} ?>>Express</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nama Pengirim</td>
                    <td><input type="text" class="form-control input" name="nama_pengirim" value="<?=$pengiriman['nama_pengirim']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat Pengirim</td>
                    <td><input type="text" class="form-control input" name="alamat_pengirim" value="<?=$pengiriman['alamat_pengirim']; ?>"></td>
                </tr>
                <tr>
                    <td>Telepon Pengirim</td>
                    <td><input type="text" class="form-control input" name="telp_pengirim" value="<?=$pengiriman['telp_pengirim']; ?>"></td>
                </tr>
                <tr>
                    <td>Nama Penerima</td>
                    <td><input type="text" class="form-control input" name="nama_penerima" value="<?=$pengiriman['nama_penerima']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat Penerima</td>
                    <td><input type="text" class="form-control input" name="alamat_penerima" value="<?=$pengiriman['alamat_penerima']; ?>"></td>
                </tr>
                <tr>
                    <td>Telepon Penerima</td>
                    <td><input type="text" class="form-control input" name="telp_penerima" value="<?=$pengiriman['telp_penerima']; ?>"></td>
                </tr>
                <tr>
                    <td>Barang</td>
                    <td><input type="text" class="form-control input" name="nama_barang" value="<?=$pengiriman['nama_barang']; ?>"></td>
                </tr>
                <tr>
                    <td>Ukuran Barang</td>
                    <td>
                        <select name="ukuran_barang" class="form-control input">
                            <option value="1"<?php if($pengiriman['ukuran_barang'] == '1'){echo 'selected';} ?>>Kecil</option>
                            <option value="2"<?php if($pengiriman['ukuran_barang'] == '2'){echo 'selected';} ?>>Sedang</option>
                            <option value="3"<?php if($pengiriman['ukuran_barang'] == '3'){echo 'selected';} ?>>Besar</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td><input type="text" class="form-control input" name="keterangan" value="<?=$pengiriman['keterangan']; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center"><input type="submit" class="btn btn-success" value="Simpan"></td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</body>
</html>
<script src="https://kit.fontawesome.com/c89fc36b61.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>