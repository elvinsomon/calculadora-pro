<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <!-- Tailwind CSS "PARA LOS ESTILOS CSS" -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- FUENTES -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet"> 
    <title>Calculadora Pro</title>
</head>
<body class="">
    <div class="bg-blue-100 h-scream flex item-center principal">
        <div class="container mx-auto my-auto  w-1/3 py-8 mt-6 text-center bg-blue-800 border-4 border-gray-400 rounded shadow-2xl">
            <h1 class="text-4xl font-bold text-gray-300 text-center">Calculadora Pro</h1>
            
            <!-- FORMULARIO -->
            <form method="get" action="" class="mt-5">
                <input class="placeholder-gray-500 border rounded p-1" type="text" name="numero1" id="" placeholder="Ingrese un Valor"> 
                <br>

                <!-- COMBO BOX PARA SELECCIONAR LA OPERACION -->
                <select class=" mx-auto mt-4 mb-4 bg-gray-200 border border-gray-200 text-gray-800 py-2 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="opciones" id="">
                    <option value="0">+</option>
                    <option value="1">-</option>
                    <option value="2">X</option>
                    <option value="3">/</option>
                </select>
                <br>

                <input class="placeholder-gray-500 border rounded p-1" type="text" name="numero2" id="" placeholder="Ingrese un Valor"> 
                <br>

                <!-- BOTON -->
                <input class="bg-transparent hover:bg-blue-500 text-white font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mt-3" type="submit" name="calcular" value="Calcular">

                <!-- CODIGO PHP -->
                <!-- El codigo php se coloco en esta zona por conveniencia del diseño de la pagina. 
                     Si colobamos el codigo php en el lugar convencional se veria sacrificado el flujo del DOM. 
                -->
                <?php

                // SE APLICA EL USO DE FUNCIONES PARA DEVOLVER EL RESULTADO DE LA OPERACION
                function sumar($num1, $num2)
                {
                    $result = $num1 + $num2;
                    return '<p class="bg-blue-500  mx-auto w-1/2 mt-3 rounded">Su resultado es: '.$result.'</p>';
                }
                function restar($num1, $num2)
                {
                    $result = $num1 - $num2;
                    return '<p class="bg-blue-500  mx-auto w-1/2 mt-3 rounded">Su resultado es: '.$result.'</p>';
                }
                function multiplicar($num1, $num2)
                {
                    $result = $num1 * $num2;
                    return '<p class="bg-blue-500  mx-auto w-1/2 mt-3 rounded">Su resultado es: '.$result.'</p>';
                }
                function dividir($num1, $num2)
                {
                    $result = $num1 / $num2;
                    return '<p class="bg-blue-500  mx-auto w-1/2 mt-3 rounded">Su resultado es: '.$result.'</p>';
                }

                // SE RECIBE LA PETICION DEL FORMULARIO
                if (isset($_REQUEST['calcular'])) {
                    $num1 = $_REQUEST['numero1'];
                    $num2 = $_REQUEST['numero2'];
                    $op = $_REQUEST['opciones'];
                    
                    // SE LLAMA A LA FUNCION DESEADA
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
            </form>
        </div>
    </div>
</body>
</html>
