<?php 

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    exit ('Greška');
    return;
}
function isEmpty($input){
    if(!isset($input) || empty($input) || is_null($input)){
        return true;
    }
    return false;
}

if(isEmpty($_POST['fullName'] || isEmpty($_POST['email'])) || isEmpty($_POST['phoneNumber'])){
    echo 'Morate popuniti sva polja! <br>';
}

function checkFullName(){
    if ((strlen($_POST['fullName'] > 50))){
        exit('Ime i prezime mora imati manje od 50 karaktera! <br>'); 
    }
    else if ((strpos($_POST['fullName'], " ")) == null){
        exit ('Ime i prezime mora imati razmak! <br>');
    }
    else {
        echo 'Uspjesno unijeto ime i prezime! <br>';
    }
}

function checkEmail (){
    if (!(strpos($_POST['email'], "@"))){
        exit('Email mora da sadrzi @ ! <br>') ; 

    }
    else if (!(strpos($_POST['email'], ".com"))){
        exit('Email mora da sadrzi .com <br>') ;
    }
    else {
        echo 'Uspjesno unijeta email adresa! <br>';
    }
}

function checkPhoneNum(){
    if(!preg_match('#^[0-9 +-/]*$#', $_POST['phoneNumber'])){
        exit('Broj telefona moze imati samo brojeve i +, -, / specijalne karaktere! <br>') ;
    }
    else if ( strlen($_POST['phoneNumber']) < 3){
        exit('Broj telefona mora imati vise od 3 karaktera! <br>');
    }
    else {
        echo 'Uspjesno unijet broj telefona! <br>';
    }

}

function checkImg(){
    $imageExtension = strtolower(pathinfo("images/" . basename($_FILES['image']['name']), PATHINFO_EXTENSION));

    if($_FILES['image']['size'] > 5000000){
        exit ('Slika mora biti manja od 5MB!<br>');
    }
    else if($imageExtension != 'jpg' && $imageExtension != 'svg' && $imageExtension != 'png'){
        exit ('Slika mora biti formata jpg, svg, png!<br>');
    }
    else {
        move_uploaded_file($_FILES["image"]["tmp_name"], "images/" . $_FILES["image"]["name"]);
        echo 'Slika je uspjesno unijeta!<br>';
    }
}

checkFullName();
checkEmail();
checkPhoneNum();
checkImg();

echo 'VALIDACIJA JE USPJESNA!';




