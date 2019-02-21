<html>
	<head>
	<style>td,tr{border: 1px solid black;}</style>
	</head>
<body>
	<table>
		<tr><td>Nome prodotto</td></tr>
<?php
$categoria=$_POST['categoria'];
$conn=mysqli_connect("192.168.103.110","utenteweb","prova","AccentureDB") or die("Connessione al database non riuscita");
$query="SELECT nome FROM Prodotti,Categoria WHERE Prodotti.ID_Categoria='$categoria' AND Prodotti.ID_Categoria=Categoria.ID_Categoria";
$risul=mysqli_query($conn,$query) or die("Query non riuscita");
while($riga=mysqli_fetch_array($risul))
	echo("<tr><td>$riga[0]</td></tr>");

mysqli_close($conn);
?>
</table>
</body>
</html>
