<html>
<body>
	<form action="pagina2.php" method="POST">
<?php
$conn=mysqli_connect("192.168.103.110","utenteweb","prova","AccentureDB") or die("Connessione al db non riuscita");
$query="SELECT ID_Categoria,Nome FROM Categorie";
$risul=mysqli_query($conn,$query) or die("Query non riuscita");
echo("<select name=\"categoria\">");
while($riga=mysqli_fetch_array($risul))
	echo("<option value=\"$riga[0]\">$riga[1]</option>");
	
	
?>
</select>
<input type="submit" value="Invia"/>
</form>

</body>
</html>
