<?php

    function Message_read($w, $conn){

    $output = "";
    $query = "SELECT ssubject, mmessage FROM message ORDER BY nnum";
    
    $result = $conn->query($query);
    
    if($result->num_rows > 0){
        
        while($row = $result->fetch_assoc()){

            /*
            $output .= "<div id='anim' class='day'>";
            $output .= "<h3>" .$row['ssubject']. "</h3>";
            $output .= "<h4>" .$row['mmessage']. "</h4>";
            $output .= "</div>";
            */

            $output .= "<div id='anim' class='day'>";
            $output .= "<h3>" .$row['ssubject']. "</h3>";

            $message = $row['mmessage'];
            $mess = str_replace("#", "<br>", $message);
            $output .= "<h4>" .$mess. "</h4>";
            
            $output .= "</div>";



        }
    }else
    {
        //$output .= "<div class='day'>";
        //$output .= "<h3>Connect faild</h3>";
        //$output .= "</div>";
    }
    
    return $output;
    }

?>