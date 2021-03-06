<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KK PEUGEOT</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="/../assets/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
   <!--  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" href="/../assets/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="/../assets/css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/../assets/css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

<?php

    if ($this->session->userdata('level')=='1') {
          $this->load->view('layout/navbar_1');
    }elseif ($this->session->userdata('level')=='2') {
        $this->load->view('layout/navbar_2');
    }elseif ($this->session->userdata('level')=='3') {
        $this->load->view('layout/navbar_3');
    }

  
?>
    


    <section id="content" style="min-height:590px">
        <div class="container">
            <div class="row">
  <?php $this->load->view($view,$arr); ?>

            </div>
        </div>
    </section>


<?php

    $this->load->view('layout/footer');

?>

    <!-- jQuery -->
    <script src="/../assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/../assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/../assets/js/jquery.easing.min.js"></script>
    <script src="/../assets/js/jquery.fittext.js"></script>
    <script src="/../assets/js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/../assets/js/creative.js"></script>

    <?php
        if($this->session->userdata('level') == '2'){
            echo '<script src="/../assets/js/administrasi.js"></script>';
        }elseif ($this->session->userdata('level') == '1') {
            echo '<script src="/../assets/js/owner.js"></script>';
        }
    ?>

</body>

</html>
