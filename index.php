<?php 
  $url = 'one/normal';
  if (isset($_GET['url'])) {
    $url = $_GET['url'];
  }
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Web Traffic Visualization</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">

    <script src="vizceral/dist/vizceral.js"></script>
    <script>
      function run () {
        var viz = new Vizceral.default(document.getElementById('vizceral'));
        viz.updateData(

          <?php 

              $curl = curl_init();

              curl_setopt_array($curl, array(
                  CURLOPT_RETURNTRANSFER => 1,
                  CURLOPT_URL => "http://webtraffic.nrupeshpatel.com/api/v1/node/".$url
              ));

              $resp = curl_exec($curl);
              curl_close($curl);
              echo $resp;

          ?>
          );
        viz.setView();
        viz.animate();
      }
    </script>
  </head>

  <body class="nav-md" onload="run()">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-eye"></i> <span>Visualization!</span></a>
            </div>

            <div class="clearfix"></div>

           

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-cube"></i> 1 Data Center <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?url=one/normal">Normal Traffic</a></li>
                      <li><a href="index.php?url=one/warning">Warning Traffic</a></li>
                      <li><a href="index.php?url=one/danger">Danger Traffic</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-cube"></i><i class="fa fa-cube"></i> 2 Data Center <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?url=two/normal">Normal Traffic</a></li>
                      <li><a href="index.php?url=two/warning">Warning Traffic</a></li>
                      <li><a href="index.php?url=two/danger">Danger Traffic</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-cube"></i><i class="fa fa-cube"></i><i class="fa fa-cube"></i> 3 Data Center <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?url=three/normal">Normal Traffic</a></li>
                      <li><a href="index.php?url=three/warning">Warning Traffic</a></li>
                      <li><a href="index.php?url=three/danger">Danger Traffic</a></li>
                    </ul>
                  </li>
                  </ul>
                  </div>

            </div>
            <!-- /sidebar menu -->

            
          </div>
        </div>

        

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

                <canvas id='vizceral'></canvas>

          </div>
        </div>
        <!-- /page content -->

      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    
    <!-- bootstrap-wysiwyg -->
    <script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="vendors/google-code-prettify/src/prettify.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

  
   
  </body>
</html>
