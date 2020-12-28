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
            flex-flow: row wrap;
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
        
        <a href="<?=base_url();?>/mahasiswa">
            <div class="btn btn-info text-left">
                <i class="fas fa-arrow-left"></i>
            </div>
        </a>
        <div class="card-header text-center">
            <h5>Kirim Barang</h5>
        </div>
        <div class="card-body">
            <?= \Config\Services::Validation()->listErrors(); ?>
            <form action="<?= base_url('mahasiswa/save'); ?>" method="POST">
                <?= csrf_field() ?>
                <table class="table table-bordered">
                    <tr>
                        <td width="25%">NIM</td>
                        <td id="userUid">
                            <input type="text" class="form-control input" name="nim" id="inputUid">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td id="userName">
                        <input type="text" class="form-control input" name="name" id="inputName">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td id="userGender">
                        <select name="gender" class="form-control" id="inputGender">
                            <option value="pria">Pria</option>
                            <option value="wanita">Wanita</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td id="userBirth">
                        <input type="text" class="form-control input" name="birth" id="inputBirth">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td id="userAddress">
                        <input type="text" class="form-control input" name="address" id="inputAddress">
                        </td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td id="userPhone">
                        <input type="text" class="form-control input" name="phone" id="inputPhone" >
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td id="userEmail">
                        <input type="text" class="form-control input" name="email" id="inputEmail">
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2" class="input">
                        <input type="submit" class="btn btn-success" value="Simpan">
                        </td>
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