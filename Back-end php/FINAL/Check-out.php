<?php include 'functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home | Market Express</title>
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
    <style>
        .a{
            border: solid grey 1px;
            padding: 30px;
            margin: 5px;
        }
     
        
        .list{
            float: right;
        }
        .green{
            color: green;
        }
        .red{
            color: red;
        }
        .container{
            padding: 80px 0px;
           
        }
    </style>
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
        <li><a href="index.html">HOME</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
          <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
    
<div class="container">
    <center>
    <h1>Check-Out</h1>
        </center>
    <hr>
    <div class="col-md-4">
        <div class="a">
     <h1>Conad</h1>
        <hr>
 <div class="list" >
        <a href="#list1"  data-toggle="collapse">+</a>
        </div> 
  <br>
  <div id="list1" class="collapse">
      <?php $temp=view_list(1);?>
      <h5><i class="glyphicon glyphicon-remove-circle red"></i> AaBbCc <div class="list"><?php echo $a=4.99 ?>€</div></h5> 
      <h5><i class="glyphicon glyphicon-ok-circle green"></i> AaBbCc <div class="list"><?php echo $b=2.50 ?>€</div></h5> 
      <h5><i class="glyphicon glyphicon-ok-circle green"></i> AaBbCc <div class="list"><?php echo $c=12.49 ?>€</div></h5> 
      <h5><i class="glyphicon glyphicon-ok-circle green"></i> AaBbCc <div class="list"><?php echo $d=7.80 ?>€</div> </h5> 
      <h5><i class="glyphicon glyphicon-ok-circle green"></i> AaBbCc <div class="list"><?php echo $e=3.25 ?>€</div> </h5> 
      </div>
        <h2>Totale: <?php echo $tot=$a+$b+$c+$d+$e."€" ?></h2>
    </div>
    </div>
        <div class="col-md-4">
        <div class="a"  style="border: solid 2px green ">
     <h1>Lidl</h1>
        <hr>
 <div class="list" >
        <a href="#list2"  data-toggle="collapse">+</a>
        </div> 
  <br>
  <div id="list2" class="collapse">
      <h5><i class="glyphicon glyphicon-ok-circle green"></i> AaBbCc <div class="list"><?php echo $a=4.20 ?>€</div></h5> 
      <h5><i class="glyphicon glyphicon-ok-circle green"></i> AaBbCc <div class="list"><?php echo $b=2.70 ?>€</div></h5> 
      <h5><i class="glyphicon glyphicon-ok-circle green"></i> AaBbCc <div class="list"><?php echo $c=11.00 ?>€</div></h5> 
      <h5><i class="glyphicon glyphicon-ok-circle green"></i> AaBbCc <div class="list"><?php echo $d=7.85 ?>€</div> </h5> 
      <h5><i class="glyphicon glyphicon-ok-circle green"></i> AaBbCc <div class="list"><?php echo $e=2.99 ?>€</div> </h5> 
      </div>
        <h2>Totale: <?php echo $tot=$a+$b+$c+$d+$e."€" ?></h2>
    </div>
    </div>
       <div class="col-md-4">
        <div class="a">
     <h1>EuroSpin</h1>
        <hr>
 <div class="list" >
        <a href="#list3"  data-toggle="collapse">+</a>
        </div> 
  <br>
  <div id="list3" class="collapse">
      <h5><i class="glyphicon glyphicon-ok-circle green"></i> AaBbCc <div class="list"><?php echo $a=3.49 ?>€</div></h5> 
      <h5><i class="glyphicon glyphicon-remove-circle red"></i> AaBbCc <div class="list"><?php echo $b=1.99 ?>€</div></h5> 
      <h5><i class="glyphicon glyphicon-ok-circle green"></i> AaBbCc <div class="list"><?php echo $c=10.35 ?>€</div></h5> 
      <h5><i class="glyphicon glyphicon-remove-circle red"></i> AaBbCc <div class="list"><?php echo $d=6.65 ?>€</div> </h5> 
      <h5><i class="glyphicon glyphicon-ok-circle green"></i> AaBbCc <div class="list"><?php echo $e=2.79 ?>€</div> </h5> 
      </div>
        <h2>Totale: <?php echo $tot=$a+$b+$c+$d+$e."€" ?></h2>
    </div>
    </div>
</div>

</body>
</html>
