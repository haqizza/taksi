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
            <h5>Kirim Barang</h5>
        </div>
        <div class="card-body">
            <?= \Config\Services::Validation()->listErrors(); ?>
            <form action="<?= base_url('pengiriman/save'); ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <fieldset>
                    <legend>Data Pengirim</legend>
                    <table class="table table-borderless">
                        <tr>
                            <td>
                                <input type="text" class="form-control input" name="nama_pengirim" placeholder="Nama Pengirim">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea type="text" rows="3" class="form-control input" name="alamat_pengirim" placeholder="Alamat Pengirim"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control input" name="telp_pengirim" placeholder="Nomor Telepon Pengirim">
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <fieldset>
                    <legend>Data Penerima</legend>
                    <table class="table table-borderless">
                        <tr>
                            <td>
                                <input type="text" class="form-control input" name="nama_penerima" placeholder="Nama Penerima">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea type="text" rows="3" class="form-control input" name="alamat_penerima" placeholder="Alamat Penerima"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control input" name="telp_penerima" placeholder="Nomor Telepon Penerima">
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <fieldset>
                    <legend>Data Barang</legend>
                    <table class="table table-borderless">
                        <tr>
                            <td>
                                <input type="text" class="form-control input" name="nama_barang" placeholder="Nama Barang">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select name="ukuran_barang" class="form-control input">
                                    <option hidden>Ukuran Barang</option>
                                    <option value="Sedang">Sedang</option>
                                    <option value="Besar">Besar</option>
                                    <option value="Kecil">Kecil</option>
                                </select>
                            </td>
                        </tr>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-file">
                                    <input type="file" name="foto" class="custom-file-input">
                                    <label class="custom-file-label">Foto Barang</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea type="text" rows="3" class="form-control input" name="keterangan" placeholder="Keterangan"></textarea>
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <fieldset>
                    <legend>Pengiriman</legend>
                    <table class="table table-borderless">
                        <tr>
                            <td>
                                <select name="pengiriman" class="form-control input">
                                    <option hidden>Pilih Jenis Pengiriman</option>
                                    <option value="Reguler">Reguler</option>
                                    <option value="Express">Express</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select name="cara_pembayaran" class="form-control input">
                                    <option hidden>Pilih Cara Pembayaran</option>
                                    <option value="Tunai">Tunai</option>
                                    <option value="OVO">OVO</option>
                                    <option value="Dana">Dana</option>
                                    <option value="BNI">Transfer BNI</option>
                                    <option value="BRI">Transfer BRI</option>
                                    <option value="BCA">Transfer BCA</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <div class="text-center">
                    <input type="submit" class="btn btn-success px-4" value="Kirim">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<script src="https://kit.fontawesome.com/c89fc36b61.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>