<?php
    include('./../conn/dbconnect.php');


    $bords = $_POST['bords'];
    $st1 = $_POST['st1'];
    $st2 = $_POST['st2'];
    $al = $_POST['al'];
    $url = "./../index.php";

    if ($al==""){
        $query = "UPDATE setting SET show1='".$st1."'*1000, show2='".$st2."'*1000 WHERE screen='".$bords."'";
    }else{
        $query = "UPDATE setting SET show1='".$st1."'*1000, show2='".$st2."'*1000, alarm=UPPER('".$al."') WHERE screen='".$bords."'";
    }

    $result = $conn->query($query);

    if($result==true){
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
    }else
    {
        echo "Sajnos nem sikerűlt a modosítás!";
        echo "<a href='admin.php'>Vissza az admin oldalra.</a>";
    }

    $conn->close();
?>