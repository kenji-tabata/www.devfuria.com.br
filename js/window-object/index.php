<?php
require "../../core/boot.php";
$href = "Location: " . LINKS_PATH . "/js/window-object-global/";

// Permanent redirection
header("HTTP/1.1 301 Moved Permanently");
header($href);
?>