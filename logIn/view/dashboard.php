<?php
namespace Phppot;

use \Phppot\Member;

if (! empty($_SESSION["userId"])) {
    require_once './logIn/class/Member.php';
    $member = new Member();
    $memberResult = $member->getMemberById($_SESSION["userId"]);
    if(!empty($memberResult[0]["display_name"])) {
        $displayName = ucwords($memberResult[0]["display_name"]);
    } else {
        $displayName = $memberResult[0]["user_name"];
    }
}
?>

<?php
    include("conn/dbconnect.php");
    include("class/admin_file_read.php");
?>

<!DOCTYPE html>
<HTML>
    <head>
        <meta charset="utf-8">
        <link href="./css/admin_style.css" type="text/css" rel="stylesheet"/>
        <link rel="icon" type="image/png" href="./css/cssImg/sig.png"/>
        <script src="./js/script.js"></script>
        <title>Vezérlő</title>
    </head>
    <body>
        
        <div class="logout">
            <a href="./logIn/logout.php" class="logout-button" type="submit" value="Logout">Kijelentkezés</a>
        </div>

        <div class="container">
            <form name="frm0" action="./class/deletmessage.php" method ="post">
            <b class = "board_text">Paraméterek </b></p>
            <table>
                <thead>
                    <tr>
                        <th class="slide_text">Kijelző</th>
                        <th class="slide_text">Slide 1 léptetés</th>
                        <th class="slide_text">Slide 2 léptetés</th>
                        <th class="slide_text">Figyelmeztető üzenet</th>
                        <th class="slide_text"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo Parameter_read($conn); ?>
                    
                </tbody>
            </table>
            </form>
            
            <form name="frm1" action="./class/deletapointment.php" method ="post">
                <b class = "board_text">Üzenet doboz </b></p>
                <table>
                <thead>
                    <tr>
                        <th class="slide_text">Sor szám</th>
                        <th class="slide_text">Tárgy</th>
                        <th class="slide_text">Üzenet</th>
                        <th class="slide_text"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo Message_read($conn); ?>
                    
                </tbody>
                </table>
            </form>

        </div>

        <div class="list">

            <div class="link">
                <b class = "board_text">Kijelzők </b></p>
                <a class="linkmenu" href="board1.php" target="_blank">Kijelző 1</a>
                <a class="linkmenu" href="board2.php" target="_blank">Kijelző 2</a>
                <a class="linkmenu" href="board3.php" target="_blank">Kijelző 3</a>
            </div>

            <b class = "board_text">Új paraméterek </b></p>

            <form name="frm2" action="./class/newaparameter.php" method ="post" onsubmit="return ValiData();">
                <div class="blokk2">
                        <label class="radiob">Kijelző 1
                            <input type="radio" name="bords" value="1" checked>
                            <span class="checkmark"></span>
                        </label>
                        <label class="radiob">Kijelző 2
                            <input type="radio" name="bords" value="2">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radiob">Kijelző 3
                            <input type="radio" name="bords" value="3">
                            <span class="checkmark"></span>
                        </label>
                </div> 

                <div class ="blokk1"> 
                    
                    <b class = "slide_text3">Slide 1 (s): </b>
                    <select class="textb" type="text" name="st1">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                    </select>
                    <b class = "slide_text3">Slide 2 (s): </b>
                    <select class="textb" type="text" name="st2">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                    </select></p>
                    <b class = "slide_text3">Figyelmezető üzenet: </b>
                    <input class="textc" type="text" name="al" onblur="ValidAlarm();"></p>
                    <input class="button" type="submit" value="Mentés"/>
                    <span id="st1" class="piros"></span>
                </div>
            </form>

            <form name="frm3" action="./class/newapointment.php" method ="post" onsubmit="return ValiData2();">
                <div class="ujcal">
                    <b class = "board_text">Üzenet </b></p>

                    <b class = "slide_text3">Box number: </b>
                    <select class="textb" type="text" name="bn">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select></p>

                    <b class = "slide_text3" >Tárgy: </b></p>
                    <textarea class="texte" onkeyup="new do_resize(this);" cols="20" rows="1" name="sb"></textarea></p>
 
                    <b class = "slide_text3">Üzenet: </b></p>
                    <textarea class="texte" onkeyup="new do_resize(this);" cols="20" rows="1" name="me"></textarea></p>

                    <input class="button" type="submit" value="Mentés"/>
                    
                    <span id="st2" class="piros"></span></p>
                    <textarea name="w" value="2" style="display:none;">2</textarea>

                </div>
            </form>

            

        </div> 

    </body>
</HTML>

<?php
    $conn->close();
?>