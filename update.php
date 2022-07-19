<?php
    require ('includes/header.php');

    $id = "";
    $temp ="";
    $humid="";
    $waterlvl="";
    $phlvl="";

    $errorMessage="";
    $successMessage="";

    if($_SERVER['REQUEST_METHOD']=='GET'){

        if(!isset($_GET["id"])){
            header("location: index.php");
            die();
        }

        $id = $_GET["id"];

        $sql = " SELECT * FROM recodata WHERE record_ID = $id ";
        $result = prepareSQL($con, $sql);
        $row = mysqli_fetch_array($result);
        
        $temp           = $row['temperature'];
        $humid          = $row['humidity'];
        $waterlvl       = $row['waterlvl'];
        $phlvl          = $row['phlvl'];
    

    }

    else{

        $id             = $_POST["dataid"];
        $temp           = $_POST['datatemp'];
        $humid          = $_POST['datahumidity'];
        $waterlvl       = $_POST['datawaterlevel'];
        $phlvl          = $_POST['dataphlevel'];

        $sql = "UPDATE recodata SET temperature = $temp, humidity = $humid, waterlvl = $waterlvl, phlvl = $phlvl  WHERE record_ID = $id";
        prepareSQL($con, $sql);
        echo $sql;
       
    }

?>
<body>
    <form method="POST">
        <input type = "hidden" name="dataid" value="<?php echo $id; ?>">
        <div class = "container_insertdata">

            <div class = "inputbox">

                <div class = col_1>
                    <span class = "data">Temperature</span>
                </div>

                <div class = col_2>
                    <input type = "number" class = box id = "datatemp" name = "datatemp" placeholder = "Enter Teperature °C" value="<?php echo $temp; ?>">
                </div>

            </div>

            <div class = "inputbox">

                <div class = col_1>
                    <span class = "data">Humidity</span>
                </div>

                <div class = col_2>
                    <input type = "number" class = box id = "datahumidity" name = "datahumidity" placeholder = "Enter Humidity" value="<?php echo $humid; ?>">
                </div>

            </div>

            <div class = "inputbox">

                <div class = col_1>
                    <span class = "data">Water Level</span>
                </div>

                <div class = col_2>
                    <input type = "number" class = box id = "datawaterlevel" name = "datawaterlevel" placeholder = "Enter Water Level" value="<?php echo $waterlvl; ?>">
                </div>

            </div>

            <div class = "inputbox">
                <div class = col_1>
                    <span class = "data">PH Level</span>
                </div>

                <div class = col_2>
                    <input type = "number" class = box id = "dataphlevel" name = "dataphlevel" placeholder = "Enter PH Level" value="<?php echo $phlvl; ?>">
                </div>
            </div>

                <input type="submit" id = "Submitdata" name ="Submitdata" value="Update">

        </div>
    </form>

</body>




