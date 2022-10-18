<?php

    function playback_read1($st1,$conn){

        $output = "";
        $query = "SELECT show1 FROM setting WHERE screen = '".$st1."'";
        
        $result = $conn->query($query);
        
        if($result->num_rows > 0){
            
            while($row = $result->fetch_assoc()){

                $output .= $row['show1'];
            }
        }else
        {
            $output = '2000';
        }
        
        return $output;
    }

    function playback_read2($st2,$conn){

        $output = "";
        $query = "SELECT show2 FROM setting WHERE screen = '".$st2."'";
        
        $result = $conn->query($query);
        
        if($result->num_rows > 0){
            
            while($row = $result->fetch_assoc()){

                $output .= $row['show2'];
            }
        }else
        {
            $output = '2000';
        }
        
        return $output;
    }

?>