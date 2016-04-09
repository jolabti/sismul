<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Horizontal Application Form - Template Monster Demo</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="shortcut icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>css/styles3.css">
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>css/switchery.min.css">
  <script type="text/javascript" src="<?php echo base_url();?>js/switchery.min.js"></script>
</head>

<body>
  <div id="wrapper">

  <h1>UNIVERSITAS GUNADARMA </h1> <br>
  <h1><small>LabtiTUBE</small></h1>


  <form onsubmit="#" method="post" action="<?php echo base_url();?>index.php/welcome/insertUser">
  <div class="col-2">
    <label>
      Username
      <input placeholder="What is your full name?" id="name" name="username" tabindex="1" type="text">
    </label>
  </div>
  <div class="col-2">
    <label>
      Password
      <input placeholder="Where do you currently work?" id="company" name="password" tabindex="2" type="password">
    </label>
  </div>


  <div class="col-12">
    <label>
      Email
      <input placeholder="What is your e-mail address?" id="email" name="email" tabindex="4">
    </label>
  </div>




  <div class="col-submit">
    <button class="submitbtn">Submit Form</button>
  </div>

  </form>
  </div>
<script type="text/javascript">
var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(html) {
  var switchery = new Switchery(html);
});
</script>
</body>
</html>
