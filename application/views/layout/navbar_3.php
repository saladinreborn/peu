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
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Suku Cadang <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/purchasing/sc">Suku Cadang</a></li>
            <li><a href="/purchasing/supplier">Supplier Suku Cadang</a></li>
              
                                    
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