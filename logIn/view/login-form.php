<html>
<head>
<title>Bejelentkezés</title>
<link href="./logIn/view/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div>
        <form action="./logIn/login-action.php" method="post" id="frmLogin" onSubmit="return validate();">
            <div class="btable">

                <div class="form-head">Bejelentkezés az Info Board-ba</div>
                <?php 
                if(isset($_SESSION["errorMessage"])) {
                ?>
                <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
                <?php 
                unset($_SESSION["errorMessage"]);
                } 
                ?>
                <div class="field-column">
                    <div>
                        <label for="username">Felhasználó név</label><span id="user_info" class="error-info"></span>
                    </div>
                    <div>
                        <input name="user_name" id="user_name" type="text"
                            class="binput-box">
                    </div>
                </div>
                <div class="field-column">
                    <div>
                        <label for="password">Jelszó</label><span id="password_info" class="error-info"></span>
                    </div>
                    <div>
                        <input name="password" id="password" type="password"
                            class="binput-box">
                    </div>
                </div>
                <div class=field-column>
                    <div>
                        <input type="submit" name="login" value="Bejelentkezés"
                        class="btnLogin"></span>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
    function validate() {
        var $valid = true;
        document.getElementById("user_info").innerHTML = "";
        document.getElementById("password_info").innerHTML = "";
        
        var userName = document.getElementById("user_name").value;
        var password = document.getElementById("password").value;
        if(userName == "") 
        {
            document.getElementById("user_info").innerHTML = "required";
        	$valid = false;
        }
        if(password == "") 
        {
        	document.getElementById("password_info").innerHTML = "required";
            $valid = false;
        }
        return $valid;
    }
    </script>
</body>
</html>