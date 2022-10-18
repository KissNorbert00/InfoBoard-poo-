<?php
    include('./../conn/dbconnect.php');

    $delet = $_POST['delet'];
    $url = "./../index.php";

    $query = "DELETE FROM message WHERE id = '".$delet."'";

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