<?php
function GetGamePort() {
    do {
        $num = mt_rand(1,100);
    }
    while(in_array($num, array(1, 27, 32, 41, 56, 64, 74, 83, 90, 100)));
    echo $num;
}
echo GetGamePort();

//this'll be for generating a random game port so that the same port (hopefully) won't be used for the same game. idk what would happen but I dont really wanna figure out LOL
