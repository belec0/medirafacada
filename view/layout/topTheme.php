<html>
    <head>
        <title>User Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="./view/css/style.css" rel="stylesheet" type="text/css" />

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
<body>
    <div class="content">
<?php  
var_dump($_SESSION);  
if (empty($_SESSION["userId"])) {
//     require_once __DIR__ . './../class/Member.php';
//     $member = new Member();
//     $memberResult = $member->getMemberById($_SESSION["userId"]);
//     if(!empty($memberResult[0]["display_name"])) {
//         $displayName = ucwords($memberResult[0]["display_name"]);
//     } else {
//         $displayName = $memberResult[0]["user_name"];
//     }
// header('Location: '."index.php");
require_once("./view/login-form.php");
}
?>