<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIPO DE CAMBIO MONEDAS</title>
</head>
<body>
<?php
    $url = "https://api.cambio.today/v1/full/USD/json?key=29877|L^da8e0eCBsjUMHN5NBjJmUhtUE65kPa"; #USAMOS LA API DE  DOLAR COMO BASE
    $json = file_get_contents($url);
    $datos = json_decode($json, true);
    $conv = $datos["result"];
    $convDos= $conv["conversion"][34]["rate"]; #TOMAMOS EL VALOR DE LA MONEDA DESEADA
    var_dump($convDos);
    
?>
</body>
</html>

<input type="text" value="<?php echo $convDos;?>"> #ESTO ES LO QUE ME SALE EN EL INPUT
