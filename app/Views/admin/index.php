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
                        <h5>Pengiriman</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr class="table-active">
                                <th width="30%">Data</th>
                                <th>Pengirim</th>
                                <th>Penerima</th>
                                <th>Barang</th>
                                <th>Aksi</th>
                            </tr>
                        <?php foreach ($pengiriman as $data) : ?>
                            <tr>
                                <td>
                                    Kode : <b><?= $data["kode_pengiriman"];?></b>
                                    <br>
                                    <div class="btn btn-secondary" onclick="openFoto(this);">Foto</div>
                                    <img class='foto' src="<?= base_url("/image/".$data["foto"]);?>" alt="Foto Barang" width="100%" hidden>
                                </td>
                                <td class='pengirim'>
                                    Nama :  <?=$data["nama_pengirim"];?> <br>
                                    Telepon : <?=$data["telp_pengirim"];?> <br>
                                    Alamat : <?=$data["alamat_pengirim"];?></td>
                                <td class='penerima'>
                                    Nama :  <?=$data["nama_penerima"];?> <br>
                                    Telepon : <?=$data["telp_penerima"];?> <br>
                                    Alamat : <?=$data["alamat_penerima"];?></td>
                                </td>
                                <td class='barang'><?php
                                    $ukuran;
                                    $n = $data['ukuran_barang']; 
                                    
                                    if($n == 1){$ukuran = "Kecil";}
                                    else if($n == 2){$ukuran = "Sedang";}
                                    else if($n == 3){$ukuran = "Besar";}

                                    echo
                                    "Barang : " . $data["nama_barang"] . "<br>" .
                                    "Ukuran : " . $ukuran . "<br>" .
                                    "Keterangan :" . $data["keterangan"]; 
                                ?></td>
                                <td>
                                    <a href="<?=base_url('admin/pengiriman/'.$data['id_pengiriman']);?>">
                                        <button class="btn btn-success"><i class="fa fa-edit"></i></button>
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
<script>
    function openFoto(value){
        value = $(value).siblings('.foto');
        hid = $(value).attr('hidden');
        console.log(hid);
        if(hid == "hidden"){
            $(value).removeAttr('hidden');
        }
        else{
            $(value).attr('hidden', '');
        }
    }
</script>
<script src="https://kit.fontawesome.com/c89fc36b61.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>