<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LabtiTUBE - Your's Channel</title>

  <!-- Bootstrap Core CSS -->
  <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="<?php echo base_url();?>css/scrolling-nav.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand page-scroll" href="<?php echo base_url();?>index.php/">LabtiTUBE</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden">
            <a class="page-scroll" href="#page-top"></a>
          </li>
          <li>
            <a class="page-scroll" href="#about">Upload</a>
          </li>
          <li>
            <a class="page-scroll" href="#services">Likes</a>
          </li>
          <li>
            <a class="page-scroll" href="#contact">Developer Message</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <!-- Intro Section -->
  <section id="intro" class="intro-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1><?php echo $unameku;?>'s Channell</h1>
          <p><strong>Usage Instructions:</strong> Make sure to include the <code>scrolling-nav.js</code>, <code>jquery.easing.min.js</code>, and <code>scrolling-nav.css</code> files. To make a link smooth scroll to another section on the page, give the link
            the <code>.page-scroll</code> class and set the link target to a corresponding ID on the page.</p>
          <a class="btn btn-default page-scroll" href="#about">Click Me to Scroll Down!</a>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="about-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">

        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <h1>Upload Your Tutorial here ...</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-primary">
            <div class="panel-heading">Isi data dengan benar </div>
            <div class="panel-body">
              <form class="form-group" action="<?php echo base_url();?>index.php/welcome/upload" method="post" enctype="multipart/form-data">

                <input type="text" name="judulvideo" placeholder="Judul Video">

                <input type="text" name="keterangan" placeholder="Keterangan">

                <!-- <input type="text" name="kategori" placeholder="Kategori"> -->
                <select class="select" name="kategori">

                  <option>JAVA</option>
                  <option>C</option>
                  <option>C++</option>
                  <option>ANDROID</option>
                  <option>COBOL</option>
                  <option>FORTRAN</option>
                  <option>BASIC</option>
                  <option>PHP</option>
                  <option>JAVASCRIPT</option>
                  <option>PHP</option>
                  <option>ANGULARJS</option>
                  <option>METEORJS</option>





                </select>

                <input type="file" name="userfile">

                <input type="submit" value="Upload" class="btn btn-primary">

              </form>
              <table class="table">
                <thead class="panel panel-success success">
                  <td>
                    ID VIDEOS
                  </td>
                  <td>
                    JUDUL VIDEO
                  </td>
                  <td>
                    KETERANGAN
                  </td>
                  <td>
                    FILENAME
                  </td>
                  <td>
                    CRUD OPERATION
                  </td>

                </thead>
                <tr>

                  <?php foreach ($tampilData as  $value) {

                        ?>

                    <td>
                      <?php echo $value->id_karya;?>
                    </td>
                    <td>
                      <?php echo $value->judul_video;?>
                    </td>
                    <td>
                      <?php echo $value->keterangan;?>
                    </td>
                    <td>
                      <?php echo $value->filename;?>
                    </td>
                    <td>
                      <a href="<?php echo base_url();?>index.php/welcome/edit/<?php echo $value->id_karya; ?>"><span class=" warning glyphicon glyphicon-pencil"></span></a>
                      <a href="<?php echo base_url();?>index.php/welcome/hapusVideo/<?php echo $value->id_karya; ?>"><span class="warning  glyphicon glyphicon-remove"></span></a>
                      <a href="#"><span class="warning  glyphicon glyphicon-star"></span></a>

                    </td>

                </tr>
                <?php

              }?>

              </table>

            </div>
          </div>

        </div>
      </div>

      <div class="row">
        <span><h1>TITLE</h1></span>
        <video width="600px" height="400px" src="<?php echo base_url();?>videos/<?php echo $value->filename;?>" controls </video>


          <div class="col-lg-12">
            <div class="panel panel-success">
              <div class="panel-heading">Your Videos @2016</div>
              <div class="panel-body">


              </div>
            </div>

          </div>
      </div>




    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="services-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1>Services Section</h1>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1>Contact Section</h1>
        </div>
      </div>
    </div>
  </section>

  <!-- jQuery -->
  <script src="<?php echo base_url();?>js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

  <!-- Scrolling Nav JavaScript -->
  <script src="<?php echo base_url();?>js/jquery.easing.min.js"></script>
  <script src="<?php echo base_url();?>js/scrolling-nav.js"></script>

</body>

</html>
