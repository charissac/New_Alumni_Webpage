<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require("OAuth2/Client.php");
require("OAuth2/GrantType/IGrantType.php");
require("OAuth2/GrantType/AuthorizationCode.php");

$authorizeUrl = 'https://www.linkedin.com/oauth/v2/authorization';
$accessTokenUrl = 'https://www.linkedin.com/oauth/v2/accessToken';
//$redirectUrl = "http://localhost/New%20Alumni%20Webpage/register.php";
$redirectUrl = "http://localhost/New%20Alumni%20Webpage/redirected.php";

$clientId = '813mk315h2yggn';
$clientSecret = 'fSTqSGeddkbBnW9B';
$userAgent = 'Alumni System';

?>