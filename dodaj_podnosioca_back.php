<?php

include './connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['ime']) && $_POST['ime'] != "") {
        $ime = $_POST['ime'];
    } else {
        exit("Molimo Vas unesite ime podnosioca!");
    }
    if (isset($_POST['prezime']) && $_POST['prezime'] != "") {
        $prezime = $_POST['prezime'];
    } else {
        exit("Molimo Vas unesite prezime podnosioca!");
    }
    if (isset($_POST['jmbg']) && is_numeric($_POST['jmbg'])) {
        $jmbg = $_POST['jmbg'];
    } else {
        exit("Molimo Vas unesite JMBG podnosioca!");
    }
    if (isset($_POST['grad_id']) && is_numeric($_POST['grad_id'])) {
        $grad_id = $_POST['grad_id'];
    } else {
        exit("Molimo Vas odaberite grad!");
    }


    $sql = " INSERT INTO podnosilac  (Ime, Prezime, JMBG, grad_id) VALUES ('$ime','$prezime',$jmbg,$grad_id)";
					
    $res = mysqli_query($dbconn, $sql);

    if ($res) {
        header("location: ./index.php");
        exit();
    } else {
        exit("Greska!");
    }
} else {
    exit("Nedozvoljen metod!");
}