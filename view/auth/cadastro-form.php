<?php require_once("../layout/topTheme.php"); ?>

    <div style="width:30%; margin-left: 35%; margin-top: 5%; ">
        <form action="cadastro-action.php" method="post" id="frmLogin" onSubmit="return validate();" >
            <div class="demo-table bg-light">

                <h2>Cadastro</h2>
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
                        <label for="email">Email</label><span id="user_info" class="error-info"></span>
                    </div>
                    <div>
                        <input name="user_email" id="user_email" type="text" class="form-control">
                    </div>
                </div>
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
                <div class="field-column">
                    <div>
                        <label for="password_confirm">Confirme sua Senha</label><span id="password_confirm" class="error-info"></span>
                    </div>
                    <div>
                        <input name="password_confirm" id="password_confirm" type="password" class="form-control">
                    </div>
                </div>
                <div class=field-column>
                    <div>
                        <input type="submit"  value="Cadastrar" class="form-control btn btn-primary"></span>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
    function validate() {
        
        console.log($("#user_info").val());
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