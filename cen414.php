<?php 


$connection = mysqli_connect('localhost', 'root', '', 'stat');

if (isset($_POST['submit'])) {
    $state = $_POST['states'];

    $query = "SELECT male, female, total FROM statistics WHERE states = '".$stat."'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed' . mysqli_error());
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CEN 414 DATABASE ASSIGNMENT </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
</head>

<body>
    <
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Select state in Nigeria: </h2>
            </div>
        </div>
        <div class="row">
                <form class="form form-group" action="cen414.php" method="post">
                <select class="form-control-sm" name="states" id="#select">
                    <option value="">Select State</option>
                    <option value="Abia">ABIA</option>
                    <option value="Adamawa">ADAMAWA</option>
                    <option value="Akwa Ibom">AKWA IBOM</option>
                    <option value="Anambra">ANAMBRA</option>
                    <option value="Bauchi">BAUCHI</option>
                    <option value="Bayelsa">BAYELSA</option>
                    <option value="Benue">BENUE</option>
                    <option value="Borno">BORNO</option>
                    <option value="Cross River">CROSS RIVER</option>
                    <option value="Delta">DELTA</option>
                    <option value="Ebonyi">EBONYI</option>
                    <option value="Edo">EDO</option>
                    <option value="Ekiti">EKITI</option>
                    <option value="Enugu">ENUGU</option>
                    <option value="Gombe">GOMBE</option>
                    <option value="Imo">IMO</option>
                    <option value="Jigawa">JIGAWA</option>
                    <option value="Kaduna">KADUNA</option>
                    <option value="Kano">KANO</option>
                    <option value="Katsina">KATSINA</option>
                    <option value="Kebbi">KEBBI</option>
                    <option value="Kogi">KOGI</option>
                    <option value="Kwara">KWARA</option>
                    <option value="Lagos">LAGOS</option>
                    <option value="Nasarawa">NASARAWA</option>
                    <option value="Niger">NIGER</option>
                    <option value="Ogun">OGUN</option>
                    <option value="Ondo">ONDO</option>
                    <option value="Osun">OSUN</option>
                    <option value="Oyo">OYO</option>
                    <option value="Plateau">PLATEAU</option>
                    <option value="Rivers">RIVERS</option>
                    <option value="Sokoto">SOKOTO</option>
                    <option value="Taraba">TARABA</option>
                    <option value="Yobe">YOBE</option>
                    <option value="Zamfara">ZAMFARA</option>
                    <option value="Abuja">FCT, ABUJA</option>
                    
                </select>
                <div class="form-group" style="Padding-top: 10px;">
                    <input class="btn btn-primary" type="submit" name="submit" value="CHECK">
                </div>
                
            </form>
        </div>

        <br>
    
    
    <h4>
    <?php
        if (isset($_POST['submit'])) {
            while ($row = mysqli_fetch_assoc($result)) {

                echo $state ."<br>" ."<hr>";

                echo "Male Population: " .$row["male"] ." persons" ."<br>";
                echo "Female Population: " .$row["female"] ." persons" ."<br>";
                echo "Total Population: " .$row["total"] ." persons" ."<br>";

            }
        }
            
        
    ?>

    </h4>
   </div>
</body>
</html>