<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="./css/style.css" type="text/css" rel="stylesheet"/>
        <title>Kijelző 3</title>

        <script>
	        setTimeout(function () { doesConnectionExist(); }, 1800000);
	
            function doesConnectionExist() {
                var xhr = new XMLHttpRequest();
                var file = "conn/IsOnline.txt";
                
                xhr.open('HEAD',file , true);
                xhr.send();
            
                xhr.addEventListener("readystatechange", processRequest, false);
        
                function processRequest(e) {
                    if (xhr.readyState == 4) {
                        if (xhr.status >= 200 && xhr.status < 304) {
                            location.reload();
                        }
                        else {
                            setTimeout(function () { doesConnectionExist(); }, 1800000);
                        }
                    }
                }
            }
        </script>
        
    </head>
    <body>

        <div class="alarm">
        
            <?php
                $al = 3;
                include("./conn/dbconnect.php");
                include("./class/alarms_read.php");
                echo Alarm_read($al, $conn);
                $conn->close();
            ?>

            <div class="al"></div> 
            
        </div>

        <div class="message">

            <?php
                $w = 2;
                include("./conn/dbconnect.php");
                include("./class/message_read.php");
                echo Message_read($w, $conn);
                $conn->close();
            ?>
        </div>

        <div class="container">
            
            <?php
                include("./class/pictures_read.php");
                echo Read_sc1($sc1);
            ?>
            
            <?php
            include("./conn/dbconnect.php");
            include("./class/playback_read.php");
            $st1 = 1;
            $st2 = 1;
            ?>
            
            <script>
                var myIndex = 0;
                var myIndex2 = 0;
                carousel();
                carousel2();
                
                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("Slides1");                    
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";  
                    }

                    myIndex++;
                    if (myIndex > x.length) {myIndex = 1}    
                    x[myIndex-1].style.display = "block";                    
                    setTimeout(carousel, <?php echo playback_read1($st1,$conn); ?>);
                }

                function carousel2() {
                    var i;
                    var x2 = document.getElementsByClassName("Slides2");
                    for (i = 0; i < x2.length; i++) {
                        x2[i].style.display = "none";  
                    }

                    myIndex2++;
                    if (myIndex2 > x2.length) {myIndex2 = 1}    
                    x2[myIndex2-1].style.display = "block";  
                    setTimeout(carousel2, <?php echo playback_read2($st2,$conn); ?>);
                }

            </script>

            <?php 
                $conn->close(); 
            ?>

        </div>
    </body>
</html>




