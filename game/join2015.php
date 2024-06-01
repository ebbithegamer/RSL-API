<?php
$enabled = true; // OKAY I KNOW I COULD DO THIS WITHOUT THE IF() BUT EVENTUALLY IM GONNA CONNECT THIS TO THE DB AND ACTUALLY HAVE IT DETERMINE IF JOINING IS ENABLED ATM
$baseUrl = $_SERVER['DOCUMENT_ROOT'];
header("Content-Type: application/json");
if ($enabled==true) {

    // joinscript time wooooooooh
    $joinscript = [
        "ClientPort" => 0,
        "MachineAddress" => "localhost",
        "ServerPort" => 90,
        "PingUrl" => "",
        "PingInterval" => 20,
        "UserName" => "Dummy",
        "SeleniumTestMode" => false,
        "UserId" => 1,
        "SuperSafeChat" => false,
        "CharacterAppearance" => "", // set this up later when we have charapp
        "ClientTicket" => "",
        "GameId" => 1818,
        "PlaceId" => 1818,
        "MeasurementUrl" => "",
        "WaitingForCharacterGuid" => "26eb3e21-aa80-475b-a777-b43c3ea5f7d2",
        "BaseUrl" => "http://rbxs.5v.pl",
        "ChatStyle" => "ClassicAndBubble",
        "VendorId" => 0,
        "ScreenShotInfo" => "",
        "VideoInfo" => "<?xml version=\"1.0\"?><entry xmlns=\"http://www.w3.org/2005/Atom\" xmlns:media=\"http://search.yahoo.com/mrss/\" xmlns:yt=\"http://gdata.youtube.com/schemas/2007\"><media:group><media:title type=\"plain\"><![CDATA[ROBLOX Place]]></media:title><media:description type=\"plain\"><![CDATA[ For more games visit http://www.roblox.com]]></media:description><media:category scheme=\"http://gdata.youtube.com/schemas/2007/categories.cat\">Games</media:category><media:keywords>ROBLOX, video, free game, online virtual world</media:keywords></media:group></entry>",
        "CreatorId" => 1,
        "CreatorTypeEnum" => "User",
        "MembershipType" => "None",
        "AccountAge" => 365,
        "CookieStoreFirstTimePlayKey" => "rbx_evt_ftp",
        "CookieStoreFiveMinutePlayKey" => "rbx_evt_fmp",
        "CookieStoreEnabled" => false,
        "IsRobloxPlace" => true,
        "GenerateTeleportJoin" => false,
        "IsUnknownOrUnder13" => false,
        "SessionId" => "",
        "DataCenterId" => 0,
        "FollowUserId" => 0,
        "CharacterAppearanceId" => 1,
        "UniverseId" => 0
    ];

    // we encoding with this one 🗣️🗣️🔥
    $data = json_encode($joinscript, JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);

    // sig stuff
    $key = file_get_contents($baseUrl."/services/game/PrivateKey.pem"); // plz dont steal the private key make ur own
    openssl_sign($data, $sig, $key, OPENSSL_ALGO_SHA1);

    // print da sig
    exit("--rbxsig%" . base64_encode($sig) . "%\r\n" . $data);
};
?>