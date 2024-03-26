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
        $salario = $_GET['salario'];
        
    ?>
    <main>
        <form action="<php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="">salario</label>
            <input type="number" name="salario" >
           
            <input type="submit" value="Somar">
        </form>
    
    </main>
    <section>
        <?php
            $salario_minimo = 1412;
            $sobraSalario = ($salario % $salario_minimo);
            $quantidadeSalario = floor($salario/$salario_minimo);
            

            echo "<p>Considerando o salário mínimo de R$ $salario_minimo</p>";
            echo "<p>Quem recebe salário de R$ $salario recebe $quantidadeSalario salários mínimos + R$ $sobraSalario.</p>";
        
        ?>
    </section>
</body>
</html>