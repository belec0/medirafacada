<?php require_once("layout/topTheme.php"); ?>
<?php

use \Phppot\Member;

if (! empty($_SESSION["userId"])) {
    require_once __DIR__ . './../class/Member.php';
    $member = new Member();
    $memberResult = $member->getMemberById($_SESSION["userId"]);
        $displayName = $memberResult[0]["user_name"];
}
?>
        <div class="dashboard">
            <div class="member-dashboard"><b><?php echo $displayName; ?></b> esta logado<br>
                Click to <a href="./logout.php" class="logout-button">Logout</a>
            </div>
        </div>
<?php require_once("layout/bottomTheme.php"); ?>