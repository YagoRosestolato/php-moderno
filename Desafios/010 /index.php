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
        $preco = $_GET["v1"];
        $porcentagem = $_GET["v2"];
    ?>

    <main>
    <h1>Reajuste de preço</h1>
        <form action="" method="get">
            <label for="">Preço do produto (R$)</label>
            <input type="number" name="v1" >
            <label for="">Qual sera o percentual de reajuste</label>
            <input type="number" name="v2" >
            <input type="submit" value="Somar">
        </form>

        
    
    </main>
    <section>
        <h2>Resultado do reajuste</h2>
        <?php
            $soma = ($preco * $porcentagem) / 100;
            $somaTotal = $soma + $preco;

            echo "O produto que custava R$ $preco, com $porcentagem% de aumento, vai passar a custar $somaTotal a partir de agora" ;
        
        ?>
    </section>
</body>
</html>