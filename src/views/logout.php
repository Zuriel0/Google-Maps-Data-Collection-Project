<?php
require_once('../include/user_session.php');
$userSession = new UserSession();

$userSession->closeSession();
?>