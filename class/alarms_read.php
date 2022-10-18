<?php
    
    function Alarm_read($al,$conn){

    
   
    $output = "";
    $query = "SELECT alarm FROM setting WHERE screen = '".$al."'";
    
    $result = $conn->query($query);
    
    if($result->num_rows > 0){
        
        while($row = $result->fetch_assoc()){

            $output .= "<marquee class='scrolling'>" .$row['alarm']. "</marquee>";
        }
    }else
    {
        $output .= "<marquee class='scrolling'></marquee>";
    }
    
        
    return $output;
}

?>