<?php
include './connect.php';
if($_SERVER['REQUEST_METHOD'] == "GET"){
    if( isset($_GET['id']) && is_numeric($_GET['id']) ){
        $id = $_GET['id'];
        $select_putanja = "SELECT slika_putanja from primjedba where ID = $id";
        $putanja_sika = mysqli_query($dbconn, $select_putanja);
        $putanja_slika = mysqli_fetch_assoc($putanja);
        $putanja_slika = $putanja["slika_putanja"];
        $sql = "DELETE from primjedba where id = $id";
        $res = mysqli_query($dbconn, $sql);
        if($res){
            unlink($putanja_slika);
            header("location: ./index.php");
            exit();
        }
        exit("Greska u upitu!");
    }
    exit("Morate odabrati prijavu za brisanje!");
}
exit("Pogresan metod!");
?>