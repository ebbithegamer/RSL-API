<?php
setcookie('.ROBLOSECURITY', 'authy', time() + 9999, '/');
header('Content-Type: application/json; charset=UTF-8; X-Robots-Tag: noindex');
echo(json_encode([
  "Status" => "OK",
  "UserInfo" => [
    "userId" => 1,
    "username" => "Dummy",
    "RobuxBalance" => 0,
    "IsAnyBuildersClubMember" => false,
    "ThumbnailUrl" => "http://www.rbxs.5v.pl/images/Character.png"
  ]
],JSON_UNESCAPED_SLASHES));?>
?>
