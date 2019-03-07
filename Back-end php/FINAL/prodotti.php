<?php include 'functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Prodotti | Market Express</title>
  <link href="img/shopcart.png" rel="shortcut icon"/> <!--miss shortcut icon titlebar-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="styles.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">MarketExpress</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="" data-toggle="modal" data-target="#AccessModal">ACCEDI</a></li>
          <li><a href="#registration_form">REGISTRATI</a></li>
        <li><a href="#contact">CONTATTACI</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
          <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
    <!-- AccessModal -->
  <div class="modal fade" id="AccessModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-user"></span> ACCEDI</h4>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="e-mail"><span class="glyphicon glyphicon-user"></span> E-Mail</label>
              <input type="text" class="form-control" name="email" placeholder="Inserisci E-mail">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-lock"></span> Password</label>
              <input type="password" class="form-control" name="password" placeholder="Inserisci Password">
            </div>
              <button type="submit" class="btn btn-block">ACCEDI
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
        </div>
      </div>
    </div>
  </div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/pane.jpg" alt="pane">
      </div>

      <div class="item">
        <img src="img/verdura.jpg" alt="verdura">
      </div>
      <div class="item">
        <img src="img/carne.jpg" alt="carne">
    </div>
  </div>
  </div>

    <center><h1>Categorie</h1></center>
<!-- Container (The Products Section) -->
<div id="band" class="container text-center">
  <div class="row">
  <div class="col-sm-3">
      <a href="prodotti.php?cat=Frutta">
        <img src="img/verdure.jpg" class="img-circle person" alt="Categoria" width="255" height="255">
      </a>
      <p>FRUTTA E VERDURA</p>
    </div>
  <div class="col-sm-3">
      <a href="prodotti.php?cat=Snack">
        <img src="img/snack.jpg" class="img-circle person" alt="Categoria"
             width="255" height="255">
      </a>
      <p>SNACK</p>
    </div>
    <div class="col-sm-3">
      <a href="prodotti.php?cat=Bibite">
        <img src="img/Bibite.jpg" class="img-circle person" alt="Categoria" width="255" height="255">
      </a>
        <p>BIBITE</p>
    </div>
  <div class="col-sm-3">
      <a href="prodotti.php?cat=Carni">
        <img src="img/carni.jpg" class="img-circle person" alt="Categoria"
             width="255" height="255">
      </a>
      <p>CARNE</p>
  </div>

  </div>
</div>

<!--PRODOTTI-->
    <center><?php $categoria=$_GET['cat']; echo("<h1>$categoria</h1>"); ?></center>
  <div id="band" class="container text-center">
    <div class="row">
      <?php
        $result=categoria($categoria);
        while($row=mysqli_fetch_array($result))
        {
          echo("$row[0] $row[1] $row[2] $row[3] $row[4] $row[5]");
        }

      ?>

    </div>
  </div>

<!--PRODOTTI-->



</div>
<footer id="contact">
        <div class="container text-center">
                        <a href="https://github.com/robertogarau/alternanza_cagliari" class="social"><i class="fa fa-github"></i></a>
            </div>
</footer>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
        window.location.hash = hash;
      });
  });
})
</script>

</body>
</html>
