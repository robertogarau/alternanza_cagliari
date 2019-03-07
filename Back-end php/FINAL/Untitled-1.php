<?

function bottone(){
    $connection=mysqli_connection("host","usr","psw","db") or die("Connessione non riuscita!");
    $query="SELECT * FROM Prodotti WHERE Categorie_Nome='fruttaeverdura'";
    $result=mysqli_query($connection,$query)or die("Query non riuscita!");
    mysqli_close($connection);
    return $result;
}