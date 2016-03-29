<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LABTI TUBE</title>

  <!-- Bootstrap Core CSS -->
  <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="<?php echo base_url();?>css/simple-sidebar.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a href="#">
                        Labti_Tube
                        <img src="<?php echo base_url();?>gambar/images.jpg" width="45px" height="30px" class="img-rounded" />
                    </a>
        </li>
        <li>
          <a href="#">Dashboard</a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Praktikum</a>

          <ul class="dropdown-menu">
            <li>
              <p>
                Daftar Tingkat
              </p>
            </li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Tingkat 1</li>
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li><a href="#">Something else here</a></li>
            <li><a href="#">Something else here</a></li>

            <li role="separator" class="divider"></li>

            <li class="dropdown-header">Tingkat 2</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
            <li><a href="#">One more separated link</a></li>
            <li><a href="#">One more separated link</a></li>
            <li role="separator" class="divider"></li>

            <li class="dropdown-header">Tingkat 3</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
            <li><a href="#">One more separated link</a></li>
            <li><a href="#">One more separated link</a></li>
            <li role="separator" class="divider"></li>

            <li class="dropdown-header">Tingkat 4</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
            <li><a href="#">One more separated link</a></li>
            <li><a href="#">One more separated link</a></li>
            <li role="separator" class="divider"></li>
          </ul>
        </li>
        <li>
          <a href="#">Overview</a>
        </li>
        <li>
          <a href="#">Events</a>
        </li>
        <li>
          <a href="#">About</a>
        </li>
        <li>
          <a href="#">Services</a>
        </li>
        <li>
          <a href="#">Contact</a>
        </li>
      </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <!-- Fixed navbar -->
            <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a href="#menu-toggle" class="navbar-brand btn btn-default" id="menu-toggle">LabTube</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url();?>index.php/welcome/Yourchannel">Your Channel</a></li>
                    <li>
                      <a href="../navbar-static-top/"></a>
                    </li>
                    <li class="active"><a href="<?php echo base_url();?>index.php/welcome/logout">Sign in as <?php echo $unameku;?> ,Logout <span class="sr-only">(current)</span></a></li>
                  </ul>
                </div>
                <!--/.nav-collapse -->
              </div>
            </nav>
            <h1>LabTube</h1>
            <p>Kumpulan Video Tutorial Praktikum - kunjungi labtitutor.web.id</p>
            <p>Upload to Share, Upload to Improve <code>#UG_Labti connected</code>.
            </p>

          </div>
        </div>
      </div>




      <div class="row">
        <div class="row">
          <div class="col-sm-3 col-md-6 col-lg-8" style="background-color: #cdcdcd;
          box-shadow: inset 1px -1px 1px #444,
          inset -1px 1px 1px #444;">
          <span>Title</span>

            <video src="<?php echo base_url();?>videos/vid2.mp4" autoplay poster="posterimage.jpg" width="600px" height="400px" controls >
              <track kind="subtitles" src="foo.en.vtt" srclang="en" label="English">
            </video>
           </div>
          <div class="col-sm-9 col-md-6 col-lg-4" style="background-color: #dedef8;
box-shadow: inset 1px -1px 1px #444,
inset -1px 1px 1px #444;">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
            </p>
            <p> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
            </p>
          </div>
        </div>








      </div>
      <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>

</body>

</html>
