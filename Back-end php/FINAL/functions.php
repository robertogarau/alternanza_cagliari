<?php
function categoria($categoria){
    $connection=mysqli_connect("192.168.64.2","piero","password","Supermercato") or die("Connessione non riuscita!");
    $query="SELECT * FROM Prodotti WHERE Categoria='$categoria'";
    $result=mysqli_query($connection,$query)or die("Query non riuscita!");
    mysqli_close($connection);
    return $result;
}
function create_list($id_utente){
    $connection=mysqli_connect("192.168.64.2","piero","password","Supermercato") or die("Connessione non riuscita!");
    $query="INSERT INTO Liste (N_Oggetti,Prezzototale,idUtente) VALUES (0,0,1);";
    $result=mysqli_query($connection,$query)or die("Query non riuscita!");
    mysqli_close($connection);
    exit();
}
function add_to_list($id_lista,$id_prodotto){
    $connection=mysqli_connect("192.168.64.2","piero","password","Supermercato") or die("Connessione non riuscita!");
    $query_1="INSERT INTO ProdottiListe (Quantita,idProdotto,idLista) VALUES (1,$id_prodotto,$id_lista);";
    $result_1=mysqli_query($connection,$query_1)or die("Query non riuscita! (Errore 1-add_to_list)");
    $query_2="UPDATE Liste SET N_oggetti =  N_oggetti + 1 WHERE idLista=$id_lista;";
    $result_2=mysqli_query($connection,$query_2)or die("Query non riuscita! (Errore 2-add_to_list)");
    mysqli_close($connection);
    exit();
}
function remove_from_list($id_lista,$id_prodotto){
    $connection=mysqli_connect("192.168.64.2","piero","password","Supermercato") or die("Connessione non riuscita!");
    $query_1="DELETE FROM ProdottiListe WHERE idProdotto=$id_prodotto";
    $result_1=mysqli_query($connection,$query_1)or die("Query non riuscita! (Errore 1-remove_from_list)");
    $query_2="UPDATE Liste SET N_oggetti =  N_oggetti - 1 WHERE idLista=$id_lista;";
    $result_2=mysqli_query($connection,$query_2)or die("Query non riuscita! (Errore 2-remove_from_list)");
    mysqli_close($connection);
    exit();
}
function view_list($id_lista){
    $connection=mysqli_connect("192.168.64.2","piero","password","Supermercato") or die("Connessione non riuscita!");
    $query="SELECT * FROM ProdottiListe , Prodotti WHERE ProdottiListe.idProdotto=Prodotti.idProdotto AND ProdottiListe.idLista=1;";
    $result=mysqli_query($connection,$query)or die("Query non riuscita!");
    mysqli_close($connection);
    return $result;
}



?>