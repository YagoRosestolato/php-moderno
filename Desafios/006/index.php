<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de um divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['dividendo'];
        $divisor = $_GET['divisor'];
    
    ?>
    <main>
        <form action="" method="get">
            <label for="">Dividendo</label>
            <input type="number" name="dividendo" id="">

            <label for="">Divisor</label>
            <input type="number" name="divisor" id="">

            <input type="submit" value="Análisar">
        </form>
    </main>

    <section>
        <?php 
            $coeficiente = (int) ($dividendo/$divisor);
            $resto = $dividendo%$divisor;
        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$coeficiente?></td>
            </tr>
        </table>
    </section>



</body>
</html>