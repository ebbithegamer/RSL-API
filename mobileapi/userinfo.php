<?php
header('Content-Type: application/json; charset=UTF-8; X-Robots-Tag: noindex'); 
echo(json_encode([
	"Status" => "OK",
	"UserInfo" => [
		"UserID" => 1,
		"UserName" => "Dummy",
		"RobuxBalance" => 0,
		"TicketsBalance" => 0,
		"IsAnyBuildersClubMember" => false,
		"ThumbnailUrl" => "http://www.rbxs.5v.pl/images/Character.png"
	]
],JSON_UNESCAPED_SLASHES));
?>
