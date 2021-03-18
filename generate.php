<?php

$i= 0;
while ($i<=1) {
$consumerKey = '$CONSUMER_KEY';
$consumerSecret = '$CONSUMER_SECRET';
$oAuthToken = '$OAUTH_TOKEN';
$oAuthSecret = '$OAUTH_SECRET';

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
