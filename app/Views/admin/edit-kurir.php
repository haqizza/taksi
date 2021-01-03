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
                <h5>Kurir</h5>
                <h4><?= $kurir['id_kurir'];?></h4>
            </div>
        </div>
        <div class="card-body">
            <form action="<?=base_url('/admin/update_kurir');?>" method="post">
            <?= csrf_field() ?>
            <table class="table table-borderless">
                <tr hidden>
                    <td><input type="text" class="form-control input" name="id_kurir" value="<?=$kurir['id_kurir']; ?>"></td>
                </tr>
                <tr>
                    <td>Nama Kurir</td>
                    <td><input type="text" class="form-control input" name="nama_kurir" value="<?=$kurir['nama_kurir']; ?>"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <select name="jk_kurir" class="form-control input">
                            <option value="pria"<?php if($kurir['jk_kurir'] == 'pria'){echo 'selected';} ?>>Pria</option>
                            <option value="wanita"<?php if($kurir['jk_kurir'] == 'wanita'){echo 'selected';} ?>>Wanita</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" class="form-control input" name="tgllahir_kurir" value="<?=$kurir['tgllahir_kurir']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" class="form-control input" name="alamat_kurir" value="<?=$kurir['alamat_kurir']; ?>"></td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td><input type="text" class="form-control input" name="telp_kurir" value="<?=$kurir['telp_kurir']; ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" class="form-control input" name="email_kurir" value="<?=$kurir['email_kurir']; ?>"></td>
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