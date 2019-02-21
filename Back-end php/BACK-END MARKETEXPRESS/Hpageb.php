<html>
	<head>
	<style>td,tr{border: 1px solid black;}</style>
	</head>
<body>
	<table>
<?php
$categoria=$_POST[''];
$conn=mysqli_connect("192.168.103.110","utenteweb","prova","AccentureDB") or die("Connessione al database non riuscita");
$query="SELECT nome,prezzo FROM Prodotti,Categorie WHERE categoria='$categoria' ";
$risul=mysqli_query($conn,$query) or die("Query non corretta");
?>
</body>
</html>

