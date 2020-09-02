<?php

include './connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (isset($_POST['id']) && is_numeric($_POST['id'])) {
		$id = $_POST['id'];
	} else {
		exit("Izaberite ID!");
	}
	if (isset($_POST['ime']) && $_POST['ime'] != "") {
		$ime = $_POST['ime'];
	} else {
		exit("Molimo Vas unesite ime!");
	}
	if (isset($_POST['prezime']) && $_POST['prezime'] != "") {
		$prezime = $_POST['prezime'];
	} else {
		exit("Molimo Vas unesite prezime!");
	}
	if (isset($_POST['jmbg']) && is_numeric($_POST['jmbg'])) {
		$jmbg = $_POST['jmbg'];
	} else {
		exit('Molimo Vas unesite JMBG!');
	}
	if (isset($_POST['grad']) && is_numeric($_POST['grad'])) {
		$grad = $_POST['grad'];
	} else {
		exit("Izaberite grad!");
	}
	$sql = " UPDATE podnosilac
                    SET Ime = '$ime',
                        Prezime = '$prezime',
                        JMBG = $jmbg,
                        grad_id = $grad
                    WHERE ID = '$id' ";
	$res = mysqli_query($dbconn, $sql);
	if ($res) {
		header("location: ./tabela_pod.php");
		exit();
	} else {
		exit("Greska!");
	}
} else {
	exit("Nedozvoljen metod!");
}
?>