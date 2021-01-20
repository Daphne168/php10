<?php
include 'utility.php';

$type = isset($_GET['type']) ? $_GET['type'] : 'default';

$html = error_message($type);

include 'pagemake2.php';
pagemake($html, '');
?>