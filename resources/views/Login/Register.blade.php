<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="ElaAdmin-master/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="ElaAdmin-master/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                  
                </div>
                <div class="login-form">
                	  <a href="index.html">
                        <img class="align-content" src="ElaAdmin-master/images/logo7.png" alt="">
                    </a>
                    <br>
                    <br>
                    <form  class="form-detail" action="RegisterStore" method="post" >
                        <input type = "hidden" name="_token" value = "<?php echo csrf_token() ?>"> 
                    

                        <div class="form-group">
                            <label>NAMA PEGAWAI</label>
                            <input type="text" name="namapegawai" id="namapegawai" class="form-control" placeholder="Nama Pegawai">
                        </div>

                        <div class="form-group">
                            <label>JENIS KELAMIN</label>
                             <select name="jkpegawai" id="jkpegawai" class="form-control pro-edt-select form-control-primary">
                                <option disabled="" selected="">Pilih Jenis Kelamin</option> 
                                    <option  value="1">Pria</option>
                                    <option  value="0">Wanita</option>
                                    </select>
                        </div>

                        <div class="form-group">
                            <label>NO TELEPON </label>
                            <input type="text" name="telppegawai" id="telppegawai" class="form-control" placeholder="Nomor Telepon Pegawai">
                        </div>

                        <div class="form-group">
                            <label>Nama Kota</label>
                            <select class="form-control pl-0 form-control-line" name="idkota">
                            <option disabled selected style="padding: 10px">Pilih Nama Kota</option>
                              @foreach($kota as $key => $value)
                            <option value="{{ $key }}">{{ $value }}
                            </option>
                              @endforeach
                          </select>  
                        </div>

                        <div class="form-group">
                            <label>ALAMAT</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat Pegawai">
                        </div>

                        <div class="form-group">
                            <label>Nama Jabatan</label>
                            <select id="namajabatan" class="form-control pl-0 form-control-line" name="idjabatan">
                            <option disabled selected style="padding: 10px">Pilih Nama Jabatan</option>
                              @foreach($jabatan as $key => $value)
                            <option value="{{ $key }}">{{ $value }}
                            </option>
                              @endforeach
                          </select>  
                        </div>
                        
                        <div class="form-group">
                            <label>USERNAME</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                        </div>

                        <div class="form-group">
                            <label>PASSWORD</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password Pegawai">
                        </div>

                        <!-- <div class="form-group">
                            <label>ALAMAT</label>
                            <input type="email" name="alamat" id="alamat" class="form-control" placeholder="AlamatPegawai">
                        </div> -->

                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Agree the terms and policy
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                        
                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="login"> Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="ElaAdmin-master/assets/js/main.js"></script>

</body>
</html>
