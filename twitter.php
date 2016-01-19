<?php
$consumerKey    = 'Consumer-Key';
$consumerSecret = 'Consumer-Secret';
$oAuthToken     = 'OAuthToken';
$oAuthSecret    = 'OAuth Secret';

# API OAuth
require_once('twitteroauth.php');

$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $oAuthToken, $oAuthSecret);

# your code to retrieve data goes here, you can fetch your data from a rss feed or database

$result = $tweet->get('users/show/followers_count.json', array('screen_name' => 'nytimes'));
$result = json_decode($result, true);
//print_r($result);
$count = $result['followers_count'];
echo $count;
?>
