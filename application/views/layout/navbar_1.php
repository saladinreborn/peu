    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background-color:#34495e">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <table>
                    <tr>
                        <td><a href="#page-top"><img src="/../assets/img/logo.png" class="img-responsive" alt="Responsive image"></a></td>
                        <td><a class="navbar-brand page-scroll" href="#page-top">KK PEUGEOT</a></td>
                    </tr>
                </table>                 
                            
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                     <li>
                        <a class="page-scroll" href="/owner/user">Master User</a>
                    </li>
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laporan<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <!-- datepicker = bulan dan tahun -->
            <li><a href="/owner/laporan/servis">Laporan Servis</a></li>
            <!-- data yg servis (sudah selesai / belum) filter melalui status order -->
            <li><a href="/owner/laporan/suku_cadang">Laporan Data Suku Cadang</a></li>
            <!-- data suku cadang masuk dan keluar -->
            <li><a href="/owner/laporan/pembayaran">Laporan Keuangan</a></li>
            <!-- data sudah bayar (detail mobil & pemilik, tanggal, total) -->
          </ul>
        </li>
                 
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            <?php echo strtoupper($this->session->uname); ?>
                            <span class="caret"></span>
                        </a>
                            <ul class="dropdown-menu">
                                 <li><a class="page-scroll" href="/logout">Keluar</a> </li>
                            </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>