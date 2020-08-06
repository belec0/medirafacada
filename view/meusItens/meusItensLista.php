<?php require_once("../layout/topTheme.php"); 
session_start();
use \Phppot\Member;

if (! empty($_SESSION["user_name"])) {
    require_once("../../class/Member.php"); 
}else{
    header("Location: auth/login-form.php");
}
print_r($_SESSION['user_name']);
?>
<?php require_once("../layout/bottomTheme.php"); 