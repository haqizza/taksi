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
        .menu-item{
            color: white;
            margin: 0.125rem;
            padding: 1rem;
            border-top: 1px solid rgb(0,0,0,0.2);
            border-bottom: 1px solid rgb(0,0,0,0.2);
        }
        .topbar-item{
            margin: 4px 16px;
            padding: 8px 12px;
        }
        #sideMenu{
            display: inline-block;
            vertical-align: top;
            width: 15%;
            height: 130vh;
            overflow-y: hidden;
        }
        #mainBoard{
            width: 85%;
        }
	</style>
</head>
<body>
    <div id="topbar" class="flex-horizon bg-info">
      <div class="topbar-item text-white"><b>Dashboard Admin</b></div>
    </div>
    <div class="flex-horizon stretch">
        <div id="sideMenu" class="bg-info">
            <div id="menuList">
                <a href="<?=base_url('/admin');?>">
                <div class="menu-item"><i class="fa fa-chart-pie"></i> Pengiriman</div>
                </a>
                <a href="<?=base_url('/admin/data_kurir');?>">
                <div class="menu-item"><i class="fa fa-book"></i> Kurir</div>
                </a>
                <a href="<?=base_url('/admin/pengiriman_saya');?>">
                    <div class="menu-item" ><i class="fa fa-user"></i> Akun</div>
                </a>
                <a href="<?=base_url('/login');?>">
                    <div class="menu-item" ><i class="fa fa-sign-out-alt"></i> Logout</div>
                </a>
            </div>
        </div>
        <div id="mainBoard">
            <div id="content" class="">
                <div id="Account" class="card">
                    <div class="card-header text-center">
                        <h5>Data Kurir</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr class="table-active"></tr>
                            <th hidden>id</th>
                            <th width="20%">Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal lahir</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Email</th>
                        <?php foreach ($dataKurir as $data) : ?>
                            <tr>
                                <td class="nama"><?=$data['nama_kurir'];?></td>
                                <td><?= ucfirst($data['jk_kurir']);?></td>
                                <td><?=$data['tgllahir_kurir'];?></td>
                                <td><?=$data['alamat_kurir'];?></td>
                                <td><?=$data['telp_kurir'];?></td>
                                <td><?=$data['email_kurir'];?></td>
                            </tr>
                        <?php endforeach ?>
                        </table>
                        <!-- <small><sup>*</sup>Untuk pergantian data bisa menghubungi bagian Administrasi atau bisa langsung datang ke kantor.</small> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="https://kit.fontawesome.com/c89fc36b61.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>