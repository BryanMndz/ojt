<?php
    require ('includes/header.php');
?>
<body>
    <form action="insertdata.php" method="POST" autocomplete = "off">
        <div class = "container_insertdata">

            <div class = "inputbox">

                <div class = col_1>
                    <span class = "data">Temperature</span>
                </div>

                <div class = col_2>
                    <input type = "number" class = box id = "datatemp" name = "datatemp" placeholder = "Enter Teperature °C">
                </div>

            </div>

            <div class = "inputbox">

                <div class = col_1>
                    <span class = "data">Humidity</span>
                </div>

                <div class = col_2>
                    <input type = "number" class = box id = "datahumidity" name = "datahumidity" placeholder = "Enter Humidity">
                </div>

            </div>

            <div class = "inputbox">

                <div class = col_1>
                    <span class = "data">Water Level</span>
                </div>

                <div class = col_2>
                    <input type = "number" class = box id = "datawaterlevel" name = "datawaterlevel" placeholder = "Enter Water Level">
                </div>

            </div>

            <div class = "inputbox">
                <div class = col_1>
                    <span class = "data">PH Level</span>
                </div>

                <div class = col_2>
                    <input type = "number" class = box id = "dataphlevel" name = "dataphlevel" placeholder = "Enter PH Level">
                </div>
            </div>

                <input type="submit" id = "Submitdata" name ="Submitdata" value="Submit">

        </div>
    </form>

</body>

<?php

if(isset($_POST['Submitdata'])){
    $temp           = $_POST['datatemp'];
    $humid          = $_POST['datahumidity'];
    $waterlvl       = $_POST['datawaterlevel'];
    $phlvl          = $_POST['dataphlevel'];

    $sql = "INSERT INTO recodata VALUES (null,? ,? ,?, ?)";
    prepareSQL($con, $sql, "iiii", $temp, $humid, $waterlvl, $phlvl);
    

    echo "<script> 
                alert('Your Data Has Been Updated!!');
                window.location.replace('index.php');
    
            </script>";
}