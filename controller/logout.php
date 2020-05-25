<?php
include_once('model/sessions.php');

deleteSession($user);

header("Location: $BASE_URL");
exit();
