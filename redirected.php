<?php
session_start();

require("OAuth2Data.php");

//if(isset($_POST["submit"])){
    $client = new OAuth2\Client($clientId, $clientSecret, OAuth2\Client::AUTH_TYPE_AUTHORIZATION_BASIC);
    $client->setCurlOption(CURLOPT_USERAGENT,$userAgent);
    
    $retrieveProfileUrl = "https://api.linkedin.com/v1/people/~?oauth2_access_token="
            . $_SESSION["OAuth2Token"]
            . "&format=json";
    
    print_r($retrieveProfileUrl);
    
    $profile = $client->fetch($retrieveProfileUrl);
    
    
    echo('<strong>Response for fetch:</strong><pre>');
    
    
    print_r($profile);
        
    
    //success
    //if($profile["code"] == "200"){  
    //    
    //}else if($profile["code"]=="401"){
    //   header("Location: ".$redirectUrl);        
    //}
    
    echo('</pre>');
//}

?>

<!--
<form method="post" action="">    
    <input type="submit" name="submit" value="Submit"/> 
</form>
-->