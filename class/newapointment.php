<?php
    include('./../conn/dbconnect.php');

    $w = $_POST['w'];
    $bn = $_POST['bn'];
    $sb = $_POST['sb'];
    $me = $_POST['me'];
    $url = "./../index.php";

    $query = "INSERT INTO message(nnum, ssubject, mmessage) VALUES ('".$bn."','".$sb."','".$me."')";

    $result = $conn->query($query);

    if($result==true){
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
    }else
    {
        echo "Sajnos nem sikerűlt a rögzítés!";
        echo "<a href='./../index.php'>Vissza az admin oldalra.</a>";
    }


    $conn->close();
?>