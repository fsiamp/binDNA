<?php

$i= 0;
while ($i<=1) {
$consumerKey = '9jFgRu4natCndfucJ06bZQv23';
$consumerSecret = '2XWCrtxHGL0Ba21LpvnOsYjCGpjRWinKEt2A1ClG4235g';
$oAuthToken = '567427617-88ncjIVrBRX08ZXB42I7hqcVldYHGBmMXxdV5jhqsd23';
$oAuthSecret = '5oQRhRcjqPiqSFUlRJIEbyd5p0cdCpV6bDkf0cdkg128';

$inputDNA = array('G','C','T','A');

$inputDigit = array('0','1');
$choice_int = rand(0, 1);

$array = array();


$integer = 280;

for ($x = 1; $x <= $integer; $x++)
{

    $theDatax = $inputDNA[array_rand($inputDNA)];
    
    
    $array[] = $theDatax;
}

$string = join('', $array);

require_once('twitteroauth.php');

$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $oAuthToken, $oAuthSecret);

$message = "$string";

$tweet->post('statuses/update', array('status' => "$message"));
$i = $i + 1 ;
}

?>
