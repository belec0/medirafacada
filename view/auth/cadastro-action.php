<?php
// namespace Phppot;
require_once('../../class/Member.php');
use \Phppot\Member;
$member = new member();
$retorno = $member->cadastraUsuario($_POST);
print_r($retorno);