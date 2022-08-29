<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/styles.css">
        <title>Document</title>
        </head>
    <body>
  
    <div class="container">

    
        <?php
            $selector = $_POST['selectorOperacion'];
            $numero1 = $_POST['operador1'];
            $numero2 = $_POST['operador2'];
            $operacion;
            $resultado;
            switch($_POST['selectorOperacion']){ 
                case ($operacion = "sumar"):
                    $resultado = $numero1 + $numero2;
                    echo "<h1>El resultado de la suma es: ".$resultado."</h1>";     
                break;
                case ($operacion = "restar"):
                    $resultado = $numero1 - $numero2;
                    echo "<h1>El resultado de la resta es: ".$resultado."</h1>"; 
                break;
                case ($operacion = "dividir"):
                    $resultado = $numero1 / $numero2;
                    echo "<h1>El resultado de la división es: ".$resultado."</h1>"; 
                break;
                case ($operacion = "multiplicar"):
                    $resultado = $numero1 * $numero2;
                    echo "<h1>El resultado de la multiplicación es: ".$resultado."</h1>"; 
                break;
            }
            ?>
        
        </div>

        <div class="boton">
            <button class="btn btn-warning botondiv" role="link" onclick="window.location='index.html'">Volver</button>
        </div>

    </body>
</html>

