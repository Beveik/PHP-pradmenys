<!-- 7. Sukurkite programą, kuri parodytų, kokioje naršyklėje yra atidarytas puslapis ir pagal tai atvaizduotų naršyklės logotipą. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$arr_browsers = ["Opera", "Edg", "Chrome", "Safari", "Firefox", "MSIE", "Trident"];
 
$agent = $_SERVER['HTTP_USER_AGENT'];
 
$user_browser = '';
foreach ($arr_browsers as $browser) {
    if (strpos($agent, $browser) !== false) {
        $user_browser = $browser;
        break;
    }   
}
  
switch ($user_browser) {
    case 'MSIE':
        $user_browser = 'Internet Explorer';
        
        break;
  
    case 'Trident':
        $user_browser = 'Internet Explorer';
        break;
  
    case 'Edg':
        $user_browser = 'Microsoft Edge';
        break;
}
  if ($user_browser == "Opera"){
echo '<img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Flogos-download.com%2Fwp-content%2Fuploads%2F2016%2F03%2FOpera_logo_icon.png&f=1&nofb=1" width="460px">';
} else if ($user_browser == "Firefox"){
    echo '<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fder-linux-admin.de%2Fwp-content%2Fuploads%2F2016%2F12%2FFirefox-logo.svg_.png&f=1&nofb=1" width="460px">';
    } else if ($user_browser == "Chrome"){
        echo '<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn.windowsreport.com%2Fwp-content%2Fuploads%2F2019%2F01%2FChrome-antivirus-extensions.jpg&f=1&nofb=1" width="460px">';
        } else if (($user_browser == "Trident") || ($user_browser == "MSIE")){
            echo '<img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fpngimg.com%2Fuploads%2Fie_logo%2Fie_logo_PNG17.png&f=1&nofb=1" width="460px">';
            }


?>
</body>
</html>