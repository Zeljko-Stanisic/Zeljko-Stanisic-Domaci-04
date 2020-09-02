
<?php
    include './connect.php';
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
     <h3 class=" text-center mt-5">Dodaj podnosioca </h3>
    
    <form action="./dodaj_podnosioca_back.php" method="POST" class="w-50 p-3 mx-auto">
        
        <div class="form-group">
          <label for="ime_input">Ime</label>
          <input type="text" name="ime" class="form-control" placeholder="" id="ime">
        </div>
        <div class="form-group ">
          <label for="prezime_input">Prezime</label>
          <input type="text" name="prezime" class="form-control" placeholder="" id="prezime">
        </div>
        <div class="form-group ">
          <label for="jmbg_input">JMBG</label>
          <input type="number" name="jmbg" class="form-control" placeholder="" id="jmbg">
        </div>
        <div class="form-group">
                <label for="grad_select">Grad</label>
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
                </select>
        </div>
        <button type="sumbit" name="submit" class="btn btn-success btn-block mt-5">Dodaj podnosioca</button>



    </form>

    
    


    
    











<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>