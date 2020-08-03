<?php require_once("../layout/topTheme.php"); ?>

    <div >
        <form action="login-action.php" method="post" id="frmLogin" onSubmit="return validate();" >
            <div class="demo-table bg-light">

                <div class="form-head">Login</div>
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
                        <label for="username">Usiário</label><span id="user_info" class="error-info"></span>
                    </div>
                    <div>
                        <input name="user_name" id="user_name" type="text" class="form-control">
                    </div>
                </div>
                <div class="field-column">
                    <div>
                        <label for="password">Senha</label><span id="password_info" class="error-info"></span>
                    </div>
                    <div>
                        <input name="password" id="password" type="password" class="form-control">
                    </div>
                </div>
                <div class=field-column>
                    <div>
                        <input type="submit" name="login" value="Login" class="form-control btn btn-primary"></span>
                    </div>
                </div>
                <div class=field-column>
                    ou <a href="cadastro-form.php"> Cadastre-se</a> 
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
    
<?php require_once("../layout/bottomTheme.php"); ?>