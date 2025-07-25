<?php
session_start();
session_unset();
session_destroy();

// Send headers to prevent caching
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1
header("Pragma: no-cache"); // HTTP 1.0
header("Expires: 0"); // Proxies

header("Location: index.php");
exit();
