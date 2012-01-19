<?php
session_start();
require_once 'OAuth/AppConfig.php';
require_once 'OAuth/OAuthClient.php';
//Create an instance of oAuthClient
$apiConsumer = new OAuthClient(AppConfig::$base_url, AppConfig::$consumer_key, AppConfig::$consumer_secret);
//Post the username and password collected on the login page to the request to get an access token
  if(isset($_POST["submit"]))
  {
	if($apiConsumer->getAccessToken2ndParty($_POST['username'],$_POST['password']))
	//Get the token and token secret and store them in cookies
	{
	$_SESSION['token'] = $apiConsumer->getToken();
	$_SESSION['tokenSecret'] = $apiConsumer->getTokenSecret();
	}
  else
  {
  session_destroy();
  $_SESSION = array();
  //If the tokens are not given, the authentication failed.
  //The login form reads the redirect url and displays a login failure message
  header('Location:login.php?login=failed');
  exit();
  }
  //Upon successful authentication, the server will send back a response 
  //We want to get the person location from the response
  //Here we are drilling through the response headers to get the person location 
$responseHeaders = $apiConsumer->getResponseHeader();
  foreach ($responseHeaders as $val) {
  $start = 'Content-Location:';
  $contentLocation =  substr( $val, 0, 17 );
	if ($contentLocation == $start) {
	$personLocation = str_replace($start, "", $val);
	  if( $contentLocation == $start ) {
	  $personLocation = str_replace($start, "", $val); 
	  $_SESSION['personurl'] = trim($personLocation); 
	  }
	}
  }
} 
$url = $_SESSION['personurl'].".json";
//We want to get some fields from the API and store them in cookies for use within our site
$person=$apiConsumer->dorequest($url);
//response needs to be json decoded
$results = json_decode(strstr($person, '{"person":{'), true);
//store fields here
$_SESSION['iCode'] = $results['person']['@iCode'];
$_SESSION['firstName'] = $results['person']['firstName'];
$_SESSION['lastName'] = $results['person']['lastName'];
$_SESSION['personID'] = $results['person']['@id'];
//Take the user to the members area of your website.  Put your own path to the members page here
header("Location:members.php");
?>