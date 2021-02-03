 <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    
                    <li class="active">
                        <a href="projectTA"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    @if(\Session::has('admin'))
                    <li class="menu-title">DATA</li><!-- /.menu-title -->
                   
                    <li><a href="CustomerIndex"> <i class="menu-icon ti-user"></i>Data Customer </a></li>
                    <li><a href="PegawaiIndex"> <i class="menu-icon fa fa-group"></i>Data Pegawai </a></li>
                    <li> <a href="KotaIndex"> <i class="menu-icon fa fa-group"></i>Data Kota </a></li>
                    
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-car"></i>Mobil</a>
                        <ul class="sub-menu children dropdown-menu">                            
                            <li><i class="fa fa-asterisk"></i><a href="MerkIndex">Data Merk</a></li>
                            
                            <li><i class="fa fa-asterisk"></i><a href="MobilIndex">Data Mobil</a></li>
                            
                        </ul>
                    </li>

                    <li><a href="PaketIndex"><i class="menu-icon fa fa-list-alt"></i>Paket Sewa </a></li>

                    
                    <li class="menu-title">TRANSAKSI</li>
                        <li>
                        <a href="PenyewaanIndex"><i class="menu-icon fa fa-list-alt"></i>Input Penyewaan </a>
                    </li>
                    
                    <li>
                        <a href="DaftarSewaIndex"><i class="menu-icon fa fa-list"></i>Daftar Penyewaan </a>
                    </li>

                   <li>
                        <a href="DetilSewa_Index"><i class="menu-icon fa fa-list"></i>Detil Penyewaan </a>
                    </li>
                    <li>
                        <a href="PembayaranIndex"><i class="menu-icon fa fa-list"></i>
                    Pembayaran </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Laporan</a>
                    
                    </li>
                    
                    @endif
                    @if(\Session::has('pelayan'))
                     <li class="menu-title">DATA</li>
                    <li>
                        <a href="MobilIndex"><i class="menu-icon fa fa-asterisk"></i>Data Mobil</a>
                    </li>
                    <li class="menu-title">TRANSAKSI</li>
                    <li>
                        <a href="DaftarSewaIndex"><i class="menu-icon fa fa-list"></i>Daftar Penyewaan </a>
                    </li>

                    <li>
                        <a href="DetilSewa_Index"><i class="menu-icon fa fa-list"></i>Detil Penyewaan </a>
                    </li>
                    @endif
                     

                    <!-- <li>
                        <a href="ElaAdmin-master/index.html"><i class="menu-icon fa fa-list"></i>Pengembalian </a>
                    </li> -->

                    

                    
                    <!-- <li class="menu-title">Extras</li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="ElaAdmin-master/-page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                        </ul>
                    </li> -->
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>