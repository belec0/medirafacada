<?php require_once("layout/topTheme.php"); ?>
<?php
require_once("layout/topTheme.php");
use \Phppot\Member;

if (! empty($_SESSION["user_name"])) {
    require_once __DIR__ . './../class/Member.php';
}else{
    header("Location: auth/login-form.php");
}

print_r($_SESSION['id']);
?>



<?php require_once("layout/bottomTheme.php"); ?>