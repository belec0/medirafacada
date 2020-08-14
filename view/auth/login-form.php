<?php 

require_once("../layout/topTheme.php");

if (! empty($_SESSION['id'])) {
    header("Location: ../dashboard.php");
}
?>
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
                        <label for="username" class="nomes-login">Usuário</label><span id="user_info" class="error-info erros-login"></span>
                    </div>
                    <div>
                        <input name="user_name" id="user_name" type="text" class="form-control campos-login">
                    </div>
                </div>
                <div class="field-column">
                    <div>
                        <label for="password" class="nomes-login">Senha</label><span id="password_info" class="error-info erros-login"></span>
                    </div>
                    <div>
                        <input name="password" id="password" type="password" class="form-control campos-login">
                    </div>
                </div>
                <div class=field-column>
                    <div>
                        <?php 
                        if(isset($_GET['log']) && $_GET['log'] == 1){
                            echo "<h6 class='text-success'>Usuário criado!</h6>";
                        }
                        ?>
                    </div>
                    <div>
                        <input type="submit" name="login" value="Login" class="form-control btn btn-primary campos-login botao-login"></span>
                    </div>
                </div>
                <div class=field-column >
                   <p class="nomes-login"> ou <a href="cadastro-form.php" > cadastre-se</a></p> 
                </div>
            </div>
        </form>
    </div>
    <script>

    $(document).ready(function() {
        console.log( "ready!" );
    });
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