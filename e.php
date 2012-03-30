<?php
header("Content-Type: image/jpeg");
if(isset($_GET["e"])) {
	$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $_GET["e"] ) ) );
	ob_clean();
    flush();
	readfile($grav_url);
}
?>