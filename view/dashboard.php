<?php require_once("layout/topTheme.php");

if (! empty($_SESSION["user_name"])) {
    require_once __DIR__ . './../class/Member.php';
}else{
    header("Location: auth/login-form.php");
}
?>



<?php require_once("layout/bottomTheme.php"); ?>