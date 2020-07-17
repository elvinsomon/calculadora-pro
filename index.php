<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Calculadora Pro</title>
</head>
<body>
    <h1>Calculadora Pro</h1>
    
    <form method="get" action="">
        <input type="text" name="numero1" id="">

        <select class="select" name="opciones" id="">
            <option value="0">+</option>
            <option value="1">-</option>
            <option value="2">*</option>
            <option value="3">/</option>
        </select>

        <input type="text" name="numero2" id="">
        <input type="submit" name="calcular" value="Calcular">
        

        
    </form>
</body>
</html>
<?php

function sumar($num1, $num2)
{
    $result = $num1 + $num2;
    return 'Su resultado es: '.$result;
}
function restar($num1, $num2)
{
    $result = $num1 - $num2;
    return 'Su resultado es: '.$result;
}
function multiplicar($num1, $num2)
{
    $result = $num1 * $num2;
    return 'Su resultado es: '.$result;
}
function dividir($num1, $num2)
{
    $result = $num1 / $num2;
    return 'Su resultado es: '.$result;
}

if (isset($_REQUEST['calcular'])) {
    $num1 = $_REQUEST['numero1'];
    $num2 = $_REQUEST['numero2'];
    $op = $_REQUEST['opciones'];
    
    switch ($op) {
        case 0:
            echo sumar($num1, $num2);
            break;
        case 1:
            echo restar($num1, $num2);
            break;
        case 2: 
            echo multiplicar($num1, $num2);
            break;
        case 3: 
            echo dividir($num1, $num2);
            break;
    }
}
?>