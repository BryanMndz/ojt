<?php
    require ('includes/header.php');

    if (isset($_GET["id"])){
        $id = $_GET["id"];

        $sql = "DELETE FROM recodata WHERE record_ID = $id";
        $con->query($sql);
    }

    echo "
        <script> 
        alert('Record Deleted !!!');
        window.location.replace('index.php');
        </script>
    "
?>