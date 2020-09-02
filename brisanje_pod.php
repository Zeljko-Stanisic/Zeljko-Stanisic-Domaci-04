<?php
 include './connect.php';

 if($_SERVER['REQUEST_METHOD'] == "GET"){
     if(isset($_GET['id']) && is_numeric($_GET['id'])){
         $id = $_GET['id'];
         $sql = "DELETE from podnosilac where id = $id";
         $res = mysqli_query($dbconn, $sql);
         if($res){
             header("location: ./tabela_pod.php");
             exit();
         }
         exit("Greska!");
     }
     exit("Izaberite podnosioca za brisanje!");
 }
 exit("Pogresan metod!");
?>

