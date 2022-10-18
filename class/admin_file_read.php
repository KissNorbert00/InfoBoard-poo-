<?php

function Message_read($conn){

    $output = "";
    $query = "SELECT id, nnum, ssubject, mmessage FROM message ORDER BY nnum";
    
    $result = $conn->query($query);
    
    if($result->num_rows > 0){
        
        while($row = $result->fetch_assoc()){


            $output .= "<tr>";
            $output .= "<td class='slide_text'>" .$row['nnum']. "</td>";
            $output .= "<td class='slide_text'>" .$row['ssubject']. "</td>";
            $output .= "<td class='slide_text'>" .$row['mmessage']. "</td>";
            $output .= "<td><button class='button2' type='submit' name='delet' value='" .$row['id']. "'/>Törlés</td>";
            $output .= "</tr>";

        }
    }

    return $output;
}

function Parameter_read($conn){

    $output = "";
    
    $query = "SELECT screen, location, (show1/1000) AS show1, (show2/1000) AS show2, alarm FROM setting ORDER BY screen";
    
    $result = $conn->query($query);
    
    if($result->num_rows > 0){
        
        while($row = $result->fetch_assoc()){


            $output .= "<tr>";
            $output .= "<td class='slide_text'>" .$row['location']. "</td>";
            $output .= "<td class='slide_text'>" .$row['show1']. "</td>";
            $output .= "<td class='slide_text'>" .$row['show2']. "</td>";
            $output .= "<td class='slide_text'>" .$row['alarm']. "</td>";
            $output .= "<td><button class='button2' type='submit' name='Alarmdelet' value='" .$row['screen']. "'/>Törlés</td>";
            $output .= "</tr>";

        }
    }

    return $output;
}

?>