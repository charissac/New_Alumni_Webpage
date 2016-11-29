<?php
session_start();

require("OAuth2Data.php");

if (isset($_GET["error"]))
{
    echo("<pre>OAuth Error: " . $_GET["error"]."\n");
    echo('<a href="indexLinkedIn.php">Retry</a></pre>');
    die;
}


$client = new OAuth2\Client($clientId, $clientSecret, OAuth2\Client::AUTH_TYPE_AUTHORIZATION_BASIC);
$client->setCurlOption(CURLOPT_USERAGENT,$userAgent);

if (!isset($_GET["code"]))
{
    $authUrl = $client->getAuthenticationUrl($authorizeUrl, $redirectUrl, 
            array("response_type" => "code", 
                "state" => "DCEeFWf45A53sdfKef424"));
    header("Location: ".$authUrl);
    die("Redirect");
}
else
{
    
    $_SESSION["OAuth2Code"] = $_GET["code"];
    $params = array("code" => $_GET["code"], 
        "redirect_uri" => $redirectUrl, 
        "client_secret" => $clientSecret);
    $response = $client->getAccessToken($accessTokenUrl, "authorization_code", $params);    
    $accessTokenResult = $response["result"];
    $_SESSION["OAuth2Token"] = $accessTokenResult["access_token"];
    //header("Location: http://localhost/New%20Alumni%20Webpage/redirected.php");
    
  
}
?>