<?php
// namespace Phppot;
require_once('../../class/Member.php');
use \Phppot\Member;
$member = new member();
$retorno = $member->cadastraUsuario($_POST);
header("Location: ../auth/login-form.php?log=1");