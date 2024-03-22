<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $valor1 = $_GET['v1'];
        $valor2 = $_GET['v2'];
    ?>
    <main>
        <form action="<php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="">Valor 1</label>
            <input type="number" name="v1" >
            <label for="">Valor 2</label>
            <input type="number" name="v2" >
            <input type="submit" value="Somar">
        </form>
    
    </main>
    <section>
        <h2>Resultado da soma</h2>
        <?php
            $soma = $valor1 + $valor2;

            echo "O valor de " .$valor1. " e ". $valor2 ." é igual a " .$soma;
        
        ?>
    </section>
</body>
</html>