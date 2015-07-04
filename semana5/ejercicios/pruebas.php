<?php
//error_reporting(E_ALL);
//ini_set('error_display', 1);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$cards=array('heart'=>array('ace','2','3'),
                'diamonds'=>array('4','5','6'),
                'spades'=>array('7','8','9'),
                'clubs'=>array('10','jack','queen')
    
    );
echo ${next($cards)}[2];
        
function say($message) {
    return 'Hello'. $message;
}
$execute = 'say';

//echo $execute('somebody');

echo decbin(4)."\n";
echo decbin(4<<1)."\n";
echo decbin(4<<2)."\n";
echo decbin(4<<3)."\n";
echo decbin(4>>1)."\n";
echo decbin(4>>2)."\n";
echo decbin(4>>3)."\n";

//echo 4<<3."\n";


echo ord("ñ");
 echo chr("96");
 
 
 print_r(stream_get_wrappers());