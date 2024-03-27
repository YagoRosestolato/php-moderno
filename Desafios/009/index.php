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
        $anoNascimento = $_GET["v1"];
        $anoAtual = $_GET["v2"];
    ?>
    <main>
        <form action="" method="get">
            <label for="">Em que ano voce nasceu?</label>
            <input type="number" name="v1" >
            <label for="">Quer saber a idade em qual ano?</label>
            <input type="number" name="v2" >
            <input type="submit" value="Somar">
        </form>

        
    
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
            $soma = $anoAtual - $anoNascimento;

            echo "Quem nasceu $anoNascimento vai ter $soma em $anoAtual" ;
        
        ?>
    </section>
</body>
</html>