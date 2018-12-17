<?php
session_start();
session_destroy();

header('location:/soft/index.html');
?>