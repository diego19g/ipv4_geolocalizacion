<?php
require_once 'vendor/autoload.php';

use Foolz\Inet\Inet;
use ipinfo\ipinfo\IPinfo;
$client = new IPinfo();

if(isset($_REQUEST['calcular'])){   
    $numero=htmlspecialchars($_REQUEST['numero']);
    $ip = \Foolz\Inet\Inet::dtop($numero);
    $details=$client->getDetails($ip);
    echo '<ul>
    <li>IP: '.$details->ip.'</li>
    <li>Ciudad: '.$details->city.'</li>
    <li>Pais: '.$details->country.'</li>
    <li>Region: '.$details->region.'</li>
    <li>Loc: '.$details->loc.'</li>
    <li>Postal: '.$details->postal.'</li>
    <li>Timezone: '.$details->timezone.'</li>
    </ul>';
};



echo '<html>
<head>
<title>Formulario</title>
</head>
<body>
<form action="index.php">
<input type="text" name="numero">
<button type="submit" id="calcular" name="calcular">Calcular</button>
</form>
</body>
</html>';