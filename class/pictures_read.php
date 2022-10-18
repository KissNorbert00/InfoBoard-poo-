<?php

    $sc1 = null;
    $sc2 = null;
    $sc3 = null;
    $sc4 = null;
    $sc0 = null;

    function Read_sc1($sc1){
        
        $output = "";
        $output2 = "";
        
        $dir_path = "img/SC1/slide1/";

        if(is_dir($dir_path)){
            $files = scandir($dir_path);

            for ($i=0; $i < count($files); $i++) { 
                if($files[$i] != '.' && $files[$i] != '..'){
                    $output .= "<img class='Slides1' src='$dir_path$files[$i]'>";
                }
            }
        }

        $dir_path2 = "img/SC1/slide2/";

        if(is_dir($dir_path2)){
            $files2 = scandir($dir_path2);

            for ($i=0; $i < count($files2); $i++) { 
                if($files2[$i] != '.' && $files2[$i] != '..'){
                    $output2 .= "<img class='Slides2' src='$dir_path2$files2[$i]'>";
                }
            }
        }

    return $output . "</br>" . $output2;
    }

    function Read_sc2($sc2){
        
        $output = "";
        $output2 = "";
        
        $dir_path = "img/SC2/slide1/";

        if(is_dir($dir_path)){
            $files = scandir($dir_path);

            for ($i=0; $i < count($files); $i++) { 
                if($files[$i] != '.' && $files[$i] != '..'){
                    $output .= "<img class='Slides1' src='$dir_path$files[$i]'>";
                }
            }
        }

        $dir_path2 = "img/SC2/slide2/";

        if(is_dir($dir_path2)){
            $files2 = scandir($dir_path2);

            for ($i=0; $i < count($files2); $i++) { 
                if($files2[$i] != '.' && $files2[$i] != '..'){
                    $output2 .= "<img class='Slides2' src='$dir_path2$files2[$i]'>";
                }
            }
        }

    return $output . "</br>" . $output2;
    }

    function Read_sc3($sc3){
        
        $output = "";
        $output2 = "";
        
        $dir_path = "img/SC3/slide1/";

        if(is_dir($dir_path)){
            $files = scandir($dir_path);

            for ($i=0; $i < count($files); $i++) { 
                if($files[$i] != '.' && $files[$i] != '..'){
                    $output .= "<img class='Slides1' src='$dir_path$files[$i]'>";
                }
            }
        }

        $dir_path2 = "img/SC3/slide2/";

        if(is_dir($dir_path2)){
            $files2 = scandir($dir_path2);

            for ($i=0; $i < count($files2); $i++) { 
                if($files2[$i] != '.' && $files2[$i] != '..'){
                    $output2 .= "<img class='Slides2' src='$dir_path2$files2[$i]'>";
                }
            }
        }

    return $output . "</br>" . $output2;
    }

    function Read_sc4($sc4){
        
        $output = "";
        $output2 = "";
        
        $dir_path = "img/SC4/slide1/";

        if(is_dir($dir_path)){
            $files = scandir($dir_path);

            for ($i=0; $i < count($files); $i++) { 
                if($files[$i] != '.' && $files[$i] != '..'){
                    $output .= "<img class='Slides1' src='$dir_path$files[$i]'>";
                }
            }
        }

        $dir_path2 = "img/SC4/slide2/";

        if(is_dir($dir_path2)){
            $files2 = scandir($dir_path2);

            for ($i=0; $i < count($files2); $i++) { 
                if($files2[$i] != '.' && $files2[$i] != '..'){
                    $output2 .= "<img class='Slides2' src='$dir_path2$files2[$i]'>";
                }
            }
        }

    return $output . "</br>" . $output2;
    }

    function Read_sc0($sc0){
        
        $output = "";
        $output2 = "";
        
        $dir_path = "img/SC0/slide1/";

        if(is_dir($dir_path)){
            $files = scandir($dir_path);

            for ($i=0; $i < count($files); $i++) { 
                if($files[$i] != '.' && $files[$i] != '..'){
                    $output .= "<img class='Slides1' src='$dir_path$files[$i]'>";
                }
            }
        }

        $dir_path2 = "img/SC0/slide2/";

        if(is_dir($dir_path2)){
            $files2 = scandir($dir_path2);

            for ($i=0; $i < count($files2); $i++) { 
                if($files2[$i] != '.' && $files2[$i] != '..'){
                    $output2 .= "<img class='Slides2' src='$dir_path2$files2[$i]'>";
                }
            }
        }

    return $output . "</br>" . $output2;
    }
?>