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
    <div id="topbar" class="flex-horizon bg-primary">
      <div class="topbar-item text-white"><b>Dashboard Admin</b></div>
    </div>
    <div class="flex-horizon stretch">
        <div id="sideMenu" class="bg-primary">
            <div id="menuList">
                <a href="<?=base_url('/admin');?>">
                <div class="menu-item"><i class="fa fa-dolly-flatbed"></i> Pengiriman</div>
                </a>
                <a href="<?=base_url('/admin/data_kurir');?>">
                <div class="menu-item"><i class="fas fa-motorcycle"></i> Kurir</div>
                </a>
                <a href="<?=base_url('/admin/data_akun');?>">
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
                        <div class="text-right">
                            <a href="<?=base_url('/admin/add_akun');?>">
                                <div class="btn btn-success"><i class="fa fa-plus"></i> Tambah</div>
                            </a>
                        </div>
                        <table class="table table-bordered">
                            <tr class="table-active">
                                <th>Username</th>
                                <th>Password</th>
                                <th>Kurir</th>
                                <th>Role</th>
                                <th width="12%">Aksi</th>
                            </tr>
                        <?php foreach ($dataAkun as $data) : ?>
                            <tr>
                                <td class="nama"><?=$data['username'];?></td>
                                <td><?= ucfirst($data['password']);?></td>
                                <td><?= $data['id_kurir'] . " - " . $data['nama_kurir']?></td>
                                <td><?= $data['role'];?></td>
                                <td>
                                    <a href="<?=base_url('admin/akun/'.$data['id_user']);?>">
                                        <button class="btn btn-success"><i class="fa fa-edit"></i></button>
                                    </a>
                                    <a href="<?=base_url('admin/akun/delete/'.$data['id_user']);?>">
                                        <button class="btn btn-danger"><i class="fa fa-trash-alt"></i></button>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                        </table>
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