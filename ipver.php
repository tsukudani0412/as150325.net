<?php
function returnIPver($ip) {
	if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
		return 4;
	}
	else {
		return 6;
	}
}

$ipver=returnIPver($_SERVER['REMOTE_ADDR']);
echo $ipver;
?>
