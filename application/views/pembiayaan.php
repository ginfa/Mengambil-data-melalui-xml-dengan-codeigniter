<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Data User BMT Muhajirin</title>

<!-- Bootstrap -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">


<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

<meta name="viewport" content="width=d evice-width, initial-scale=1">
<meta h ttp-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url()?>assets/frontend/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url()?>assets/frontend/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url()?>assets/frontend/css/lines.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url()?>assets/frontend/css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="<?php echo base_url()?>assets/frontend/js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->
<!-- Nav CSS -->
<link href="<?php echo base_url()?>assets/frontend/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url()?>assets/frontend/js/metisMenu.min.js"></script>
<script src="<?php echo base_url()?>assets/frontend/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="<?php echo base_url()?>assets/frontend/js/d3.v3.js"></script>
<script src="<?php echo base_url()?>assets/frontend/js/rickshaw.js"></script>
    <title>Data User BMT Muhajirin</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
  </head>
  <body>
<div class="row">
    <div class="col-md-12">
        <div id="content">

            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">BMT Muhajirin</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url();?>COXml/indexx">Data User</a></li>
                        <li><a href="<?php echo base_url();?>COXml/ahliwaris">Data Ahli Waris</a></li>
                        <li><a href="<?php echo base_url();?>COXml/penghasilan">Data Penghasilan</a></li>
                        <li><a href="<?php echo base_url();?>COXml/pembiayaan">Data Pembiayaan</a></li>
                    </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <div class="clearfix"></div>
            <center>
            <h1>BMT Muhajirin</h1>
            <table class="table table-striped" align="center">
                <tr id="thead">
                    <td>Id pembiayaan</td>
                    <td>Id pegawai</td>
                    <td>No rekening</td>
                    <td>Jumlah permohonan pembiayaan</td>
                    <td>Digunakan untuk</td>
                    <td>Jangka waktu</td>
                    <td>Sumber pelunasan</td>
                    <td>Rencana pembayaran per</td>
                    <td>Angsuran pokok</td>
                    <td>Margin</td>
                    <td>Jaminan</td>
                  </tr>
                <?php $id_pembiayaan = 1; foreach($bmt->pembiayaan as $value) { ?>
                <tr>
                    <td><?php echo $id_pembiayaan++; ?></td>
                    <td><?php echo $value->id_pegawai; ?></td>
                    <td><?php echo $value->no_rekening; ?></td>
                    <td><?php echo $value->jumlah_permohonan_pembiayaan; ?></td>
                    <td><?php echo $value->digunakan_untuk; ?></td>
                    <td><?php echo $value->jangka_waktu; ?></td>
                    <td><?php echo $value->sumber_pelunasan; ?></td>
                    <td><?php echo $value->rencana_pembayaran_per; ?></td>
                    <td><?php echo $value->angsuran_pokok; ?></td>
                    <td><?php echo $value->margin; ?></td>
                    <td><?php echo $value->jaminan; ?></td>
                </tr>
                <?php } ?>
            </table>
            </center>
        </div>
    </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
