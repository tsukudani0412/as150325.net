<?php
function returnIPver($ip) {
	if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
		return 4;
	}
	else if(filter_var($ip, FILTER_VALIDATE_IP, FLITER_FLAG_IPV6)) {
		return 6;
	}
	else {
		return false;
	}
}

$ipver=returnIPver($_SERVER['REMOTE_ADDR']);
echo $ipver;
?>
