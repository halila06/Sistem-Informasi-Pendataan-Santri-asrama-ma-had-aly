<?php
 
        $host="localhost";
        $user="root";
        $pass="";
        $database="Pendataan santri";
        $mysqli= new mysqli ($host,$user,$pass,$database);
        //Object Oriented Style $mysqli -> new mysqli(host, username, password, dbname, port, socket)
 
                //check connection
                if ($mysqli -> connect_errno) {
                    trigger_error("Failed to connect to MYSQL: " . $mysqli, E_USER_NOTICE);
                    //trigger_error(message, type)
                }
?>
<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>Data Santri Ma'had Aly</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

    <!-- DATA TABLE CSS -->
    <link href="css/table.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery.js"></script>    
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/admin.js"></script>

    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
        
  	<!-- Google Fonts call. Font Used Open Sans -->
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

  	<!-- DataTables Initialization -->
    <script type="text/javascript" src="js/datatables/jquery.dataTables.js"></script>
  			<script type="text/javascript" charset="utf-8">
  			    $(document).ready(function () {
  			        $('#dt1').dataTable();
  			    });
	</script>

    
  </head>
  <body>
  
  	<!-- NAVIGATION MENU -->

      <!-- CONTENT -->
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<h4><strong>Basic Table</strong></h4>
			  <table class="display">
	          <thead>
	            <tr>
	              <th>Nama</th>
	              <th>tempat</th>
	              <th>tanggal Lahir</th>
	              <th>alamat</th>
	              <th>kamar</th>
	            </tr>
	          </thead>
	          <tbody>
	            <tr class="odd">
	              <td>afifatur Rofi'ah</td>
	              <td>Banyuwangi</td>
	              <td>12 april 2001</td>
	              <td class=>Kalipuro Banyuwangi</td>
	              <td class="center">11</td>
	            </tr>
	            <tr class="even">
	              <td>Halilatul muallafah</td>
	              <td>situbondo</td>
	              <td>28 maret</td>
	              <td class=>asembagus situbondo</td>
	              <td class="center">7</td>
	            </tr>
	            <tr class="odd">
	              <td>Rizkyatul widal</td>
	              <td>bali</td>
	              <td>2 maret 2000</td>
	              <td class=>buleleng bali</td>
	              <td class="center">9</td>
	            </tr>
	            <tr class="even">
	              <td>Hikmatul maulidiyah</td>
	              <td>jember</td>
	              <td>23 mei 1999</td>
	              <td class=>mayang jember</td>
	              <td class="center">8</td>
	            </tr>
	            <tr class="odd">
	              <td>halimatus sya'diyah</td>
	              <td>Bali</td>
	              <td>27 desember 2004</td>
	              <td class=>Denpasar bali</td>
	              <td class="center">5</td>
	            </tr>
	          </tbody>
	         </table><!--/END First Table -->
			 <br>
			 <!--SECOND Table -->


		
	
		</div><!--/span12 -->
      </div><!-- /row -->
     </div> <!-- /container -->
    	<br>	

      	
      	<br>
	<!-- FOOTER -->	
	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12">
      			<p><img src="images/logo.png"" alt=""></p>
      			<p>Blocks Dashboard Theme - Crafted With Love - Copyright 2013</p>
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->		
	</div><!-- /footerwrap -->

</body></html>