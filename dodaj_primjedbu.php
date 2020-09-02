<?php

include "./connect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Dodaj primjedbu</title>
</head>
<body>
     <h3 class=" text-center mt-5">Dodaj primjedbu </h3>
    
    <form action="./dodaj_primjedbu_back.php" enctype="multipart/form-data" method="POST" class="w-50 p-3 mx-auto">
        
        <div class="form-group">

                <label for="podnosioc_select">Odaberite podnosioca</label>
                <select name="podnosilac_id" class="form-control mt-3" id="podnosilac_select" >
                    <option value="">- odaberite podnosioca -</option>
                <?php
                        $sql = "SELECT * FROM podnosilac";
                        $res = mysqli_query($dbconn, $sql);
                        while ($row_podnosilac = mysqli_fetch_assoc($res)) {
                            $id_temp = $row_podnosilac['id'];
                            $ime_temp = $row_podnosilac['Ime'];
                            $prezime_temp = $row_podnosilac['Prezime'];
                            $grad_temp = $row_podnosilac['grad_id'];
                            echo "<option data-id=\"$grad_temp\" value=\"$id_temp\" >$ime_temp $prezime_temp</option>";
                        }
                ?>
                </select>
                <label for="grad_select" class="mt-3">Grad</label>
                <select name="grad_id" class="form-control" id="grad_select" >
                    <option value="">- odaberite grad -</option>
                <?php
                        $sql = "SELECT * FROM grad";
                        $res = mysqli_query($dbconn, $sql);
                        while ($row_grad = mysqli_fetch_assoc($res)) {
                            $id_temp = $row_grad['ID'];
                            $naziv_temp = $row_grad['Naziv'];
                            echo "<option value=\"$id_temp\" >$naziv_temp</option>";
                        }
                ?>
                <div class="mb-3">
                    <input type="checkbox"  name="grad_id" id="grad">
                    <label for="grad_id">Cekirajte ako je primjedba za Vas grad!</label>
                </div>
                </select>
                <div class="form-group mt-3">
                    <label for="opis_text">Opis primjedbe</label>
                    <textarea class="form-control " name="text" id="text" rows="3"></textarea>
                </div>

                <input type="file" name="slika_id" id="slika">
                
                   
        </div>
        <button type="sumbit" name="submit" class="btn btn-success btn-block mt-5">Dodaj primjedbu</button>



    </form>

    
    
    


    
    




<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script type="text/javascript">

        var grad_id = null;

        function provjeriGrad() {
            $.ajax({
                type: 'GET',
                url: './dodaj_primjedbu.php',
                contentType: "application/json; charset=utf-8",
                success: function(response) {
                    $('#podnosilac-select').change(function() {
                        if ($("#grad").is(':checked')) {
                            grad_name = $("#podnosilac-select").find(':selected').data("id");
                            $('#grad-select').val(grad_name);
                        }
                    })
                    $("#grad").on("click", function() {
                        grad_name = $("#podnosilac-select").find(':selected').data("id");
                        $('#grad-select').val(grad_name);
                    })
                }
            })
        }
        $(document).ready(function() {
            provjeriGrad();
        });
    </script>
</body>
</html>