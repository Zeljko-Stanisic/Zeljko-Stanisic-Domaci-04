<?php

include './connect.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['grad_id']) && is_numeric($_POST['grad_id'])) {
        $grad_id = $_POST['grad_id'];
    } else {
        exit("Molimo Vas da odaberete grad!");
    }
    if (isset($_POST['podnosilac_id']) && is_numeric($_POST['podnosilac_id'])) {
        $podnosilac_id = $_POST['podnosilac_id'];
    } else {
        exit("Molimo Vas odaberite podnosioca!");
    }
    if (isset($_POST['text']) && $_POST['text'] != "") {
        $text = $_POST['text'];
    } else {
        exit("Molimo Vas unesite opis prijave!");
    }
    if (isset($_FILES['slika_id'])) {
        $slika_id = $_FILES['slika_id'];
        $slika_tip = $slika_id['type'];
        $slika_tip = explode("/", $slika_tip);
        if($slika_tip[0] == "image"){
            $slika_name = uniqid();
            $type = $slika_id['name'];
            $type = explode(".", $type);
            $slika_name = $slika_name . '.' . $type[1];
            $slika_putanja = "./images/$slika_name";
            move_uploaded_file($slika_id['tmp_name'], $slika_putanja);
        }else{
                exit("Nije unijeta slika");
            }
    } else {
        exit("Molimo Vas unesite sliku!");
    }

    $sql = "INSERT INTO primjedba (Opis, slika_putanja, grad_id, podnosilac_id) VALUES ('$text','$slika_putanja', $grad_id, $podnosilac_id)";
    
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