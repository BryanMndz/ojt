<?php
    require 'includes/header.php';
?>



<body>
    <div class = "container_record">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Teperature °C</th>
                    <th>Humidity</th>
                    <th>Water Level</th>
                    <th>PH Level</th>
                    <th>Action</th>
                
                </tr>
            </thead>

            <tbody>

                <?php
                $sql = "SELECT * FROM `recodata` ";
                $result = $con->query($sql);

                if(!$result){
                    die("Invalid query: " . $con->error);
                }
                
                while($row = $result-> fetch_assoc()){
                    echo 
                        "<tr>
                            <td>$row[record_ID] </td>
                            <td>$row[temperature] </td>
                            <td>$row[humidity]</td>
                            <td>$row[waterlvl]</td>
                            <td>$row[phlvl]</td>
                            <td>
                                <a href = 'update.php?id=$row[record_ID]'> Update </a>
                                <a href = 'delete.php?id=$row[record_ID]'> Delete </a>
                            </td>
                        </tr>";
                }

                ?>
            
            </tbody>
        </table>

    </div>



</body>