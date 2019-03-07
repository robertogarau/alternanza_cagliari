<?php
function categoria($categoria){
    $connection=mysqli_connect("192.168.64.2","piero","password","mydb") or die("Connessione non riuscita!");
    $query="SELECT * FROM Prodotti WHERE Categorie_Nome='$categoria'";
    $result=mysqli_query($connection,$query)or die("Query non riuscita!");
    mysqli_close($connection);
    return $result;
}
?>