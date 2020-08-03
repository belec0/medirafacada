<?php require_once("layout/topTheme.php"); ?>
<?php
session_start();
use \Phppot\Member;

if (! empty($_SESSION["user_name"])) {
    require_once __DIR__ . './../class/Member.php';
    // $member = new Member();
    // $memberResult = $member->getMemberById($_SESSION["userId"]);
    //     $displayName = $memberResult[0]["user_name"];
}else{
    print_r($_SESSION);
    echo "deu ruim <a href='auth/logout.php' class='logout-button'>Logout</a>";
    exit;
}
?>
        <div class="dashboard">
            <div class="member-dashboard"><b><?php print_r($_SESSION['user_name']); ?></b> esta logado<br>
                Click to <a href="auth/logout.php" class="logout-button">Logout</a>
            </div>
        </div>
<?php require_once("layout/bottomTheme.php"); ?>