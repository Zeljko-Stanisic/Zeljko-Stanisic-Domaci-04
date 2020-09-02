<?php
include './connect.php';
$sql = "
            SELECT  
                p.ID as id,
                p.Ime as ime,
                p.Prezime as prezime,
                p.JMBG as jmbg,
                g.Naziv as grad
            FROM podnosilac as p 
            JOIN grad as g
            ON p.grad_id = g.id";
$res = mysqli_query($dbconn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css" />

    <title>Primjedbe</title>
</head>
<body>


<div class="container">
        <h3 class="display-4 text-center mb-5">Tabela podnosilaca</h3>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Grad</th>
                        <th>JMBG</th>
                        <th>Izmjena</th>
                        <th>Brisanje</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($res)) {
                        $id = $row['id'];
                        $ime = $row['ime'];
                        $prezime = $row['prezime'];
                        $jmbg = $row['jmbg'];
                        $grad = $row['grad'];
                        $izmjena = "<a href=\"./izmjena_pod.php?id=$id\"><i class=\"fa fa-edit fa-2x pl-3\"></i></a>";
                        $brisanje = "<a href=\"./brisanje_pod.php?id=$id\"><i class=\"fa fa-trash-o fa-2x pl-3\"></i></a>";
                        echo "<tr><td>" . $ime . "</td><td>" . $prezime . "</td><td>" . $grad . "</td><td>" . $jmbg . "</td><td>" . $izmjena . "</td><td>" . $brisanje . "</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    













<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>