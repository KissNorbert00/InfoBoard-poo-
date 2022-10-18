<?php
    include('./../conn/dbconnect.php');

    $alarmdelet = $_POST['Alarmdelet'];
    $url = "./../index.php";

    $query = "UPDATE setting SET alarm='' WHERE screen='".$alarmdelet."'";

    $result = $conn->query($query);

    if($result==true){
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
    }else
    {
        echo "Sajnos nem sikerűlt a rögzítés!";
        echo "<a href='admin.php'>Vissza az admin oldalra.</a>";
    }

    $conn->close();
?>