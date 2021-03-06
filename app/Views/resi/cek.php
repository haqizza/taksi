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
        .login-container{
            margin: auto;
            width: 30%;
        }
	</style>
</head>
<body>
<div id="loginModal">
    <nav class="navbar navbar-expand-md navbar-light bg-primary py-3" id="mainNav">
        <div class="container">
            <a class="text-white navbar-brand js-scroll-trigger" href="<?=base_url('/');?>"><i>TAKSI</i></a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li><a class="btn btn-primary" href="<?=base_url('/pengiriman');?>"><i>Kirim Barang</i></a></li>
                    <li><a class="btn btn-primary" href="<?=base_url('/cek');?>"><i>Cek Resi</i></a></li>
                    <li><a class="btn btn-primary" href="<?=base_url('#tentang');?>"><i>Tentang</i>
                    <li><a class="btn btn-primary" href="<?=base_url('#kontak');?>"><i>Kontak</i></a></li>
                    <li><a class="btn btn-primary" href="<?=base_url('/login');?>"><i>Login</i></a></li>
                </ul>
            </div>
        </div>
    </nav> 
    <div class="login-container card text-center">
      <h5 class="card-header bg-primary text-white">
        Cek Resi
      </h5>
      <div class="card-body">
        <input type="text" name="username" class="form-control" placeholder="Kode Pengiriman/Resi" oninput="push(this);"><br>
        <a id="lnk" href="">
            <div class="btn btn-primary">Cek</div>
        </a>
      </div>
      <div class="card-footer text-muted bg-primary">
        
      </div>
    </div>
  </div>
</body>
</html>
<script>
    function push(elem){
        code = $(elem).val();
        $('#lnk').attr("href", "<?=base_url('/resi/');?>/" + code);
        console.log(code);
    }
</script>
<script src="https://kit.fontawesome.com/c89fc36b61.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>